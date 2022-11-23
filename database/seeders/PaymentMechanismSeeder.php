<?php

namespace Database\Seeders;

use App\Models\PaymentMechanism;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PaymentMechanismSeeder extends Seeder
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
        PaymentMechanism::truncate();

        $paymentmechanisms = [
            ['type' => 'نقدي'],
            ['type' => 'من الكفيل'],
            ['type' => 'هيئة التأمين و المعاشات'],
            ['type' => 'خصم بنكي'],
            ['type' => 'أمر حبس '],
            ['type' => 'بطاقة صراف'],
            ['type' => 'خصم مرتجى'],
            ['type' => 'من القرض'],
            ['type' => 'محفظة جوال باي'],
            ['type' => 'إنترنت بنكي'],
            ['type' => 'عن طريق لجنة رمضان'],
            ['type' => 'البريد'],
            ['type' => 'غير محدد'],



        ];

        foreach ($paymentmechanisms as $key => $value) {

            PaymentMechanism::create($value);
        }
    }
}