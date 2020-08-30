<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Geometry extends Model
{
    protected $table = "geometry_sample";

    protected $geometries = [
        "points" => ['geom1'],
        "polygons" =>   ['geom2']
    ];
}