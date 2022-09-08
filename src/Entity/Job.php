<?php

namespace App\Entity;

use App\Repository\JobRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=JobRepository::class)
 *  @ORM\Table(name="jobs")
 */
class Job
{

    /**
     * @ORM\Id
     * @ORM\Column(type="string",length=255)
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $job;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $job_ref;

    /**
     * @ORM\Column(type="integer")
     * Many Jobs can work in One Company.
     */
    private $company_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $link;

    /**
     * @ORM\Column(type="integer")
     */
    private $profession_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $division_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $role_id;


    /**
     * @ORM\Column(type="date")
     */
    private $date_published;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $refkey;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getJob(): ?string
    {
        return $this->job;
    }

    public function setJob(string $job): self
    {
        $this->job = $job;

        return $this;
    }

    public function getJobRef(): ?string
    {
        return $this->job_ref;
    }

    public function setJobRef(string $job_ref): self
    {
        $this->job_ref = $job_ref;

        return $this;
    }

    public function getCompanyId(): ?int
    {
        return $this->company_id;
    }

    public function setCompanyId(int $company_id): self
    {
        $this->company_id = $company_id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param mixed $link
     */
    public function setLink($link): self
    {
        $this->link = $link;

        return $this;
    }

    public function getProfessionId()
    {
        return $this->profession_id;
    }

    public function setProfessionId($profession_id): self
    {
        $this->profession_id = $profession_id;

        return $this;
    }

    public function getDivisionId(): ?int
    {
        return $this->division_id;
    }

    public function setDivisionId($division_id): self
    {
        $this->division_id = $division_id;

        return $this;
    }

    public function getRoleId(): ?int
    {
        return $this->role_id;
    }

    public function setRoleId($role_id): self
    {
        $this->role_id = $role_id;

        return $this;
    }

    public function getRefKey(): ?string
    {
        return $this->refkey;
    }

    public function setRefkey($refkey): self
    {
        $this->refkey = $refkey;

        return $this;
    }


    public function getDatePublished()
    {
        return $this->date_published;
    }


    public function setDatePublished($date_published): self
    {
        $this->date_published = $date_published;

        return $this;
    }


}
