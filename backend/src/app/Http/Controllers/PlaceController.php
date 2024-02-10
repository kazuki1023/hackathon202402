<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function getPlaces()
    {
      $places = Place::all();
      return $places;
    }

    public function createPlace(Request $request)
    {
      $date = $request->date;
      $date = json_encode($date);
      $place = new Place;
      $place->name = $request->name;
      $place->status = $request->status;
      $place->group_id = $request->group_id;
      $place->latitude = $request->latitude;
      $place->longitude = $request->longitude;
      $place->date = $date;
      $place->save();
      return $place;
    }

    public function updatePlaceStatus(Request $request)
    {
      $place = Place::find($request->id);
      $place->status = $request->status;
      $place->save();
      return $place;
    }
}