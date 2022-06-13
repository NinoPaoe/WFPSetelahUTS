<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listdata = Category::all();

        return view('category.index', compact('listdata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("category.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Category();
        $data ->name = $request->get('name');
        $data ->address = $request->get('description');
        $data->save();
        return redirect()->route('kategori_obat.index')->with('status', 'Category is added');    

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
    public function edit($category)
    {
        $category = Category::find($category);
        return view('category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $category)
    {
        $category = Category::find($category);
        $category->name = $request->get('name');
        $category->description = $request->get('description');
        $category->save();
        return redirect()->route('kategori_obat.index')->with('status', 'Category data is changed');
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

    public function listCategory(){
        //DBQuery
        // $data = DB::table('categories')->get();

        //Eloquent Model
        $data = Category::get();

        //dd($data);

        return view('', compact('data'));
    }

    public function countNumOfCatWithMed(){
        //DBQuery
        // $data = DB::table('categories')
        // ->join('medicines', 'categories.id', '=', 'medicines.category_id')
        // ->distinct()
        // ->count('categories.id');

        //Eloquent Model
        $data = Category::join('medicines', 'categories.id', '=', 'medicines.category_id')
        ->distinct()
        ->count('categories.id');

        //dd($data);

        return view('', compact('data'));
    }

    public function nameCatNoMed(){
        //DBQuery
        // $data = DB::table('categories')
        // ->leftjoin('medicines', 'categories.id', '=', 'medicines.category_id')
        // ->where('medicines.category_id')
        // ->select('categories.name')
        // ->get();

        //Eloquent Model
        $data = Category::leftjoin('medicines', 'categories.id', '=', 'medicines.category_id')
        ->where('medicines.category_id')
        ->select('categories.name')
        ->get();

        //dd($data);

        return view('', compact('data'));
    }

    public function catOneMed(){
        //DBQuery
        // $data = DB::table('categories')
        // ->join('medicines', 'categories.id', '=', 'medicines.category_id')
        // ->groupby('categories.id', 'categories.name', 'categories.description')
        // ->having(DB::raw('count(medicines.category_id)'), 1)
        // ->get();

        //Eloquent Model
        $data = Category::join('medicines', 'categories.id', '=', 'medicines.category_id')
        ->groupby('categories.id', 'categories.name', 'categories.description')
        ->having(DB::raw('count(medicines.category_id)'), 1)
        ->get();

        dd($data);

        return view('', compact('data'));
    }

    public function showProducts(){
        $id = $_POST['category_id'];
        $cat = Category::find($id);
        $nama = $cat->name;
        $data = $cat->medicines;
        return response()->json(array(
            'status'=>'oke',
            'msg'=>view('category.showProducts', compact('nama','data'))->render()
        ),200);
    }

    public function showlist($id_category)
    {
        //Method eloquent
        $data = Category::find($id_category);
        $namecategory = $data->name;
        $result = $data->medicines;
        if($result){
            $getTotalData = $result->count();
        }
        else{
            $getTotalData = 0;
        }
        return view('report.listmedicine', compact('id_category','namecategory','result','getTotalData'));
    }
}
