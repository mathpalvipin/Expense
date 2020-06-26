<?php

namespace App\Http\Controllers;
use App\expense;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function store (Request $request ) {

      $add=expense::create([
     'user_id'=>auth()->id(),
     'name'=>$request->name,
     'rs'=>$request->rs
      ]

      );
return 123;
    }
public function  get()
{
    $get = expense::where('user_id',auth()->id())->orderBy('id','DESC')->get();
    return $get;
}
public function del ($ex) {
   
     $get=expense::find($ex);
     $get->delete();
     
}
public function edit (Request $request){

    $get = expense::find($request->id);
    $get ->name=$request->name;
    $get->rs=$request->rs;
    $get->save();
}
}
