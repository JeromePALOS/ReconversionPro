<?php

namespace PF\AgendaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rdv
 *
 * @ORM\Table(name="pf_agenda_rdv")
 * @ORM\Entity(repositoryClass="PF\AgendaBundle\Repository\RdvRepository")
 */
class Rdv
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
	 * @ORM\ManyToOne(targetEntity="PF\AgendaBundle\Entity\TimeSlot", inversedBy="ordonnance")
	 * @ORM\JoinColumn(nullable=false, onDelete="CASCADE"))
	 */
	private $timeslot;

	/**
	 * @ORM\ManyToOne(targetEntity="PF\AgendaBundle\Entity\User")
	 * @ORM\JoinColumn(nullable=false, onDelete="CASCADE"))
	 */
	private $candidat;

    /**
     * @var string
     *
     * @ORM\Column(name="typeRDV", type="string", length=255)
     */
    private $typeRDV;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status;


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
     * @return Rdv
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
     * @param string $conseille
     *
     * @return Rdv
     */
    public function setConseille($conseille)
    {
        $this->conseille = $conseille;

        return $this;
    }

    /**
     * Get conseille
     *
     * @return string
     */
    public function getConseille()
    {
        return $this->conseille;
    }

    /**
     * Set candidat
     *
     * @param string $candidat
     *
     * @return Rdv
     */
    public function setCandidat($candidat)
    {
        $this->candidat = $candidat;

        return $this;
    }

    /**
     * Get candidat
     *
     * @return string
     */
    public function getCandidat()
    {
        return $this->candidat;
    }

    /**
     * Set typeRDV
     *
     * @param string $typeRDV
     *
     * @return Rdv
     */
    public function setTypeRDV($typeRDV)
    {
        $this->typeRDV = $typeRDV;

        return $this;
    }

    /**
     * Get typeRDV
     *
     * @return string
     */
    public function getTypeRDV()
    {
        return $this->typeRDV;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Rdv
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set timeslot
     *
     * @param \PF\AgendaBundle\Entity\TimeSlot $timeslot
     *
     * @return Rdv
     */
    public function setTimeslot(\PF\AgendaBundle\Entity\TimeSlot $timeslot)
    {
        $this->timeslot = $timeslot;

        return $this;
    }

    /**
     * Get timeslot
     *
     * @return \PF\AgendaBundle\Entity\TimeSlot
     */
    public function getTimeslot()
    {
        return $this->timeslot;
    }
}
