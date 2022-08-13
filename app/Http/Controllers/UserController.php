<?php

namespace App\Http\Controllers;

use App\Models\About_us;
use App\Models\Blog;
use App\Models\Contact_us;
use App\Models\Order;
use App\Models\Quote;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('user.index');
    }

    public function about(){
        $about = About_us::find(1);
        // dd($about);
        return view('user.about_us', compact('about'));
    }
    public function blog(Request $request){
        if($request->id>0){
        // dd($id);
            // dd($request);
            $post = Blog::find($request->id);
            $populars = Blog::orderByDesc('priority')->get()->take(2);  
            // dd($post);;   
            // dd($populars);
            return view('user.single_post', compact('post', 'populars'));
        }
        
        $posts = Blog::all();
        $posts = Blog::paginate(5);
        // dd($posts);
        $populars = Blog::orderByDesc('priority')->get()->take(2);   
        // dd($populars);
        return view('user.blog', compact('posts', 'populars'));

    }

    // public function post(Request $request, $id){

    // }

    public function contact_us(Request $request){
        if ($request->isMethod('POST')){

            $validation = $request->validate([
                'name' => 'required|min:10',
                'phone' => 'required|min:10',
                'email' => 'required|email',
                'subject' => 'required',
                'text' => 'required|',
            ]);

            $savedData = Contact_us::create($request->all());

            if($savedData){

                // Mail::to ($request->email )-> send(new verification($data));
                return back() -> with('success', 'Your message has been noted ');
            }else{
                return back() -> with('error', 'There was an error saving your message ');
            }    
        }
        return view('user.contact_us');
    }



    public function quote(Request $request){
        if($request->isMethod('POST')){
            $validation = $request->validate([
                'email' => 'required',
                'name' => 'required',
                'phone' => 'required',
                'weight' => 'required',
                'distance' => 'required',
                'freight' => 'required',
                'dropoff' => 'required',
                'pickup' => 'required',
            ]);
            // return $request->all();
            // return 'hello';
            // session(['key' => 'ss_data']);
            // $request->session()->flush();
            // $request->session()->flash('data', $request->all());
            // return redirect()->route('show_quote', ['quote_data' => $request->all()]);
            // return redirect('/show_quote') -> with("quote_view", $request->all());

            
            $quotes = Quote::where('id', '1');
            
            // dd($quotes->value('ocean'));
            // dd($request->freight);

            switch ($request->freight){
                case 'Air':
                    $freight = $quotes->value('air');
                    break;
                case 'Ocean':
                    $freight = $quotes->value('ocean');
                    break;
                case 'Road':
                    $freight = $quotes->value('land');
                    break;
            }

            $total = $freight + $quotes->value('km')*$request->distance + $quotes->value('kg')*$request->weight;
            $data = $request->all();
            $data['total'] = $total;
            
            // $data = (object)$data;
            // dd($total);

            return redirect()->route('show_quote', $data);
        }
        return view('user.quote');
    }


    public function track_parcel(Request $request){
        if($request->isMethod('POST')){

            // $id = $request->trackingid;
            $data = Order::where('trackingid', $request->trackingid) -> first();

            if($data != null){
                return view('user.tracking_details', compact('data'));
            }
            // dd($details);
            return back() -> with('error', 'wrong tracking ID');
        }

        return view('user.track_parcel');
    }

    public function show_quote(Request $request){
        if($request->isMethod('POST')){
            
            $validation = $request->validate([
                'name' => 'required',
                'email' => 'required',
                'name' => 'required',
                'phone' => 'required',
                'weight' => 'required',
                'distance' => 'required',
                'freight' => 'required',
                'dropoff' => 'required',
                'pickup' => 'required',
            ]);
            
            
            // return $request->all();
            
            $data = $request->all();
            $data['status'] = 'pending';
            $trackingid = strtoupper(uniqid());
            $data['trackingid'] = $trackingid;

            $data['extra1'] = $request->total;

            Order::create($data); 

            // dd($data);
            return view('user.tracking', compact('trackingid'));
            // return redirect('quote') ->with('placed', "your order has been placed. Would you want to place another order");
        }
        // return $request->all();
        // dd($request);

        $data = $request->all();
        $data = (object)$data;

        // $data = $request->session()->all();
        // $data = $request->session()->get('data');
        // return $data;
        return view('user.quote_table', compact(['data']));

    }


}

// protected $table = 'quotes';
// protected $fillable = ['email', 'password', 'coupon', 'verified'];


// name	phone	weight	distance	freight	dropoff	pickup	status	trackingid	transit_time	completed_time
