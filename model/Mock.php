<?php
namespace fortknox\model;
/**
 * Created by IntelliJ IDEA.
 * User: damo
 * Date: 13/03/16
 * Time: 21:28
 */

use fortknox\model\IntrusionAlarm;
use fortknox\model\MovementAlarm;
use fortknox\model\InfraRedAlarm;
use fortknox\model\AlarmState;

class Mock {

    public static function getAlarms(){
        $result = array();
        $result[]= new IntrusionAlarm(AlarmState::ON);
        $result[]= new MovementAlarm(AlarmState::OFF);
        $result[]= new InfraRedAlarm(AlarmState::ON);
        $result[]= new InfraRedAlarm(AlarmState::ON);
        $result[]= new IntrusionAlarm(AlarmState::ACTIVATE);
        return $result;
    }

}