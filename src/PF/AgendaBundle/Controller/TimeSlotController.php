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
				$em->flush();
				$request->getSession()->getFlashBag()->add('notice', 'Nouveau patient enregistré.');

				return $this->redirectToRoute('pf_agenda_home');
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
	
	
	
	
	
	
	
	
	
	
	
	
}