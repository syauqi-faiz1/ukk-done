<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\ComplaintCategory;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
  public function run(): void
  {
    User::create([
    'nama' => 'Admin Example',
    'username' => 'example',
    'password' => Hash::make('123456'),
    'role' => 'admin',
    ]);

    $this->call([
      ComplaintSeeder::class,
      UserSeeder::class,
      ComplaintCategorySeeder::class,
    ]);
  }
}
