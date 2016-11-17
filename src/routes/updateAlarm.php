<?php

$app->post('/api/FitbitAPI/updateAlarm', function ($request, $response, $args) {
    $settings =  $this->settings;
    
    $data = $request->getBody();

    if($data=='') {
        $post_data = $request->getParsedBody();
    } else {
        $toJson = $this->toJson;
        $data = $toJson->normalizeJson($data); 
        $data = str_replace('\"', '"', $data);
        $post_data = json_decode($data, true);
    }
    
    if(json_last_error() != 0) {
        $error[] = json_last_error_msg() . '. Incorrect input JSON. Please, check fields with JSON input.';
    }
    
    if(!empty($error)) {
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'JSON_VALIDATION';
        $result['contextWrites']['to']['status_msg'] = implode(',', $error);
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);
    }
    
    $error = [];
    if(empty($post_data['args']['accessToken'])) {
        $error[] = 'accessToken';
    }
    if(empty($post_data['args']['userId'])) {
        $error[] = 'userId';
    }
    if(empty($post_data['args']['trackerId'])) {
        $error[] = 'trackerId';
    }
    if(empty($post_data['args']['alarmId'])) {
        $error[] = 'alarmId';
    }
    if(empty($post_data['args']['time'])) {
        $error[] = 'time';
    }
    if(empty($post_data['args']['enabled'])) {
        $error[] = 'enabled';
    }
    if(empty($post_data['args']['recurring'])) {
        $error[] = 'recurring';
    }
    if(empty($post_data['args']['weekDays'])) {
        $error[] = 'weekDays';
    }
    if(empty($post_data['args']['snoozeLength'])) {
        $error[] = 'snoozeLength';
    }
    if(empty($post_data['args']['snoozeCount'])) {
        $error[] = 'snoozeCount';
    }
    
    if(!empty($error)) {
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = "REQUIRED_FIELDS";
        $result['contextWrites']['to']['status_msg'] = "Please, check and fill in required fields.";
        $result['contextWrites']['to']['fields'] = $error;
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);
    }
    
    $query_str = 'https://api.fitbit.com/1/user/'.$post_data['args']['userId'].'/devices/tracker/'.$post_data['args']['trackerId'].'/alarms/'.$post_data['args']['alarmId'].'.json';
    
    $headers['Authorization'] = 'Bearer '.$post_data['args']['accessToken'];
    if(!empty($post_data['args']['acceptLanguage'])) {
        $headers['Accept-Language'] = $post_data['args']['acceptLanguage'];
    }
    
    $client = $this->httpClient;
    
    $body['time'] = $post_data['args']['time'];
    $body['enabled'] = $post_data['args']['enabled'];
    $body['recurring'] = $post_data['args']['recurring'];
    $body['weekDays'] = $post_data['args']['weekDays'];
    $body['snoozeLength'] = $post_data['args']['snoozeLength'];
    $body['snoozeCount'] = $post_data['args']['snoozeCount'];
    if(!empty($post_data['args']['label'])) {
        $body['label'] = $post_data['args']['label'];
    }
    if(!empty($post_data['args']['vibe'])) {
        $body['vibe'] = $post_data['args']['vibe'];
    }
    
    try {

        $resp = $client->post( $query_str, 
            [
                'headers' => $headers,
                'form_params' => $body
            ]);
        $responseBody = $resp->getBody()->getContents();
  
        if(in_array($resp->getStatusCode(), ['200', '201', '202', '203', '204'])) {
            $result['callback'] = 'success';
            $result['contextWrites']['to'] = is_array($responseBody) ? $responseBody : json_decode($responseBody);
            if(empty($result['contextWrites']['to'])) {
                $result['contextWrites']['to'] = "empty list";
            }
        } else {
            $result['callback'] = 'error';
            $result['contextWrites']['to']['status_code'] = 'API_ERROR';
            $result['contextWrites']['to']['status_msg'] = json_decode($responseBody);
        }

    } catch (\GuzzleHttp\Exception\ClientException $exception) {

        $responseBody = $exception->getResponse()->getBody()->getContents();
        if(empty(json_decode($responseBody))) {
            $out = $responseBody;
        } else {
            $out = json_decode($responseBody);
        }
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'API_ERROR';
        $result['contextWrites']['to']['status_msg'] = $out;

    } catch (GuzzleHttp\Exception\ServerException $exception) {

        $responseBody = $exception->getResponse()->getBody()->getContents();
        if(empty(json_decode($responseBody))) {
            $out = $responseBody;
        } else {
            $out = json_decode($responseBody);
        }
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'API_ERROR';
        $result['contextWrites']['to']['status_msg'] = $out;

    } catch (GuzzleHttp\Exception\ConnectException $exception) {

        $responseBody = $exception->getResponse()->getBody(true);
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'INTERNAL_PACKAGE_ERROR';
        $result['contextWrites']['to']['status_msg'] = 'Something went wrong inside the package.';

    }
    
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);
});
