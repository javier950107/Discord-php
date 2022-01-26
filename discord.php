<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Discord {

    public function sendMessageToAUser($id, $msg){
        $url = API_SERVERTEST.'/message/user';
        $data = array("id" => $id, "msg" => $msg);

        $data_string = json_encode($data);

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data_string)
        ));

        $result = curl_exec($ch);
        //echo $result;
        curl_close($ch);

        return $result;
    }

    public function sendAdvertisement($id, $msg)
    {

        $url = API_SERVERTEST.'/message/channel';
        $data = array("id" => $id, "msg" => $msg);

        $data_string = json_encode($data);

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data_string)
        ));

        $result = curl_exec($ch);
        //echo $result;
        curl_close($ch);
        return $result ;
    }
}