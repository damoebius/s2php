<?php
namespace fortknox;


// Reporte toutes les erreurs PHP (Voir l'historique des modifications)
error_reporting(E_ALL);

use fortknox\net\Test2;

require_once(__DIR__.'/Bootstrap.php');

class Test {

    public function __construct()
    {
        $a = new Test2();
        var_dump($a);
    }

}
spl_autoload_register(array('Bootstrap', 'autoload'));
$o = new Test();
var_dump($o);

