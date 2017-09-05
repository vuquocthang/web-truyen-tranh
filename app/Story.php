<?php
/**
 * Created by PhpStorm.
 * User: vuquo
 * Date: 9/3/2017
 * Time: 7:56 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $table = 'truyen';

    protected $fillable = [
        'ten',
        'ten_khac',
        'tac_gia',
        'nhom_dich',
        'tinh_trang',
        'nguon',
        'ngay_them',
        'the_loai_id',
        'status',
        'image_link'
    ];

}