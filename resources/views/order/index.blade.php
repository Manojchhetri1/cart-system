
@extends('layout')


   
@section('content')

    <div class="row">
    @foreach($cat as $category)
        <div class="col-xs-18 col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="{{ $category->image }}">
                <div class="caption">
                    <h4>{{ $category->name }}</h4>
                    <p>{{ $category->description }}</p>
                    <p class="btn-holder"><a href="{{ route('product', $category->id) }}" class="btn btn-warning btn-block text-center" role="button">See Products</a> </p>

                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection
