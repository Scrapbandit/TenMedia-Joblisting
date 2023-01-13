<?php

namespace App\Http\Controllers;

use App\Interfaces\UserRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    private UserRepositoryInterface $UserRepository;

    public function __construct(UserRepositoryInterface $UserRepository)
    {
        $this->UserRepository = $UserRepository;
    }

    public function index(): JsonResponse
    {
        return response()->json([
            'data' => $this->UserRepository->getAllUsers()
        ]);
    }

    public function store(Request $request): JsonResponse
    {
        $UserName = $request->only([
            'name',
            'email',
            'address'
        ]);

        return response()->json(
            [
                'data' => $this->UserRepository->createUser($UserName)
            ],
            Response::HTTP_CREATED
        );
    }

    public function show(Request $request): JsonResponse
    {
        $UserId = $request->route('id');

        return response()->json([
            'data' => $this->UserRepository->getUserById($UserId)
        ]);
    }

    public function update(Request $request): JsonResponse
    {
        $UserId = $request->route('id');
        $UserName = $request->only([
            'name',
            'email',
            'address'
        ]);

        return response()->json([
            'data' => $this->UserRepository->updateUser($UserId, $UserName)
        ]);
    }

    public function destroy(Request $request): JsonResponse
    {
        $UserId = $request->route('id');
        $this->UserRepository->deleteUser($UserId);

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
