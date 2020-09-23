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
      "required" => TRUE,
      "type" => Sponsor::TYPE["Facebook"]
    ]);
    Sponsor::create([
      "name" => "STORMPubgmobile",
      "link" => "https://www.youtube.com/c/STORMPubgmobile",
      "required" => TRUE,
      "type" => Sponsor::TYPE["YouTube"]
    ]);
  }
}
