<?php

namespace Database\Seeders;

use App\Models\Sponsor;
use Illuminate\Database\Seeder;

class SponsorSeeder extends Seeder{
  /**
   * @return void
   */
  public function run(){
    Sponsor::create([
      "name" => "PubgMobileAzerbaijan",
      "link" => "https://www.facebook.com/groups/PubgMobileAzerbaijan1",
      "required" => FALSE,
      "type" => Sponsor::TYPE["Facebook"]
    ]);
    Sponsor::create([
      "name" => "STORMPubgmobile",
      "link" => "https://www.youtube.com/channel/UCmtWeUIkdsqQyu7HP5yD6tQ",
      "required" => TRUE,
      "channel_id" => "UCmtWeUIkdsqQyu7HP5yD6tQ",  //user_id = mtWeUIkdsqQyu7HP5yD6tQ
      "type" => Sponsor::TYPE["YouTube"]
    ]);
  }
}
