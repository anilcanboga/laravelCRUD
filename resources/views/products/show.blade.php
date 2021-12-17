@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div>
                <h2> Ürün Göster</h2>
            </div>
            <div>
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Geri</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>İsim:</strong>
                {{ $product->name }}
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detaylar:</strong>
                {{ $product->detail }}
            </div>
        </div>
    </div>
@endsection
