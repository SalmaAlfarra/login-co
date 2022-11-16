<?php

namespace App\Repositories;

use App\Models\CreditCard;

class CreditCardRepository
{

    public function getCreditCardById($id)
    {
        return CreditCard::query()->findOrFail($id);
    }

    public function getCreditCards()
    {
        return CreditCard::all();
    }

    public function delete($id)
    {
        return CreditCard::query()->findOrFail($id)->delete();
    }

    public function store(array $data)
    {
        return CreditCard::query()->create($data);
    }

    public function update($id, array $data)
    {
        return tap(CreditCard::query()->findOrFail($id)->update($data));
    }
}