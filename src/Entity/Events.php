<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Categories;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Events
 *
 * @ORM\Table(name="events", indexes={@ORM\Index(name="fk_cat_event", columns={"category_id"})})
 * @ORM\Entity(repositoryClass=EvenementRepository::class)
 */
class Events
{
    /**
     * @var int
     *
     * @ORM\Column(name="event_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $eventId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=255, nullable=false)
     */
    private $location;

    /**
     * @var string|null
     *
     * @ORM\Column(name="photo", type="blob", length=0, nullable=true, options={"default"="NULL"})
     */
    private $photo ;

    /**
     * @var \App\Entity\Categories
     *
     * @ORM\ManyToOne(targetEntity="Categories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_id", referencedColumnName="category_id")
     * })
     */
    private $category;

  /**
 * Get the value of eventId
 *
 * @return int
 */
public function getEventId(): ?int
{
    return $this->eventId;
}

/**
 * Set the value of eventId
 *
 * @param int $eventId
 * @return self
 */
public function setEventId(int $eventId): self
{
    $this->eventId = $eventId;

    return $this;
}

/**
 * Get the value of name
 *
 * @return string
 */
public function getName(): ?string
{
    return $this->name;
}

/**
 * Set the value of name
 *
 * @param string $name
 * @return self
 */
public function setName(string $name): self
{
    $this->name = $name;

    return $this;
}

/**
 * Get the value of date
 *
 * @return \DateTime
 */
public function getDate(): ?\DateTime
{
    return $this->date;
}

/**
 * Set the value of date
 *
 * @param \DateTime $date
 * @return self
 */
public function setDate(\DateTime $date): self
{
    $this->date = $date;

    return $this;
}

/**
 * Get the value of location
 *
 * @return string
 */
public function getLocation(): ?string
{
    return $this->location;
}

/**
 * Set the value of location
 *
 * @param string $location
 * @return self
 */
public function setLocation(string $location): self
{
    $this->location = $location;

    return $this;
}

/**
 * Get the value of photo
 *
 * @return string|null
 */
public function getPhoto(): ?string
{
    return $this->photo !== null ? base64_encode($this->photo) : null;

}
/**
 * Set the value of photo
 *
 * @param string|null $photo
 * @return self
 */
public function setPhoto(?string $photo): self
{
    $this->photo = $photo;

    return $this;
}

/**
 * Get the value of category
 *
 * @return null|App\Entity\Categories
 */
public function getCategory(): ?Categories
{
    return $this->category;
}

/**
 * Set the value of category
 *
 * @param null|App\Entity\Categories $category
 * @return self
 */
public function setCategory(?Categories $category): self
{
    $this->category = $category;

    return $this;
}


   /**
     * Get the base64-encoded representation of the photo data.
     *
     * @return string|null
     */
    public function getBase64EncodedPhoto(): ?string
    {
        if ($this->photo === null) {
            return null;
        }

        // Check if $this->photo is an instance of UploadedFile
        if ($this->photo instanceof UploadedFile) {
            // Read the contents of the uploaded file and encode it as base64
            return base64_encode(file_get_contents($this->photo->getPathname()));
        } elseif (is_resource($this->photo)) {
            // Rewind the stream
            rewind($this->photo);
            // Read the stream contents and encode it as base64
            return base64_encode(stream_get_contents($this->photo));
        }

        return null;
    }


}
