<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function bookmarks()
    {
        return view('user.bookmarks');
    }

    public function balance()
    {
        return view('user.balance');
    }

    public function buyer_request()
    {
        return view('user.buyer_request');
    }
    
    public function create_job()
    {
        return view('user.create_job');
    }

    public function inbox()
    {
        return view('user.inbox');
    }

    public function manage_order()
    {
        return view('user.manage_order');
    }

    public function myjobs()
    {
        return view('user.myjobs');
    }
    
    public function myrequests()
    {
        return view('user.myrequests');
    }

    public function orders()
    {
        return view('user.orders');
    }

    public function payment()
    {
        return view('user.payment');
    }

    public function post_request()
    {
        return view('user.post_request');
    }

    public function settings()
    {
        $data=User::find(auth()->user()->id);
        return view('user.settings')->with('user',$data);
    }

    public function settings_save(Request $request)
    {

        $mytime = Carbon::now();
        
        $appUrl=env('APP_URL');
        $file=$request->file('gphoto');

        if(isset($file))
        {
        $filewex=$file->getClientOriginalName();
           $file_name=pathinfo($filewex,PATHINFO_FILENAME);
           $ex= $file->getClientOriginalExtension();
           $store_name=$file_name."_".time().".".$ex;
           $path=$file->move('images/membersprofilepic/',$store_name);

           $data=User::Find(auth()->user()->id)->update([
            'email' => $request->input('email'),
            'pemail'=>$request->input('paypal') ,
            'fullname' => $request->input('fname') ,
            'description' => $request->input('details') ,
            'scriptolutionuserslogan' => $request->input('scriptolutionuserslogan') ,
            'addtime' => $mytime->toDateTimeString(),
            'profilepicture' => $store_name,
            'ip'=> $request->ip(),
            'lip' => 'none' ,
            'country'=> $request->input('country')
    
           ]);
        }
        else{

        $data=User::Find(auth()->user()->id)->update([
            'email' => $request->input('email'),
            'pemail'=>$request->input('paypal') ,
            'fullname' => $request->input('fname') ,
            'description' => $request->input('details') ,
            'scriptolutionuserslogan' => $request->input('scriptolutionuserslogan') ,
            'addtime' => $mytime->toDateTimeString(),
            'ip'=> $request->ip(),
            'lip' => 'none' ,
            'country'=> $request->input('country')
    
           ]);
        }
           $data=User::find(auth()->user()->id);
           return view('user.settings')->with('user',$data);
    }


}
