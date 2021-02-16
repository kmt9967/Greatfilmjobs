<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $list=categories::all();
        if( auth()->user()->roles == "Admin")
            {
                return view('category.list')->with('users',$list);
            }
            else
            {
                return redirect('/');
            }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if( auth()->user()->roles == "Admin")
            {
                return view('category.create');
            }
            else
            {
                return redirect('/');
            }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if( auth()->user()->roles == "Admin")
        {
            $this->validate($request,[
                'categories' => ['required', 'string', 'max:255'],
                
           ]); //error
           
           $cat=categories::create([
            'category'=> $request->input('categories'),
            'added_by'=> auth()->user()->name,
    
           ]);
    
           
           return redirect('/admin/category');
        }
        else
        {
            return redirect('/');
        }

        
    }

}
