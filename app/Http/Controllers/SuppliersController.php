<?php

namespace App\Http\Controllers;

use App\Suppliers;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Suppliers::all();
        return view('supplier.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("supplier.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Suppliers();

        $file = $request->file('logo');
        $imgFolder = 'images';
        $imgFile = time()."_".$file->getClientOriginalName();
        $file->move($imgFolder, $imgFile);
        $data->logo = $imgFile;

        $data ->name = $request->get('name');
        $data ->address = $request->get('address');
        $data->save();
        return redirect()->route('suppliers.index')->with('status', 'Supplier is added');    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Suppliers  $suppliers
     * @return \Illuminate\Http\Response
     */
    public function show(Suppliers $suppliers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Suppliers  $suppliers
     * @return \Illuminate\Http\Response
     */
    public function edit($suppliers)
    {
        $suppliers = Suppliers::find($suppliers);
        return view('supplier.edit', compact('suppliers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Suppliers  $suppliers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $suppliers)
    {
        $suppliers = Suppliers::find($suppliers);
        $suppliers->name = $request->get('name');
        $suppliers->address = $request->get('address');
        $suppliers->save();
        return redirect()->route('suppliers.index')->with('status', 'Supplier data is changed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Suppliers  $suppliers
     * @return \Illuminate\Http\Response
     */
    public function destroy($suppliers)
    {
        // $this->authorize('delete-permission', $suppliers);
        $suppliers = Suppliers::find($suppliers);
        try{
            $suppliers->delete();
            return redirect()->route('suppliers.index')->with('status', 'Data Supplier berhasil dihapus');
        } catch (\PDOException $e){
            $msg="Data gagal dihapus. Pastikan data child sudah hilang atau tidak berhubungan";
            return redirect()->route('suppliers.index')->with('error', $msg);
        }
    }

    public function getEditForm(Request $request){
        $id = $request->get('id');
        $data=Suppliers::find($id);
        return response()->json(array(
            'status'=>'oke',
            'msg'=>view('supplier.getEditForm',compact('data'))->render()
        ),200);
    }

    public function getEditForm2(Request $request){
        $id = $request->get('id');
        $data=Suppliers::find($id);
        return response()->json(array(
            'status'=>'oke',
            'msg'=>view('supplier.getEditForm2',compact('data'))->render()
        ),200);
    }

    public function saveData(Request $request)
    {
        $id=$request->get('id');
        $Supplier=Supplier::find($id);
        $Supplier->name=$request->get('name');
        $Supplier->address=$request->get('address');
        $Supplier->save();
        return response()->json(array(
            'status'=>'ok',
            'msg'=>'supplier data updated'
        ),200);
    }

    public function saveDataField(Request $request){
        $id = $request->id;
        $field = $request->field;
        $value = $request->value;

        $suppliers = Suppliers::find($id);
        $suppliers->$field = $value;
        $suppliers->save();
        return response()->json(array(
            'status'=>'oke',
            'msg'=>'Data Berhasil di simpan'
        ),200);
    }
}
