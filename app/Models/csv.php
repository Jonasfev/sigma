<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function GuzzleHttp\Promise\all;

class csv extends Model
{
    use HasFactory;

    protected $guarded = [];

}
