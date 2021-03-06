<?php
namespace PF\AgendaBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

use PF\AgendaBundle\Entity\Rdv;
use PF\AgendaBundle\Entity\User;

use PF\AgendaBundle\Form\RdvType;
use PF\AgendaBundle\Form\RdvEditType;

use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class RdvController extends Controller
{
	public function addRdvAction(Request $request, $idtimeslot, $typerdv)
	{
		//if user est diff du conseiller
		
		
		//////////////////////////////////
		
		
		$rdv = new Rdv();

		$em = $this->getDoctrine()->getManager();
	
	
	
		$timeslot = $em->getRepository('PFAgendaBundle:TimeSlot')->find($idtimeslot);
		//$user = $em->getRepository('PFAgendaBundle:User')->find(->getId());
		
		$rdv->setTimeSlot($timeslot);
		$rdv->setTypeRdv($typerdv);
		$rdv->setStatus('En attente');
		$rdv->setCandidat($this->getUser());
		
		$em->persist($rdv);
		$em->flush();
		
		$request->getSession()->getFlashBag()->add('notice', 'Rendez-vous enregistré');

		return $this->redirectToRoute('pf_agenda_view_timeslot', array('conseille' => $timeslot->getConseille()->getId(), ));
	}
	

	public function addRdvSansTypeAction(Request $request, $idtimeslot){

	
		$em = $this->getDoctrine()->getManager();
		$rdv = new Rdv();
		$timeslot = $em->getRepository('PFAgendaBundle:TimeSlot')->find($idtimeslot);
		
		$form = $this->createForm(RdvType::class, $rdv);
		
		if ($request->isMethod('POST')){
		
			$form->handleRequest($request);
		
			if ($form->isValid()) {

				$em->persist($rdv);
				
				$rdv->setStatus('En attente');
				$rdv->setTimeSlot($timeslot);
				$rdv->setCandidat($this->getUser());
				
				$em->flush();
				$request->getSession()->getFlashBag()->add('notice', 'Rendez-vous enregistré');

				return $this->redirectToRoute('pf_agenda_view_rdv', array('conseille' => $timeslot->getConseille()->getId()));
			}
		}
		$message='';
		return $this->render('PFAgendaBundle:Rdv:addRdv.html.twig',
			array(
				'form' => $form->createView(),
				'message' => $message
			)
		);
	}

	
	
	
	
	
	public function viewRdvAction(Request $request, $conseille){

		$em = $this->getDoctrine()->getManager();
		
		if ($this->getUser()->hasRole('ROLE_ADMIN')){
			$listRdv = $em
				->getRepository('PFAgendaBundle:Rdv')
				->findAll()
			;
			return $this->render('PFAgendaBundle:Rdv:viewRdvConseille.html.twig', array(
				'listRdv' => $listRdv,
				'user' => $this->getUser(),
			));
			

		}else{
			$listRdv = $em
				->getRepository('PFAgendaBundle:Rdv')
				->findBy(
					array('candidat' => $this->getUser()->getId())
			)
			;
			$query = $this->getDoctrine()->getEntityManager()
                       ->createQuery(
                              'SELECT u FROM PFAgendaBundle:User u WHERE u.roles LIKE :role'
                        )->setParameter('role', '%"ROLE_ADMIN"%'
			);
			$users = $query->getResult();
			$listconseille = $users;
			
			if($conseille == "all"){
				$listTimeSlot = $em
					->getRepository('PFAgendaBundle:TimeSlot')
					->findAll()
				;
			}else{
				$theconseille = $em->getRepository('PFAgendaBundle:User')->find($conseille);
				
				$listTimeSlot = $em->getRepository('PFAgendaBundle:TimeSlot')->findByConseille($theconseille);
			}
			
			

			return $this->render('PFAgendaBundle:Rdv:viewRdv.html.twig', array(
				'listTimeSlot' => $listTimeSlot,
				'listRdv' => $listRdv,
				'user' => $this->getUser(),
				'listconseille'=> $listconseille,
				
			));
		}
    }

	
	
	
	
	
	public function editRdvAction(Request $request, $idrdv){
		$em = $this->getDoctrine()->getManager();

		$rdv = $em->getRepository('PFAgendaBundle:Rdv')->find($idrdv);

		if (null === $rdv) {
		  throw new NotFoundHttpException("Rendz-vous inconnu");
		}

		$form = $this->get('form.factory')->create(RdvEditType::class, $rdv);

		if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

			$em->flush();
			$request->getSession()->getFlashBag()->add('notice', 'Rendz-vous modifé.');

			return $this->redirectToRoute('pf_agenda_view_rdv', array('conseille' => $rdv->getTimeSlot()->getConseille()->getId() ));
		}

		return $this->render('PFAgendaBundle:Rdv:editRdv.html.twig', array(
		  'rdv' => $rdv,
		  'form'   => $form->createView(),
		));
	
	}
	
	public function deleteRdvAction(Request $request, $idrdv){
		$em = $this->getDoctrine()->getManager();
		
		$rdv = $em->getRepository('PFAgendaBundle:Rdv')->find($idrdv);
		
		if ($rdv->getCandidat()->getId() != $this->getUser()->getId()){
			throw new AccessDeniedException('Vous n\etes pas admin.');
		}
		
		if (null === $rdv) {
			throw new NotFoundHttpException("rdv incconu");
		}elseif($rdv->getCandidat()->getId() != $this->getUser()->getId()){
			throw new NotFoundHttpException("Ce n'est pas votre rendez-vous");
		}

		// On crée un formulaire vide, qui ne contiendra que le champ CSRF
		// Cela permet de protéger la suppression d'annonce contre cette faille
		$form = $this->get('form.factory')->create();

		if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
		  
			$em->remove($rdv);
			$em->flush();


			$request->getSession()->getFlashBag()->add('notice', 'Rendez-vous supprimé.');

			return $this->redirectToRoute('pf_agenda_view_rdv', array('conseille' => $rdv->getTimeSlot()->getConseille()->getId() ));
		}
		
		return $this->render('PFAgendaBundle:Rdv:deleteRdv.html.twig', array(
			'rdv' => $rdv,
			'form'   => $form->createView(),
		));
	}
	
	public function statusRdvAction(Request $request, $idrdv, $status){

		$em = $this->getDoctrine()->getManager();
		if ($this->getUser()->hasRole('ROLE_USER')){

		
			$rdv = $em->getRepository('PFAgendaBundle:Rdv')->find($idrdv);
			
			if (null === $rdv) {
				throw new NotFoundHttpException("rdv incconu");
			}elseif($rdv->getTimeSlot()->getConseille()->getId() != $this->getUser()->getId()){
				throw new NotFoundHttpException("Ce n'est pas votre rendez-vous");
			}
			$rdv->setStatus($status);
			$em->flush();
			$request->getSession()->getFlashBag()->add('notice', 'Rendz-vous modifé.');
			return $this->redirectToRoute('pf_agenda_view_rdv', array('conseille' => $this->getUser()->getId() ));
		
		}else{
			throw new AccessDeniedException('Vous n\etes pas admin.');
		}
	}
	

	
}