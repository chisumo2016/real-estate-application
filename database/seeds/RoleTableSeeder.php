<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'id'         => 1,
                'name'      => 'Admin',
                'created_at' => '2019-09-24 19:16:02',
                'updated_at' => '2019-09-24 19:16:02',
            ],
            [
                'id'         => 2,
                'name'      => 'User',
                'created_at' => '2019-09-24 19:16:02',
                'updated_at' => '2019-09-24 19:16:02',
            ],
        ];

        Role::insert($roles);
    }
}
