<?php
namespace App\Controller;

use App\Service\UserService;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class UserController
{
    private UserService $service;

    public function __construct(userService $service)
    {
        $this->service = $service;
    }

    #[Route('/api/user',methods:['POST'])]
    public function create(Request $request):JsonResponse
    {

        $data = json_decode($request->getContent(),true);
        $id = $this->service->createUser($data);
        return new JsonResponse(['success'=>true,'user_id'=>$id],201,[
            'Content-Type'=>'application/json'
        ]);

    }

}
