<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str; // Importing Str for random string generation
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\members;
use Faker\Factory as Faker;

class memberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *  @return void
     */
   
    public function run(): void
    {
        $faker = Faker::create();
        for($i=0;$i<=25;$i++){
            $members = new members;
            $members ->fullname =$faker->name;        
            $members -> save();
        }
       
    }
}
