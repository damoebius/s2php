<?php
namespace fortknox\model;
/**
 * Created by IntelliJ IDEA.
 * User: damo
 * Date: 24/04/16
 * Time: 16:07
 */

class Trap implements IAlarm{

    public $state;

    function __construct()
    {
        $this->state = AlarmState::ON;
    }

    public function getState(){
        return $this->getState();
    }

}