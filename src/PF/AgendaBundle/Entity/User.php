<?php

namespace PF\AgendaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;


/**
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="PF\AgendaBundle\Repository\UserRepository")
 * @ORM\Table(name="pf_agenda_user")
 */
class User extends BaseUser
{
	 /**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	 protected $id;



	public function __construct()
    {
        parent::__construct();
    }
	
	


    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }
}
