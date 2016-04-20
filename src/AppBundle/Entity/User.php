<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User
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
     * @ORM\Column(name="login", type="string", length=255)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="avatar_url", type="string", length=255, nullable=true)
     */
    private $avatarUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="gravatar_url", type="string", length=255, nullable=true)
     */
    private $gravatarUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="html_url", type="string", length=255, nullable=true)
     */
    private $htmlUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="followers_url", type="string", length=255, nullable=true)
     */
    private $followersUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="following_url", type="string", length=255, nullable=true)
     */
    private $followingUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="starred_url", type="string", length=255, nullable=true)
     */
    private $starredUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="subscriptions_url", type="string", length=255, nullable=true)
     */
    private $subscriptionsUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="organizations_url", type="string", length=255, nullable=true)
     */
    private $organizationsUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="repos_url", type="string", length=255, nullable=true)
     */
    private $reposUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="events_url", type="string", length=255, nullable=true)
     */
    private $eventsUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="received_events_url", type="string", length=255, nullable=true)
     */
    private $receivedEventsUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="site_admin", type="string", length=255, nullable=true)
     */
    private $siteAdmin;


    /**
     * @ORM\OneToMany(targetEntity="Commit", mappedBy="user")
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
     * @return User
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
     * Set login
     *
     * @param string $login
     *
     * @return User
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set avatarUrl
     *
     * @param string $avatarUrl
     *
     * @return User
     */
    public function setAvatarUrl($avatarUrl)
    {
        $this->avatarUrl = $avatarUrl;

        return $this;
    }

    /**
     * Get avatarUrl
     *
     * @return string
     */
    public function getAvatarUrl()
    {
        return $this->avatarUrl;
    }

    /**
     * Set gravatarUrl
     *
     * @param string $gravatarUrl
     *
     * @return User
     */
    public function setGravatarUrl($gravatarUrl)
    {
        $this->gravatarUrl = $gravatarUrl;

        return $this;
    }

    /**
     * Get gravatarUrl
     *
     * @return string
     */
    public function getGravatarUrl()
    {
        return $this->gravatarUrl;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return User
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
     * Set htmlUrl
     *
     * @param string $htmlUrl
     *
     * @return User
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
     * Set followersUrl
     *
     * @param string $followersUrl
     *
     * @return User
     */
    public function setFollowersUrl($followersUrl)
    {
        $this->followersUrl = $followersUrl;

        return $this;
    }

    /**
     * Get followersUrl
     *
     * @return string
     */
    public function getFollowersUrl()
    {
        return $this->followersUrl;
    }

    /**
     * Set followingUrl
     *
     * @param string $followingUrl
     *
     * @return User
     */
    public function setFollowingUrl($followingUrl)
    {
        $this->followingUrl = $followingUrl;

        return $this;
    }

    /**
     * Get followingUrl
     *
     * @return string
     */
    public function getFollowingUrl()
    {
        return $this->followingUrl;
    }

    /**
     * Set starredUrl
     *
     * @param string $starredUrl
     *
     * @return User
     */
    public function setStarredUrl($starredUrl)
    {
        $this->starredUrl = $starredUrl;

        return $this;
    }

    /**
     * Get starredUrl
     *
     * @return string
     */
    public function getStarredUrl()
    {
        return $this->starredUrl;
    }

    /**
     * Set subscriptionsUrl
     *
     * @param string $subscriptionsUrl
     *
     * @return User
     */
    public function setSubscriptionsUrl($subscriptionsUrl)
    {
        $this->subscriptionsUrl = $subscriptionsUrl;

        return $this;
    }

    /**
     * Get subscriptionsUrl
     *
     * @return string
     */
    public function getSubscriptionsUrl()
    {
        return $this->subscriptionsUrl;
    }

    /**
     * Set organizationsUrl
     *
     * @param string $organizationsUrl
     *
     * @return User
     */
    public function setOrganizationsUrl($organizationsUrl)
    {
        $this->organizationsUrl = $organizationsUrl;

        return $this;
    }

    /**
     * Get organizationsUrl
     *
     * @return string
     */
    public function getOrganizationsUrl()
    {
        return $this->organizationsUrl;
    }

    /**
     * Set reposUrl
     *
     * @param string $reposUrl
     *
     * @return User
     */
    public function setReposUrl($reposUrl)
    {
        $this->reposUrl = $reposUrl;

        return $this;
    }

    /**
     * Get reposUrl
     *
     * @return string
     */
    public function getReposUrl()
    {
        return $this->reposUrl;
    }

    /**
     * Set eventsUrl
     *
     * @param string $eventsUrl
     *
     * @return User
     */
    public function setEventsUrl($eventsUrl)
    {
        $this->eventsUrl = $eventsUrl;

        return $this;
    }

    /**
     * Get eventsUrl
     *
     * @return string
     */
    public function getEventsUrl()
    {
        return $this->eventsUrl;
    }

    /**
     * Set receivedEventsUrl
     *
     * @param string $receivedEventsUrl
     *
     * @return User
     */
    public function setReceivedEventsUrl($receivedEventsUrl)
    {
        $this->receivedEventsUrl = $receivedEventsUrl;

        return $this;
    }

    /**
     * Get receivedEventsUrl
     *
     * @return string
     */
    public function getReceivedEventsUrl()
    {
        return $this->receivedEventsUrl;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return User
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set siteAdmin
     *
     * @param string $siteAdmin
     *
     * @return User
     */
    public function setSiteAdmin($siteAdmin)
    {
        $this->siteAdmin = $siteAdmin;

        return $this;
    }

    /**
     * Get siteAdmin
     *
     * @return string
     */
    public function getSiteAdmin()
    {
        return $this->siteAdmin;
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
     * @return User
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
