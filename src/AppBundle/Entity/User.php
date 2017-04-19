<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;



    /**
    *ORM\@OneToMany(targetEntity="Card", mappedBy="user")
    */
    private $cards;

    public function __construct()
    {
        parent::__construct();
        $this->cards = new ArrayCollection();
        // your own logic
    }
}
