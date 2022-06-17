<?php

namespace App\Http\Controllers;

use App\Category;
use App\Medicine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $queryBuilder = DB::table('categories')->get();

        //query dengan model
        // $queryModel = Medicine::all();

        return view('category.index',['data'=>$queryBuilder]);
        //Select c.name, m.generic_name, MAX(m.price) as price from medicines as m inner join categories as c on m.category_id = c.id;

        // 1. Show all drug category data
        // Query Builder
        // $data = DB::table('categories')->get();
        // Elequent
        // $data = Category::all();
        // return dd($data);

        // 2. Show all medicines name, fomulas, and prices
        // Query Builder
        // $data = DB::table('medicines')
        // ->select('generic_name','restriction_formula','price')
        // ->get();
        // Elequent
        // $data = Medicine::select('generic_name','restriction_formula','price')->get();
        // return dd($data);

        // 1. Show all medicines name, formulas, and category name 
        // Query Builder
        // $data = DB::table('categories')
        //         ->select('medicines.generic_name','medicines.restriction_formula', 'categories.name')
        //         ->join('medicines','categories.id','=','medicines.category_id')
        //         ->get();
        // Elequent
        // $data = Category::select('medicines.generic_name','medicines.restriction_formula', 'categories.name')->join('medicines', 'categories.id', '=', 'medicines.category_id')->get();
        // return dd($data);

        // 1.Display of the number of categories that have data on medicines
        // Query Builder
        // $data = DB::table('medicines')
        //         ->select(DB::raw('COUNT(categories.id) AS Jumlah'))
        //         ->join('categories','categories.id','=','medicines.category_id')->groupBy('categories.id')
        //         ->get();
        // Elequent
        // $data = Medicine::select(DB::raw('COUNT(categories.id) AS Jumlah'))
        //             ->join('categories','categories.id','=','medicines.category_id')
        //             ->groupBy('categories.id')
        //             ->get();
        // return dd($data);

        // 2.Show the name of the categories that have data on medicines
        // Query Builder
        // $data = DB::table('categories')
        //         ->select('categories.name'])
        //         ->leftJoin('medicines','medicines.category_id','=','categories.id')->where(DB::raw('medicines.category_id = 0'))
        //         ->get();
        // Elequent
        // $data = Category::select('categories.name')
        //     ->leftJoin('medicines', 'medicines.category_id', '=', 'categories.id')->where(DB::raw('medicines.category_id = 0'))
        //     ->get();
        // return dd($data);

        // 3.Show the average price of each drug category. If there is no medicine then give 0
        // Query Builder
        // $data = DB::table('medicines')
        //         ->select(DB::raw('IFNULL(AVG(medicines.price),0) as rerata'))
        //         ->rightJoin('categories','categories.id','=','medicines.category_id')->groupBy('categories.id')
        //         ->get();
        // Elequent
        // $data = Medicine::select(DB::raw('IFNULL(AVG(medicines.price),0) as rerata'))
        //     ->rightJoin('categories', 'categories.id', '=', 'medicines.category_id')->groupBy('categories.id')
        //     ->get();
        // return dd($data);

        // 4.Show drug categories that have only 1 medicine product
        // Query Builder
        // $data = DB::table('medicines')
        //         ->select('categories.name')
        //         ->join('categories','categories.id','=','medicines.category_id')
        //         ->groupBy('categories.name')
        //         ->havingRaw('COUNT(categories.id) = ?', [1])
        //         ->get();
        // Elequent
        // $data = Medicine::select('categories.name')
        //     ->join('categories', 'categories.id', '=', 'medicines.category_id')->groupBy('categories.name')->havingRaw('COUNT(categories.id) = ?', [1])
        //     ->get();
        // return dd($data);

        // 5.Show drugs that have one form
        // Query Builder
        // $data = DB::table('medicines')
        //         ->select('generic_name as name')
        //         ->groupBy('generic_name')
        //         ->havingRaw('COUNT(generic_name) = ?', [1])
        //         ->get();
        // Elequent
        // $data = Medicine::select('generic_name as name')
        // ->groupBy('generic_name')
        // ->havingRaw('COUNT(generic_name) = ?', [1])
        // ->get();
        // return dd($data);

        // 6.Display the category and name of the drug that has the highest price 
        // Query Builder
        // $data = DB::table('medicines')
        //         ->select('categories.name','medicines.generic_name')
        //         ->join('categories','categories.id','=','medicines.category_id')
        //         ->orderByDesc('medicines.price')
        //         ->limit(1)
        //         ->get();
        // Elequent
        // $data = Medicine::select('categories.name', 'medicines.generic_name')
        //     ->join('categories', 'categories.id', '=', 'medicines.category_id')
        //     ->orderByDesc('medicines.price')
        //     ->limit(1)
        //     ->get();
        // return dd($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }

    public function showList($id_category)
    {
        $data = DB::table('categories')->get();
        // return dd($data);
        //Method#1: Query Builder
        // $data = DB::table('categories')
        //         ->join('medicines','categories.id','=','medicines.category_id')
        //         ->where('categories.id','=',$id_category)
        //         ->get();

        // $getTotalData = $data->count();


        //Method#2: Eloquent
        // $data = Category::find($id_category);
        // $namecategory= $data->name;
        // //with find statement, the 'data' will return as single model/class
        // $result = $data->medicines;
        // //->medicines is Relationship Eloquement model and will return ArrayList/Collections because it has 'hasMany' statement.
        // if($result)
        //     $getTotalData = $result->count();
        // else $getTotalData = 0;

        // return view('report.list_medicines_by_category',compact('id_category','namecategory','result','getTotalData'));


    }
}
