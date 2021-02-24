<?php

namespace App\Http\Controllers;
use App\Models\Offer;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Posts;
use App\Models\Extra;
use App\Models\Orders;
use App\Models\Buy_Req;
use Illuminate\Http\Request;
Use Redirect;
use Illuminate\Support\Facades\Hash;
use Storage;

class UserController extends Controller
{
    public function bookmarks()
    {
        return view('user.bookmarks');
    }

    public function buy_req_cat($cat)
    {
        $data=Buy_Req::where(['active'=>1 ,'scriptolutioncategory'=>$cat])->get();
        return view('user.buyer_request',['req'=>$data ]);

    }

    public function balance()
    {
        return view('user.balance');
    }
    public function sendoffer()
    {
        $data=Posts::select('gtitle','PID')->get();
        return view('user.sendoffer',['data'=>$data]);
    }
    public function sendoffer_save(Request $request,$id)
    {
        $data=Offer::create([
        'REQUESTID'=> $id,
        'USERID' => auth()->user()->id,
        'scriptolutionmsg'=> $request->input('gdesc'),
        'PID'=>$request->input('gjobscriptolution')
        ]);
        return redirect('buyer_request');
    }

    public function buyer_request()
    {
        $name=[];
        $data=Buy_Req::where('active','=',1)->get();
        
        
        
        return view('user.buyer_request',['req'=>$data ]);
    }
    
    public function create_job()
    {
        return view('user.create_job');
    }

    public function create_job_save(Request $request)
    {
        $file=$request->file('gphoto');
        $file2=$request->file('gphoto2');
        $file3=$request->file('gphoto3');
        $fileg=$request->file('instantfile');

        
        
        if(isset($file))
                {

                $filewex=$file->getClientOriginalName();
                $file_name=pathinfo($filewex,PATHINFO_FILENAME);
                $ex= $file->getClientOriginalExtension();
                $store_name=$file_name."_".time().uniqid().".".$ex;
                $path=$file->move('pics/',$store_name);    
        
        }
        else{
      
            $store_name="none";
         
        }

        $morepic=$request->input('more-photos');
        if(isset($morepic))
                {
                   
                    if(isset($file2) && !isset($file3) )
                    {
                        $filewex2=$file2->getClientOriginalName();
                        $file_name2=pathinfo($filewex2,PATHINFO_FILENAME);
                        $ex2= $file2->getClientOriginalExtension();
                        $store_name2=$file_name2."_".time().uniqid().".".$ex2;
                        $path2=$file2->move('pics/',$store_name2);
                        $store_name3="none";
                    }
                    else if(isset($file3) && !isset($file2))
                    {
                        $filewex3=$file3->getClientOriginalName();
                        $file_name3=pathinfo($filewex3,PATHINFO_FILENAME);
                        $ex3= $file3->getClientOriginalExtension();
                        $store_name3=$file_name3."_".time().uniqid().".".$ex3;
                        $file3->move("pics/",$store_name3);
                        $store_name2="none";
                    }
                    else
                    {
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

                    }
                }
        else{
                    $store_name2="none";
                    $store_name3="none";
         }
                
         $date=$request->input('gdays');
        if(isset($fileg))
        {
            $filewexg=$fileg->getClientOriginalName();
            $file_nameg=pathinfo($filewexg,PATHINFO_FILENAME);
            $exg= $fileg->getClientOriginalExtension();
            $code=time().rand();
            $store_nameg=$code.".".$exg;
            $pathg=$fileg->move('files/',$store_nameg);
            $store_nameg=$code;
            $date=0;

        }
        else
        {
            $store_nameg=0;
        }

        $multipleme= $request->input('multipleme');
        if(isset($multipleme))
        {
            $mul=$request->input('multiplemax');
        }
        else{
            $mul=0;
        }
     
        $shipme= $request->input('shipme');
        if(isset($shipme))
        {
            $s1=$request->input('scriptolutionship1');
            $s2=$request->input('scriptolutionship2');
            $sc=$request->input('country');

        }
        else{
            $s1=0;
            $s2=0;
            $sc=0;
        }
        $iurl= $request->input('instanturl');
        if(!isset($iurl))
        {
            $iurl="none";
        }

        $youtube= $request->input('gyoutube');
        if(!isset($youtube))
        {
            $youtube=0;
        }
        $extrasme= $request->input('extrasme');
        if(isset($extrasme))
        {
            $ex=1;
        }
        else
        {
            $ex=0;
        }
        
        $data=Posts::create([
            'USERID'=>auth()->user()->id,
            'gtitle' => $request->input('gtitle'),
            'price'=>$request->input('prices') ,
            'category' => $request->input('gcat') ,
            'gdesc' => $request->input('gdesc') ,
            'ginst' => $request->input('ginst') ,
            'gtags' => $request->input('gtags'),
            'days' => $date,
            'iurl'=> $iurl,
            'ifile'=> $store_nameg,
            'p1'=>$store_name,
            'p2'=>$store_name2,
            'p3'=>$store_name3,
            'scriptolution_add_multiple'=>$mul,
            'youtube'=>$youtube,
            'scriptolutionship1'=>$s1,
            'scriptolutionship1to'=>$sc,
            'scriptolutionship2'=>$s2,
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
            'scriptolutionjoblocation'=>'none',
            'short'=>"none",
            'extras'=>$ex
    
    
        ]);
        
        if(isset($extrasme))
        {
            $i=1;
            while($i<4)
            {
                $edata=Extra::create([
                    'PID'=>$data->id,
                    'etitle'=>$request->input('extra'.$i),
                    'eprice'=>$request->input('extraprice'.$i),
                    'ctp'=>0
                ]);
                $i++;
            }
        }
       

        return redirect('/user/'.auth()->user()->username);
    }

    public function inbox()
    {
        return view('user.inbox');
    }
    public function purchases()
    {
        return view('user.purchases');
    }
//complete

    public function manage_order()
    {
        $data=Orders::all();
        return view('user.manage_order',['orders'=>$data]);
    }

    public function manage_gig(Request $request,$status)
    {
        //suspended or cancelled 2 for user 4 for admin
        //active 1
        //complete 5
        //delivered 4
        $check=0;
        if($status=='suspend')
        {
            $value=2;
            
        }
        elseif($status=='active'){
            $value=1;
        }
        elseif($status=='delete'){
            $check=1;
        }
        if($check!=1)
        {
        $gig=$request->input(['gig']);
            foreach($gig as $x)
            {
                $data=Posts::where('PID',$x)->update([
                    'active' => $value
    
                ]);
            }
        }
        else{
            foreach($gig as $x)
            {
                $data=Posts::where('PID',$x)->delete();
            }

        }
        return Redirect::back();
    }

    public function myjobs()
    {
        $data=User::find(auth()->user()->id);
        return view('user.myjobs')->with('user',$data);
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

    public function post_request_save(Request $request)
    {
        $data = Buy_Req::create([
            
            'USERID' => auth()->user()->id	,
            'scriptolutiondesc'=> $request->input('gdesc'),	
            'scriptolutioncategory'	=> $request->input('gcat'),
            'scriptolutiondays' => $request->input('gdays')	,
            'time_added'=> time()	,
            'active'=>0	,
            'pip'=>$request->ip()	,
            'scriptolutionprice'=>$request->input('gprice')

        ]);
        return redirect('/buyer_request');
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
