<?php

namespace App\Model\Manager;

use App\Model\DB;
use App\Model\Entity\User;

class  UserRoleManager
{
    public function getUsersByRoleId(int $roleId): array
    {
        $users = [];
        $usersQuery = DB::getPDO()->query("
            SELECT * FROM user WHERE id IN (SELECT user_fk FROM user_role WHERE role_fk = 1);
        ");
        if ($usersQuery){
            foreach ($usersQuery->fetchAll() as $userData){
                $user = new User();
                $user->setId($userData['id']);
                $user->setEmail($userData['email']);
                $user->setFirstname($userData['firstname']);
            }
        }


        return $users;
    }

}
