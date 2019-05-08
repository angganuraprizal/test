<?php

namespace App\Http\Controllers;

use File;
use App\Barang;
use App\Kategori;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangs = Barang::with('kategori')->get();
        return view('barang.index',compact('barangs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();     
        return view('barang.create',compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama_barang' => 'required',
            'kategori_id' => 'required',
            'harga' => 'required',
            'foto1' => 'required',
            'deskripsi' => 'required'
        ]);

        $barangs = new Barang;
        $barangs->nama_barang = $request->nama_barang;
        $barangs->slug = str_slug($request->nama_barang, '-');
        $barangs->kategori_id = $request->kategori_id;
        $barangs->harga = $request->harga;
        $barangs->deskripsi = $request->deskripsi;
        if ($request->hasFile('foto1')) {
            $file = $request->file('foto1');
            $destinationPath = public_path().'/img/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadsucces = $file->move($destinationPath, $filename);
            $barangs->foto1 = $filename;
        }
        if ($request->hasFile('foto2')) {
            $file = $request->file('foto2');
            $destinationPath = public_path().'/img/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadsucces = $file->move($destinationPath, $filename);
            $barangs->foto2 = $filename;
        }
        if ($request->hasFile('foto3')) {
            $file = $request->file('foto3');
            $destinationPath = public_path().'/img/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadsucces = $file->move($destinationPath, $filename);
            $barangs->foto3 = $filename;
        }
        if ($request->hasFile('foto4')) {
            $file = $request->file('foto4');
            $destinationPath = public_path().'/img/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadsucces = $file->move($destinationPath, $filename);
            $barangs->foto4 = $filename;
        }
        $barangs->save();
        return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barangs = Barang::findorFail($id);
        return view('blog.blog-single',compact('barangs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barangs = Barang::findOrFail($id);
        $kategori = Kategori::all();
        $selectedKategori = barang::findOrFail($id)->kategori_id;
        return view('barang.edit',compact('barangs','kategori','selectedKategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama_barang' => 'required|max:255',
            'kategori_id' => 'required|',
            'harga' => 'required',
            'deskripsi' => 'required'
        ]);
        $barangs = Barang::findOrFail($id);
        $barangs->nama_barang = $request->nama_barang;
        $barangs->slug = str_slug($request->nama_barang, '-');
        $barangs->kategori_id = $request->kategori_id;
        $barangs->harga = $request->harga;
        $barangs->deskripsi = $request->deskripsi;
        if ($request->hasFile('foto1')) {
            $file = $request->file('foto1');
            $destinationPath = public_path().'/img/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadsucces = $file->move($destinationPath, $filename);
            if ($barangs->foto1){
                $old_foto = $barangs->foto1;
                $filepath = public_path() . DIRECTORY_SEPARATOR . '/img/'
                . DIRECTORY_SEPARATOR . $barangs->foto1;
                try{
                    file::delete($filepath);
                } catch (FileNotFoundException $e) {

                }
            }
            $barangs->foto1 = $filename;
        }
        if ($request->hasFile('foto2')) {
            $file = $request->file('foto2');
            $destinationPath = public_path().'/img/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadsucces = $file->move($destinationPath, $filename);
            if ($barangs->foto2){
                $old_foto = $barangs->foto2;
                $filepath = public_path() . DIRECTORY_SEPARATOR . '/img/'
                . DIRECTORY_SEPARATOR . $barangs->foto2;
                try{
                    file::delete($filepath);
                } catch (FileNotFoundException $e) {

                }
            }
            $barangs->foto2 = $filename;
        }
        if ($request->hasFile('foto3')) {
            $file = $request->file('foto3');
            $destinationPath = public_path().'/img/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadsucces = $file->move($destinationPath, $filename);
            if ($barangs->foto3){
                $old_foto = $barangs->foto3;
                $filepath = public_path() . DIRECTORY_SEPARATOR . '/img/'
                . DIRECTORY_SEPARATOR . $barangs->foto3;
                try{
                    file::delete($filepath);
                } catch (FileNotFoundException $e) {

                }
            }
            $barangs->foto3 = $filename;
        }
        if ($request->hasFile('foto4')) {
            $file = $request->file('foto4');
            $destinationPath = public_path().'/img/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadsucces = $file->move($destinationPath, $filename);
            if ($barangs->foto4){
                $old_foto = $barangs->foto4;
                $filepath = public_path() . DIRECTORY_SEPARATOR . '/img/'
                . DIRECTORY_SEPARATOR . $barangs->foto4;
                try{
                    file::delete($filepath);
                } catch (FileNotFoundException $e) {

                }
            }
            $barangs->foto4 = $filename;
        }
        $barangs->save();
        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barangs = Barang::findOrFail($id);
        $barangs->delete();
        return redirect()->route('barang.index');
    }
}
