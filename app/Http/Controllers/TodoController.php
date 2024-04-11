<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoStoreRequest;
use App\Http\Requests\TodoUpdateRequest;
use App\Http\Resources\TodoResource;
use App\Http\Resources\TodoListResource;
use Illuminate\Http\JsonResponse;
use App\Interfaces\TodoRepositoryInterface;

class TodoController extends Controller
{
    protected $todoRepository;

    public function __construct(TodoRepositoryInterface $todoRepository)
    {
        $this->todoRepository = $todoRepository;
    }

    public function index()
    {
        $todos = $this->todoRepository->all();
        return TodoResource::collection($todos);
    }

    public function show($id)
    {
        $result = $this->todoRepository->find($id);

        if (!$result) {
            return response()->json(['message' => 'Not Found'], JsonResponse::HTTP_NOT_FOUND);
        }

        return new TodoListResource($result);
    }

    public function store(TodoStoreRequest $request)
    {
        $validatedData = $request->validated();

        $existingTodo = $this->todoRepository->findByTask($validatedData['task']);

        if ($existingTodo) {
            return response()->json(['message' => 'Todo with this task already exists'], JsonResponse::HTTP_CONFLICT);
        }

        $result = $this->todoRepository->create($validatedData);

        return new TodoResource($result);
    }

    public function update(TodoUpdateRequest $request, $id)
    {
        $validatedData = $request->validated();

        $result = $this->todoRepository->find($id);

        if (!$result) {
            return response()->json(['message' => 'Todo not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $this->todoRepository->update($id, $validatedData);

        return new TodoResource($result);
    }

    public function destroy($id)
    {
        $result = $this->todoRepository->find($id);

        if (!$result) {
            return response()->json(['message' => 'Todo not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $this->todoRepository->delete($id);

        return response()->json(['message' => 'Task deleted successfully']);
    }
}
