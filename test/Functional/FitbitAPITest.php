<?php

namespace Test\Functional;

class FitbitAPITest extends BaseTestCase {
    
    public function testGetProfile() {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "userId": "-"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/getProfile', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testUpdateProfile() {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "userId": "-",
                            "genre": "MALE",
                            "aboutMe": "Some text about me..."
                            
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/updateProfile', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testGetBadges() {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "userId": "-"
                            
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/getBadges', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testGetSleepGoal() {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8"
                            
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/getSleepGoal', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testUpdateSleepGoal() {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "minDuration": "600"
                            
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/updateSleepGoal', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testLogSleep() {
        sleep(30);
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "userId": "-",
                            "startTime": "01:00",
                            "duration": "25200000",
                            "date": "2016-10-15"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/logSleep', $post_data);
        
        $logId = json_decode($response->getBody())->contextWrites->to->logSleep->sleep->logId;
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
        
        return $logId;
    }
    
    /**
     * @depends testLogSleep
     */
    public function testDeleteSleepLog($logId) {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "userId": "-",
                            "logId": "'.$logId.'"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/deleteSleepLog', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testGetSleepLogs() {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "userId": "-",
                            "date": "2016-11-14"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/getSleepLogs', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testGetSleepTimeSeries() {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "userId": "-",
                            "resourcePath": "sleep/startTime",
                            "startDate": "2016-11-10",
                            "endDate": "7d"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/getSleepTimeSeries', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testGetHeartRateTimeSeries() {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "userId": "-",
                            "startDate": "2016-11-10",
                            "endDate": "7d"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/getHeartRateTimeSeries', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testGetHeartRateIntradayTimeSeries() {
        sleep(30);
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "startDate": "2016-11-14",
                            "endDate": "1d",
                            "detailLevel": "1min",
                            "startTime": "00:00"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/getHeartRateIntradayTimeSeries', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testGetFriendsLeaderboard() {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "userId": "-"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/getFriendsLeaderboard', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testGetFriends() {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "userId": "-"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/getFriends', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testGetFriendInvitations() {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "userId": "-"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/getFriendInvitations', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testGetFoodLocales() {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/getFoodLocales', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testGetFoodGoals() {
        sleep(30);
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "userId": "-"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/getFoodGoals', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testGetWaterLogs() {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "userId": "-",
                            "date": "2016-11-14"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/getWaterLogs', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testGetWaterGoal() {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "userId": "-"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/getWaterGoal', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testGetFoodOrWaterTimeSeries() {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "userId": "-",
                            "resourcePath": "foods/log/caloriesIn",
                            "startDate": "2016-11-14",
                            "endDate": "1d"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/getFoodOrWaterTimeSeries', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testCreateFoodLog() {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "userId": "-",
                            "foodId": "82294",
                            "mealTypeId": "3",
                            "unitId": "304",
                            "amount": "1",
                            "date": "2016-11-15",
                            "favotite": "true"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/createFoodLog', $post_data);
        
        $foodLogId = json_decode($response->getBody())->contextWrites->to->foodLog->logId;
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
        
        return $foodLogId;
    }
    
    /**
     * @depends testCreateFoodLog
     */
    public function testUpdateFoodLog($foodLogId) {
        sleep(30);
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "userId": "-",
                            "foodLogId": "'.$foodLogId.'",
                            "mealTypeId": "4",
                            "unitId": "304",
                            "amount": "2"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/updateFoodLog', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testlogWater() {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "userId": "-",
                            "date": "2016-11-15",
                            "amount": "1",
                            "unit": "cup"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/logWater', $post_data);
        
        $waterLogId = json_decode($response->getBody())->contextWrites->to->waterLog->logId;
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
        
        return $waterLogId;
    }
    
    public function testUpdateFoodGoal() {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "userId": "-",
                            "calories": "2500"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/updateFoodGoal', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testUpdateWaterGoal() {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "userId": "-",
                            "target": "25"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/updateWaterGoal', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    /**
     * @depends testlogWater
     */
    public function testUpdateWaterLog($waterLogId) {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "userId": "-",
                            "waterLogId": "'.$waterLogId.'",
                            "amount": "2",
                            "unit": "cup"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/updateWaterLog', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    /**
     * @depends testlogWater
     */
    public function testDeleteWaterLog($waterLogId) {
        sleep(30);
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "userId": "-",
                            "waterLogId": "'.$waterLogId.'"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/deleteWaterLog', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testGetFavoriteFoods() {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "userId": "-"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/getFavoriteFoods', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testGetFrequentFoods() {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "userId": "-"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/getFrequentFoods', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testAddFavoriteFood() {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "userId": "-",
                            "foodId": "82294"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/addFavoriteFood', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testDeleteFavoriteFood() {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "userId": "-",
                            "foodId": "82294"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/deleteFavoriteFood', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testGetMeals() {
        sleep(30);
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "userId": "-"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/getMeals', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testCreateMeal() {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "userId": "-",
                            "name": "test",
                            "description": "some description",
                            "mealFoods": [          {             "foodId" : 80851,             "amount" : 2,             "unitId" : 111          },         {             "foodId" : 81170,             "amount" : 10,             "unitId" : 311          },         {             "foodId" : 82782,             "amount" : 8,             "unitId" : 128          },         {             "foodId" : 9942,             "amount" : 1,             "unitId" : 180          }]"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/createMeal', $post_data);
        
        $mealId = json_decode($response->getBody())->contextWrites->to->meal->id;
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
        
        return $mealId;
    }
    
    /**
     * @depends testCreateMeal
     */
    public function testGetSingleMeal($mealId) {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "userId": "-",
                            "mealId": "'.$mealId.'"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/getSingleMeal', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    /**
     * @depends testCreateMeal
     */
    public function testEditMeal($mealId) {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "userId": "-",
                            "mealId": "'.$mealId.'",
                            "name": "test",
                            "description": "some description",
                            "mealFoods": [          {             "foodId" : 80851,             "amount" : 2,             "unitId" : 111          },         {             "foodId" : 81170,             "amount" : 10,             "unitId" : 311          },         {             "foodId" : 82782,             "amount" : 8,             "unitId" : 128          },         {             "foodId" : 9942,             "amount" : 1,             "unitId" : 180          }]"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/editMeal', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    /**
     * @depends testCreateMeal
     */
    public function testDeleteMeal($mealId) {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "userId": "-",
                            "mealId": "'.$mealId.'"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/deleteMeal', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testCreateFood() {
        sleep(30);
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "userId": "-",
                            "name": "test",
                            "defaultFoodMeasurementUnitId": "1",
                            "defaultServingSize": "1",
                            "calories": "1000"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/createFood', $post_data);
        
        $foodId = json_decode($response->getBody())->contextWrites->to->food->foodId;
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
        
        return $foodId;
    }
    
    /**
     * @depends testCreateFood
     */
    public function testGetFood($foodId) {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "foodId": "'.$foodId.'"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/getFood', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    /**
     * @depends testCreateFood
     */
    public function testDeleteCustomFood($foodId) {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "userId": "-",
                            "foodId": "'.$foodId.'"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/deleteCustomFood', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testGetFoodUnits() {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/getFoodUnits', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testSearchFoods() {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "query": "Chocolate"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/searchFoods', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testGetFoodLogs() {
        sleep(30);
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "userId": "-",
                            "date": "2016-11-15"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/getFoodLogs', $post_data);
        
        $foodLogId = json_decode($response->getBody())->contextWrites->to->foods[0]->logId;
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
        
        return $foodLogId;
    }
    
    /**
     * @depends testGetFoodLogs
     */
    public function testDeleteFoodLog($foodLogId) {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "userId": "-",
                            "foodLogId": "'.$foodLogId.'"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/deleteFoodLog', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testGetDevices() {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/getDevices', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testGetBodyFatLogs() {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "userId": "533PXL",
                            "startDate": "2016-11-14"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/getBodyFatLogs', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testLogBodyFat() {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "userId": "-",
                            "fat": "15.5",
                            "date": "2016-11-15"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/logBodyFat', $post_data);
        
        $bodyFatLogId = json_decode($response->getBody())->contextWrites->to->fatLog->logId;
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
        
        return $bodyFatLogId;
    }
    
    /**
     * @depends testLogBodyFat
     */
    public function testDeleteBodyFatLog($bodyFatLogId) {
        sleep(30);
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "userId": "-",
                            "bodyFatLogId": "'.$bodyFatLogId.'"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/deleteBodyFatLog', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testGetBodyTimeSeries() {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "userId": "-",
                            "resourcePath": "bmi",
                            "startDate": "2016-11-15",
                            "endDate": "1d"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/getBodyTimeSeries', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testGetBodyGoals() {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "userId": "-",
                            "goalType": "weight"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/getBodyGoals', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testUpdateBodyFatGoal() {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "userId": "-",
                            "fat": "10"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/updateBodyFatGoal', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testUpdateWeightGoal() {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "userId": "-",
                            "startDate": "2016-11-15",
                            "startWeight": "65",
                            "acceptLanguage": "kg"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/updateWeightGoal', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testGetWeightLogs() {
        sleep(30);
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "userId": "-",
                            "startDate": "2016-11-15",
                            "endDate": "7d"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/getWeightLogs', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testLogWeight() {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "userId": "-",
                            "weight": "68",
                            "date": "2016-11-15"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/logWeight', $post_data);
        
        $bodyWeightLogId = json_decode($response->getBody())->contextWrites->to->weightLog->logId;
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
        
        return $bodyWeightLogId;
    }
    
    /**
     * @depends testLogWeight
     */
    public function testDeleteWeightLog($bodyWeightLogId) {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "userId": "-",
                            "bodyWeightLogId": "'.$bodyWeightLogId.'"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/deleteWeightLog', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testGetDailyActivitySummary() {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "userId": "-",
                            "date": "2016-11-15"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/getDailyActivitySummary', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testGetActivityIntradayTimeSeries() {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "resourcePath": "activities/steps",
                            "date": "2016-11-15",
                            "detailLevel": "15min",
                            "endTime": "19:00"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/getActivityIntradayTimeSeries', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testBrowseActivityTypes() {
        sleep(30);
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/browseActivityTypes', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testGetActivityType() {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "activityId": "90001"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/getActivityType', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testGetFrequentActivities() {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/getFrequentActivities', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testGetRecentActivityTypes() {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/getRecentActivityTypes', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testGetFavoriteActivities() {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "userId": "-"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/getFavoriteActivities', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testAddFavoriteActivity() {
        sleep(30);
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "activityId": "12030"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/addFavoriteActivity', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testDeleteFavoriteActivity() {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "activityId": "12030"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/deleteFavoriteActivity', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testGetActivityGoals() {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "userId": "-",
                            "period": "daily"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/getActivityGoals', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testUpdateActivityGoals() {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "userId": "-",
                            "period": "daily",
                            "steps": "500"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/updateActivityGoals', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testGetLifetimeStats() {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "userId": "-"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/getLifetimeStats', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testGetActivityTimeSeries() {
        sleep(30);
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "userId": "-",
                            "resourcePath": "activities/calories",
                            "startDate": "2016-11-15",
                            "endDate": "7d"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/getActivityTimeSeries', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testAddSubscription() {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "collectionPath": "foods",
                            "subscriptionId": "100"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/addSubscription', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testGetSubscriptions() {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/getSubscriptions', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
    public function testRemoveSubscription() {
        
        $var = '{
                    "args": {
                            "accessToken": "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI1MzNQWEwiLCJhdWQiOiIyMjdYQk4iLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNDc5MzM4MTgwLCJpYXQiOjE0NzkzMDkzODB9.Eradg0Mno2D1gluOAH38b1U9YIfh7-x2fh1nZxHUD_8",
                            "subscriptionId": "100",
                            "collectionPath": "foods"
                    }
                }';
        $post_data = json_decode($var, true);

        $response = $this->runApp('POST', '/api/FitbitAPI/removeSubscription', $post_data);
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
        $this->assertEquals('success', json_decode($response->getBody())->callback);
    }
    
}
