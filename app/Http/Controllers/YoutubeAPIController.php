<?php

namespace App\Http\Controllers;

use App\Http\Resources\User as UserResource;
use App\Models\Discord;
use App\Models\Sponsor;
use App\Models\User;
use Google_Client;
use Google_Service_YouTube;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class YoutubeAPIController extends Controller{
  public function createUrl(){
    $client = new Google_Client();
    $client->setApplicationName('API code samples');
    $client->setScopes([
      'https://www.googleapis.com/auth/youtube.readonly',
    ]);
    $jsonAuth = file_get_contents(base_path(env('GOOGLE_SECRET_JSON')));
    $client->setAuthConfig(json_decode($jsonAuth, TRUE));
    $client->setAccessType('offline');
    $authUrl = $client->createAuthUrl();
    return Redirect::to($authUrl);
  }

  public function check(Request $request){
    $channelId = 'UCmtWeUIkdsqQyu7HP5yD6tQ';
    $client = new Google_Client();
    $client->setApplicationName('API code samples');
    $jsonAuth = file_get_contents(base_path(env('GOOGLE_SECRET_JSON')));
    $client->setAuthConfig(json_decode($jsonAuth, TRUE));
    $client->setAccessType('offline');
    // Exchange authorization code for an access token.
    $accessToken = $client->fetchAccessTokenWithAuthCode($request["code"]);
    $client->setAccessToken($accessToken);
    // Define service object for making API requests.
    $service = new Google_Service_YouTube($client);
    $queryParams = [
      'forChannelId' => $channelId,
      'mine' => TRUE
    ];
    $response = $service->subscriptions->listSubscriptions('id', $queryParams);
    if(!$response["items"]){
      return redirect()->route('profile');
    }else{
      /** @var User $user */
      $user = Auth::user();
      $sponsor = Sponsor::where('channel_id', '=', $channelId)->first();
      $user->subscriptions()->saveMany([$sponsor]);
      $webhook = env('DISCORD_WEBHOOK_SUBSCRIBERS', FALSE);
      if($webhook){
        Discord::send($webhook, "$user->login, $user->email");
      }
      return redirect()->route('profile');
    }
  }
}
