<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commit
 *
 * @ORM\Table(name="commit")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CommitRepository")
 */
class Commit
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
     * @var int
     *
     * @ORM\Column(name="github_id", type="string", unique=true)
     */
    private $githubId;

    /**
     * @var string
     *
     * @ORM\Column(name="tree_id", type="string", length=255, nullable=true)
     */
    private $treeId;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_distinct", type="boolean", nullable=true)
     */
    private $isDistinct;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="string", length=255, nullable=true)
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="timestamp", type="string", length=255, nullable=true)
     */
    private $timestamp;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    private $url;


    /**
     * @ORM\ManyToOne(targetEntity="Payload", inversedBy="commits")
     */
    private $payload;


    /**
     * @ORM\ManyToOne(targetEntity="Repository", inversedBy="commits")
     */
    private $repository;


    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="commits")
     */
    private $user;


    /**
     * @ORM\OneToMany(targetEntity="FileAction", mappedBy="commit")
     */
    private $fileActions;


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
     * Set githubId
     *
     * @param integer $githubId
     *
     * @return Commit
     */
    public function setGithubId($githubId)
    {
        $this->githubId = $githubId;

        return $this;
    }

    /**
     * Get githubId
     *
     * @return int
     */
    public function getGithubId()
    {
        return $this->githubId;
    }

    /**
     * Set treeId
     *
     * @param string $treeId
     *
     * @return Commit
     */
    public function setTreeId($treeId)
    {
        $this->treeId = $treeId;

        return $this;
    }

    /**
     * Get treeId
     *
     * @return string
     */
    public function getTreeId()
    {
        return $this->treeId;
    }

    /**
     * Set isDistinct
     *
     * @param boolean $isDistinct
     *
     * @return Commit
     */
    public function setIsDistinct($isDistinct)
    {
        $this->isDistinct = $isDistinct;

        return $this;
    }

    /**
     * Get isDistinct
     *
     * @return bool
     */
    public function getIsDistinct()
    {
        return $this->isDistinct;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return Commit
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set timestamp
     *
     * @param string $timestamp
     *
     * @return Commit
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * Get timestamp
     *
     * @return string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Commit
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fileActions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set payload
     *
     * @param \AppBundle\Entity\Payload $payload
     *
     * @return Commit
     */
    public function setPayload(\AppBundle\Entity\Payload $payload = null)
    {
        $this->payload = $payload;

        return $this;
    }

    /**
     * Get payload
     *
     * @return \AppBundle\Entity\Payload
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * Set repository
     *
     * @param \AppBundle\Entity\Repository $repository
     *
     * @return Commit
     */
    public function setRepository(\AppBundle\Entity\Repository $repository = null)
    {
        $this->repository = $repository;

        return $this;
    }

    /**
     * Get repository
     *
     * @return \AppBundle\Entity\Repository
     */
    public function getRepository()
    {
        return $this->repository;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Commit
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add fileAction
     *
     * @param \AppBundle\Entity\FileAction $fileAction
     *
     * @return Commit
     */
    public function addFileAction(\AppBundle\Entity\FileAction $fileAction)
    {
        $this->fileActions[] = $fileAction;

        return $this;
    }

    /**
     * Remove fileAction
     *
     * @param \AppBundle\Entity\FileAction $fileAction
     */
    public function removeFileAction(\AppBundle\Entity\FileAction $fileAction)
    {
        $this->fileActions->removeElement($fileAction);
    }

    /**
     * Get fileActions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFileActions()
    {
        return $this->fileActions;
    }
}
