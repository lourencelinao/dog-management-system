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
        User::create(['email' => 'admin@admin.com', 'password' => bcrypt('admin'), 'position' => 'Admin']);
        User::create(['email' => 'manager@manager.com', 'password' => bcrypt('manager'), 'position' => 'Manager']);
        User::create(['email' => 'staff@staff.com', 'password' => bcrypt('staff'), 'position' => 'Staff']);
        User::create(['email' => 'volunteer@volunteer.com', 'password' => bcrypt('volunteer'), 'position' => 'Volunteer']);
    }
}
