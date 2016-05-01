<?php
namespace fortknox\model;
/**
 * Created by IntelliJ IDEA.
 * User: damo
 * Date: 13/03/16
 * Time: 21:15
 */

use fortknox\model\Alarm;

class IntrusionAlarm extends Alarm {

    const TYPE=0;

    function __construct($state)
    {
        parent::__construct(self::TYPE,$state);
    }
}