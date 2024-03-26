<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Réclamation
 *
 * @ORM\Table(name="réclamation")
 * @ORM\Entity
 */
class Réclamation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_réclamation", type="datetime", nullable=false)
     */
    private $dateRéclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="cause_réclamation", type="string", length=255, nullable=false)
     */
    private $causeRéclamation;


}
