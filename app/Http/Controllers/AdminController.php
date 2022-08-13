<?php

namespace App\Http\Controllers;

use App\Models\About_us;
use App\Models\Blog;
use App\Models\Contact_us;
use App\Models\Order;
use App\Models\Quote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File as FacadesFile;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\File;
use stdClass;

class AdminController extends Controller
{
    // public function  dashboard(Request $request){
    //     return view('admin.dashboard');
    // }
    public function __construct()
    {
        $this->middleware('auth')->except(['login', 'logout' ]);
    }

    // public function dashboard() {
    //     $allContact = Contact_us::all();
    //     $allBlog = Blog::all();
    //     // dd('hello');
    //     return view('admin.dashboard', compact('allContact', 'allBlog'));
    // }

    public function edit_calculator(Request $request) {
        if($request->isMethod('POST')){
            $validation = $request->validate([
                'km' => 'required',
                'kg' => 'required',
                'ocean' => 'required',
                'land' => 'required',
                'air' => 'required',
            ]);

            Quote::where('id', 1)-> update([
                'km'=>$request->km,
                'kg'=>$request->kg,
                'ocean'=>$request->ocean,
                'land'=>$request->land,
                'air'=>$request->air,
            ]); 
            return redirect('/edit_calculator');
            // dd($request);
        }
        $quote = Quote::all()->first();
        // dd($quote['kg']);
        return view('admin.edit_calculator', compact('quote'));
    }



    public function dash_contact_us(Request $request){

        if($request->has('id')){
            // dd('hello');
            $messageDetails = Contact_us::where('id', $request->id)->first();
            // dd($messageDetails);
            return view('admin.dash_single_contact', compact('messageDetails'));
        }
        $allContact = Contact_us::all();
        $allContact= Contact_us::paginate(5);
        return view('admin.db_contact_us', compact('allContact'));
    }

    public function orders(Request $request){
        if($request-> isMethod('post')){
            // dd('hello');
            // dd($request->all());
            Order::where('trackingid', $request->trackingid)->update(['status'=>$request->status]);
            $allOrder = Order::all();
            $allOrder = Order::paginate(4);
            return view('admin.dash_orders', compact('allOrder'));
        }
        
        if($request->has('mode')){
            if($request->mode == 'edit'){
                // dd('hello');
                $order = Order::where('id', $request->id)->first();
                // dd($order);
                return view('admin.dash_order_edit', compact('order'));
            }
        }
        if($request->has('id')){
            // dd('hello');
            $order = Order::where('id', $request->id)->first();
            // dd($order);
            return view('admin.dash_single_order', compact('order'));
        }
        $allOrder = Order::all();
        $allOrder = Order::paginate(4);
        // dd($allOrder);
        return view('admin.dash_orders', compact('allOrder'));
    }


    public function about_us(Request $request){
        if($request-> isMethod('post')){
            // dd('hello');
            // dd($request->all());
            $validation = $request->validate([
                'content' => 'required',
                'content2' => 'required',
                'content3' => 'required',
            ]);

            About_us::where('id', $request->id)->update([
                'content'=>$request->content,
                'content2'=>$request->content2,
                'content3'=>$request->content3,
            ]);

            $allInfo = About_us::all();
            return view('admin.dash_about_us', compact('allInfo'));
        }
        if($request->has('id')){
            // dd('hello');
            $info = About_us::where('id', $request->id)->first();
            // dd($allInfo);
            return view('admin.dash_about_us_edit', compact('info'));
        }

        
        $allInfo = About_us::all();
        return view('admin.dash_about_us', compact('allInfo'));
    }


