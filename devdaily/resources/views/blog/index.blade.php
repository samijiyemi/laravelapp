@extends('layouts.default')

@section('content')
    <div class="container" style="margin: 10px">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            @foreach ($posts as $item)
                <div class="col">
                    <div class="card">
                        <img src={{ $item->image }} class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->title }}</h5>
                            <p class="card-text">{{ $item->body }}</p>
                            <span class="small">{{ $item->is_published }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
