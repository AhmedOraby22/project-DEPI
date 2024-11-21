<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use App\Models\Faq;
use App\Models\User;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Country::updateOrCreate(['name'=>'egypt']);
        $x=random_int(10,20);
        for($i=0;$i<=$x ;$i++)
        {
            City::updateOrCreate(['name'=>'city'.$i]);
        }
        for($i=0;$i<=$x ;$i++)
        {
            Faq::create(['question'=>'question'.$i,'answer'=>'answer'.$i]);
        }
        for($i=0;$i<=$x ;$i++)
        {
        User::factory()->create([
            'name' => 'User'.random_int(0,10000000000000),
        ]);
        }
    }
}
