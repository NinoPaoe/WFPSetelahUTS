<?php

namespace App\Http\Controllers;

use App\Category;
use App\Medicine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $listdata = DB::select(DB::raw("SELECT * FROM medicines"));
        // $listdata = DB::table('med')->get();
        $listdata = Medicine::all();

        return view('medicine.index', compact('listdata'));
    }

    public function week4()
    {
        $listdata = DB::table('medicines')
            ->join('categories', 'medicines.category_id', '=', 'categories.id')
            ->where('medicines.category_id', '=', 1)
            ->select('medicines.*', 'categories.name as category_name')
            ->get();

        return view('medicine.obatKategori', compact('listdata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dataCat = Category::all();
        $dataSup = Supplier::all();
        $dataMed = Medicine::all();

        return view("medicine.create", compact('dataCat', 'dataSup', 'dataMed'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Medicine;
        $data->generic_name = $request->generic_name;
        $data->form = $request->form;
        $data->restriction_formula = $request->restriction_formula;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->category_id = $request->category_id;
        $data->faskes1 = $request->faskes1;
        $data->faskes2 = $request->faskes2;
        $data->faskes3 = $request->faskes3;
        $data->image = $request->image;
        $data->supplier_id = $request->supplier_id;
        $data->save();
        return redirect('obat')->with('status', 'Medicine is added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function show($medicine)
    {
        $res = Medicine::find($medicine);
        $msg = "";
        if($res){
            $msg = $res;
        }
        else{
            $msg = null;
        }
        return view('medicine.show', compact('msg'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicine $medicine)
    {
        $medicine = Medicine::find($medicine);
        $data = $medicine;
        return view('medicine.edit', compact('data'));
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
        $medicine->generic_name=$request->get('generic_name');
        $medicine->form=$request->get('form');
        $medicine->restriction_formula=$request->get('restriction_formula');
        $medicine->price=$request->get('price');
        $medicine->description=$request->get('description');
        $medicine->category_id=$request->get('category_id');
        $medicine->faskes1=$request->get('faskes1');
        $medicine->faskes2=$request->get('faskes2');
        $medicine->faskes3=$request->get('faskes3');
        $medicine->image=$request->get('image');
        $medicine->supplier_id=$request->get('supplier_id');
        $medicine->save();
        return redirect()->route('obat.index')->with('status', 'Medicine data is changed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicine $medicine)
    {
        $this->authorize('delete-permission', $medicine);

        try {
            $data = Medicine::find($medicine);
            $data->delete();
            return redirect()->route('obat.index')->with('status', 'Data obat berhasil dihapus');
        } catch (\PDOEXCEPTION $e) {
            $msg = "Data obat gagal dihapus. Pastikan data child sudah hilang atau tidak berhubungan";

            return redirect()->route('obat.index')->with('error', $msg);
        }
    }

    public function showInfo()
    {
        $result = Medicine::orderBy('price', 'DESC')->first();
        return response()->json(array(
            'status' => 'oke',
            'msg' => "<div class='alert alert-info'>
            Did you know? <br>The most expensive product is " . 
            $result->generic_name . "</div>"
        ), 200);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function front_index(){
        $medicine = Medicine::all();
        return view('frontend.product', compact('medicine'));
    }

    public function addToCart($id){
        $m = Medicine::find($id);
        if (!$m) {
            abort('404');
        }
        $cart = session()->get('cart');
        if(!isset($cart[$id])){
            $cart[$id]=[
                "name"=>$m->generic_name,
                "quantity"=>1,
                "price"=>$m->price,
                "photo"=>$m->image
            ];
        }else{
            $cart[$id]['quantity']++;
        }
        session()->put('cart',$cart);
        return redirect()->back()->with('success', 'Medicine added to cart successfully!');
    }

    public function cart(){
        return view('frontend.cart');
    }
}
