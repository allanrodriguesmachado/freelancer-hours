<?php

namespace Database\Seeders;

use App\Models\Project;
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
        $user->each(fn(User $user) => Project::factory(10)->create([
            'created_by' => $user->id,
        ]));
    }
}
