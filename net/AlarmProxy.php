<?php
/**
 * Created by IntelliJ IDEA.
 * User: damo
 * Date: 29/03/16
 * Time: 13:21
 */

include_once __DIR__.'/../error/IllegalArgumentException.php';

class AlarmProxy {

    const FILE_PATH='data.json';

    public function getAlarms(){
        $data = file_get_contents(self::FILE_PATH);
        $json = json_decode ( $data ) ;
        return $json;
    }

    public function updateAlarms($alarms){
        foreach($alarms as $alarm){
            if(!is_numeric($alarm->state) || !is_numeric($alarm->type)){
               throw new IllegalArgumentException();
            }
        }
        $json = json_encode ( $alarms ) ;
        file_put_contents(self::FILE_PATH,$json);
    }
}