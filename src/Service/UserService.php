<?php
namespace App\Service;

use App\Entity\User;
use App\Repository\UserRepository;

class UserService
{
    private UserRepository $repo;
    public function __construct(UserRepository $repo){
        $this->repo = $repo;
    }

    public function createUser(array $data): int
    {
        $user = new User();
        $user->setName($data['name']);
        $user->setEmail($data['email']);
        $user->setPassword(password_hash($data['password'], PASSWORD_DEFAULT));
        if (isset($data['phone'])) {
            $user->setPhone($data['phone']);
        }
        return $this->repo->create($user);
    }
}
