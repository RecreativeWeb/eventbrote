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
		$events = ['Symfony Conference','Laravel Conference','Django Conference','Flask Conference'];
		 
		$templating = $this->container->get('templating');

		$html = $templating->render('events/index.html.twig',compact('events'));

		return new Response($html);
	}
}