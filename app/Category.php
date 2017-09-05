<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Created by PhpStorm.
 * User: vuquo
 * Date: 9/3/2017
 * Time: 7:09 PM
 */
class Category extends Model
{
    protected $table = 'the_loai';

    protected $fillable = ['ten', 'status'];

}