<?php

namespace Database\Seeders;

use App\Models\Store;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
    {
        public function run(): void
    {
        User::factory(40)->create()->each(function ($user) {
        $user->store()->create(Store::factory()->make()->toArray());
        });
    }
}
