<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GenusNoteRepository")
 * @ORM\Table(name="genus_note")
 */
class GenusNote {

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $username;

    /**
     * @ORM\Column(type="string")
     */
    private $userAvatarFileName;

    /**
     * @ORM\Column(type="text")
     */
    private $note;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\ManyToOne(targetEntity="Genus", inversedBy="notes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $genus;

    /**
     * Gets the value of id.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Gets the value of username.
     *
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Sets the value of username.
     *
     * @param mixed $username the username
     *
     * @return self
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Gets the value of userAvatarFileName.
     *
     * @return mixed
     */
    public function getUserAvatarFileName()
    {
        return $this->userAvatarFileName;
    }

    /**
     * Sets the value of userAvatarFileName.
     *
     * @param mixed $userAvatarFileName the user avatar file name
     *
     * @return self
     */
    public function setUserAvatarFileName($userAvatarFileName)
    {
        $this->userAvatarFileName = $userAvatarFileName;

        return $this;
    }

    /**
     * Gets the value of note.
     *
     * @return mixed
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets the value of note.
     *
     * @param mixed $note the note
     *
     * @return self
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Gets the value of createdAt.
     *
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Sets the value of createdAt.
     *
     * @param mixed $createdAt the created at
     *
     * @return self
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Gets the value of genus.
     *
     * @return mixed
     */
    public function getGenus()
    {
        return $this->genus;
    }

    /**
     * Sets the value of genus.
     *
     * @param mixed $genus the genus
     *
     * @return self
     */
    public function setGenus(Genus $genus)
    {
        $this->genus = $genus;

        return $this;
    }
}
