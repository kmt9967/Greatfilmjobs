<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

    public function create_job_save()
    {
        $file=$request->file('gphoto');
        $file2=$request->file('gphoto2');
        $file3=$request->file('gphoto3');
        $gfile=$request->file('instantfile');

        
        if(isset($file))
                {

                $fileg=$fileg->getClientOriginalName();
                $file_nameg=pathinfo($filewexg,PATHINFO_FILENAME);
                $exg= $fileg->getClientOriginalExtension();
                $store_nameg=$file_nameg."_".time().uniqid().".".$exg;
                $pathg=$fileg->move('pics/',$store_nameg);

                $filewex=$file->getClientOriginalName();
                $file_name=pathinfo($filewex,PATHINFO_FILENAME);
                $ex= $file->getClientOriginalExtension();
                $store_name=$file_name."_".time().uniqid().".".$ex;
                $path=$file->move('pics/',$store_name);

                $filewex2=$file2->getClientOriginalName();
                $file_name2=pathinfo($filewex2,PATHINFO_FILENAME);
                $ex2= $file2->getClientOriginalExtension();
                $store_name2=$file_name2."_".time().uniqid().".".$ex2;
                $path2=$file2->move('pics/',$store_name2);

                $filewex3=$file3->getClientOriginalName();
                $file_name3=pathinfo($filewex3,PATHINFO_FILENAME);
                $ex3= $file3->getClientOriginalExtension();
                $store_name3=$file_name3."_".time().uniqid().".".$ex3;
                $path3=$file3->move('pics/',$store_name3);

                $data=Posts::create([
                    'gtitle' => $request->input('gtitle'),
                    'price'=>$request->input('prices') ,
                    'category' => $request->input('gcat') ,
                    'gdesc' => $request->input('gdesc') ,
                    'ginst' => $request->input('ginst') ,
                    'gtags' => $request->input('gtags'),
                    'days' => $request->input('gdays'),
                    'iurl'=> $request->input('instanturl'),
                    'ifile'=> $store_nameg,
                    'p1'=>$store_name,
                    'p2'=>$store_name2,
                    'p2'=>$store_name3,
                    'scriptolution_add_multiple'=>$request->input('multiplemax'),
                    'youtube'=>$request->input('gyoutube'),
                    'scriptolutionship1'=>$request->input('scriptolutionship1'),
                    'scriptolutionship1to'=>$request->input('scriptolutionship1to'),
                    'scriptolutionship2'=>$request->input('scriptolutionship2'),
                    'price2'=>0,
                    'price3'=>0,
                    'ctp2'=>0,
                    'ctp3'=>0,
                    'active'=>0,
                    'last_viewed'=> time(),
                    'pip'=>$request->ip(),
                    'scriptolutioncity'=>$request->input('scriptolutioncity'),
                    'scriptolutionstate'=>$request->input('scriptolutionstate'),
                    'scriptolutioncountry'=>$request->input('scriptolutioncountry'),
                    'scriptolutionjoblocation'=>'none'
            
            
                ]);
            $i=1;
            while($i<4)
            {
                $edata=Extra::create([
                    'PID'=>$data->id,
                    'etitle'=>$request->input('extra'.$i),
                    'eprice'=>$request->input('extraprice'.$i)
                ]);
                $i++;
            }
        
        }
        else{
            $data=Posts::create([
                'gtitle' => $request->input('gtitle'),
                'price'=>$request->input('prices') ,
                'category' => $request->input('gcat') ,
                'gdesc' => $request->input('gdesc') ,
                'ginst' => $request->input('ginst') ,
                'gtags' => $request->input('gtags'),
                'days' => $request->input('gdays'),
                'iurl'=> $request->input('instanturl'),
                'ifile'=> $store_nameg,
                'p1'=>'noprofilepicture.gif',
                'scriptolution_add_multiple'=>$request->input('multiplemax'),
                'youtube'=>$request->input('gyoutube'),
                'scriptolutionship1'=>$request->input('scriptolutionship1'),
                'scriptolutionship1to'=>$request->input('scriptolutionship1to'),
                'scriptolutionship2'=>$request->input('scriptolutionship2'),
                'price2'=>0,
                'price3'=>0,
                'ctp2'=>0,
                'ctp3'=>0,
                'active'=>0,
                'last_viewed'=> time(),
                'pip'=>$request->ip(),
                'scriptolutioncity'=>$request->input('scriptolutioncity'),
                'scriptolutionstate'=>$request->input('scriptolutionstate'),
                'scriptolutioncountry'=>$request->input('scriptolutioncountry'),
                'scriptolutionjoblocation'=>'none'
                ]);
        $i=1;
        while($i<4)
        {
            $edata=Extra::create([
                'PID'=>$data->id,
                'etitle'=>$request->input('extra'.$i),
                'eprice'=>$request->input('extraprice'.$i)
            ]);
            $i++;
        }
        }
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

    public function profile()
    {
        $data=User::find(auth()->user()->id);
        return view('user.profile',['user'=>$data]);
    }

    public function post_request()
    {
        return view('user.post_request');
    }

    public function settings()
    {
        $data=User::find(auth()->user()->id);
        return view('user.settings',['user'=>$data]);
    }

    public function settings_save(Request $request)
    {
        if($request->input('subpass')==1 && $request->input('pass')==$request->input('pass2'))
        {
            $data=User::Find(auth()->user()->id)->update([
                'password' => Hash::make($request->input('pass')),

            ]);
        }
        else
        {
                $mytime = Carbon::now();
                
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
    }
        $data=User::find(auth()->user()->id);
        return view('user.settings',['user'=>$data]);
    }
    

}
