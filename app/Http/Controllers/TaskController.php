<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class TaskController extends Controller
{
    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json(Task::all());
    }
    public function show(Request $request, int $id): JsonResponse
    {
        $task = Task::query()->where('id', $id)->firstOrFail();
        if(is_null($task)) return response()->json('Not found', 404);
        else return response()->json($task);
    }
}
