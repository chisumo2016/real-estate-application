<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call([
            PermissionsTableSeeder::class,
            RoleTableSeeder::class,
            PermissionRoleTableSeeder::class,
            UserTableSeeder::class,
            RoleUserTableSeeder::class,
            EventTypesTableSeeder::class,
            LocationsTableSeeder::class,
            VenuesTableSeeder::class,

        ]);
    }
}
