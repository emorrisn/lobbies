<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class codes extends Model
{
  protected $fillable = [
      'for', 'code',
  ];
}
