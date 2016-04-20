<?php
/**
 * Created by IntelliJ IDEA.
 * User: damo
 * Date: 13/03/16
 * Time: 21:15
 */

include_once(__DIR__.'/Alarm.php');

class MovementAlarm extends Alarm {

    const TYPE=1;

    function __construct($state)
    {
        parent::__construct(self::TYPE,$state);
    }
}