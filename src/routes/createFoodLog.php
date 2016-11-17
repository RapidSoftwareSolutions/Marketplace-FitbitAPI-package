<?php

$app->post('/api/FitbitAPI/createFoodLog', function ($request, $response, $args) {
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
    if(empty($post_data['args']['mealTypeId'])) {
        $error[] = 'mealTypeId';
    }
    if(empty($post_data['args']['unitId'])) {
        $error[] = 'unitId';
    }
    if(empty($post_data['args']['amount'])) {
        $error[] = 'amount';
    }
    if(empty($post_data['args']['date'])) {
        $error[] = 'date';
    }
    if(empty($post_data['args']['foodId']) && empty($post_data['args']['foodName'])) {
        $error[] = 'Either foodId or foodName must be provided.';
    }
    if(!empty($post_data['args']['foodId']) && !empty($post_data['args']['foodName'])) {
        $error[] = 'Either foodId or foodName must be provided.';
    }
    
    if(!empty($error)) {
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = "REQUIRED_FIELDS";
        $result['contextWrites']['to']['status_msg'] = "Please, check and fill in required fields.";
        $result['contextWrites']['to']['fields'] = $error;
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);
    }
    
    $query_str = 'https://api.fitbit.com/1/user/'.$post_data['args']['userId'].'/foods/log.json';
    
    $headers['Authorization'] = 'Bearer '.$post_data['args']['accessToken'];
    if(isset($post_data['args']['acceptLanguage']) && !empty($post_data['args']['acceptLanguage'])) {
        $headers['Accept-Language'] = $post_data['args']['acceptLanguage'];
    }
    
    $body['mealTypeId'] = $post_data['args']['mealTypeId'];
    $body['unitId'] = $post_data['args']['unitId'];
    $body['amount'] = $post_data['args']['amount'];
    $body['date'] = $post_data['args']['date'];
    if(!empty($post_data['args']['foodId'])) {
        $body['foodId'] = $post_data['args']['foodId'];
    }
    if(!empty($post_data['args']['foodName'])) {
        $body['foodName'] = $post_data['args']['foodName'];
    }
    if(!empty($post_data['args']['favorite'])) {
        $body['favorite'] = $post_data['args']['favorite'];
    }
    if(!empty($post_data['args']['brandName'])) {
        $body['brandName'] = $post_data['args']['brandName'];
    }
    if(!empty($post_data['args']['calories'])) {
        $body['calories'] = $post_data['args']['calories'];
    }
    
    $client = $this->httpClient;
    
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
