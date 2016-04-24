<?php

/**
 * Created by IntelliJ IDEA.
 * User: damo
 * Date: 23/04/16
 * Time: 18:46
 */
class IllegalArgumentException extends Exception
{

    public function __construct()
    {
        parent::__construct("mauvais parametres");
    }

}