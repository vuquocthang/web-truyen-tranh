<?php
/**
 * Created by PhpStorm.
 * User: vuquo
 * Date: 9/3/2017
 * Time: 7:58 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    protected $table = 'chuong';

    protected $fillable = [

        'ten',
        'truyen_id',
        'noi_dung',
        'ngay_them',
        'status'
    ];

}