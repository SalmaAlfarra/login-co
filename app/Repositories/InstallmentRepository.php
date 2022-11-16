<?php

namespace App\Repositories;

use App\Models\Installment;

class InstallmentRepository
{

    public function getInstallmentById($id)
    {
        return Installment::query()->findOrFail($id);
    }

    public function getInstallments()
    {
        return Installment::all();
    }

    public function delete($id)
    {
        return Installment::query()->findOrFail($id)->delete();
    }

    public function store(array $data)
    {
        return Installment::query()->create($data);
    }

    public function update($id, array $data)
    {
        return tap(Installment::query()->findOrFail($id)->update($data));
    }
}