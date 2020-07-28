<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create(['name' => 'admin', 'email' => 'admin@admin.com', 'password' => bcrypt('admin'), 'position' => 'Admin']);
        User::create(['name' => 'manager', 'email' => 'manager@manager.com', 'password' => bcrypt('manager'), 'position' => 'Manager']);
        User::create(['name' => 'staff', 'email' => 'staff@staff.com', 'password' => bcrypt('staff'), 'position' => 'Staff']);
        User::create(['name' => 'volunteer', 'email' => 'volunteer@volunteer.com', 'password' => bcrypt('volunteer'), 'position' => 'Volunteer']);
    }
}
