<?php

namespace Database\Seeders;

use App\Models\Bank;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class BankSeeder extends Seeder
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
        Bank::truncate();

        $banks = [
            ['name' => 'بنك فلسطين'],
            ['name' => 'بنك القدس '],
            ['name' => 'بنك الأردن '],
            ['name' => 'بنك الإنتاج'],
            ['name' => 'بنك الإسكان'],
            ['name' => 'البنك الإسلامي الفلسطيني'],
            ['name' => 'البنك العربي'],
            ['name' => 'البنك الوطني الإسلامي'],
            ['name' => 'البنك العقاري المصري العربي'],
            ['name' => 'بنك الاستثمار'],
            ['name' => 'البريد'],
            ['name' => 'هيئة التأمين و المعاشات'],
            ['name' => 'شركة زياد مرتجى'],
            ['name' => 'بنك القاهرة عمان'],
            ['name' => 'البنك الإسلامي العربي'],
            ['name' => 'لايوجد'],



        ];

        foreach ($banks as $key => $value) {

            Bank::create($value);
        }
    }
}