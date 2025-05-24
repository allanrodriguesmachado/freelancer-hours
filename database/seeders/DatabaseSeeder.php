<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Proposal;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        $user = User::query()->inRandomOrder()->limit(10)->get();
        $user->each(function(User $user) {
            $project = Project::factory()->create([
                'created_by' => $user->id
            ]);

            Proposal::factory()->count(random_int(1, 45))->create(['project_id' => $project->id]);
        });
    }
}
