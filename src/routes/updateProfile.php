<?php

$app->post('/api/FitbitAPI/updateProfile', function ($request, $response, $args) {
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
    
    if(!empty($error)) {
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = "REQUIRED_FIELDS";
        $result['contextWrites']['to']['status_msg'] = "Please, check and fill in required fields.";
        $result['contextWrites']['to']['fields'] = $error;
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);
    }
    
    $query_str = 'https://api.fitbit.com/1/user/'.$post_data['args']['userId'].'/profile.json';
    
    $headers['Authorization'] = 'Bearer '.$post_data['args']['accessToken'];
    if(isset($post_data['args']['acceptLanguage']) && !empty($post_data['args']['acceptLanguage'])) {
        $headers['Accept-Language'] = $post_data['args']['acceptLanguage'];
    }
    
    $client = $this->httpClient;
    
    $body =[];
    if(!empty($post_data['args']['gender'])) {
        $body['gender'] = $post_data['args']['gender'];
    }
    if(!empty($post_data['args']['birthday'])) {
        $date = new DateTime($post_data['args']['birthday']);
        $body['birthday'] = $date->format('Y-m-d');
    }
    if(!empty($post_data['args']['height'])) {
        $body['height'] = $post_data['args']['height'];
    }
    if(!empty($post_data['args']['aboutMe'])) {
        $body['aboutMe'] = $post_data['args']['aboutMe'];
    }
    if(!empty($post_data['args']['fullname'])) {
        $body['fullname'] = $post_data['args']['fullname'];
    }
    if(!empty($post_data['args']['country'])) {
        $body['country'] = $post_data['args']['country'];
    }
    if(!empty($post_data['args']['state'])) {
        $body['state'] = $post_data['args']['state'];
    }
    if(!empty($post_data['args']['city'])) {
        $body['city'] = $post_data['args']['city'];
    }
    if(!empty($post_data['args']['strideLengthWalking'])) {
        $body['strideLengthWalking'] = $post_data['args']['strideLengthWalking'];
    }
    if(!empty($post_data['args']['strideLengthRunning'])) {
        $body['strideLengthRunning'] = $post_data['args']['strideLengthRunning'];
    }
    if(!empty($post_data['args']['weightUnit'])) {
        $body['weightUnit'] = $post_data['args']['weightUnit'];
    }
    if(!empty($post_data['args']['heightUnit'])) {
        $body['heightUnit'] = $post_data['args']['heightUnit'];
    }
    if(!empty($post_data['args']['waterUnit'])) {
        $body['waterUnit'] = $post_data['args']['waterUnit'];
    }
    if(!empty($post_data['args']['glucoseUnit'])) {
        $body['glucoseUnit'] = $post_data['args']['glucoseUnit'];
    }
    if(!empty($post_data['args']['timezone'])) {
        $body['timezone'] = $post_data['args']['timezone'];
    }
    if(!empty($post_data['args']['foodsLocale'])) {
        $body['foodsLocale'] = $post_data['args']['foodsLocale'];
    }
    if(!empty($post_data['args']['locale'])) {
        $body['locale'] = $post_data['args']['locale'];
    }
    if(!empty($post_data['args']['localeLang'])) {
        $body['localeLang'] = $post_data['args']['localeLang'];
    }
    if(!empty($post_data['args']['localeCountry'])) {
        $body['localeCountry'] = $post_data['args']['localeCountry'];
    }
    if(!empty($post_data['args']['startDayOfWeek'])) {
        $body['startDayOfWeek'] = $post_data['args']['startDayOfWeek'];
    }
    if(!empty($post_data['args']['clockTimeDisplayFormat'])) {
        $body['clockTimeDisplayFormat'] = $post_data['args']['clockTimeDisplayFormat'];
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
