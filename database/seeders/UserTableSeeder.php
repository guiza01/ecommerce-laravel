<?php

namespace Database\Seeders;

use App\Models\Store;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
    {
        public function run()
    {
        User::factory()->count(10)->create();
    }
}
