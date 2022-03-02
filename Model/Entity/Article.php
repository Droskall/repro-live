<?php

namespace App\Model\Entity;

use DateTime;
use App\Model\Entity\User;

class Article
{
    private ?int $id;
    private string $title;
    private string $content;
    private DateTime $dateAdd;
    private DateTime $dateUpdate;
    private User $autor;

    /**
     * @return User
     */
    public function getAutor(): User
    {
        return $this->autor;
    }

    /**
     * @param User $autor
     * @return Article
     */
    public function setAutor(User $autor): Article
    {
        $this->autor = $autor;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;

    }

    /**
     * @param int|null $id
     * @return Article
     */
    public function setId(?int $id): Article
    {
        $this->id = $id;
        return $this;
    }


    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Article
     */
    public function setTitle(string $title): Article
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return Article
     */
    public function setContent(string $content): Article
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDateAdd(): DateTime
    {
        return $this->dateAdd;
    }

    /**
     * @param DateTime $dateAdd
     * @return Article
     */
    public function setDateAdd(DateTime $dateAdd): Article
    {
        $this->dateAdd = $dateAdd;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDateUpdate(): DateTime
    {
        return $this->dateUpdate;
    }

    /**
     * @param DateTime $dateUpdate
     * @return Article
     */
    public function setDateUpdate(DateTime $dateUpdate): Article
    {
        $this->dateUpdate = $dateUpdate;
        return $this;
    }
}