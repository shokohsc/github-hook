<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * File
 *
 * @ORM\Table(name="file")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FileRepository")
 */
class File
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
     * @ORM\Column(name="path", type="string", length=255, nullable=true)
     */
    private $path;


    /**
     * @ORM\OneToMany(targetEntity="FileAction", mappedBy="file")
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
     * Set path
     *
     * @param string $path
     *
     * @return File
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fileActions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add fileAction
     *
     * @param \AppBundle\Entity\FileAction $fileAction
     *
     * @return File
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
