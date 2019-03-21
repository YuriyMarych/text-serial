@extends('frontend.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Add new serial</h1>
                <form action=" {{ route('add.serial') }}" method="get">

                    <label for="title">Name</label>
                    <input id="title" name="title" type="text">

                    <label for="description">Description</label>
                    <textarea id="description" name="description"></textarea>

                    <button type="submit" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection