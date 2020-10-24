@extends('layout')

@section('content')
<div class="container">
    <div class="mt-5 mb-2">
        <a href="{{ route('product.create') }}" class="btn btn-primary">Tambah</a>
    </div>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Harga</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @forelse ($products as $product)
            <tr>
                <th scope="row">{{ $no++ }}</th>
                <td>{{ $product->nama_produk }}</td>
                <td>{{ $product->keterangan }}</td>
                <td>{{ $product->harga }}</td>
                <td>{{ $product->jumlah }}</td>
                <td>
                    <form action="{{ route("product.destroy", $product->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route("product.edit", $product->id) }}" class="btn btn-warning">Edit</a>
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">DATA KOSONG</td>
            </tr>
            @endforelse    
        </tbody>
    </table>
</div>
@endsection