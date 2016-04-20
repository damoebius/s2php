<?php
/**
 * Created by IntelliJ IDEA.
 * User: damo
 * Date: 13/03/16
 * Time: 21:15
 */

include_once(__DIR__.'/Alarm.php');

class IntrusionAlarm extends Alarm {

    const TYPE=0;

    function __construct($state)
    {
        parent::__construct(self::TYPE,$state);
    }
}