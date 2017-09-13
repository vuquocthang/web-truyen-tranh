<?php
/**
 * Created by PhpStorm.
 * User: vuquo
 * Date: 9/12/2017
 * Time: 4:11 PM
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\TopRead;
use Illuminate\Support\Facades\Request;

class TopReadController extends Controller
{
    public function showAddForm(){
        return view('admin.top-read.add');
    }

    public function add(){
        $input = Request::all();

        TopRead::create($input);

        return redirect('admin/truyen-doc-nhieu/danh-sach');
    }

    public function index(){
        return view('admin.top-read.index');
    }

    public function delete($id){
        TopRead::destroy($id);

        return redirect('admin/truyen-doc-nhieu/danh-sach');
    }


}