<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Instructions of Installation

1. Download the repository for github to your local machine (https://github.com/MKeightley1/WeatherForcastApp/tree/weatherForcast)
2. Ensure you have composer installed and php environment
3. Create a database in phpmyAdmin and record this for step 4.
4. Open the source code and modify DB settings to reflect application (Mainly database name for local development)
Example: copy .env.example file in source code and update DB settings
5. Navigate in command line to the source code and run the following commands

6. <b>composer install</b> - This command will create a vendor directory in your source code with necessary libraries.
7. <b>php artisan migrate</b> - Install all tables in database
8. <b>php artisan db:seed --class=CitiesTableSeeder</b> - This will fill collection of Cities data from json file.

## Execution of application
1. <b>php artisan serve </b>  - This will start a local server and allow access to api
2. use API to hit endoints (other API managemen tool) - Example: http://127.0.0.1:8000/api/weatherUpdateData

Endpoints
<b>/api/cities</b> - retrieve all cities
<b>/api/cities/{id}</b> - search city record by id
<b>/api/weather</b> - retrieve all weather records
<b>/api/weather/{id}</b> - update weather records
<b>/api/weatherUpdateData</b> - //update DB data with weather forcast information from external API

## Assumptions made
1. This is an Australian based city application - limited results to Australian based cities (200+ recorded in json file)
2. The external API for weather forcasts is accurate and reliable

## Decisions made
3. As async calls cannot me be locally - I temparily use "fileGetContent PHP" command to get results
4. Decided to focus the backend of the application as thats my strong of skill in the task.
5. Details recorded for weather data needed to be minimal but also useable to the machinary environments
6. Keeping in mind flexability in design and potential daily reporting, decided to store all weather information into the database
7. seperated out weather data retrieval from installation is this will need to be used for updates daily.

## Progress
1. Communicated application to external API
2. Store cities and relevent weather data in db
3. API endpoint to return all entries

## Whats left
1. React front-end UI
2. Adding console command to generate reports
3. filtering results based on selected city
4. Consider more effective error handling














