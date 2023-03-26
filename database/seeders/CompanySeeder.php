<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    public function run(): void
    {
        $users = User::select('id')->get();

        foreach ($users->random(1000) as $user) {
            Company::factory()
                ->count(random_int(1, 3))
                ->create(['user_id' => $user->getKey()]);
        }
    }
}
