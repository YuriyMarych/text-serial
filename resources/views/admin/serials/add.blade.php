@extends('frontend.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                {{ 'All serials:' }}
                <?php
                    $serials = DB::table('serials')->get();
                foreach ($serials as $serial) {
                    echo '<p>' . $serial->id . ') ' . $serial->title . ' - ' . $serial->description . ';' . '</p>';
                };
                ?>

                <div class="card">
                    <div class="card-header">Add new serial</div>

                    <div class="card-body">
                        <form action=" {{ route('add.serial') }}" enctype="multipart/form-data" method="post">
                            @csrf

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right" for="title">Title</label>
                                <div class="col-md-6">
                                    <input class="form-control" id="title" name="title" type="text">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right"
                                       for="description">Description</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" id="description" name="description"></textarea>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection