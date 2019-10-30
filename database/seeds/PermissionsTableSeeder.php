<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            [
                'id'         => '1',
                'name'      => 'user_management_access',
                'created_at' => '2019-09-24 19:16:02',
                'updated_at' => '2019-09-24 19:16:02',
            ],
            [
                'id'         => '2',
                'name'      => 'permission_create',
                'created_at' => '2019-09-24 19:16:02',
                'updated_at' => '2019-09-24 19:16:02',
            ],
            [
                'id'         => '3',
                'name'      => 'permission_edit',
                'created_at' => '2019-09-24 19:16:02',
                'updated_at' => '2019-09-24 19:16:02',
            ],
            [
                'id'         => '4',
                'name'      => 'permission_show',
                'created_at' => '2019-09-24 19:16:02',
                'updated_at' => '2019-09-24 19:16:02',
            ],
            [
                'id'         => '5',
                'name'      => 'permission_delete',
                'created_at' => '2019-09-24 19:16:02',
                'updated_at' => '2019-09-24 19:16:02',
            ],
            [
                'id'         => '6',
                'name'      => 'permission_access',
                'created_at' => '2019-09-24 19:16:02',
                'updated_at' => '2019-09-24 19:16:02',
            ],
            [
                'id'         => '7',
                'name'      => 'role_create',
                'created_at' => '2019-09-24 19:16:02',
                'updated_at' => '2019-09-24 19:16:02',
            ],
            [
                'id'         => '8',
                'name'      => 'role_edit',
                'created_at' => '2019-09-24 19:16:02',
                'updated_at' => '2019-09-24 19:16:02',
            ],
            [
                'id'         => '9',
                'name'      => 'role_show',
                'created_at' => '2019-09-24 19:16:02',
                'updated_at' => '2019-09-24 19:16:02',
            ],
            [
                'id'         => '10',
                'name'      => 'role_delete',
                'created_at' => '2019-09-24 19:16:02',
                'updated_at' => '2019-09-24 19:16:02',
            ],
            [
                'id'         => '11',
                'name'      => 'role_access',
                'created_at' => '2019-09-24 19:16:02',
                'updated_at' => '2019-09-24 19:16:02',
            ],
            [
                'id'         => '12',
                'name'      => 'user_create',
                'created_at' => '2019-09-24 19:16:02',
                'updated_at' => '2019-09-24 19:16:02',
            ],
            [
                'id'         => '13',
                'name'      => 'user_edit',
                'created_at' => '2019-09-24 19:16:02',
                'updated_at' => '2019-09-24 19:16:02',
            ],
            [
                'id'         => '14',
                'name'      => 'user_show',
                'created_at' => '2019-09-24 19:16:02',
                'updated_at' => '2019-09-24 19:16:02',
            ],
            [
                'id'         => '15',
                'name'      => 'user_delete',
                'created_at' => '2019-09-24 19:16:02',
                'updated_at' => '2019-09-24 19:16:02',
            ],
            [
                'id'         => '16',
                'name'      => 'user_access',
                'created_at' => '2019-09-24 19:16:02',
                'updated_at' => '2019-09-24 19:16:02',
            ],

        ];

        Permission::insert($permissions);
    }
}
