@extends('layouts.app') 

@section('content') 
 
<div class="container"> 
 
<h3>Data Golongan</h3> 
 
<table class="table table-bordered"> 
 <tr> 
    <td>ID GOLONGAN</td>
    <td>KODE GOLONGAN</td> 
    <td>NAMA GOLONGAN</td> 
    <td>CREATED AT</td>
    <td>UPDATED AT</td>  
    <td>HAPUS</td>
    <td>EDIT</td>

 </tr> 
 @foreach($rows as $row) 
 <tr> 
 <td>{{ $row->gol_id }}</td> 
 <td>{{ $row->gol_kode }}</td> 
 <td>{{ $row->gol_nama }}</td> 
 <td>{{ $row->created }}</td>
 <td>{{ $row->updated }}</td> 
 <td>
 <form action="{{ url('golongan/' . $row->gol_id) }}"
method="POST">
 @method('DELETE')
 @csrf
 <button>Hapus</button>
 </form>
 </td>
 <td><a href="{{ url('golongan/' 
    . $row->gol_id . '/edit') }}">Edit</a></td>
 </tr>
 @endforeach 
</table> 
</div> 
<a href="{{ url('golongan/create') }}">Tambah Data</a>

@endsection 




