<?php

namespace App\Repositories;

use App\Models\Category;

class AppointmentRepository
{

    public function getCategoryById($id)
    {
        return Category::query()->findOrFail($id);
    }

    public function getCategorys()
    {
        return Category::all();
    }

    public function delete($id)
    {
        return Category::query()->findOrFail($id)->delete();
    }

    public function store(array $data)
    {
        return Category::query()->create($data);
    }

    public function update($id, array $data)
    {
        return tap(Category::query()->findOrFail($id)->update($data));
    }
}