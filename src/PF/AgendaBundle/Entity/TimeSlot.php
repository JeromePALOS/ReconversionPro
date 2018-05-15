<?php

namespace PF\AgendaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * TimeSlot
 *
 * @ORM\Table(name="pf_agenda_time_slot")
 * @ORM\Entity(repositoryClass="PF\AgendaBundle\Repository\TimeSlotRepository")
 */
class TimeSlot
{
	
	public function __construct(){
		$this->rdv = new ArrayCollection();
	}
	
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
	
	
	/**
	 * @ORM\OneToMany(targetEntity="Rdv", mappedBy="timeslot")
	 */
	 private $rdv;

	 
	/**
	 * @ORM\ManyToOne(targetEntity="PF\AgendaBundle\Entity\User")
	 * @ORM\JoinColumn(nullable=false, onDelete="CASCADE"))
	 */
	private $conseille;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;


	
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return TimeSlot
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

 

    /**
     * Set conseille
     *
     * @param \PF\AgendaBundle\Entity\User $conseille
     *
     * @return TimeSlot
     */
    public function setConseille(\PF\AgendaBundle\Entity\User $conseille)
    {
        $this->conseille = $conseille;

        return $this;
    }

    /**
     * Get conseille
     *
     * @return \PF\AgendaBundle\Entity\User
     */
    public function getConseille()
    {
        return $this->conseille;
    }



	
	
	
	
	 public function addRdv(Rdv $rdv)
	{
		$this->rdv[] = $rdv;
		$rdv->setTimeSlot($this);

		return $this;
	}

	public function removeRdv(Rdv $rdv)
	{
		$this->rdv->removeElement($rdv);
		$rdv->setTimeSlot(null);
	}

	public function getRdv()
	{
		return $this->rdv;
	}
}
