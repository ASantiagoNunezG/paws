@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($usuarios as $user)
                <div class="col-sm-3 mb-3 mb-sm-1">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{$user->nombre}}</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="#" class="btn btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

