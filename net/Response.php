<?php
namespace fortknox\net;
/**
 * Created by IntelliJ IDEA.
 * User: damo
 * Date: 16/01/15
 * Time: 18:09
 */
class Response
{
    public $code;
    public $message;

    /**
     * Class constructor
     */
    public function __construct( $code, $message )
    {
        $this->code = $code;
        $this->message = $message;
    }
} 