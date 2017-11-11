<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
//use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use DateTime;

class EventsController extends Controller
{
	/**
	 *@Route("/events")
	 */
	public function listeAction()
	{
		$superSecretCalcul = 2+2*5;
		$events = ['Symfony Conference','Laravel Conference','Django Conference','Flask Conference'];
		$currentTime = (new DateTime)->format('d/m/Y H:i:s');

		return $this->render('events/index.html.twig', [
			'valeur' => $superSecretCalcul, 
			'listeEvents' => $events, 
			'heure' => $currentTime
		]);
	}
}