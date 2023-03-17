<?php
/**********************************************************************
 *
 * C L A S S P E R S O
 *
 */

namespace Model;

class Character
{
    private $id;
    private $nom;
    private $descrition;
    private $weapons;
    private $image;
    private $strength;
    private $defence;
    private $dexterity;
    private $speed;
    public function __construct($idC, $nomC, $descrition, $weapons, $imageC, $strength, $defence, $dexterity, $speed)
    {
        $this->idC = $idC;
        $this->nomC = $nomC;
        $this->descrition = $descrition;
        $this->weapons = $weapons;
        $this->imageC = $imageC;
        $this->strength = $strength;
        $this->defence = $defence;
        $this->dexterity = $dexterity;
        $this->speed = $speed;
    }


    /**
     * Accesseur de idc qui retourne l'idC du perso
     * @param mixed $idc
     * @return void
     */
    public function getIdC()
    {
        return $this->idC;
    }
    /**
     * Mutateur de idC (Change l'id du perso)
     * @param mixed $idC
     * @return void
     */
    public function setIdC($idC)
    {
        $this->idC = $idC;
    }

    /**
     * Accesseur de Nom (retourne le Nom du perso)
     * @return mixed
     */
    public function getNomC()
    {
        return $this->nomC;
    }

    /**
     * Mutateur de nomC (Change le nom du perso)
     * @param mixed $nomC
     * @return void
     */

    public function setNomC($nomC)
    {
        $this->nomC = $nomC;
    }

    /**
     * Accesseur de description (retourne la description du perso)
     * @return mixed
     */
    public function getDescription()
    {
        return $this->descrition;
    }
    /**
     * Mutateur de Descritpion (change la description du perso)
     * @param mixed $descrition
     * @return void
     */
    public function setDescription($descrition)
    {
        $this->descrition = $descrition;
    }
    /**
     * Accesseur de weapons (retourne les armes du perso)
     * @return mixed
     */
    public function getWeapons()
    {
        return $this->weapons;
    }
    /**
     * Mutateur de weapons (change les armes du perso)
     * @param mixed $weapons
     * @return void
     */
    public function setweapons($weapons)
    {
        $this->weapons = $weapons;
    }

    /**
     * Accesseur de imageC (retourne l'image du perso)
     * @return mixed
     */
    public function getImageC()
    {
        return $this->imageC;
    }

    /**
     * Mutateur de imageC (change l'image du perso)
     * @param mixed $imageC
     * @return void
     */
    public function setImageC($imageC)
    {
        $this->imageC = $imageC;
    }
    /**
     * Accesseur de attack (retourne l'attaque du perso)
     * @return mixed
     */
    public function getStrength()
    {
        return $this->strength;
    }
    /**
     * Mutateur de strength (change l'attaque du perso)
     * @param mixed $imageC
     * @return void
     */
    public function setStrength($strength)
    {
        $this->strength = $strength;
    }

    /**
     * Accesseur de defence (retourne la défence du perso)
     * @return mixed
     */
    public function getDefence()
    {
        return $this->defence;
    }
    /**
     * Mutateur de defence (change la défence du perso)
     * @param mixed $attack
     * @return void
     */
    public function setDefence($defence)
    {
        $this->defence = $defence;
    }
    /**
     * Accesseur de dexterity qui retourne la vitesse d'attaque du perso
     * @param mixed $dexterity
     * @return void
     */
    public function getDexterity()
    {
        return $this->dexterity;
    }
    /**
     * Mutateur de idC (Change la vitesse d'attaque du perso)
     * @param mixed $dexterity
     * @return void
     */
    public function setDexterity($dexterity)
    {
        $this->dexterity = $dexterity;
    }
    /**
     * Accesseur de weapons (retourne la vitesse du perso)
     * @return mixed
     */
    public function getSpeed()
    {
        return $this->speed;
    }
    /**
     * Mutateur de speed (change la vitesse du perso)
     * @param mixed $speed
     * @return void
     */
    public function Setspeed($speed)
    {
        $this->speed = $speed;
    }
}