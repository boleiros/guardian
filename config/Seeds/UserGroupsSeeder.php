<?php

use Phinx\Seed\AbstractSeed;

class UserGroupsSeeder extends AbstractSeed
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
                'user_id'  => '1',
                'group_id' => '1',
            ),
            array(
                'user_id'  => '2',
                'group_id' => '2',
            ),

        );

        $posts = $this->table('user_groups');
        $posts->insert($data)
            ->save();

    }
}
