<?php

use Phinx\Seed\AbstractSeed;

class GroupPermissionsSeeder extends AbstractSeed
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
                'permission_id' => '1',
                'group_id'      => '1',
            ),
            array(
                'permission_id' => '2',
                'group_id'      => '1',
            ),
            array(
                'permission_id' => '3',
                'group_id'      => '1',
            ),
            array(
                'permission_id' => '4',
                'group_id'      => '1',
            ),
            array(
                'permission_id' => '5',
                'group_id'      => '1',
            ),


        );

        $posts = $this->table('group_permissions');
        $posts->insert($data)
            ->save();

    }
}
