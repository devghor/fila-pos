<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;
use App\Http\Resources\TagResource;
use App\Http\Resources\TagCollection;
use App\Models\Tag;
use App\Services\TagService;
use Illuminate\Http\Response;

class TagController extends Controller
{
    public function __construct(protected TagService $service)
    {
    }

    public function index(): TagCollection
    {
        return new TagCollection($this->service->getAll());
    }

    public function show(Tag $tag): TagResource
    {
        return new TagResource($tag);
    }

    public function store(StoreTagRequest $request): TagResource
    {
        $tag = $this->service->create($request->validated());
        return new TagResource($tag);
    }

    public function update(UpdateTagRequest $request, Tag $tag): TagResource
    {
        $tag = $this->service->update($tag, $request->validated());
        return new TagResource($tag);
    }

    public function destroy(Tag $tag): Response
    {
        $this->service->delete($tag);
        return response()->noContent();
    }
}
