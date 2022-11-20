<?php

namespace Database\Seeders;

use App\Models\MaterialStatusList;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class MaterialStatusListSeeder extends Seeder
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
        MaterialStatusList::truncate();

        $materialstatuslist = [
            ['name' => 'أعزب'],
            ['name' => 'متزوج'],
            ['name' => 'أرمل'],
            ['name' => 'مطلق'],

        ];

        foreach ($materialstatuslist as $key => $value) {

            MaterialStatusList::create($value);
        }
    }
}