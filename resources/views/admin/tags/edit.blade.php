@extends('admin.layouts.base')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1>Crea un nuovo tag</h1>
                <form method="POST" action={{route('admin.tags.store')}}>

                  @csrf


                  <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                  </div>
                  
                  <button type="submit" class="btn btn-primary">Salva</button>

                </form>
            </div>
        </div>
    </div>
@endsection