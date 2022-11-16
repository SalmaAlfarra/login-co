<?php

namespace App\Repositories;

use App\Models\LegalProcedurs;

class LegalProcedurRepository
{

    public function getLegalProcedurById($id)
    {
        return LegalProcedurs::query()->findOrFail($id);
    }

    public function getLegalProcedurs()
    {
        return LegalProcedurs::all();
    }

    public function delete($id)
    {
        return LegalProcedurs::query()->findOrFail($id)->delete();
    }

    public function store(array $data)
    {
        return LegalProcedurs::query()->create($data);
    }

    public function update($id, array $data)
    {
        return tap(LegalProcedurs::query()->findOrFail($id)->update($data));
    }
}