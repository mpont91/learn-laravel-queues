<?php

namespace App\Http\Controllers;

use App\Jobs\AnalyzeUserJob;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AnalyzeUsersController extends Controller
{
   public function __invoke(): JsonResponse
   {
       $user = User::first();
       AnalyzeUserJob::dispatch($user);
       return response()->json([
           'message' => 'Your request are being processed'
       ], 201);
   }
}
