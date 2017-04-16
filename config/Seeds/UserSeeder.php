<?php

use Phinx\Seed\AbstractSeed;
use Cake\Auth\DefaultPasswordHasher;

class UserSeeder extends AbstractSeed
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

        $hasher = new DefaultPasswordHasher();
        $password = $hasher->hash('teste');

        $data = array(
            array(
                'username'  => 'admin',
                'created'   => date('Y-m-d H:i:s'),
                'email'     => 'admin@guardian.com',
                'status'    => '1',
                'password'  => $password
            ),
            array(
                'username'  => 'nonAdmin',
                'created'   => date('Y-m-d H:i:s'),
                'email'     => 'nonAdmin@guardian.com',
                'status'    => '1',
                'password'  => $password
            ),
        );

        $posts = $this->table('users');
        $posts->insert($data)
              ->save();

    }
}
