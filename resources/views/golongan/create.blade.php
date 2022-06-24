@extends('layouts.app')

 @section('content')
 <div class="container">

 <h3>Tambah Data Golongan</h3>
 <form action="{{ url('/golongan') }}" method="POST">
 @csrf
 <div class="mb-3">
 <label>ID GOLONGAN</label>
 <input type="text" class="form-control"
name="gol_id">
 </div>

 <div class="mb-3">
 <label>KODE GOLONGAN</label>
 <input type="text" class="form-control"
name="gol_kode">
 </div>

 <div class="mb-3">
 <label>NAMA GOLONGAN</label>
 <input type="text" class="form-control"
name="gol_nama">
 </div>

 <div class="mb-3">
 <label>CREATED</label>
 <textarea class="form-control"
name="created"></textarea>
 </div>

 <div class="mb-3">
 <label>UPDATED</label>
 <textarea class="form-control"
name="updated"></textarea>
 </div>

 <div class="mb-3">
 <input type="submit" value="SIMPAN">
 </div>
 </form>
 </div>
@endsection
