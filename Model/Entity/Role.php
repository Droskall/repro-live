<?php

namespace App\Model\Entity;

class Role
{
    private ?int $id;
    private ?string $roleName;
    private array $user;

    /**
     * @return array
     */
    public function getUser(): array
    {
        return $this->user;
    }

    /**
     * @param array $user
     */
    public function setUser(array $user): Role
    {
        $this->user = $user;
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
     * @return Role
     */
    public function setId(?int $id): Role
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRoleName(): ?string
    {
        return $this->roleName;
    }

    /**
     * @param string|null $roleName
     * @return Role
     */
    public function setRoleName(?string $roleName): Role
    {
        $this->roleName = $roleName;
        return $this;
    }


}