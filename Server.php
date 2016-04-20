<?php
/**
 * Created by IntelliJ IDEA.
 * User: d.mouton
 * Date: 15/01/2015
 * Time: 15:23
 */
include_once(__DIR__.'/net/Action.php');
include_once(__DIR__.'/net/Response.php');
include_once(__DIR__.'/net/ResponseCode.php');
include_once(__DIR__.'/net/AlarmProxy.php');
include_once(__DIR__.'/model/Mock.php');
class Server {

    private static $instance;

    private $proxy;

    /**
     * Class constructor
     */
    public function __construct()
    {
        $this->proxy = new AlarmProxy();
        $action = $_GET['action'];
        switch($action){
            case Action::GET_ALARMS:
                $this->getAlarms();
                break;
            case Action::UPDATE_ALARMS:
                $this->updateAlarms();
                break;
            default:
                $this->sendUnknownActionError();
        }
    }

    private function getAlarms(){
        $alarms = $this->proxy->getAlarms();
        $this->send( new Response(ResponseCode::SUCCESS,$alarms));
    }

    private function updateAlarms(){
        $data = file_get_contents('php://input');
        $dataJson = json_decode($data);
        $this->proxy->updateAlarms($dataJson);
        $this->send( new Response(ResponseCode::SUCCESS,'Update Complete'));
    }

    private function sendUnknownActionError(){
        $this->send( new Response(ResponseCode::TECHNICAL_ERROR,'action inconnue'));
    }

    private function send($response){
        echo json_encode($response);
    }

    public static function main(){
        self::$instance = new Server();
    }
}
Server::main();
