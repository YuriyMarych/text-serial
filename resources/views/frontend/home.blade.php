@extends('frontend.layouts.app')

@section('content')
    <div class="container homepage">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="title">Hello, {{ Auth::user()->firstName }}!</h1>
                <p class="desc">We are creating the text serials.</p>
                <p class="desc">Want to read it?</p>
                <a class="btn btn-dark" href="/">Read</a>
            </div>
        </div>
    </div>
@endsection
