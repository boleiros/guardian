<?php

use Phinx\Seed\AbstractSeed;

class GroupSeeder extends AbstractSeed
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
                'name'        => 'admin',
                'description' => 'admin',
            ),
            array(
                'name'        => 'nonAdmin',
                'description' => 'nonAdmin',
            ),
        );

        $posts = $this->table('groups');
        $posts->insert($data)
            ->save();

    }
}
