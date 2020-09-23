<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Sponsor extends Resource{
  public static $model = \App\Models\Sponsor::class;
  public static $title = 'name';
  public static $search = [
    'id',
  ];

  /**
   * @param \Illuminate\Http\Request $request
   * @return array
   */
  public function fields(Request $request){
    return [
      ID::make(__('ID'), 'id')->sortable(),
      Text::make('Name')->rules(['required']),
      Text::make('Link')->rules(['required']),
      Select::make('Type')->rules(['required'])->options([
        '1' => 'YouTube',
        '2' => 'Facebook'
      ]),
      BelongsToMany::make('Users')
    ];
  }
}
