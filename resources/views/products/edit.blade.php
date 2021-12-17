@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div>
                <h2>Ürün Düzenle</h2>
            </div>
            <div>
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Geri</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            Bazı sorunlar var.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update',$product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>İsim:</strong>
                    <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="İsim">
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Detay:</strong>
                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Detay">{{ $product->detail }}</textarea>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Düzenle</button>
            </div>
        </div>
    </form>
@endsection
