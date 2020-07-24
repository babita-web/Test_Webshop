@extends('layouts.product')

@section('title')

    Add to Cart | Babita's Test Assignment
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                    <div class="card-header"><h4>
                            Added</h4>
                        <h4 class="title"> Add to cart</h4>
                    </div>

                    <div class="card-body">

            <form action="{{url('register')}}" method="post">
          @csrf

    <div class="form-group row">
        <label for="name"
               class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

        <div class="col-md-6">
            <input id="name" type="text"
                   class="form-control @error('name') is-invalid @enderror"
                   name="name" value="{{ old('name') }}" required
                   autocomplete="tname" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>


    <div class="form-group row">
        <label for="name"
               class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

        <div class="col-md-6">
            <input id="name" type="text"
                   class="form-control @error('name') is-invalid @enderror"
                   name="name" value="{{ old('name') }}" required
                   autocomplete="tname" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>


    <div class="form-group row">
        <label for="name"
               class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

        <div class="col-md-6">
            <input id="name" type="text"
                   class="form-control @error('name') is-invalid @enderror"
                   name="name" value="{{ old('name') }}" required
                   autocomplete="tname" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>


    <div class="form-group row">
        <label for="name"
               class="col-md-4 col-form-label text-md-right">{{ __('Quantity') }}</label>


    </div>



                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
            </form>
                                </div>

                            </div>

                        </div>
                    </div>
