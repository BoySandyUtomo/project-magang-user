@extends('layouts/userlayout')
@section('title', 'Fasilitas')

@section('content')

<div class="container-fluid background">
        <div class="row mt-4">
            <div class="col berita">
                Pengabdian
            </div>
        </div>
    </div>
<div class="container">

    <div class="card border-0">
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('img/rog.jpg') }}" class="card-img">
            </div>
            
            <div class="col-md-8">
                <h5 class="card-title font-weight-bold">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>


    <div class="card border-0">
        <div class="row">
            <div class="col-md-8">
                <h5 class="card-title font-weight-bold">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>

            <div class="col-md-4">
                <img src="{{ asset('img/rog.jpg') }}" class="card-img">
            </div>
        </div>
    </div>

</div>


@endsection