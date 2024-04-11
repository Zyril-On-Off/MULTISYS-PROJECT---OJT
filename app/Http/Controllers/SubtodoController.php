<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubtodoStoreRequest;
use App\Http\Requests\SubtodoUpdateRequest;
use App\Http\Resources\SubtodoResource;
use Illuminate\Http\JsonResponse;
use App\Interfaces\SubtodoRepositoryInterface;
use App\Interfaces\TodoRepositoryInterface;
use App\Models\Todo;

class SubtodoController extends Controller
{
    protected $subtodoRepository;
    protected $todoRepository;

    public function __construct(SubtodoRepositoryInterface $subtodoRepository,TodoRepositoryInterface $todoRepository)
    {
        $this->subtodoRepository = $subtodoRepository;
        $this->todoRepository = $todoRepository;
    }

    public function index(Todo $todo)
    {
        $subtodos = $this->subtodoRepository->all($todo);
        return SubtodoResource::collection($subtodos);
    }

    public function show($id)
    {
        $result = $this->subtodoRepository->find($id);

        if (!$result) {
            return response()->json(['message' => 'Subtodo not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        return new SubtodoResource($result);
    }

    public function store(SubtodoStoreRequest $request, $todo_id)
    {

        $result = $this->todoRepository->find($todo_id);

        if (!$result) {
            return response()->json(['message' => 'Todo not found'], JsonResponse::HTTP_NOT_FOUND);
        }


        $subtodo = $result->subtodos()->create($request->validated());


        return new SubtodoResource($subtodo);
    }

    public function update(SubtodoUpdateRequest $request, $id)
    {
        $validatedData = $request->validated();

        $$result = $this->subtodoRepository->find($id);

        if (!$result) {
            return response()->json(['message' => 'Subtodo not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $this->subtodoRepository->update($id, $validatedData);
        return new SubtodoResource($result);
    }

    public function destroy($id)
    {
        $subtodo = $this->subtodoRepository->find($id);

        if (!$subtodo) {
            return response()->json(['message' => 'Subtodo not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $this->subtodoRepository->delete($subtodo);
        return response()->json(['message' => 'Subtodo deleted successfully']);
    }
}
