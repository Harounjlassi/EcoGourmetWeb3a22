<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire", indexes={@ORM\Index(name="annonceId", columns={"id_Annonce"}), @ORM\Index(name="FK_UserID", columns={"userId"})})
 * @ORM\Entity
 */
class Commentaire
{
    /**
     * @var int
     *
     * @ORM\Column(name="commentaireId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $commentaireid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $comment = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="likes_count", type="integer", nullable=true)
     */
    private $likesCount = '0';

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="userId", referencedColumnName="UserID")
     * })
     */
    private $userid;

    /**
     * @var \Annonce
     *
     * @ORM\ManyToOne(targetEntity="Annonce")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_Annonce", referencedColumnName="id_Annonce")
     * })
     */
    private $idAnnonce;


}
