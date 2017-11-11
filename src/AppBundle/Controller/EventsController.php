<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Event;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class EventsController extends Controller
{
	/**
	 *@Route("/events")
	 */
	public function listeAction()
	{
		$event = new Event;
		$event->setName('Laravel Conference')->setLocation('Quebec, CA')->setPrice(0);

		$em = $this->getDoctrine()->getManager();

		$em->persist($event);
		$em->flush();

		return new Response('<body><h1>Event created!</h1></body>');

		//$events = ['Symfony Conference','Laravel Conference','Django Conference','Flask Conference'];
		 
		//return $this->render('events/index.html.twig', [ 
		//	'listeEvents' => $events
		//]);
	}
}