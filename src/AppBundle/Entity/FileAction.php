<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FileAction
 *
 * @ORM\Table(name="file_action" , uniqueConstraints={@ORM\UniqueConstraint( name="unique_action_by_commit_on_file", columns={"action", "commit_id", "file_id" })})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FileActionRepository")
 */
class FileAction
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
     * @ORM\Column(name="action", type="string", length=255, nullable=true)
     */
    private $action;


    /**
     * @ORM\ManyToOne(targetEntity="Commit", inversedBy="fileActions")
     */
    private $commit;

    /**
     * @ORM\ManyToOne(targetEntity="File", inversedBy="fileActions")
     */
    private $file;


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
     * Set action
     *
     * @param string $action
     *
     * @return FileAction
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set commit
     *
     * @param \AppBundle\Entity\Commit $commit
     *
     * @return FileAction
     */
    public function setCommit(\AppBundle\Entity\Commit $commit = null)
    {
        $this->commit = $commit;

        return $this;
    }

    /**
     * Get commit
     *
     * @return \AppBundle\Entity\Commit
     */
    public function getCommit()
    {
        return $this->commit;
    }

    /**
     * Set file
     *
     * @param \AppBundle\Entity\File $file
     *
     * @return FileAction
     */
    public function setFile(\AppBundle\Entity\File $file = null)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return \AppBundle\Entity\File
     */
    public function getFile()
    {
        return $this->file;
    }
}
