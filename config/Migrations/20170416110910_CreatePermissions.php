<?php
use Migrations\AbstractMigration;

class CreatePermissions extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('permissions');

        $table->addColumn('name', 'string', [
            'default'   => null,
            'limit'     => 255,
            'null'      => false,
        ])->addIndex(['name'], ['unique' => true]);

        $table->addColumn('readable_name', 'text', [
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
        $this->dropTable('permissions');
    }
}
