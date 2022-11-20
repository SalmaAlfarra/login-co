<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call("OthersTableSeeder");
        Currency::truncate();

        $currencies = [
            ['name' => 'شيكل'],
            ['name' => 'دولار '],
            ['name' => 'دينار '],

        ];

        foreach ($currencies as $key => $value) {

            Currency::create($value);
        }
    }
}