    public function blogs(Request $request){

        if($request-> isMethod('post')){
            $validation = $request->validate([
                'title' => 'required',
                'priority' => 'required',
                'image' => 'required',
                'editedBy' => 'required',
                'description' => 'required',
                'content2' => 'required',
                'content3' => 'required',
            ]);
            
            $data =  $request->all();

            $img_name = $request->file('image')->getClientOriginalName();

            // $img_path = $request->file('image')->store('public/images');// this does not save to the public folder
            


            // if($request->has('id')){  
            //     // dd($request->id);
            //     $old_name = Blog::find((int)$request->id)->imageName;
            //     (FacadesFile::delete(public_path('images').'\\'. $old_name));
            //     // dd($old_name);
            // }

            $img_path = $request->image->move(public_path('images'), $img_name);//->all();
            // $img_path = $request->file->store('product', 'public');
            
            $real_path = ".".strstr($img_path ,"\public",false);
            // dd($img_path->getRealPath());

            // $data['img_name'] = $img_name;
            $data['imageName'] = $img_name;
            $data['imagePath'] = $real_path;
            $data['content'] = $request->description;
            $data['content2'] = $request->content2;
            $data['content3'] = $request->content3;


            
            
            // $deleted = Storage::disk('public')->delete('\images\17.png');
            // $deleted = Storage::disk('public')->delete($img_path);
            // dd(public_path('images').'\17.png');
            
            // dd($deleted);
            if($request->has('id')){  
                // dd($request->id);
                $old_name = Blog::find($request->id)->imageName;
                
                // dd($old_name);   
                // dd('request has id');                 
                // $deleted = Storage::disk('public')->delete('\images\17.png');
                // $deleted = Storage::disk('public')->delete($img_path);
                // dd(FacadesFile::delete($old_name));
                // dd(public_path('images').'\\'. $old_name);
                (FacadesFile::delete(public_path('images').'\\'. $old_name));
                // dd($deleted);
                // dd(public_path('images').'\17.png');

                $savedData = BLog::where('id', $request->id)->update([
                    'content'=>$data['content'],
                    'content2'=>$data['content2'],
                    'content3'=>$data['content3'],
                    'title'=>$data['title'],
                    'priority'=>$data['priority'],
                    'imageName'=>$data['imageName'],
                    'description'=>$data['description'],
                    'imagePath'=>$data['imagePath'],
                    'editedBy'=>$data['editedBy'],

                ]);
                // dd($savedData);
                $allBlog = BLog::all();
                $allBlog = BLog::paginate(5);
                return view('admin.dash_blogs', compact('allBlog'));
            }else{
                // dd('request has no id');    
                // dd($data);
                Blog::create($data);
                
                $allBlog = BLog::all();
                $allBlog = BLog::paginate(5);
                return view('admin.dash_blogs', compact('allBlog'));
            }
        
        }
        if($request -> mode == 'new'){//if mode = new
            // $blog  = new object();
            $blog = new stdClass();
            $blog->content = '';
            $blog->content2 = '';
            $blog->content3 = '';
            $blog->title = '';
            $blog->priority = '';
            $blog->imageName = '';
            $blog->description = '';
            $blog->imagePath = '';
            $blog->editedBy = '';
            // $blog ->mode = 'new';

            return view('admin.dash_blog_edit', compact('blog'));
        }
        elseif($request -> mode == 'edit'){
            // dd('hello');
            $blog = Blog::where('id', $request->id)->first();
            // $blog->mode = 'edit';
            // dd($allInfo);
            return view('admin.dash_blog_edit', compact('blog'));
        }
        elseif($request -> mode == 'delete'){
            $affected = BLog::where('id', $request->id);
            (FacadesFile::delete(public_path('images').'\\'. $affected['imageName']));
            $affected->delete();

            $allBlog = Blog::all();
            $allBlog = BLog::paginate(5);
            return view('admin.dash_blogs', compact('allBlog'));
        }

        $allBlog = Blog::all();
        $allBlog = BLog::paginate(5);
        return view('admin.dash_blogs', compact('allBlog'));
    }




    public function login(Request $request){
        if($request->isMethod('POST')){
            // dd('hello');

            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                return redirect()->intended('orders');
            }
            return back()->with('error', 'Please enter the correct details ');
        }
        if (Auth::check()){
            return redirect()->intended('orders');
        }
        return view('admin.login');
    }

    

    public function logout(Request $request){
        // $user = Auth::user();
        // Auth::logout();
        // dd($user);

        $request->session()->flush();
        // dd('hello');
        return redirect('/login');
    }

}

