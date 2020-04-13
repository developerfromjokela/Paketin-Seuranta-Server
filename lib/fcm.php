<?php
/**
 * Copyright (c) 2020 Paketin Seuranta Server
 * @author developerfromjokela
 */

class FCM{

    public function pushNotification($to, $data = array(), $ttl=60) {
        $data = json_encode(array("to" => $to, "data" => $data, "time_to_live"=> $ttl));
        //FCM API end-point
        $url = 'https://fcm.googleapis.com/fcm/send?format=json';
        //header with content_type api key
        $headers = array(
            'Content-Type: application/json',
            'Authorization:key=' . FCM_SERVER_KEY
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $result = curl_exec($ch);
        curl_close($ch);
        if ($httpcode != 200) {
            echo "ERROR: \n" . $result . "\n";
            exit;
        }
    }


}
