<?php

namespace App\Repositories;

use App\Models\Tag;

interface TagRepositoryInterface
{
    public function all(): iterable;
    public function find(int $id): ?Tag;
    public function create(array $data): Tag;
    public function update(Tag $tag, array $data): Tag;
    public function delete(Tag $tag): bool;
}
