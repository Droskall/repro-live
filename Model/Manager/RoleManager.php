<?php

namespace App\Model\Manager;

use App\Model\DB;
use App\Model\Entity\Role;

class RoleManager
{
    private string $table = 'role';
    private UserRoleManager $userRoleManager;

    public function __construct()
    {
        $this->userRoleManager = new UserRoleManager();
    }

    public function findAll(): array
    {
      $roles = [];
      $query = DB::getPDO()->query("SELECT * FROM {$this->table}");
      if ($query){
         foreach ($query->fetchAll() as $roleData){

             $role = new Role();
             $role->setId($roleData['id']);
             $role->setRoleName($roleData['role_name']);
             $roleData->setUser($this->userRoleManager->getUsersByRoleId($roleData['id']));
             $roles[] = $role;
         }
      }
      return $roles;
    }
}
