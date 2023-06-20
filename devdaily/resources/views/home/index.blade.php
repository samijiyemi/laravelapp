@extends('layouts.default')

@section('content')
    <div class="container" style="margin-top: 100px">
        <div class="row">
            <h1 class="display-1">
                Daily News for Developer
            </h1>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita nulla asperiores dolorem, molestiae in
                quia placeat consequuntur! Possimus officiis dicta cum dolor ullam consectetur accusantium reprehenderit
                numquam! Nemo, in distinctio!Dicta, obcaecati animi omnis doloribus quo saepe atque et dolore? Eius nam
                inventore neque ad, alias incidunt tempora harum quo rem veniam cumque, recusandae beatae atque illum odio
                doloremque excepturi!
            </p>
            <div class="button">
                <a href="{{ route('blog.index') }}" class="btn btn-primary">NewRoom</a>
                <a href="{{ route('home.about') }}" class="btn btn-secondary">About Us</a>
            </div>
        </div>
    </div>
@endsection
