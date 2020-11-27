<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vacation as ModelsVacation;
use App\Models\User;

class Vacation extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vacations = ModelsVacation::factory()->times(10)->create();

        // $users = User::all();
        // error_log($users);
        // $users->each(function ($user) use ($vacations) {
        //     $ids = $vacations->random(5)->pluck('id');
        //     $vacations->user()->sync($ids);
        // });
    }
}
