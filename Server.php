<?php
namespace fortknox;
use fortknox\net\AlarmProxy;
use fortknox\net\Action;
use fortknox\net\Response;
use fortknox\net\ResponseCode;

require_once(__DIR__.'/Bootstrap.php');
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
        try {
            switch ( $action ) {
                case Action::GET_ALARMS:
                    $this->getAlarms();
                    break;
                case Action::UPDATE_ALARMS:
                    $this->updateAlarms();
                    break;
                default:
                    $this->sendUnknownActionError();
            }
        } catch(Exception $error){
            $this->send( new Response(ResponseCode::TECHNICAL_ERROR,$error->getMessage()));
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
        spl_autoload_register(array('Bootstrap', 'autoload'));
        self::$instance = new Server();
    }
}
Server::main();
