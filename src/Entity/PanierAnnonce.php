<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PanierAnnonce
 *
 * @ORM\Table(name="panier_annonce", indexes={@ORM\Index(name="fk_panier", columns={"id_panier"}), @ORM\Index(name="fk_panier_annonce", columns={"id_annonce"})})
 * @ORM\Entity
 */
class PanierAnnonce
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_panier_annonce", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPanierAnnonce;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quantite", type="integer", nullable=true, options={"default"="1"})
     */
    private $quantite = 1;

    /**
     * @var \Panier
     *
     * @ORM\ManyToOne(targetEntity="Panier")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_panier", referencedColumnName="id_panier")
     * })
     */
    private $idPanier;

    /**
     * @var \Annonce
     *
     * @ORM\ManyToOne(targetEntity="Annonce")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_annonce", referencedColumnName="id_Annonce")
     * })
     */
    private $idAnnonce;


}
