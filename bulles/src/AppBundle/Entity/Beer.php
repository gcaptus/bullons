<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Beer
 *
 * @ORM\Table(name="bul_beer")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BeerRepository")
 */
class Beer
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="brewery", type="string", length=255, nullable=true)
     */
    private $brewery;

    /**
     * @var string|null
     *
     * @ORM\Column(name="typeOfBeer", type="string", length=255, nullable=true)
     */
    private $typeOfBeer;

    /**
     * @var string|null
     *
     * @ORM\Column(name="alcohol", type="decimal", precision=3, scale=1, nullable=true)
     */
    private $alcohol;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ibu", type="integer", nullable=true)
     */
    private $ibu;

    /**
     * @var int|null
     *
     * @ORM\Column(name="vintage", type="integer", nullable=true)
     */
    private $vintage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="media", type="string", length=255, nullable=true)
     */
    private $media;

    /**
     * @var string|null
     *
     * @ORM\Column(name="beerDescription", type="text", nullable=true)
     */
    private $beerDescription;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return Beer
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set brewery.
     *
     * @param string|null $brewery
     *
     * @return Beer
     */
    public function setBrewery($brewery = null)
    {
        $this->brewery = $brewery;

        return $this;
    }

    /**
     * Get brewery.
     *
     * @return string|null
     */
    public function getBrewery()
    {
        return $this->brewery;
    }

    /**
     * Set typeOfBeer.
     *
     * @param string|null $typeOfBeer
     *
     * @return Beer
     */
    public function setTypeOfBeer($typeOfBeer = null)
    {
        $this->typeOfBeer = $typeOfBeer;

        return $this;
    }

    /**
     * Get typeOfBeer.
     *
     * @return string|null
     */
    public function getTypeOfBeer()
    {
        return $this->typeOfBeer;
    }

    /**
     * Set alcohol.
     *
     * @param string|null $alcohol
     *
     * @return Beer
     */
    public function setAlcohol($alcohol = null)
    {
        $this->alcohol = $alcohol;

        return $this;
    }

    /**
     * Get alcohol.
     *
     * @return string|null
     */
    public function getAlcohol()
    {
        return $this->alcohol;
    }

    /**
     * Set ibu.
     *
     * @param int|null $ibu
     *
     * @return Beer
     */
    public function setIbu($ibu = null)
    {
        $this->ibu = $ibu;

        return $this;
    }

    /**
     * Get ibu.
     *
     * @return int|null
     */
    public function getIbu()
    {
        return $this->ibu;
    }

    /**
     * Set vintage.
     *
     * @param int|null $vintage
     *
     * @return Beer
     */
    public function setVintage($vintage = null)
    {
        $this->vintage = $vintage;

        return $this;
    }

    /**
     * Get vintage.
     *
     * @return int|null
     */
    public function getVintage()
    {
        return $this->vintage;
    }

    /**
     * Set media.
     *
     * @param string|null $media
     *
     * @return Beer
     */
    public function setMedia($media = null)
    {
        $this->media = $media;

        return $this;
    }

    /**
     * Get media.
     *
     * @return string|null
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * Set beerDescription.
     *
     * @param string|null $beerDescription
     *
     * @return Beer
     */
    public function setBeerDescription($beerDescription = null)
    {
        $this->beerDescription = $beerDescription;

        return $this;
    }

    /**
     * Get beerDescription.
     *
     * @return string|null
     */
    public function getBeerDescription()
    {
        return $this->beerDescription;
    }
}
