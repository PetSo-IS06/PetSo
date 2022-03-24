<?php
    function sendSMS($message, $mobile) {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://send.ozonedesk.com/api/v2/send.php?user_id=104457&api_key=va5uxwwg3xaywp374&sender_id=ozoneDEMO&to='.$mobile.'&message='. urlencode($message),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        // echo $response;

        if($response){
            return true;
        } else {
            return false;
        }
    }
?>