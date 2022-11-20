<?php

namespace Database\Seeders;

use App\Models\Branch;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class BranchSeeder extends Seeder
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
        Branch::truncate();

        $branshes = [
            ['name' => 'رفح', 'bank_id' => '1'],
            ['name' => 'خانيونس - البلد', 'bank_id' => '1'],
            ['name' => 'خانيونس - بني سهيلا ', 'bank_id' => '1'],
            ['name' => 'دير البلح', 'bank_id' => '1'],
            ['name' => 'النصيرات', 'bank_id' => '1'],
            ['name' => 'غزة - الساحة', 'bank_id' => '1'],
            ['name' => ' غزة - الرمال', 'bank_id' => '1'],
            ['name' => 'غزة - النصر', 'bank_id' => '1'],
            ['name' => 'غزة جباليا', 'bank_id' => '1'],

            ['name' => 'رفح', 'bank_id' => '2'],
            ['name' => 'خانيونس', 'bank_id' => '2'],
            ['name' => 'النصيرات', 'bank_id' => '2'],
            ['name' => 'غزة', 'bank_id' => '2'],
            ['name' => 'الزيتون', 'bank_id' => '2'],
            ['name' => 'الرمال', 'bank_id' => '2'],
            ['name' => 'جباليا', 'bank_id' => '2'],
            ['name' => 'بيت لاهيا', 'bank_id' => '2'],
            ['name' => 'اليرموك', 'bank_id' => '2'],

            ['name' => 'غزة - الساحة', 'bank_id' => '3'],
            ['name' => 'غزة - النصر', 'bank_id' => '3'],

            ['name' => 'خانيونس', 'bank_id' => '4'],
            ['name' => 'غزة - النصر', 'bank_id' => '4'],
            ['name' => 'غزة - النصر', 'bank_id' => '4'],

            ['name' => 'خانيونس', 'bank_id' => '5'],
            ['name' => 'غزة', 'bank_id' => '5'],

            ['name' => 'رفح - تل السلطان', 'bank_id' => '6'],
            ['name' => 'خانيونس - البلد', 'bank_id' => '6'],
            ['name' => 'النصيرات - وسط البلد', 'bank_id' => '6'],
            ['name' => 'غزة - الرمال', 'bank_id' => '6'],
            ['name' => 'غزة - النصر', 'bank_id' => '6'],
            ['name' => 'غزة - الشجاعية', 'bank_id' => '6'],
            ['name' => 'شمال غزة - وسط البلد', 'bank_id' => '6'],

            ['name' => 'النصيرات', 'bank_id' => '7'],
            ['name' => 'غزة', 'bank_id' => '7'],
            ['name' => 'غزة - الرمال', 'bank_id' => '7'],

            ['name' => 'رفح', 'bank_id' => '8'],
            ['name' => 'خانيونس', 'bank_id' => '8'],
            ['name' => 'غزة', 'bank_id' => '8'],
            ['name' => 'غزة - النصر', 'bank_id' => '8'],

            ['name' => 'خانيونس', 'bank_id' => '9'],
            ['name' => 'غزة', 'bank_id' => '9'],

            ['name' => 'غزة - الرمال', 'bank_id' => '10'],

            ['name' => 'خانيونس', 'bank_id' => '11'],
            ['name' => 'غزة', 'bank_id' => '11'],

            ['name' => 'غزة', 'bank_id' => '12'],

            ['name' => 'غزة', 'bank_id' => '13'],

            ['name' => 'رفح', 'bank_id' => '14'],
            ['name' => 'خانيونس', 'bank_id' => '14'],
            ['name' => 'دير البلح', 'bank_id' => '14'],
            ['name' => 'غزة - السرايا', 'bank_id' => '14'],
            ['name' => ' غزة - الرمال', 'bank_id' => '14'],

            ['name' => 'خانيونس', 'bank_id' => '15'],
            ['name' => 'النصيرات', 'bank_id' => '15'],
            ['name' => 'غزة', 'bank_id' => '15'],

            ['name' => 'لايوجد', 'bank_id' => '16'],

            ['name' => 'دير البلح', 'bank_id' => '6'],










        ];

        foreach ($branshes as $key => $value) {

            Branch::create($value);
        }
    }
}