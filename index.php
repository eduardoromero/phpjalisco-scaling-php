<?php
require_once 'vendor/autoload.php';

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

$visitor = [
    'ip'     => $_SERVER['REMOTE_ADDR'],
    'server' => gethostname() . " / " . $_SERVER['HTTP_HOST'],
    'date'   => new DateTime('now'),
    'sort'   => time()
];

/* getting config data */
define('RETHINKDB_SERVER', getenv('RETHINKDB_SERVER'));
define('RETHINKDB_PORT', getenv('RETHINKDB_PORT'));
define('RETHINKDB_USER', getenv('RETHINKDB_USER'));
define('RETHINKDB_PASS', getenv('RETHINKDB_PASS'));
define('RETHINKDB_DB', getenv('RETHINKDB_DB'));
define('RETHINKDB_TABLE', getenv('RETHINKDB_TABLE'));

/* Getting shared data ;) */

$rethinkdb = r\connect(RETHINKDB_SERVER, RETHINKDB_PORT, RETHINKDB_DB);

/* get last 100 visitors */
$visitors = r\table(RETHINKDB_TABLE)->orderBy(r\desc('sort'))->limit(100)->coerceTo('array')->run($rethinkdb);

/* add this new entry */
r\table(RETHINKDB_TABLE)->insert($visitor)->run($rethinkdb);

$view_variables = [
    'IP'       => $visitor['ip'],
    'SERVER'   => $visitor['server'],
    'visitors' => $visitors
];


$templates = new League\Plates\Engine('templates/');
/* output the pretty page */
echo $templates->render('home', $view_variables);