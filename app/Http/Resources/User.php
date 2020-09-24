<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource{
  /**
   * Transform the resource into an array.
   *
   * @param \Illuminate\Http\Request $request
   * @return array
   */
  public function toArray($request){
    /** @var \App\Models\User $this */
    return [
      'id' => $this->id,
      'name' => $this->name,
      'email' => $this->email,
      'subscriber' => $this->subscriber(),
      'requiredSubscriptions' => $this->requiredSubscriptions(),
    ];
  }
}
