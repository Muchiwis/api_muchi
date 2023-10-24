<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        $user = User::find(1);
        return view('phone.index', compact('user'));
    }
    
    public function api_index(): JsonResource
    {
        $user = User::find(2);
        return new UserResource($user);
    }
}
