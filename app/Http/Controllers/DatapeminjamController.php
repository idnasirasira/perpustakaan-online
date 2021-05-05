<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Datapeminjam;
use App\Models\Book;
use App\Models\User;
class DatapeminjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }
    public function list(Datapeminjam $datapeminjam)
    {
        $datapeminjam = Datapeminjam::all();
        return view('page.datapeminjam.list', ['datapeminjam' => $datapeminjam]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        $datapeminjam = Datapeminjam::all();
        return view('page.datapeminjam.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'id_peminjam' => 'required',
            'jumlah_pinjam' => 'required',
            'tanggal_kembali' => 'required',
            'denda' => 'required'
            ]);

        $code = $request->input('code');
        $id_peminjam = $request->input('id_peminjam');
        $jumlah_pinjam = $request->input('jumlah_pinjam');
        $tanggal_kembali = $request->input('tanggal_kembali');
        $denda = $request->input('denda');


        $book = collect(Book::where('code', $code)->get()->first());
        if($book->isEmpty()){
            return redirect()->back();
        }

        $peminjam = collect(User::find($id_peminjam));
        if($peminjam->isEmpty()){
            return redirect()->back();
        }

        $stok =  $book['stok'];
        $price = $book['price'];

        if($stok < $jumlah_pinjam){
            return redirect()->back();
        }

        
        $tanggal_pinjam = new \DateTime(date('Y-m-d'));
        $tanggal_kembali = new \DateTime(date('Y-m-d', strtotime($tanggal_kembali)));

        $diff = date_diff($tanggal_pinjam, $tanggal_kembali);
        $total_hari_pinjam = $diff->days;

        $total_harga =  $jumlah_pinjam * ($total_hari_pinjam * $price);
        $total_denda =  $denda * 0;
        $datapeminjam = new Datapeminjam;

        try {
            $datapeminjam->code = $code;
            $datapeminjam->id_peminjam = $id_peminjam;
            $datapeminjam->jumlah_pinjam = $jumlah_pinjam;
            $datapeminjam->tanggal_kembali = $tanggal_kembali;
            $datapeminjam->denda = $denda;
            $datapeminjam->total_harga = $total_harga;
            $datapeminjam->total_denda = $total_denda;

            $datapeminjam->save();

            
            $book = Book::find($book['id']);
            $book->stok = $stok-$jumlah_pinjam;
            $book->save();
        } catch (\Throwable $th) {
            throw $th;
        }

        return redirect('datapeminjam')->with('status','Data Berhasil di tambahkan');
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
    public function edit(Datapeminjam $datapeminjam)
    {
            return view ('page.datapeminjam.edit', compact('datapeminjam'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Datapeminjam $datapeminjam)
    {
        
        Datapeminjam::where('id', $datapeminjam->id)
            ->update([
                'total_harga' => $request->denda,
                'tanggal_pengembalian' => $request->tanggal_pengembalian
            ]);


            // $denda = $datapeminjam['denda']; 
            $tanggal_pengembalian = $request->input('tanggal_pengembalian');
            $denda = $request->input('denda');

            $tanggal_kembali = $datapeminjam['tanggal_kembali'];
            $tanggal_kembali = new \DateTime(date('Y-m-d', strtotime($tanggal_kembali)));
            $tanggal_pengembalian = new \DateTime(date('Y-m-d', strtotime($tanggal_pengembalian)));
            $diff = date_diff($tanggal_kembali, $tanggal_pengembalian);
            $total_hari_pinjam = $diff->days;
            $total_denda =  $total_hari_pinjam * $denda;

            try {
                $datapeminjam->tanggal_pengembalian = $tanggal_pengembalian;
                $datapeminjam->denda = $denda;
                $datapeminjam->total_denda = $total_denda;
    
                $datapeminjam->save();

                $book = Book::where('code', $datapeminjam->code)->get()->first();
                $stok =  $book['stok'];
                $dikembalikan = $datapeminjam->jumlah_pinjam;

                $book->stok = $stok + $dikembalikan;
                $book->save();

            } catch (\Throwable $th) {
                throw $th;
            }

        return redirect('datapeminjam')->with('status','Buku Telah dikembalikan');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
