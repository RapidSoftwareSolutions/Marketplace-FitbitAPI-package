# FitbitAPI Package
Access data from Fitbit activity trackers.
* Domain: fitbit.com
* Credentials: clientId, clientSecret

## How to get credentials: 
0. Go to [Fitbit website](http://fitbit.com) 
1. Log in or create a new account
2. [Register an app](https://dev.fitbit.com/apps/new)
3. After creation your app you will see Client ID and Client Secret

 
## FitbitAPI.getAccessToken
This endpoint allows to get a token on behalf of a user.

| Field       | Type       | Description
|-------------|------------|----------
| clientId    | credentials| Required: The id of your application obtained from Fitbit.
| clientSecret| credentials| Required: The secret of your application obtained from Fitbit.
| redirectUri | String     | Optional: Required if specified in the redirect to the authorization page. Must be exact match.
| code        | String     | Required: The access grant code you received via the callback from ProductHunt.
| state       | String     | Optional: Required if specified in the redirect to the authorization page. Must be an exact match.
| expiresIn   | String     | Optional: Specify the desired access token lifetime. Defaults to 28800. 3600 for 1 hour, 28800 for 8 hours.

## FitbitAPI.refreshingTokens
This endpoint allows to get a token from refresh token.

| Field       | Type       | Description
|-------------|------------|----------
| clientId    | credentials| Required: The id of your application obtained from Fitbit.
| clientSecret| credentials| Required: The secret of your application obtained from Fitbit.
| refreshToken| String     | Required: The refresh token obtained from getAccessToken method.
| expiresIn   | String     | Optional: Specify the desired access token lifetime. Defaults to 28800. 3600 for 1 hour, 28800 for 8 hours.

## FitbitAPI.revokingAccessTokens
This endpoint allows to revoke an access token.

| Field       | Type       | Description
|-------------|------------|----------
| clientId    | credentials| Required: The id of your application obtained from Fitbit.
| clientSecret| credentials| Required: The secret of your application obtained from Fitbit.
| accessToken | String     | Required: The access token obtained from getAccessToken method.

## FitbitAPI.getProfile
This endpoint returns a user's profile. The authenticated owner receives all values.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Required: The access token obtained from getAccessToken method.
| userId     | String| Required: The encoded ID of the user. Use "-" (dash) for current logged-in user.

## FitbitAPI.updateProfile
This endpoint updates a user's profile.

| Field                 | Type  | Description
|-----------------------|-------|----------
| accessToken           | String| Required: The access token obtained from getAccessToken method.
| userId                | String| Required: The encoded ID of the user. Use "-" (dash) for current logged-in user.
| gender                | String| Optional: More accurately, sex; (MALE/FEMALE/NA).
| birthday              | String| Optional: Date of birth; in the format yyyy-MM-dd.
| height                | String| Optional: Height; in the format X.XX, in the unit system that corresponds to the Accept-Language header provided.
| aboutMe               | String| Optional: About Me string.
| fullname              | String| Optional: Full name.
| country               | String| Optional: Country; two-character code.
| state                 | String| Optional: US State; two-character code; valid only if country was or being set to US.
| city                  | String| Optional: City.
| strideLengthWalking   | String| Optional: Walking stride length; in the format X.XX, in the unit system that corresponds to the Accept-Language header provided.
| strideLengthRunning   | String| Optional: Running stride length; in the format X.XX, in the unit system that corresponds to the Accept-Language header provided.
| weightUnit            | String| Optional: Default weight unit on website (doesn't affect API); one of (en_US, en_GB, "any" for METRIC).
| heightUnit            | String| Optional: Default height/distance unit on website (doesn't affect API); one of (en_US, "any" for METRIC).
| waterUnit             | String| Optional: Default water unit on website (doesn't affect API); one of (en_US, "any" for METRIC).
| glucoseUnit           | String| Optional: Default glucose unit on website (doesn't affect API); one of (en_US, "any" for METRIC).
| timezone              | String| Optional: Timezone; in the format "America/Los_Angeles".
| foodsLocale           | String| Optional: Food Database Locale; in the format "xx_XX".
| locale                | String| Optional: Locale of website (country/language); one of the locales, currently – (en_US, fr_FR, de_DE, es_ES, en_GB, en_AU, en_NZ, ja_JP).
| localeLang            | String| Optional: Language; in the format "xx". You should specify either locale or both - localeLang and localeCountry (locale is higher priority).
| localeCountry         | String| Optional: Country; in the format "XX". You should specify either locale or both - localeLang and localeCountry (locale is higher priority).
| startDayOfWeek        | String| Optional: Start day of the week; what day the week should start on. Either Sunday or Monday.
| clockTimeDisplayFormat| String| Optional: How trackers with a clock should display the time. Either 12hour or 24hour.
| acceptLanguage        | String| Optional: The measurement unit system to use for response values. Example: en_US. For more details see in specified section at the bottom.


## FitbitAPI.getBadges
This endpoint retrieves the user's badges in the format requested. Response includes all badges for the user as seen on the Fitbit website badge locker (both activity and weight related.)

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Required: The access token obtained from getAccessToken method.
| userId        | String| Required: The encoded ID of the user. Use "-" (dash) for current logged-in user.
| acceptLanguage| String| Optional: The measurement unit system to use for response values. Example: en_US. For more details see in specified section at the bottom.


## FitbitAPI.getSleepGoal
This endpoint returns a user's current sleep goal using unit in the unit system that corresponds to the Accept-Language header provided in the format requested.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Required: The access token obtained from getAccessToken method.
| acceptLanguage| String| Optional: The measurement unit system to use for response values. Example: en_US. For more details see in specified section at the bottom.


## FitbitAPI.updateSleepGoal
This endpoint creates or updates a user's sleep goal and get a response in the in the format requested.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Required: The access token obtained from getAccessToken method.
| minDuration| String| Required: The target sleep duration is in minutes.


## FitbitAPI.logSleep
This endpoint creates a log entry for a sleep event and returns a response in the format requested. Keep in mind that it is NOT possible to create overlapping log entries or entries for time periods that DO NOT originate from a tracker. Sleep log entries appear on website's sleep tracker interface according to the date on which the sleep event ends.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Required: The access token obtained from getAccessToken method.
| userId     | String| Required: The encoded ID of the user. Use "-" (dash) for current logged-in user.
| startTime  | String| Required: Start time; hours and minutes in the format HH:mm.
| duration   | String| Required: Duration in milliseconds.
| date       | String| Required: Log entry date in the format yyyy-MM-dd.


## FitbitAPI.deleteSleepLog
This endpoint deletes a user's sleep log entry with the given ID.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Required: The access token obtained from getAccessToken method.
| userId     | String| Required: The encoded ID of the user. Use "-" (dash) for current logged-in user.
| logId      | String| Required: ID of the sleep log to be deleted.

## FitbitAPI.getSleepLogs
This endpoint returns a summary and list of a user's sleep log entries as well as minute by minute sleep entry data for a given day in the format requested. The endpoint response includes summary for all sleep log entries for the given day (including naps.). The relationship between sleep log entry properties is expressed with the following equation: timeInBed = minutesToFallAsleep + minutesAsleep + minutesAwake + minutesAfterWakeup

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Required: The access token obtained from getAccessToken method.
| userId     | String| Required: The encoded ID of the user. Use "-" (dash) for current logged-in user.
| date       | String| Required: The date of records to be returned. In the format yyyy-MM-dd.
| isMainSleep| String| Optional: If you need to fetch data only for the user's main sleep event, you can send the request with isMainSleep=true


## FitbitAPI.getSleepTimeSeries
This endpoint returns time series data in the specified range for a given resource in the format requested using units in the unit system that corresponds to the Accept-Language header provided.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Required: The access token obtained from getAccessToken method.
| userId        | String| Required: The encoded ID of the user. Use "-" (dash) for current logged-in user.
| resourcePath  | String| Required: The resource path; see the Resource Path Options in README for a list of options.
| startDate     | String| Required: The range start date, in the format yyyy-MM-dd or today.
| endDate       | String| Required: The end date of the range, in the format yyyy-MM-dd or today. Also supported values: 1d, 7d, 30d, 1w, 1m, 3m, 6m, 1y, or max. Remember that with short code endpoint will return data earlier startDate. See README for more details and examples.
| acceptLanguage| String| Optional: The language to use for response values. Language is used to determine the food measurement units returned. Example: en_US. For more details see in specified section at the bottom.

### resourcePath options: 

```
sleep/startTime  
sleep/timeInBed  
sleep/minutesAsleep  
sleep/awakeningsCount  
sleep/minutesAwake  
sleep/minutesToFallAsleep  
sleep/minutesAfterWakeup  
sleep/efficiency
```

## FitbitAPI.getHeartRateTimeSeries
This endpoint returns time series data in the specified range for a given resource in the format requested using units in the unit systems that corresponds to the Accept-Language header provided.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Required: The access token obtained from getAccessToken method.
| userId        | String| Required: The encoded ID of the user. Use "-" (dash) for current logged-in user.
| startDate     | String| Required: The range start date, in the format yyyy-MM-dd or today.
| endDate       | String| Required: The end date of the range, in the format yyyy-MM-dd or today. Also supported values: 1d, 7d, 30d, 1w, 1m, 3m, 6m, 1y, or max. Remember that with short code endpoint will return data earlier startDate. See README for more details and examples.
| acceptLanguage| String| Optional: The language to use for response values. Language is used to determine the food measurement units returned. Example: en_US. For more details see in specified section at the bottom.


## FitbitAPI.getHeartRateIntradayTimeSeries
This endpoint returns the intraday time series for a given resource in the format requested. If your application has the appropriate access, your calls to a time series endpoint for a specific day (by using start and end dates on the same day or a period of 1d), the response will include extended intraday values with a one-minute detail level for that day.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Required: The access token obtained from getAccessToken method.
| startDate  | String| Required: The range start date, in the format yyyy-MM-dd or today.
| endDate    | String| Required: The end date of the range, in the format yyyy-MM-dd or today. Also supported values: 1d, 7d, 30d, 1w, 1m, 3m, 6m, 1y, or max. Remember that with short code endpoint will return data earlier startDate.
| detailLevel| String| Required: Number of data points to include. Either 1sec or 1min.
| startTime  | String| Optional: The start of the period, in the format HH:mm.
| endTime    | String| Optional: The end of the period, in the format HH:mm.

### resourcePath options: 

```json
sleep/startTime  
sleep/timeInBed  
sleep/minutesAsleep  
sleep/awakeningsCount  
sleep/minutesAwake  
sleep/minutesToFallAsleep  
sleep/minutesAfterWakeup  
sleep/efficiency
```
## FitbitAPI.getFriendsLeaderboard
This endpoint gets the user's friends leaderboard in the format requested using units in the unit system which corresponds to the Accept-Language header provided.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Required: The access token obtained from getAccessToken method.
| userId     | String| Required: The encoded ID of the user. Use "-" (dash) for current logged-in user.


## FitbitAPI.getFriends
This endpoint returns data of a user's friends in the format requested using units in the unit system which corresponds to the Accept-Language header provided.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Required: The access token obtained from getAccessToken method.
| userId        | String| Required: The encoded ID of the user. Use "-" (dash) for current logged-in user.
| acceptLanguage| String| Optional: The language to use for response values. Language is used to determine the food measurement units returned. Example: en_US. For more details see in specified section at the bottom.


## FitbitAPI.getFriendInvitations
This endpoint returns data of a user's friends in the format requested using units in the unit system which corresponds to the Accept-Language header provided.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Required: The access token obtained from getAccessToken method.
| userId     | String| Required: The encoded ID of the user. Use "-" (dash) for current logged-in user.


## FitbitAPI.inviteFriend
This endpoint creates an invitation to become friends with the authorized user. Warning: Be careful when using the Invite Friend endpoint and, as always, adhere to the Terms of Service. Though Fitbit has organic limits on allowed number of invitations, your application's workflow must not allow users to send bulk invitations to users. Doing so could be considered SPAM.

| Field           | Type  | Description
|-----------------|-------|----------
| accessToken     | String| Required: The access token obtained from getAccessToken method.
| invitedUserEmail| String| Optional: Email of the user to invite. Does not need to be a Fitbit member. Either invitedUserEmail or invitedUserId is required.
| invitedUserId   | String| Optional: Encoded ID of the invited user. Either invitedUserEmail or invitedUserId is required.

## FitbitAPI.respondToFriendInvitation
This endpoint accepts or rejects an invitation to become friends with inviting user.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Required: The access token obtained from getAccessToken method.
| fromUserId | String| Required: Encoded ID of user from which to accept or reject invitation.
| accept     | String| Required: Accept or reject invitation. 'true' or 'false'.

## FitbitAPI.getFoodLocales
This endpoint returns the food locales that the user may choose to search, log, and create food in.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Required: The access token obtained from getAccessToken method.

## FitbitAPI.getFoodGoals
This endpoint returns a user's current daily calorie consumption goal and/or food Plan in the format requested.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Required: The access token obtained from getAccessToken method.
| userId     | String| Required: The ID of the user. Use "-" (dash) for current logged-in user.


## FitbitAPI.getWaterLogs
This endpoint retrieves a summary and list of a user's water log entries for a given day in the format requested using units in the unit system that corresponds to the Accept-Language header provided.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Required: The access token obtained from getAccessToken method.
| userId        | String| Required: The ID of the user. Use "-" (dash) for current logged-in user.
| date          | String| Required: The date of records to be returned. In the format yyyy-MM-dd.
| acceptLanguage| String| Optional: The language to use for response values. Language is used to determine the food measurement units returned. Example: en_US. For more details see in specified section at the bottom.


## FitbitAPI.getWaterGoal
This endpoint returns a user's current water goal.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Required: The access token obtained from getAccessToken method.
| userId     | String| Required: The ID of the user. Use "-" (dash) for current logged-in user.


## FitbitAPI.getFoodOrWaterTimeSeries
This endpoint returns time series data in the specified range for a given resource in the format requested using units in the unit systems that corresponds to the Accept-Language header provided.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Required: The access token obtained from getAccessToken method.
| userId        | String| Required: The ID of the user. Use "-" (dash) for current logged-in user.
| resourcePath  | String| Required: The resource path. Possible options are: foods/log/caloriesIn, foods/log/water.
| startDate     | String| Required: The range start date, in the format yyyy-MM-dd or today
| endDate       | String| Required: The end date of the range, in the format yyyy-MM-dd or today. Also supported values: 1d, 7d, 30d, 1w, 1m, 3m, 6m, 1y.
| acceptLanguage| String| Optional: The language to use for response values. Language is used to determine the food measurement units returned. Example: en_US. For more details see in specified section at the bottom.

#### Request will return data from date 2016-11-01 till 2016-11-07
```json
{
    "accessToken": "xxxxxxxxxxx", 
    "userId": "-", 
    "resourcePath": "foods/log/caloriesIn",
    "startDate": "2016-11-01",
    "endDate": "2016-11-07"  
}
```
#### Request will return data from date 2016-11-01 till 2016-11-07
```json
{
    "accessToken": "xxxxxxxxxxx", 
    "userId": "-", 
    "resourcePath": "foods/log/caloriesIn",  
    "startDate": "2016-11-07",
    "endDate": "7d"  
}
```
#### Request will return data from date 2016-11-01 till 2016-11-30
```json
{  
    "accessToken": "xxxxxxxxxxx", 
    "userId": "-", 
    "resourcePath": "foods/log/caloriesIn",
    "startDate": "2016-11-30",
    "endDate": "1m"  
}
```


## FitbitAPI.createFoodLog
This endpoint endpoint creates a log entry for a food event and returns a response in the format requested.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Required: The access token obtained from getAccessToken method.
| userId        | String| Required: The ID of the user. Use "-" (dash) for current logged-in user.
| foodId        | String| Optional: ID of the food to be logged. Either foodId or foodName must be provided.
| foodName      | String| Optional: Food entry name. Either foodId or foodName must be provided.
| mealTypeId    | String| Required: Meal type. 1=Breakfast; 2=Morning Snack; 3=Lunch; 4=Afternoon Snack; 5=Dinner; 7=Anytime.
| unitId        | String| Required: ID of units used. Typically retrieved via a previous call to Get Food Logs, Search Foods, or Get Food Units.
| amount        | String| Required: Amount consumed; in the format X.XX, in the specified unitId.
| date          | String| Required: Log entry date; in the format yyyy-MM-dd.
| favorite      | String| Optional: true will add the food to the user's favorites after creating the log entry; false will not. Valid only with foodId.
| brandName     | String| Optional: Brand name of food. Valid only with foodName parameter.
| calories      | String| Optional: Calories for this serving size. Allowed with foodName parameter (defaults to zero); otherwise ignored.
| acceptLanguage| String| Optional: The language to use for response values. Language is used to determine the food measurement units returned. Example: en_US. For more details see in specified section at the bottom.


## FitbitAPI.updateFoodLog
This endpoint changes the quantity or calories consumed for a user's food log entry with the given ID.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Required: The access token obtained from getAccessToken method.
| userId        | String| Required: The ID of the user. Use "-" (dash) for current logged-in user.
| foodLogId     | String| Required: The ID of the food log to edit.
| mealTypeId    | String| Required: Meal type. 1=Breakfast; 2=Morning Snack; 3=Lunch; 4=Afternoon Snack; 5=Dinner; 7=Anytime.
| unitId        | String| Optional: ID of units used. Not required if the food log was created with the foodName parameter. Typically retrieved via a previous call to Get Food Logs, Search Foods, or Get Food Units.
| amount        | String| Optional: Amount consumed; Not required if the food log was created with the foodName parameter. In the format X.XX, in the specified unitId.
| calories      | String| Optional: Calories for this food log. Allowed if the food log was created with the foodName parameter (defaults to zero); otherwise ignored.
| acceptLanguage| String| Optional: The language to use for response values. Language is used to determine the food measurement units returned. Example: en_US. For more details see in specified section at the bottom.


## FitbitAPI.logWater
This endpoint creates a log entry for water using units in the unit systems that corresponds to the Accept-Language header provided.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Required: The access token obtained from getAccessToken method.
| userId        | String| Required: The ID of the user. Use "-" (dash) for current logged-in user.
| date          | String| Required: Log entry date; in the format yyyy-MM-dd.
| amount        | String| Required: Amount consumed; in the format X.X and in the specified waterUnit or in the unit system that corresponds to the Accept-Language header provided.
| unit          | String| Optional: Water measurement unit. "ml", "fl oz", or "cup".
| acceptLanguage| String| Optional: The language to use for response values. Language is used to determine the food measurement units returned. Example: en_US. For more details see in specified section at the bottom.


## FitbitAPI.updateFoodGoal
This endpoint updates or creates a user's daily calorie consumption goal or food plan and returns a response in the format requested. Food plan exists only if user already as an active weight goal crated via the Update Weight Goal endpoint.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Required: The access token obtained from getAccessToken method.
| userId        | String| Required: The ID of the user. Use "-" (dash) for current logged-in user.
| calories      | String| Optional: Manual calorie consumption goal in integer format. Either calories or intensity must be provided.
| intensity     | String| Optional: Food plan intensity (MAINTENANCE, EASIER, MEDIUM, KINDAHARD, or HARDER). Either calories or intensity must be provided.
| personalized  | String| Optional: Food plan type; true or false.
| acceptLanguage| String| Optional: The measurement unit system to use for parameters and response values. Example: en_US. For more details see in specified section at the bottom.
| acceptLocale  | String| Optional: The locale to use for response values. Example: en_US. For more details see in specified section at the bottom.


## FitbitAPI.updateWaterGoal
This endpoint updates or creates a user's daily calorie consumption goal or food plan and returns a response in the format requested.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Required: The access token obtained from getAccessToken method.
| userId     | String| Required: The ID of the user. Use "-" (dash) for current logged-in user.
| target     | String| Required: Target water goal in the format X.X is set in unit based on locale.


## FitbitAPI.updateWaterLog
This endpoint allows to update a water log.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Required: The access token obtained from getAccessToken method.
| userId        | String| Required: The ID of the user. Use "-" (dash) for current logged-in user.
| waterLogId    | String| Required: The ID of water log.
| amount        | String| Required: Amount consumed; in the format X.X and in the specified waterUnit or in the unit system that corresponds to the Accept-Language header provided.
| unit          | String| Optional: Water measurement unit. "ml", "fl oz", or "cup".
| acceptLanguage| String| Optional: The measurement unit system to use for parameters and response values. Example: en_US. For more details see in specified section at the bottom.


## FitbitAPI.deleteWaterLog
This endpoint deletes a user's water log entry with the given ID.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Required: The access token obtained from getAccessToken method.
| userId     | String| Required: The ID of the user. Use "-" (dash) for current logged-in user.
| waterLogId | String| Required: The id of the water log entry to be deleted.


## FitbitAPI.getFavoriteFoods
This endpoint returns a list of a user's favorite foods in the format requested. A favorite food in the list provides a quick way to log the food via the Log Food endpoint.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Required: The access token obtained from getAccessToken method.
| userId        | String| Required: The ID of the user. Use "-" (dash) for current logged-in user.
| acceptLanguage| String| Optional: Used to determine the food measurement units returned. Example: en_US. For more details see in specified section at the bottom.


## FitbitAPI.getFrequentFoods
This endpoint returns a list of a user's frequent foods in the format requested. A frequent food in the list provides a quick way to log the food via the Log Food endpoint.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Required: The access token obtained from getAccessToken method.
| userId        | String| Required: The ID of the user. Use "-" (dash) for current logged-in user.
| acceptLanguage| String| Optional: Used to determine the food measurement units returned. Example: en_US. For more details see in specified section at the bottom.


## FitbitAPI.addFavoriteFood
This endpoint adds a food with the given ID to the user's list of favorite foods.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Required: The access token obtained from getAccessToken method.
| userId     | String| Required: The ID of the user. Use "-" (dash) for current logged-in user.
| foodId     | String| Required: The ID of the food to be removed.

## FitbitAPI.deleteFavoriteFood
This endpoint deletes a food with the given ID to the user's list of favorite foods.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Required: The access token obtained from getAccessToken method.
| userId     | String| Required: The ID of the user. Use "-" (dash) for current logged-in user.
| foodId     | String| Required: The ID of the food to be removed.


## FitbitAPI.getMeals
This endpoint returns a list of meals created by user in his or her food log in the format requested. Meals in the list provide a quick way to log several foods at a time via the calls to the Log Food endpoint.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Required: The access token obtained from getAccessToken method.
| userId        | String| Required: The ID of the user. Use "-" (dash) for current logged-in user.
| acceptLanguage| String| Optional: Used to determine the food measurement units returned. Example: en_US. For more details see in specified section at the bottom.


## FitbitAPI.createMeal
This endpoint creates a meal with the given food contained in the post body.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Required: The access token obtained from getAccessToken method.
| userId        | String| Required: The ID of the user. Use "-" (dash) for current logged-in user.
| name          | String| Required: Name of the meal.
| description   | String| Required: Short description of the meal.
| mealFoods     | JSON  | Required: Array of json objects. Object must contain foodId, unitId, amount. Ex.: [{"foodId" : <value>,"amount" : <value>,"unitId" : <value>}]. See README for more details and examples.
| acceptLanguage| String| Optional: Used to determine the food measurement units returned. Example: en_US. For more details see in specified section at the bottom.

#### mealFoods format
```json
[  
    {  
        "foodId":80851,
        "amount":2,
        "unitId":111
    },
    {  
        "foodId":81170,
        "amount":10,
        "unitId":311
    },
    {  
        "foodId":82782,
        "amount":8,
        "unitId":128
    },
    {  
        "foodId":9942,
        "amount":1,
        "unitId":180
    }
]
```

## FitbitAPI.getSingleMeal
This endpoint retrieves a meal for a user given the meal id.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Required: The access token obtained from getAccessToken method.
| userId        | String| Required: The ID of the user. Use "-" (dash) for current logged-in user.
| mealId        | String| Required: The ID of the meal.
| acceptLanguage| String| Optional: Used to determine the food measurement units returned. Example: en_US. For more details see in specified section at the bottom.


## FitbitAPI.editMeal
This endpoint replaces an existing meal with the contents of the request. The response contains the updated meal.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Required: The access token obtained from getAccessToken method.
| userId        | String| Required: The ID of the user. Use "-" (dash) for current logged-in user.
| mealId        | String| Required: The ID of the meal to update.
| name          | String| Required: Name of the meal.
| description   | String| Required: Short description of the meal.
| mealFoods     | JSON  | Required: Array of json objects. Object must contain foodId, unitId, amount. Ex.: [{"foodId" : <value>,"amount" : <value>,"unitId" : <value>}]. See README for more details and examples.
| acceptLanguage| String| Optional: Used to determine the food measurement units returned. Example: en_US. For more details see in specified section at the bottom.

#### mealFoods format
```json
[  
    {  
        "foodId":80851,
        "amount":2,
        "unitId":111
    },
    {  
        "foodId":81170,
        "amount":10,
        "unitId":311
    },
    {  
        "foodId":82782,
        "amount":8,
        "unitId":128
    },
    {  
        "foodId":9942,
        "amount":1,
        "unitId":180
    }
]
```

## FitbitAPI.deleteMeal
This endpoint allows to delete a user's meal with the given meal id.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Required: The access token obtained from getAccessToken method.
| userId     | String| Required: The ID of the user. Use "-" (dash) for current logged-in user.
| mealId     | String| Required: The ID of the meal.


## FitbitAPI.createFood
This endpoint creates a new private food for a user and returns a response in the format requested. The created food is found via the Search Foods call.

| Field                       | Type  | Description
|-----------------------------|-------|----------
| accessToken                 | String| Required: The access token obtained from getAccessToken method.
| userId                      | String| Required: The ID of the user. Use "-" (dash) for current logged-in user.
| name                        | String| Required: Food name.
| defaultFoodMeasurementUnitId| String| Required: ID of the default measurement unit. Full list of units can be retrieved via the Get Food Units endpoint.
| defaultServingSize          | String| Required: Size of the default serving. Nutritional values should be provided for this serving size.
| calories                    | String| Required: Calories in the default serving size.
| formType                    | String| Optional: Form type (LIQUID or DRY.).
| description                 | String| Optional: Description of the food.
| acceptLanguage              | String| Optional: Used to determine the food measurement units returned. Example: en_US. For more details see in specified section at the bottom.


## FitbitAPI.deleteCustomFood
This endpoint deletes custom food for a user and returns a response in the format requested.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Required: The access token obtained from getAccessToken method.
| userId     | String| Required: The ID of the user. Use "-" (dash) for current logged-in user.
| foodId     | String| Required: The ID of the food to be deleted.


## FitbitAPI.getFood
This endpoint returns the details of a specific food in the Fitbit food database or a private food the authorized user has entered in the format requested.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Required: The access token obtained from getAccessToken method.
| foodId        | String| Required: The ID of the food to be deleted.
| acceptLanguage| String| Optional: Used to determine the food measurement units returned. Example: en_US. For more details see in specified section at the bottom.


## FitbitAPI.getFoodUnits
This endpoint returns a list of all valid Fitbit food units in the format requested.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Required: The access token obtained from getAccessToken method.
| acceptLanguage| String| Optional: Used to determine the food measurement units returned. Example: en_US. For more details see in specified section at the bottom.

## FitbitAPI.searchFoods
This endpoint returns a list of public foods from Fitbit foods database and private foods the user created in the format requested.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Required: The access token obtained from getAccessToken method.
| query         | String| Required: The URL-encoded search query.
| acceptLanguage| String| Optional: Used to determine the food measurement units returned. Example: en_US. For more details see in specified section at the bottom.

## FitbitAPI.getFoodLogs
This endpoint returns a summary and list of a user's food log entries for a given day in the format requested.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Required: The access token obtained from getAccessToken method.
| userId        | String| Required: The ID of the user. Use "-" (dash) for current logged-in user.
| date          | String| Required: The date of records to be returned. In the format yyyy-MM-dd.
| acceptLanguage| String| Optional: Used to determine the food measurement units returned. Example: en_US. For more details see in specified section at the bottom.


## FitbitAPI.deleteFoodLog
This endpoint deletes a user's food log entry with the given ID.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Required: The access token obtained from getAccessToken method.
| userId     | String| Required: The ID of the user. Use "-" (dash) for current logged-in user.
| foodLogId  | String| Required: The id of the food log entry to be deleted.

## FitbitAPI.getDevices
This endpoint returns a list of the Fitbit devices connected to a user's account.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Required: The access token obtained from getAccessToken method.

## FitbitAPI.getBodyFatLogs
This endpoint retrieves a list of all user's body fat log entries for a given day in the format requested. Body fat log entries are available only to authorized user. If you need to fetch only the most recent entry, you can use the Get Body Measurements endpoint.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Required: The access token obtained from getAccessToken method.
| userId        | String| Required: The ID of the user. Use "-" (dash) for current logged-in user.
| startDate     | String| Required: The date in the format yyyy-MM-dd or "today".
| endDate       | String| Optional: The date in the format yyyy-MM-dd or 1d, 7d, 1w, 1m. Note: The range should not be longer than 31 days.
| acceptLanguage| String| Optional: The measurement unit system to use for response values. Example: en_US. For more details see in specified section at the bottom.


## FitbitAPI.logBodyFat
This endpoint creates a log entry for body fat and returns a response in the format requested. Note: The returned Body Fat Log IDs are unique to the user, but not globally unique.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Required: The access token obtained from getAccessToken method.
| userId        | String| Required: The ID of the user. Use "-" (dash) for current logged-in user.
| fat           | String| Required: Body fat; in the format X.XX, in the unit system that corresponds to the Accept-Language header provided.
| date          | String| Required: Log entry date; in the format yyyy-MM-dd.
| time          | String| Optional: Time of the measurement; hours and minutes in the format HH:mm:ss, set to the last second of the day if not provided.
| acceptLanguage| String| Optional: The measurement unit system to use for response values. Example: en_US. For more details see in specified section at the bottom.


## FitbitAPI.deleteBodyFatLog
This endpoint allow to delete a user's body fat log entry with the given ID.

| Field       | Type  | Description
|-------------|-------|----------
| accessToken | String| Required: The access token obtained from getAccessToken method.
| userId      | String| Required: The ID of the user. Use "-" (dash) for current logged-in user.
| bodyFatLogId| String| Required: The ID of the body fat log entry.


## FitbitAPI.getBodyTimeSeries
This endpoint return time series data in the specified range for a given resource in the format requested using units in the unit systems that corresponds to the Accept-Language header provided.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Required: The access token obtained from getAccessToken method.
| userId        | String| Required: The ID of the user. Use "-" (dash) for current logged-in user.
| resourcePath  | String| Required: The resource path. Options are "bmi", "fat", or "weight".
| startDate     | String| Required: The range start date, in the format yyyy-MM-dd or today.
| endDate       | String| Required: The range end date, in the format yyyy-MM-dd or one of options. Options are today, 1d, 7d, 30d, 1w, 1m, 3m, 6m, 1y, or max.
| acceptLanguage| String| Optional: The language to use for response values. Language is used to determine the activity measurement units returned. Example: en_US. For more details see in specified section at the bottom.


## FitbitAPI.getBodyGoals
This endpoint allow to retrieve a user's current body fat percentage or weight goal using units in the unit systems that corresponds to the Accept-Language header provided in the format requested.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Required: The access token obtained from getAccessToken method.
| userId        | String| Required: The ID of the user. Use "-" (dash) for current logged-in user.
| goalType      | String| Required: The type of goal for which data is returned. Possible values: weight or fat.
| acceptLanguage| String| Optional: The measurement unit system to use for response values. Example: en_US. For more details see in specified section at the bottom.


## FitbitAPI.updateBodyFatGoal
This endpoint create or update user's fat percentage goal.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Required: The access token obtained from getAccessToken method.
| userId     | String| Required: The ID of the user. Use "-" (dash) for current logged-in user.
| fat        | String| Required: Target body fat percentage; in the format X.XX.


## FitbitAPI.updateWeightGoal
This endpoint create or update user's fat or weight goal using units in the unit systems that corresponds to the Accept-Language header provided in the format requested.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Required: The access token obtained from getAccessToken method.
| userId        | String| Required: The ID of the user. Use "-" (dash) for current logged-in user.
| startDate     | String| Required: Weight goal start date; in the format yyyy-MM-dd.
| startWeight   | String| Required: Weight goal start weight; in the format X.XX, in the unit systems that corresponds to the Accept-Language header provided.
| weight        | String| Optional: Weight goal target weight; in the format X.XX, in the unit systems that corresponds to the Accept-Language header provided; required if user doesn't have an existing weight goal.
| acceptLanguage| String| Optional: The measurement unit system to use for response values. Example: en_US. For more details see in specified section at the bottom.


## FitbitAPI.getWeightLogs
This endpoint allow to retrieve a list of all user's body weight log entries for a given day using units in the unit systems which corresponds to the Accept-Language header provided. Body weight log entries are available only to authorized user. Body weight log entries in response are sorted exactly the same as they are presented on the Fitbit website.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Required: The access token obtained from getAccessToken method.
| userId        | String| Required: The ID of the user. Use "-" (dash) for current logged-in user.
| startDate     | String| Required: The range start date, in the format yyyy-MM-dd or today.
| endDate       | String| Required: The range end date, in the format yyyy-MM-dd or one of options. Options are today, 1d, 7d, 30d, 1w, 1m. Note: The period must not be longer than 31 days.
| acceptLanguage| String| Optional: The measurement unit system to use for response values. Example: en_US. For more details see in specified section at the bottom.


## FitbitAPI.logWeight
This endpoint create log entry for a body weight using units in the unit systems that corresponds to the Accept-Language header provided and get a response in the format requested. Note: The returned Weight Log IDs are unique to the user, but not globally unique.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Required: The access token obtained from getAccessToken method.
| userId        | String| Required: The ID of the user. Use "-" (dash) for current logged-in user.
| weight        | String| Required: Weight - in the format X.XX.
| date          | String| Required: Log entry date - in the format yyyy-MM-dd.
| time          | String| Optional: Time of the measurement - hours and minutes in the format HH:mm:ss, which is set to the last second of the day if time is not provided.
| acceptLanguage| String| Optional: The measurement unit system to use for response values. Example: en_US. For more details see in specified section at the bottom.


## FitbitAPI.deleteWeightLog
This endpoint allow to delete a user's body weight log entry with the given ID.

| Field          | Type  | Description
|----------------|-------|----------
| accessToken    | String| Required: The access token obtained from getAccessToken method.
| userId         | String| Required: The ID of the user. Use "-" (dash) for current logged-in user.
| bodyWeightLogId| String| Required: The ID of the body weight log entry.


## FitbitAPI.getDailyActivitySummary
This endpoint retrieves a summary and list of a user's activities and activity log entries for a given day in the format requested using units in the unit system which corresponds to the Accept-Language header provided.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Required: The access token obtained from getAccessToken method.
| userId        | String| Required: The ID of the user. Use "-" (dash) for current logged-in user.
| date          | String| Required: The date in the format yyyy-MM-dd.
| acceptLanguage| String| Optional: The measurement unit system to use for response values. Example: en_US. For more details see in specified section at the bottom.
| acceptLocale  | String| Optional: The locale to use for response values. Example: en_US. For more details see in specified section at the bottom.


## FitbitAPI.getActivityIntradayTimeSeries
This endpoint returns the Intraday Time Series for a given resource in the format requested. The endpoint mimics the Get Activity Time Series endpoint.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Required: The access token obtained from getAccessToken method.
| resourcePath  | String| Required: The resource path of the desired data. Possible values: activities/calories, activities/steps, activities/distance, activities/floors, activities/elevation
| date          | String| Required: The date, in the format yyyy-MM-dd or today.
| detailLevel   | String| Optional: Number of data points to include. Either 1min or 15min.
| startTime     | String| Optional: The start of the period, in the format HH:mm
| endTime       | String| Optional: The end of the period, in the format HH:mm
| acceptLanguage| String| Optional: The language to use for response values. Language is used to determine the activity measurement units returned. Example: en_US. For more details see in specified section at the bottom.


## FitbitAPI.browseActivityTypes
Get a tree of all valid Fitbit public activities from the activities catalog as well as private custom activities the user created in the format requested. If the activity has levels, also get a list of activity level details. Typically, an applications retrieve the complete list of activities once at startup to cache and show in the UI later.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Required: The access token obtained from getAccessToken method.

## FitbitAPI.getActivityType
Returns the details of a specific activity in the Fitbit activities database in the format requested. If activity has levels, also returns a list of activity level details.

| Field       | Type  | Description
|-------------|-------|----------
| accessToken | String| Required: The access token obtained from getAccessToken method.
| activityId  | String| Required: The activity ID.
| acceptLocale| String| Optional: The measurement unit system to use for response values. Example: en_US. For more details see in specified section at the bottom.


## FitbitAPI.getFrequentActivities
This endpoint retrieves a list of a user's frequent activities in the format requested using units in the unit system which corresponds to the Accept-Language header provided. A frequent activity record contains the distance and duration values recorded the last time the activity was logged. The record retrieved can be used to log the activity via the Log Activity endpoint with the same or adjusted values for distance and duration.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Required: The access token obtained from getAccessToken method.
| acceptLanguage| String| Optional: The measurement unit system to use for response values. Example: en_US. For more details see in specified section at the bottom.
| acceptLocale  | String| Optional: The locale to use for response values. Example: en_US. For more details see in specified section at the bottom.

## FitbitAPI.getRecentActivityTypes
This endpoint retrieves a list of a user's recent activities types logged with some details of the last activity log of that type using units in the unit system which corresponds to the Accept-Language header provided. The record retrieved can be used to log the activity via the Log Activity endpoint with the same or adjusted values for distance and duration.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Required: The access token obtained from getAccessToken method.
| acceptLanguage| String| Optional: The measurement unit system to use for response values. Example: en_US. For more details see in specified section at the bottom.
| acceptLocale  | String| Optional: The locale to use for response values. Example: en_US. For more details see in specified section at the bottom.

## FitbitAPI.getFavoriteActivities
This endpoint returns a list of a user's favorite activities.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Required: The access token obtained from getAccessToken method.
| userId     | String| Required: The encoded ID of the user. Use "-" (dash) for current logged-in user.

## FitbitAPI.addFavoriteActivity
This endpoint add the activity with the given ID to user's list of favorite activities.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Required: The access token obtained from getAccessToken method.
| activityId | String| Required: The ID of the activity to add to user's favorites.


## FitbitAPI.deleteFavoriteActivity
This endpoint remove the activity with the given ID from a user's list of favorite activities.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Required: The access token obtained from getAccessToken method.
| activityId | String| Required: The ID of the activity to be removed.


## FitbitAPI.getActivityGoals
This endpoint retrieve a user's current daily or weekly activity goals using measurement units as defined in the unit system, which corresponds to the Accept-Language header provided.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Required: The access token obtained from getAccessToken method.
| userId     | String| Required: The encoded ID of the user. Use "-" (dash) for current logged-in user.
| period     | String| Required: The period to be returned. Possible values: daily or weekly.


## FitbitAPI.updateActivityGoals
This endpoint create or update a user's daily activity goals and return a response using units in the unit system which corresponds to the Accept-Language header provided.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Required: The access token obtained from getAccessToken method.
| userId        | String| Required: The encoded ID of the user. Use "-" (dash) for current logged-in user.
| period        | String| Required: The period to be updated. Possible values: daily or weekly.
| caloriesOut   | String| Optional: Goal value for calories.
| activeMinutes | String| Optional: Goal value for active minutes.
| floors        | String| Optional: Goal value.
| distance      | String| Optional: Goal value for distance. Format X.XX or integer.
| steps         | String| Optional: Goal value for steps.
| acceptLanguage| String| Optional: The measurement unit system to use for response values. Example: en_US. For more details see in specified section at the bottom.


## FitbitAPI.getLifetimeStats
This endpoint retrieves the user's activity statistics in the format requested using units in the unit system which corresponds to the Accept-Language header provided. Activity statistics includes Lifetime and Best achievement values from the My Achievements tile on the website dashboard. Response contains both statistics from the tracker device and total numbers including tracker data and manual activity log entries as seen on the Fitbit website dashboard.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Required: The access token obtained from getAccessToken method.
| userId        | String| Required: The encoded ID of the user. Use "-" (dash) for current logged-in user.
| acceptLanguage| String| Optional: The measurement unit system to use for response values. Example: en_US. For more details see in specified section at the bottom.


## FitbitAPI.getActivityTimeSeries
This endpoint returns time series data in the specified range for a given resource in the format requested using units in the unit system that corresponds to the Accept-Language header provided.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Required: The access token obtained from getAccessToken method.
| userId        | String| Required: The encoded ID of the user. Use "-" (dash) for current logged-in user.
| resourcePath  | String| Required: The resource path; see README for more details.
| startDate     | String| Required: The range start date, in the format yyyy-MM-dd or today.
| endDate       | String| Required: The range end date, in the format yyyy-MM-dd or today. Also possible values for period: 1d, 7d, 30d, 1w, 1m, 3m, 6m, 1y. If uses period values, startDate will be end date for period.
| acceptLanguage| String| Optional: The measurement unit system to use for response values. Example: en_US. For more details see in specified section at the bottom.

#### resourcePath options
```json
ACTIVITY

activities/calories  
activities/caloriesBMR  
activities/steps  
activities/distance  
activities/floors  
activities/elevation  
activities/minutesSedentary  
activities/minutesLightlyActive  
activities/minutesFairlyActive  
activities/minutesVeryActive  
activities/activityCalories

TRACKER ACTIVITY

activities/tracker/calories  
activities/tracker/steps  
activities/tracker/distance  
activities/tracker/floors  
activities/tracker/elevation  
activities/tracker/minutesSedentary  
activities/tracker/minutesLightlyActive  
activities/tracker/minutesFairlyActive  
activities/tracker/minutesVeryActive  
activities/tracker/activityCalories
```

## FitbitAPI.addSubscription
You must add a subscription in your application so that users will get notifications and return a response in the format requested. The subscriptionId value provides a way to associate an update with a particular user stream in your application.

| Field              | Type  | Description
|--------------------|-------|----------
| accessToken        | String| Required: The access token obtained from getAccessToken method.
| collectionPath     | String| Optional: This is the resource of the collection to receive notifications from (foods, activities, sleep, or body). If not present, subscription will be created for all collections. If you have both all and specific collection subscriptions, you will get duplicate notifications on that collections' updates. Each subscriber can have only one subscription for a specific user's collection. See README for more details.
| subscriptionId     | String| Required: This is the unique ID of the subscription created by the API client application. Each ID must be unique across the entire set of subscribers and collections. The Fitbit servers will pass this ID back along with any notifications about the user indicated by the user parameter in the URL path.
| xFitbitSubscriberId| String| Optional: The ID of the subscriber to receive notifications, as defined on dev.fitbit.com. If not present, the default subscriber is used.

#### collectionPath options
- <kbd>activities</kbd> collection requires <kbd>activity</kbd> scope
- <kbd>body</kbd> collection requires <kbd>weight</kbd> scope
- <kbd>foods</kbd> collection requires <kbd>nutrition</kbd>
- <kbd>sleep</kbd> collection requires <kbd>sleep</kbd>
- If no collection specified, <kbd>activity</kbd>, <kbd>nutrition</kbd>, <kbd>profile</kbd>, <kbd>settings</kbd>, <kbd>sleep</kbd>, <kbd>weight</kbd> scope required.

## FitbitAPI.getSubscriptions
Get a list of a user's subscriptions for your application in the format requested. You can either fetch subscriptions for a specific collection or the entire list of subscriptions for the user.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Required: The access token obtained from getAccessToken method.
| collectionPath| String| Optional: Collection to get subscriptions for (foods, activities, sleep, or body.) If not present, list will include all subscriptions for the user.

## FitbitAPI.removeSubscription
Deletes a subscription for a user.

| Field              | Type  | Description
|--------------------|-------|----------
| accessToken        | String| Required: The access token obtained from getAccessToken method.
| subscriptionId     | String| Required: The ID of the subscription.
| collectionPath     | String| Optional: Collection to delete subscription form (foods, activities, sleep, or body.). If not present, subscriptions will be deleted from all collections.
| xFitbitSubscriberId| String| Optional: The ID of the subscriber to receive notifications, as defined on dev.fitbit.com. If not present, the default subscriber is used. Recommended to fill.

## acceptLanguage
API calls reveal and log resource values in one of the unit systems based on the value of the Accept-Language header. If an endpoint respects the Accept-Language header, it is explicitly mentioned in the endpoint details.

| Accept-Language                       | Unit System 
|---------------------------------------|-------
| en_US                                 | US
| en_GB                                 | UK
| none of the above or not provided     | METRIC

###Unit Systems
US

| Unit Type             | Unit 
|-----------------------|-------
| duration              | milliseconds
| distance              | miles
| elevation             | feet
| height                | inches
| weight                | pounds
| body measurements     | inches
| liquids               | fluid ounces (fl oz)
| blood glucose         | milligrams per deciliter (mg/dL) (mass concentration)

UK

| Unit Type             | Unit 
|-----------------------|-------
| duration              | milliseconds
| distance              | kilometers
| elevation             | meters
| height                | centimeters
| weight                | stone
| body measurements     | centimeters
| liquids               | milliliters
| blood glucose         | millimoles per liter (mmol/l) (molar concentration)
Note that the API uses decimal values for all unit types, so UK weight will be expressed as 10.5 stone instead of 10 stone 7 pounds.

Metric

| Unit Type             | Unit 
|-----------------------|-------
| duration              | milliseconds
| distance              | kilometers
| elevation             | meters
| height                | centimeters
| weight                | kilograms
| body measurements     | centimeters
| liquids               | milliliters
| blood glucose         | millimoles per liter (mmol/dl) (molar concentration)

## acceptLocale
Some of the API responses include text fields that may be suitable for displaying to the end user. Setting the Accept-Locale header will return a translated response if available. We currently support the following locales:

| Accept-Language | Unit System 
|-----------------|-------
| en_AU           | Australia
| fr_FR           | France
| de_DE           | Germany
| ja_JP           | Japan
| en_NZ           | New Zealand
| es_ES           | Spain
| en_GB           | United Kingdom
| en_US           | United States (default)
