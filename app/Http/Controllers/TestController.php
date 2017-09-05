<?php
/**
 * Created by PhpStorm.
 * User: vuquo
 * Date: 9/3/2017
 * Time: 10:51 PM
 */

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TestController extends Controller
{
    public function upload(Request $request){

        $this->validate($request, [
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        echo $request->file->getClientOriginalName();

        $imageName = time().'.'.$request->file->getClientOriginalExtension();

        $request->file->move('public/image', $imageName);

        //return response('Hello World', 200);
    }

    public function carbon(){
        $dt = Carbon::now();
        echo $dt->diffInHours($dt->copy()->addHours(2));                         // 31
        echo $dt->diffInDays($dt->copy()->subMonth(), false);
    }

}