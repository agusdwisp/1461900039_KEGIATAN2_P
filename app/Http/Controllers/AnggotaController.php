<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AnggotaController extends Controller
{
    public function index(){
        $anggota = DB::table('anggota')->get();
        return view('anggota0039',['anggota'=> $anggota]);

}   public function cari(request $request){
    $anggota = $request->lihat;
    $anggota = DB::table('anggota')->where('anggota_nama','like',"%".$anggota."%")->paginate();
    return view('anggota0039',['anggota'=>$anggota]);

}   public function join(){
        $anggota = DB::table('anggota')
        ->join('pinjam', 'anggota.anggota_id', '=', 'pinjam.anggota_id')
        ->select('anggota.anggota_id', 'anggota.anggota_nama', 'anggota.anggota_alamat' , 'pinjam.tgl_pinjam','anggota.anggota_telp')
        ->get();
        return view('join0039',['anggota'=>$anggota]);

}   public function masuk(request $request){
    $cari = $request->lihat;
    $anggota = DB::table('anggota')
    ->join('pinjam', 'anggota.anggota_id', '=', 'pinjam.anggota_id')
    ->select('anggota.anggota_id', 'anggota.anggota_nama', 'anggota.anggota_alamat' , 'pinjam.tgl_pinjam','anggota.anggota_telp')->where('anggota_nama','like',"%".$cari."%")
    ->get();
    return view('join0039',['anggota'=>$anggota]);
    }
}