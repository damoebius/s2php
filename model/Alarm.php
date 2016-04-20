<?php

/**
 * Created by IntelliJ IDEA.
 * User: damo
 * Date: 13/03/16
 * Time: 21:12
 */
class Alarm
{
    public $type;
    public $state;

    function __construct( $type, $state )
    {
        $this->type = $type;
        $this->state = $state;
    }
}