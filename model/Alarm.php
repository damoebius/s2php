<?php
namespace fortknox\model;
/**
 * Created by IntelliJ IDEA.
 * User: damo
 * Date: 13/03/16
 * Time: 21:12
 */

use fortknox\model\IAlarm;

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