@extends('layouts.product')

@section('title')

    Products | Babita's Test Assignment
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

                    <h4 class="card-title"> Products</h4>

                </div>
                <div class="card-body">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>ID</th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Price
                                    </th>
                                    <th>
                                        Image
                                    </th>

                                    <tbody>

                                    @foreach($products as $product)

                                        <tr>
                                            <td>{{$product->id}}</td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->price }}</td>



                                            <td>
                                                <a href="/image/{{$product->id}}" class="btn btn-success" >Image</a>
                                            </td>
                                            <td>
                                                <a href="/addcart/{{$product->id}}" class="btn btn-success" >Add to cart</a>
                                            </td>


                                        </tr>
                                    </tbody>

                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card card-plain">
                        <div class="card-header">
                            <h4 class="card-title"> Table on Plain Background</h4>
                            <p class="category"> Here is a subtitle for this table</p>
                        </div>

                    </div>
                </div>
            </div>
@endsection

@section('script')

@endsection
