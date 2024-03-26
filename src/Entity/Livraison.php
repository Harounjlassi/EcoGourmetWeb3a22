<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Livraison
 *
 * @ORM\Table(name="livraison", indexes={@ORM\Index(name="Feedback_liv", columns={"Feedback_liv"}), @ORM\Index(name="Réclamation", columns={"Réclamation"}), @ORM\Index(name="livreur", columns={"livreur"}), @ORM\Index(name="chef", columns={"chef"}), @ORM\Index(name="commande", columns={"commande"})})
 * @ORM\Entity
 */
class Livraison
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
     * @var string|null
     *
     * @ORM\Column(name="adresse_source", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $adresseSource = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="adresse_destination", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $adresseDestination = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="state_reception", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $stateReception = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="state_delivery", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $stateDelivery = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="time_start", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $timeStart = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="time_end", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $timeEnd = 'NULL';

    /**
     * @var \Commande
     *
     * @ORM\ManyToOne(targetEntity="Commande")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="commande", referencedColumnName="id_commande")
     * })
     */
    private $commande;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="livreur", referencedColumnName="UserID")
     * })
     */
    private $livreur;

    /**
     * @var \FeedbackLivraison
     *
     * @ORM\ManyToOne(targetEntity="FeedbackLivraison")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Feedback_liv", referencedColumnName="id")
     * })
     */
    private $feedbackLiv;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="chef", referencedColumnName="UserID")
     * })
     */
    private $chef;

    /**
     * @var \Réclamation
     *
     * @ORM\ManyToOne(targetEntity="Réclamation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Réclamation", referencedColumnName="id")
     * })
     */
    private $réclamation;


}
