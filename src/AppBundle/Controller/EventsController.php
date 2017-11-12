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
		$em = $this->getDoctrine()->getManager();
		//dump($event);
		//die;
		
		$events = $em->getRepository(Event::class)->findAll();
		//dump($event);
		//die;
		 
		return $this->render('events/index.html.twig',compact('events'));
	}
}