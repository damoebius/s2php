<?php
namespace fortknox\model;
/**
 * Created by IntelliJ IDEA.
 * User: damo
 * Date: 13/03/16
 * Time: 21:28
 */

include_once(__DIR__.'/IntrusionAlarm.php');
include_once(__DIR__.'/MovementAlarm.php');
include_once(__DIR__.'/InfraRedAlarm.php');
include_once(__DIR__.'/AlarmState.php');

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