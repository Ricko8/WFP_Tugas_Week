<?php

namespace App\Http\Controllers;

use App\Medicine;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function front_index()
    {
        $medicines= Medicine::all();
        return view('frontend.product',compact('medicines'));
    }

    public function addToCart($id)
    {
        $m=Medicine::find($id);
        $cart=session()->get('cart');
        if(!isset($cart[$id]))
        {
            $cart[$id]=[
                "name"=>$m->generic_name,
                // "quantity"=>1,
                "price"=>$m->price
                // "photo"=>$m->image
            ];
        } else
        {
            $cart[$id]['quantity']++;
        }
        session()->put('cart',$cart);
        return redirect()->back()->with("success","Medicine added to cart successfully!");


        //if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])){
            $cart[$id]['quantity']++;
            session()->put('cart',$cart);
            return redirect()->back()->with("success","Medicine added to cart successfully!");
        }

        //if item not exist in cart then add to cart with quantity = 1
        $cart[$id] =[
            "name"=>$m->generic_name,
                // "quantity"=>1,
            "price"=>$m->price
                // "photo"=>$m->image
        ];

        session()->put('cart',$cart);
        return redirect()->back()->with("success","Medicine added to cart successfully!");
    }

    public function cart()
    {
        return view('frontend.cart');
    }

    public function index()
    {
        //query dengan raw
        // $queryRaw = DB::select(DB::raw("select * from medicines"));

        //query builder
        $queryBuilder = DB::table('medicines')->get();

        //query dengan model
        // $queryModel = Medicine::all();

        return view('medicine.index',['data'=>$queryBuilder]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medicine.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function show($medicine)
    {
        //select * from medicines where id = $medicine
        $res = Medicine::find($medicine);
        $message="";    
        if($res){
            //apabila ditemukan
            $message =$res;
        }
        else{
            //apabila tidak ditemukan
            $message=NULL;
        }
        return view('medicine.show',compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicine $medicine)
    {
   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicine $medicine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicine $medicine)
    {
        //
    }
}
