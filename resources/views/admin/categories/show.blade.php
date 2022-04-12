@extends('admin.layouts.base')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <h1>Visualizza categoria</h1>
                <div><strong>Nome: </strong>{{$category->name}}</div>
                <div><strong>Slug: </strong>{{$category->slug}}</div>
                {{-- qui inserisco i dati riguardanti i post --}}
                <a class="btn btn-primary" href="{{route('admin.categories.index')}}">Torna alla lista</a>
            </div>
        </div>
    </div>
@endsection