<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function(){
  return view('welcome');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/test', function(){
  define('STDIN',fopen("php://stdin","r"));
  $client = new Google_Client();
  $client->setApplicationName('API code samples');
  $client->setScopes([
    'https://www.googleapis.com/auth/youtube.readonly',
  ]);

  $jsonAuth = file_get_contents(base_path(env('GOOGLE_SECRET_JSON')));
  $client->setAuthConfig(json_decode($jsonAuth, TRUE));
  $client->setAccessType('offline');

// Request authorization from the user.
  $authUrl = $client->createAuthUrl();
  printf("Open this link in your browser:\n%s\n", $authUrl);
  print('Enter verification code: ');
  $authCode = trim(fgets(STDIN));

// Exchange authorization code for an access token.
  $accessToken = $client->fetchAccessTokenWithAuthCode($authCode);
  $client->setAccessToken($accessToken);

// Define service object for making API requests.
  $service = new Google_Service_YouTube($client);

  $queryParams = [
    'forChannelId' => 'UCmtWeUIkdsqQyu7HP5yD6tQ',
    'mine' => true
  ];

  $response = $service->subscriptions->listSubscriptions('', $queryParams);
  print_r($response);
  die();
});