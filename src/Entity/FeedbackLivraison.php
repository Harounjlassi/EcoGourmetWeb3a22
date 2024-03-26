<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FeedbackLivraison
 *
 * @ORM\Table(name="feedback_livraison")
 * @ORM\Entity
 */
class FeedbackLivraison
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
     * @var int
     *
     * @ORM\Column(name="FB_livreur", type="integer", nullable=false)
     */
    private $fbLivreur;

    /**
     * @var int
     *
     * @ORM\Column(name="FB_duration", type="integer", nullable=false)
     */
    private $fbDuration;


}
