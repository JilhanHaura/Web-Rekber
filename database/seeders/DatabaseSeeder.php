<?php

namespace Database\Seeders;

use Carbon\Carbon;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $statuses = ['Finished', 'Progress'];
        // $faker = Faker::create();
        // foreach (range(1, 30) as $index) {
        //     DB::table('accounts')->insert([
        //         'userId' =>$faker->unique()->randomNumber(),
        //         'nik' =>$faker->randomNumber,
        //         'name' => $faker->name,
        //         'gender' => $faker->randomElement(['Male', 'Female']),
        //         'birthPlace' => $faker->city,
        //         'dateOfBirth' => $faker->date('Y-m-d', '-20 years'),
        //         'email' => $faker->unique()->safeEmail,
        //         'phoneNumber' => $faker->phoneNumber(),
        //         'province' => $faker->state,
        //         'city' => $faker->city,
        //         'village' => $faker->city,
        //         'detail' => $faker->address,
        //         'dueDate' => $faker->date('Y-m-d', '+30 days'),
        //         'status' => $statuses[rand(0, 1)],
        //         'created_at'=>Carbon::now(),
        //         'updated_at'=>Carbon::now()
        //     ]);
        // }
        // $statusrefund=['Process Refund','Refund Success','Refund Refused'];
        // foreach(range(1,30) as $index){
        //     DB::table('refund_admins')-> insert([
        //         'orderId'=>$faker->unique()->randomNumber(),
        //         'customerName'=>$faker->name,
        //         'sellerName'=>$faker->name,
        //         'total'=>$faker->randomNumber(),
        //         'dueDate'=>$faker->date('Y-m-d', '+30 days'),
        //         'status'=>$statusrefund[array_rand($statusrefund)],
        //         'reasonComplaint'=>$faker->sentence(),
        //         'created_at'=>Carbon::now(),
        //         'updated_at'=>Carbon::now()
        //     ]);
        // }
        // $statusSetting = ['Non Active','Active'];
        // foreach (range(1, 5) as $index) {
        //     $month = $faker->monthName();
        //     $percentage = $faker->numberBetween(0, 100) . '%';
        //     DB::table('settings')->insert([
        //         'month' => $month,
        //         'year' => $faker->year(),
        //         'percentage' => $percentage,
        //         'status' => $statusSetting[rand(0)],
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ]);
        // }

        // DB::table('accounts')->truncate();
        // DB::table('refund_admins')->truncate();
        DB::table('settings')->truncate();
    }
}