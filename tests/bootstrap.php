<?php

use Cake\Datasource\ConnectionManager;
/**
 * Test suite bootstrap for Guardian.
 *
 * This function is used to find the location of CakePHP whether CakePHP
 * has been installed as a dependency of the plugin, or the plugin is itself
 * installed as a dependency of an application.
 */
$findRoot = function ($root) {
    do {
        $lastRoot = $root;
        $root = dirname($root);
        if (is_dir($root . '/vendor/cakephp/cakephp')) {
            return $root;
        }
    } while ($root !== $lastRoot);

    throw new Exception("Cannot find the root of the application, unable to run tests");
};
$root = $findRoot(__FILE__);
unset($findRoot);

chdir($root);
require $root . '/config/bootstrap.php';

// Ensure default test connection is defined
if (!getenv('db_class')) {
    putenv('db_class=Cake\Database\Driver\Mysql');
    // putenv('db_dsn=sqlite::memory:');
}

ConnectionManager::config('test', [
    'className' => 'Cake\Database\Connection',
    'driver' => getenv('db_class'),
    'dsn' => getenv('db_dsn'),
    'database' => 'guardian_dev',
    'username' => 'root',
    'password' => 'desenv',
    'timezone' => 'UTC'
]);
