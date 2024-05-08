@php
    $siswa=\App\Models\Siswa::all();
    $satuSiswaAwal=\App\models\Siswa::first();
    $satuSiswaAkhir=\App\models\Siswa::latest('id') ->first();
    $siswaSatu=\App\models\Siswa::find(0);
    $siswaLaki=\App\models\Siswa::where('jenis_kelamin',1 )->get();

@endphp

@foreach ( $siswa as $data )
 nama siswa : {{ $data ->nama}} <br>
 jenis kelamin : {{ $data ->jenis_kelamin}} <br>
 umur : {{ $data ->umur}} <br>
 alamat : {{ $data ->alamat}} <br> <br>
@endforeach

{{-- menampilkan siswa awal --}}
<h1>siswa awal</h1>
 nama siswa : {{ $satuSiswaAwal ->nama}} <br>
 jenis kelamin : {{ $satuSiswaAwal ->jenis_kelamin}} <br>
 umur : {{ $satuSiswaAwal ->umur}} <br>
 alamat : {{ $satuSiswaAwal ->alamat}} <br> <hr>

{{-- menampilkan siswa khir --}}
<h1> siswa akhir</h1>
nama siswa : {{ $satuSiswaAkhir ->nama}} <br>
jenis kelamin : {{ $satuSiswaAkhir ->jenis_kelamin}} <br>
umur : {{ $satuSiswaAkhir ->umur}} <br>
alamat : {{ $satuSiswaAkhir ->alamat}} <br> <hr>

{{-- menampilkan 1 siswa --}}
<h1> 1 siswa</h1>
nama siswa : {{ $siswaSatu ->nama ?? ' not'}} <br>
jenis kelamin : {{ $siswaSatu ->jenis_kelamin ?? 'not'}} <br>
umur : {{ $siswaSatu ->umur ?? ' not'}}<br>
alamat : {{ $siswaSatu ->alamat ??'not'}} <br> <hr>

{{-- siswa laki --}}
<h1>1 jenis</h1>
@foreach ( $siswaLaki as $data )
 nama siswa : {{ $data ->nama}} <br>
 jenis kelamin : {{ $data ->jenis_kelamin}} <br>
 umur : {{ $data ->umur}} <br>
 alamat : {{ $data ->alamat}} <br> <br>

@endforeach
