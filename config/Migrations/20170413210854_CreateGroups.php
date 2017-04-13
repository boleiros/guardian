<?php
use Migrations\AbstractMigration;

class CreateGroups extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('groups');

        $table->addColumn('name', 'string', [
            'default'   => null,
            'limit'     => 255,
            'null'      => false,
        ])->addIndex(['name'], ['unique' => true]);

        $table->addColumn('description', 'text', [
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
        $this->dropTable('groups');
    }
}
