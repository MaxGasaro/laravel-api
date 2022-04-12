@extends('admin.layouts.base')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <h1>Visualizza tag</h1>
                <div><strong>Nome: </strong>{{$tag->name}}</div>
                <div><strong>Slug: </strong>{{$tag->slug}}</div>
                <a class="btn btn-primary" href="{{route('admin.tags.index')}}">Torna alla lista</a>
            </div>
        </div>
    </div>
@endsection