<?php

/**
 * Created by IntelliJ IDEA.
 * User: damo
 * Date: 13/03/16
 * Time: 21:12
 */

include_once __DIR__.'/IAlarm.php';

class Alarm  implements IAlarm
{
    public $type;
    public $state;

    function __construct( $type, $state )
    {
        $this->type = $type;
        $this->state = $state;
    }

    public function getState(){
        return $this->getState();
    }
}