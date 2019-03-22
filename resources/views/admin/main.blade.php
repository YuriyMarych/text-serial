@extends('frontend.layouts.app')

@section('content')
    <nav class="container admin-nav">
        <div class="profile">
            <img src="/storage/uploads/avatars/{{ Auth::user()->avatar }}" class="userAvatar">

            <h2 class="user">
                {{ Auth::user()->firstName }}
                {{ Auth::user()->lastName }}
            </h2>
        </div>

        <ul>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('add.serial') }}">Add serial</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('update.avatar') }}">Settings</a>
            </li>
        </ul>

    </nav>

    <div class="container homepage">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="title">Hello, you are admin!</h1>
                <a class="btn btn-dark" href="/">HOME</a>
            </div>
        </div>
    </div>
@endsection