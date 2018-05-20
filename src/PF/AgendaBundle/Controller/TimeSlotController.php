<?php
namespace PF\AgendaBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use PF\AgendaBundle\Entity\TimeSlot;
use PF\AgendaBundle\Form\TimeSlotType;


class TimeSlotController extends Controller
{
	public function addTimeSlotAction(Request $request)
	{
		//if user is conseiller
		
		
		//////////////////////////////////
		
		
		$timeSlot = new TimeSlot();
		
		$form = $this->createForm(TimeSlotType::class, $timeSlot);
		
		if ($request->isMethod('POST')){
		
			$form->handleRequest($request);
		
			if ($form->isValid()) {

				$em = $this->getDoctrine()->getManager();
				$em->persist($timeSlot);
				$timeSlot->setConseille($this->getUser());
				$em->flush();
				$request->getSession()->getFlashBag()->add('notice', 'Nouveau patient enregistré.');


				return $this->redirectToRoute('pf_agenda_view_timeslot', array('conseille' => $timeSlot->getConseille()->getId() ));

			}
		}
		$message='';
		return $this->render('PFAgendaBundle:TimeSlot:addTimeSlot.html.twig',
			array(
				'form' => $form->createView(),
				'message' => $message
			)
		);
	}
	
	
	
	public function viewTimeSlotAction($conseille){

		$em = $this->getDoctrine()->getManager();
	
		$listTimeSlot = $em
			->getRepository('PFAgendaBundle:TimeSlot')
			->findBy(
				array('conseille' => $conseille), // Critere
				array('date' => 'asc')
			)
		;
		
		
		
		return $this->render('PFAgendaBundle:TimeSlot:viewTimeSlot.html.twig', array(
			'listTimeSlot' => $listTimeSlot,
			'user' => $this->getUser(),
		));
    }
	
	public function deleteTimeSlotAction(Request $request, $idtimeslot){
		$em = $this->getDoctrine()->getManager();

		$timeslot = $em->getRepository('PFAgendaBundle:TimeSlot')->find($idtimeslot);
		
		if (null === $timeslot) {
			throw new NotFoundHttpException("timeslot incconu");
		}elseif($timeslot->getConseille()->getId() != $this->getUser()->getId()){
			throw new NotFoundHttpException("Ce n'est pas votre créneaux horaire");
			
		}

		// On crée un formulaire vide, qui ne contiendra que le champ CSRF
		// Cela permet de protéger la suppression d'annonce contre cette faille
		$form = $this->get('form.factory')->create();

		if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
		  
			$em->remove($timeslot);
			$em->flush();

			$request->getSession()->getFlashBag()->add('notice', 'Créneaux horaire supprimé.');

			return $this->redirectToRoute('pf_agenda_view_timeslot', array('conseille' => $timeslot->getConseille()->getId() ));
		}
		
		return $this->render('PFAgendaBundle:TimeSlot:deleteTimeSlot.html.twig', array(
			'timeslot' => $timeslot,
			'form'   => $form->createView(),
		));
	}
	
	
	
	
	
	
	
	
	
	
}