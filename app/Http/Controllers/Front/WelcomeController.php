<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

use App\Models\TestTable;
use App\Traits\HelloTrait;

class WelcomeController extends Controller
{
    use HelloTrait {
        hello as test;
    }
    
    public function hello()
    {
        return 'asdasd';
    }

    public function index()
    {
        //$data = TestTable::get();
        $data = TestTable::array('id', 2);

        //dd($this->test('World'));

        $error = '';

        return view('test')->with(compact('data', 'error'));
    }

    public function protected()
    {
        return view('protected');
    }
}
