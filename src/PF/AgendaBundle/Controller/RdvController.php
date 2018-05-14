<?php
namespace PF\AgendaBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use PF\AgendaBundle\Entity\Rdv;
//use PF\AgendaBundle\Form\RdvType;


class RdvController extends Controller
{
	public function addRdvAction(Request $request, $idtimeslot, $typeRdv)
	{
		
		
		
		//if user est diff du conseiller
		
		
		//////////////////////////////////
		
		
		$rdv = new Rdv();

		$em = $this->getDoctrine()->getManager();
	
	
	
		$timeslot = $em->getRepository('PFAgendaBundle:TimeSlot')->find($idtimeslot);
		
		$rdv->setTimeSlot($timeslot);
		$rdv->setTypeRdv($typeRdv);
		$rdv->setStatus('En attente');
		$rdv->setCandidat($this->getUser());
		
		$em->persist($rdv);
		$em->flush();
		
		$request->getSession()->getFlashBag()->add('notice', 'Rendez-vous enregistré');

		return $this->redirectToRoute('pf_agenda_view_timeslot', array('conseille' =>                  ));

		
		
		
		
		$message='';
		return $this->render('PFAgendaBundle:Rdv:addRdv.html.twig',
			array(
			)
		);
	}

	

	
}