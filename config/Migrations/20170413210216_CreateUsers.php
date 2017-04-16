<?php
use Migrations\AbstractMigration;

class CreateUsers extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('users');
        
        $table->addColumn('username', 'string', [
            'default'   => null,
            'limit'     => 255,
            'null'      => false,
        ]);

        $table->addColumn('email','string', [
            'default'   => null,
            'limit'     => 150,
            'null'      => false,
        ]) ->addIndex(['email'], ['unique' => true]);

        $table->addColumn('status', 'integer', ['default' => 1]);

        $table->addColumn('password', 'string', [
            'default'   => null,
            'limit'     => 255,
            'null'      => false,
        ]);
       
        $table->addColumn('created', 'timestamp', [
            'default'   => null,
            'limit'     => null,
            'null'      => true,
        ]);
        $table->addColumn('modified', 'timestamp', [
            'default'   => null,
            'limit'     => null,
            'null'      => true,
        ]);

        $table->create();
    }

    public function down()
    {
        $this->dropTable('users');
    }
}
