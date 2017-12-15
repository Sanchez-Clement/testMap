<?php

namespace ShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Producteurs
 *
 * @ORM\Table(name="producteurs")
 * @ORM\Entity(repositoryClass="ShopBundle\Repository\ProducteursRepository")
 */
class Producteurs
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
     * @ORM\Column(name="produits", type="text")
     */
    private $produits;

    /**
     * @var string
     *
     * @ORM\Column(name="commune", type="string", length=255, nullable=true)
     */
    private $commune;

    /**
     * @var string
     *
     * @ORM\Column(name="societe", type="string", length=255)
     */
    private $societe;

    /**
     * @var string
     *
     * @ORM\Column(name="pointVente", type="string", length=255)
     */
    private $pointVente;

    /**
     * @var string
     *
     * @ORM\Column(name="Voie", type="string", length=255, nullable=true)
     */
    private $voie;

    /**
     * @var string
     *
     * @ORM\Column(name="Horaires", type="string", length=255, nullable=true)
     */
    private $horaires;

    /**
     * @var float
     *
     * @ORM\Column(name="lat", type="float")
     */
    private $lat;

    /**
     * @var float
     *
     * @ORM\Column(name="lng", type="float")
     */
    private $lng;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set produits
     *
     * @param string $produits
     *
     * @return Producteurs
     */
    public function setProduits($produits)
    {
        $this->produits = $produits;

        return $this;
    }

    /**
     * Get produits
     *
     * @return string
     */
    public function getProduits()
    {
        return $this->produits;
    }

    /**
     * Set commune
     *
     * @param string $commune
     *
     * @return Producteurs
     */
    public function setCommune($commune)
    {
        $this->commune = $commune;

        return $this;
    }

    /**
     * Get commune
     *
     * @return string
     */
    public function getCommune()
    {
        return $this->commune;
    }

    /**
     * Set societe
     *
     * @param string $societe
     *
     * @return Producteurs
     */
    public function setSociete($societe)
    {
        $this->societe = $societe;

        return $this;
    }

    /**
     * Get societe
     *
     * @return string
     */
    public function getSociete()
    {
        return $this->societe;
    }

    /**
     * Set pointVente
     *
     * @param string $pointVente
     *
     * @return Producteurs
     */
    public function setPointVente($pointVente)
    {
        $this->pointVente = $pointVente;

        return $this;
    }

    /**
     * Get pointVente
     *
     * @return string
     */
    public function getPointVente()
    {
        return $this->pointVente;
    }

    /**
     * Set voie
     *
     * @param string $voie
     *
     * @return Producteurs
     */
    public function setVoie($voie)
    {
        $this->voie = $voie;

        return $this;
    }

    /**
     * Get voie
     *
     * @return string
     */
    public function getVoie()
    {
        return $this->voie;
    }

    /**
     * Set horaires
     *
     * @param string $horaires
     *
     * @return Producteurs
     */
    public function setHoraires($horaires)
    {
        $this->horaires = $horaires;

        return $this;
    }

    /**
     * Get horaires
     *
     * @return string
     */
    public function getHoraires()
    {
        return $this->horaires;
    }

    /**
     * Set lat
     *
     * @param float $lat
     *
     * @return Producteurs
     */
    public function setLat($lat)
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * Get lat
     *
     * @return float
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Set lng
     *
     * @param float $lng
     *
     * @return Producteurs
     */
    public function setLng($lng)
    {
        $this->lng = $lng;

        return $this;
    }

    /**
     * Get lng
     *
     * @return float
     */
    public function getLng()
    {
        return $this->lng;
    }
}

