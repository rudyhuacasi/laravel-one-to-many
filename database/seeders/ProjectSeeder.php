<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;



class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        for ($i=0; $i < 5; $i++) { 
            $project =new Project();
    
            $project->title = $faker->sentence(3);
            $project->content = $faker->text(500);
            $project->slug = Str::of($project->title)->slug('-'); 
    
    
            $project->save();
        }
    }
}
