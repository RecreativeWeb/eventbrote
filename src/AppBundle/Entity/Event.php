<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="events")
 */
class Event
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @ORM\Column(type="string",length=255)
	 */
	private $name;

	/**
	 * @ORM\Column(type="string",length=255)
	 */
	private $location;

	/**
	 * @ORM\Column(type="decimal",precision=5,scale=2)
	 */
	private $price;
}

// 12345.67 est un type décimal, sa precision est de 7 (chiffres), et son scale est de 2 (chiffre aprés la virgule)
