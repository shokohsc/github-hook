<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Repository
 *
 * @ORM\Table(name="repository")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RepositoryRepository")
 */
class Repository
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
     * @ORM\Column(name="github_id", type="integer")
     */
    private $githubId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="full_name", type="string", length=255, nullable=true)
     */
    private $fullName;

    /**
     * @var string
     *
     * @ORM\Column(name="owner", type="string", length=255, nullable=true)
     */
    private $owner;

    /**
     * @var bool
     *
     * @ORM\Column(name="private", type="boolean", nullable=true)
     */
    private $private;

    /**
     * @var string
     *
     * @ORM\Column(name="html_url", type="string", length=255, nullable=true)
     */
    private $htmlUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var bool
     *
     * @ORM\Column(name="fork", type="boolean", nullable=true)
     */
    private $fork;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    private $url;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var string
     *
     * @ORM\Column(name="updated_at", type="string", length=255, nullable=true)
     */
    private $updatedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="pushed_at", type="string", length=255, nullable=true)
     */
    private $pushedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="git_url", type="string", length=255, nullable=true)
     */
    private $gitUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="ssh_url", type="string", length=255, nullable=true)
     */
    private $sshUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="clone_url", type="string", length=255, nullable=true)
     */
    private $cloneUrl;

    /**
     * @var int
     *
     * @ORM\Column(name="size", type="integer", nullable=true)
     */
    private $size;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=255, nullable=true)
     */
    private $language;

    /**
     * @var string
     *
     * @ORM\Column(name="default_branch", type="string", length=255, nullable=true)
     */
    private $defaultBranch;

    /**
     * @var string
     *
     * @ORM\Column(name="master_branch", type="string", length=255, nullable=true)
     */
    private $masterBranch;

    /**
     * @var string
     *
     * @ORM\Column(name="organization", type="string", length=255, nullable=true)
     */
    private $organization;


    /**
     * @ORM\OneToMany(targetEntity="Commit", mappedBy="repository")
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
     * Set githubId
     *
     * @param integer $githubId
     *
     * @return Repository
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
     * Set name
     *
     * @param string $name
     *
     * @return Repository
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set fullName
     *
     * @param string $fullName
     *
     * @return Repository
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;

        return $this;
    }

    /**
     * Get fullName
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * Set owner
     *
     * @param string $owner
     *
     * @return Repository
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get owner
     *
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set private
     *
     * @param boolean $private
     *
     * @return Repository
     */
    public function setPrivate($private)
    {
        $this->private = $private;

        return $this;
    }

    /**
     * Get private
     *
     * @return bool
     */
    public function getPrivate()
    {
        return $this->private;
    }

    /**
     * Set htmlUrl
     *
     * @param string $htmlUrl
     *
     * @return Repository
     */
    public function setHtmlUrl($htmlUrl)
    {
        $this->htmlUrl = $htmlUrl;

        return $this;
    }

    /**
     * Get htmlUrl
     *
     * @return string
     */
    public function getHtmlUrl()
    {
        return $this->htmlUrl;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Repository
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set fork
     *
     * @param boolean $fork
     *
     * @return Repository
     */
    public function setFork($fork)
    {
        $this->fork = $fork;

        return $this;
    }

    /**
     * Get fork
     *
     * @return bool
     */
    public function getFork()
    {
        return $this->fork;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Repository
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Repository
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param string $updatedAt
     *
     * @return Repository
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set pushedAt
     *
     * @param string $pushedAt
     *
     * @return Repository
     */
    public function setPushedAt($pushedAt)
    {
        $this->pushedAt = $pushedAt;

        return $this;
    }

    /**
     * Get pushedAt
     *
     * @return string
     */
    public function getPushedAt()
    {
        return $this->pushedAt;
    }

    /**
     * Set gitUrl
     *
     * @param string $gitUrl
     *
     * @return Repository
     */
    public function setGitUrl($gitUrl)
    {
        $this->gitUrl = $gitUrl;

        return $this;
    }

    /**
     * Get gitUrl
     *
     * @return string
     */
    public function getGitUrl()
    {
        return $this->gitUrl;
    }

    /**
     * Set sshUrl
     *
     * @param string $sshUrl
     *
     * @return Repository
     */
    public function setSshUrl($sshUrl)
    {
        $this->sshUrl = $sshUrl;

        return $this;
    }

    /**
     * Get sshUrl
     *
     * @return string
     */
    public function getSshUrl()
    {
        return $this->sshUrl;
    }

    /**
     * Set cloneUrl
     *
     * @param string $cloneUrl
     *
     * @return Repository
     */
    public function setCloneUrl($cloneUrl)
    {
        $this->cloneUrl = $cloneUrl;

        return $this;
    }

    /**
     * Get cloneUrl
     *
     * @return string
     */
    public function getCloneUrl()
    {
        return $this->cloneUrl;
    }

    /**
     * Set size
     *
     * @param integer $size
     *
     * @return Repository
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set language
     *
     * @param string $language
     *
     * @return Repository
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set defaultBranch
     *
     * @param string $defaultBranch
     *
     * @return Repository
     */
    public function setDefaultBranch($defaultBranch)
    {
        $this->defaultBranch = $defaultBranch;

        return $this;
    }

    /**
     * Get defaultBranch
     *
     * @return string
     */
    public function getDefaultBranch()
    {
        return $this->defaultBranch;
    }

    /**
     * Set masterBranch
     *
     * @param string $masterBranch
     *
     * @return Repository
     */
    public function setMasterBranch($masterBranch)
    {
        $this->masterBranch = $masterBranch;

        return $this;
    }

    /**
     * Get masterBranch
     *
     * @return string
     */
    public function getMasterBranch()
    {
        return $this->masterBranch;
    }

    /**
     * Set organization
     *
     * @param string $organization
     *
     * @return Repository
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;

        return $this;
    }

    /**
     * Get organization
     *
     * @return string
     */
    public function getOrganization()
    {
        return $this->organization;
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
     * @return Repository
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
