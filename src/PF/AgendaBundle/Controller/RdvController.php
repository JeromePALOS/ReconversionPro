<?php
namespace PF\AgendaBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use PF\AgendaBundle\Entity\Rdv;
use PF\AgendaBundle\Form\RdvType;
use PF\AgendaBundle\Form\RdvEditType;


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
	
	public function viewRdvAction(Request $request){

		$em = $this->getDoctrine()->getManager();
	
		$listRdv = $em
			->getRepository('PFAgendaBundle:Rdv')
			->findBy(
				array('date' => 'asc')
			)
		;
		
		
		
		return $this->render('PFAgendaBundle:Rdv:viewRdv.html.twig', array(
			'listRdv' => $listRdv,
			'user' => $this->getUser(),
		));
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

			return $this->redirectToRoute('pf_agenda_view_timeslot', array('conseille' => $rdv->getTimeSlot()->getConseille()->getId() ));
		}

		return $this->render('PFAgendaBundle:Rdv:editRdv.html.twig', array(
		  'rdv' => $rdv,
		  'form'   => $form->createView(),
		));
	
	}
	
	public function deleteRdvAction(Request $request, $idrdv){
		$em = $this->getDoctrine()->getManager();

		$rdv = $em->getRepository('PFAgendaBundle:Rdv')->find($idrdv);
		
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

			return $this->redirectToRoute('pf_agenda_view_timeslot', array('conseille' => $rdv->getTimeSlot()->getConseille()->getId() ));
		}
		
		return $this->render('PFAgendaBundle:Rdv:deleteRdv.html.twig', array(
			'rdv' => $rdv,
			'form'   => $form->createView(),
		));
	}
	
	

	
}