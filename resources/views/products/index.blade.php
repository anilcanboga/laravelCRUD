@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div>
                <h2>Laravel 8 CRUD Örnek - AB</h2>
            </div>
            <div>
                <a class="btn btn-success" href="{{ route('products.create') }}"> Yeni Ürün Oluştur</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Numara</th>
            <th>İsim</th>
            <th>Detaylar</th>
            <th width="280px">Seçenekler</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->detail }}</td>
                <td>
                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Göster</a>

                        <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Düzenle</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Sil</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $products->links() !!}

@endsection
