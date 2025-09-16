<?php

namespace App\Services;

use App\Models\Tag;
use App\Repositories\TagRepositoryInterface;
use Illuminate\Support\Facades\Log;
use Exception;

class TagService
{
    public function __construct(protected TagRepositoryInterface $tags)
    {
    }

    public function getAll(): iterable
    {
        return $this->tags->all();
    }

    public function getById(int $id): ?Tag
    {
        return $this->tags->find($id);
    }

    public function create(array $data): Tag
    {
        try {
            return $this->tags->create($data);
        } catch (Exception $e) {
            Log::error('Failed to create tag', ['error' => $e->getMessage()]);
            throw $e;
        }
    }

    public function update(Tag $tag, array $data): Tag
    {
        try {
            return $this->tags->update($tag, $data);
        } catch (Exception $e) {
            Log::error('Failed to update tag', ['error' => $e->getMessage()]);
            throw $e;
        }
    }

    public function delete(Tag $tag): bool
    {
        try {
            return $this->tags->delete($tag);
        } catch (Exception $e) {
            Log::error('Failed to delete tag', ['error' => $e->getMessage()]);
            throw $e;
        }
    }
}
