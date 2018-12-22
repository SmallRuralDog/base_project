<?php


namespace App;
use Watson\Rememberable\Rememberable;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
    use Rememberable;
}