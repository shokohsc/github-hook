<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Payload
 *
 * @ORM\Table(name="payload")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PayloadRepository")
 */
class Payload
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
     * @ORM\Column(name="ref", type="string", length=255, nullable=true)
     */
    private $ref;

    /**
     * @var string
     *
     * @ORM\Column(name="before_sha", type="string", length=255, nullable=true)
     */
    private $beforeSha;

    /**
     * @var string
     *
     * @ORM\Column(name="after_sha", type="string", length=255, nullable=true)
     */
    private $afterSha;

    /**
     * @var bool
     *
     * @ORM\Column(name="created", type="boolean", nullable=true)
     */
    private $created;

    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted;

    /**
     * @var bool
     *
     * @ORM\Column(name="forced", type="boolean", nullable=true)
     */
    private $forced;

    /**
     * @var string
     *
     * @ORM\Column(name="base_ref", type="string", length=255, nullable=true)
     */
    private $baseRef;

    /**
     * @var string
     *
     * @ORM\Column(name="compare", type="string", length=255, nullable=true)
     */
    private $compare;


    /**
     * @ORM\OneToMany(targetEntity="Commit", mappedBy="payload")
     */
    private $commits;




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
     * Set ref
     *
     * @param string $ref
     *
     * @return Payload
     */
    public function setRef($ref)
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * Get ref
     *
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * Set beforeSha
     *
     * @param string $beforeSha
     *
     * @return Payload
     */
    public function setBeforeSha($beforeSha)
    {
        $this->beforeSha = $beforeSha;

        return $this;
    }

    /**
     * Get beforeSha
     *
     * @return string
     */
    public function getBeforeSha()
    {
        return $this->beforeSha;
    }

    /**
     * Set afterSha
     *
     * @param string $afterSha
     *
     * @return Payload
     */
    public function setAfterSha($afterSha)
    {
        $this->afterSha = $afterSha;

        return $this;
    }

    /**
     * Get afterSha
     *
     * @return string
     */
    public function getAfterSha()
    {
        return $this->afterSha;
    }

    /**
     * Set created
     *
     * @param boolean $created
     *
     * @return Payload
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return bool
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     *
     * @return Payload
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return bool
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Set forced
     *
     * @param boolean $forced
     *
     * @return Payload
     */
    public function setForced($forced)
    {
        $this->forced = $forced;

        return $this;
    }

    /**
     * Get forced
     *
     * @return bool
     */
    public function getForced()
    {
        return $this->forced;
    }

    /**
     * Set baseRef
     *
     * @param string $baseRef
     *
     * @return Payload
     */
    public function setBaseRef($baseRef)
    {
        $this->baseRef = $baseRef;

        return $this;
    }

    /**
     * Get baseRef
     *
     * @return string
     */
    public function getBaseRef()
    {
        return $this->baseRef;
    }

    /**
     * Set compare
     *
     * @param string $compare
     *
     * @return Payload
     */
    public function setCompare($compare)
    {
        $this->compare = $compare;

        return $this;
    }

    /**
     * Get compare
     *
     * @return string
     */
    public function getCompare()
    {
        return $this->compare;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->commits = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add commit
     *
     * @param \AppBundle\Entity\Commit $commit
     *
     * @return Payload
     */
    public function addCommit(\AppBundle\Entity\Commit $commit)
    {
        $this->commits[] = $commit;

        return $this;
    }

    /**
     * Remove commit
     *
     * @param \AppBundle\Entity\Commit $commit
     */
    public function removeCommit(\AppBundle\Entity\Commit $commit)
    {
        $this->commits->removeElement($commit);
    }

    /**
     * Get commits
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCommits()
    {
        return $this->commits;
    }
}
