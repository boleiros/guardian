<?php
use Migrations\AbstractMigration;

class CreateUserGroups extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('user_groups');

        $table->addColumn('user_id', 'integer', [
            'default'   => null,
            'limit'     => 11,
            'null'      => false,
        ]);

        $table->addColumn('group_id', 'integer', [
            'default'   => null,
            'limit'     => 11,
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
        $this->dropTable('user_groups');
    }
}
