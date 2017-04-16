<?php

use Phinx\Seed\AbstractSeed;

class PermissionSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $data = array(
            array(
                'name'          => 'user.index',
                'readable_name' => 'User Management',
            ),
            array(
                'name'          => 'user.add',
                'readable_name' => 'Add User',
            ),
            array(
                'name'          => 'user.edit',
                'readable_name' => 'Edit User',
            ),
            array(
                'name'          => 'user.delete',
                'readable_name' => 'Delete User',
            ),
            array(
                'name'          => 'user.view',
                'readable_name' => 'View User',
            ),
        );

        $posts = $this->table('permissions');
        $posts->insert($data)
            ->save();

    }
}
