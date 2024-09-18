<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Seeder;
use Laravel\Prompts\Output\ConsoleOutput;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::factory()->make(['name' => 'admin', 'email' => 'admin@admin.ru', 'password' => 'aaa']);
        /**
         * @var BelongsToMany $roles
         */
        $roles = $admin->roles();
        $admin->save();
        $roles->attach(1);
        User::factory()->count(50)->create();
    }
}
