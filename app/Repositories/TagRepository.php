<?php

namespace App\Repositories;

use App\Models\Tag;

class TagRepository implements TagRepositoryInterface
{
    public function all(): iterable
    {
        return Tag::all();
    }

    public function find(int $id): ?Tag
    {
        return Tag::find($id);
    }

    public function create(array $data): Tag
    {
        return Tag::create($data);
    }

    public function update(Tag $tag, array $data): Tag
    {
        $tag->update($data);
        return $tag;
    }

    public function delete(Tag $tag): bool
    {
        return $tag->delete();
    }
}
