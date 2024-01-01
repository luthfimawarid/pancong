<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
use App\Models\User;

class customerController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = User::all(); // Menggunakan model Customer dengan nama yang benar
        return view("admin.isi.customer.index", compact('customers'));
    }

    public function cusindex()
    {
        return view('admin.isi.customer.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customer = new customer();
        return view('CRUD.tambah', compact('customer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = new customer();
        $customer->id = $request->id;
        $customer->username = $request->username;
        $customer->alamat = $request->alamat;
        $customer->email = $request->email;
        $customer->nomor_tlp = $request->nomor_tlp;
        $customer->password = $request->password;
        $customer->jenis_kelamin = $request->jenis_kelamin;
        $customer->save();

        return redirect('/customer');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = customer::find($id);
        return view('CRUD.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $customer = new customer();
        $customer->id = $request->id;
        $customer->username = $request->username;
        $customer->alamat = $request->alamat;
        $customer->email = $request->email;
        $customer->nomor_tlp = $request->nomor_tlp;
        $customer->password = $request->password;
        $customer->jenis_kelamin = $request->jenis_kelamin;
        $customer->save();

        return redirect('/customer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = customer::find($id);
        $customer->delete();

        return redirect('/customer');
    }
}
