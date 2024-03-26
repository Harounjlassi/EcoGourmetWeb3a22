<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Annonce
 *
 * @ORM\Table(name="annonce", indexes={@ORM\Index(name="FK_UserID_Annonce", columns={"userID"})})
 * @ORM\Entity
 */
class Annonce
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_Annonce", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAnnonce;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_du_plat", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $nomDuPlat = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Description_du_plat", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $descriptionDuPlat = 'NULL';

    /**
     * @var float|null
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $prix = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ingredients", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $ingredients = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Categorie_de_plat", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $categorieDePlat = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="image_plat", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $imagePlat = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="quantite", type="integer", nullable=false)
     */
    private $quantite;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=false)
     */
    private $adresse;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="userID", referencedColumnName="UserID")
     * })
     */
    private $userid;


}
