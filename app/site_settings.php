<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class site_settings extends Model
{
  protected $fillable = [
    'for', 'content',
  ];
}
