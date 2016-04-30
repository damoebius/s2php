<?php
namespace fortknox\model;
/**
 * Created by IntelliJ IDEA.
 * User: damo
 * Date: 13/03/16
 * Time: 21:15
 */

include_once(__DIR__.'/Alarm.php');

class InfraRedAlarm extends Alarm {

    const TYPE=3;

    function __construct($state)
    {
        parent::__construct(self::TYPE,$state);
    }
}