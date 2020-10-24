@extends('layout')

@section('content')
<div class="container card mt-5 p-3">
    <div class="card-header">
        <h4>Add Product</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('product.update', $product->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
              <label for="nama_produk">Nama Produk</label>
              <input type="text" class="form-control @if($errors->has('nama_produk')) is-invalid @endif" 
                    name="nama_produk"
                    value="{{ $product->nama_produk }}">
              @if ($errors->has('nama_produk'))
              <div class="invalid-feedback">
                  {{ $errors->first('nama_produk') }}
              </div>
              @endif
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <textarea class="form-control @if($errors->has('keterangan')) is-invalid @endif" rows="3" name="keterangan">{{ $product->keterangan }}</textarea>
                @if ($errors->has('keterangan'))
                <div class="invalid-feedback">
                    {{ $errors->first('keterangan') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" class="form-control @if($errors->has('harga')) is-invalid @endif" 
                        name="harga"
                        value="{{ $product->harga }}">
                @if ($errors->has('harga'))
                <div class="invalid-feedback">
                    {{ $errors->first('harga') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah</label>
                <input type="number" class="form-control @if($errors->has('jumlah')) is-invalid @endif" 
                        name="jumlah"
                        value="{{ $product->jumlah }}">
                @if ($errors->has('jumlah'))
                <div class="invalid-feedback">
                    {{ $errors->first('jumlah') }}
                </div>
                @endif
            </div>
            <div class="card-footer">
                <button class="btn btn-success" type="submit">Edit</button>
            </div>
        </form>
    </div>
   </div>
</div>
@endsection