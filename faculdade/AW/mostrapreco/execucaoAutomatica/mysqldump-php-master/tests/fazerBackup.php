<?php
/*
for($i=0;$i<128;$i++) {
    echo "$i>" . bin2hex(chr($i)) . "<" . PHP_EOL;
}
*/

error_reporting(E_ALL);

include_once(dirname(__FILE__) . "/mysqldump-php-master/src/Ifsnop/Mysqldump/Mysqldump.php");

use Ifsnop\Mysqldump as IMysqldump;

$dumpSettings = array(
    'exclude-tables' => array('/^travis*/'),
    'compress' => IMysqldump\Mysqldump::NONE,
    'no-data' => false,
    'add-drop-table' => true,
    'single-transaction' => true,
    'lock-tables' => true,
    'add-locks' => true,
    'extended-insert' => false,
    'disable-keys' => true,
    'skip-triggers' => false,
    'add-drop-trigger' => true,
    'routines' => true,
    'databases' => false,
    'add-drop-database' => false,
    'hex-blob' => true,
    'no-create-info' => false,
    'where' => ''
    );

// do nothing test
print "Fazendo backup do banco de dados" . PHP_EOL;
$dump = new IMysqldump\Mysqldump(
    "mysql:host=localhost;dbname=u135429050_mp",
    "root",
    ""
    );

$dump->start("backupMostrapreco_.sql");

exit("<br>Backup concluído com Sucesso");
