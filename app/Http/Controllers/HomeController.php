<?php

namespace App\Http\Controllers;
use App\Models\Categories;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }


    public function single_cat($name)
    {
        $data = Categories::select('name')->orderBy('name','asc')->get();
        foreach($data as $x)
        {
            if(str_replace(' ', '', htmlspecialchars_decode($x->name)) == $name)
            {
                $name= htmlspecialchars_decode($x->name);
            }
        }
        $pic =( Categories::select('scriptolution_bigimage')->where('name','=',$name)->get())[0]->scriptolution_bigimage;

        return view('categories.single_categories',['data'=> $data , 'name' => $name,'pic' => $pic]);
    }
    public function signup()
    {
        return view('signup');
    }

    
}
