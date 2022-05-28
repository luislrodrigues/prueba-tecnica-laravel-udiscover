@extends('layouts.app')
@section('content')

<div class="d-flex justify-content-center">
    <div class="card " style="width: 40%;">
        <img class="card-img-top" src="{{$company->logo}}" alt="Card image cap">
        <div class="card-body">
            <h4>{{$company->name}}</h4>
            <h4>{{$company->email}}</h4>
            <h4>{{$company->pagina_web}}</h4>
            
        </div>
        <div class="mt-2 pb-2 d-flex justify-content-around">
            <a href="{{ route('company.index') }}" class="btn btn-danger">Atras</a>
            <a href="{{ route('company.edit', $company->id) }}" class="btn btn-info">Editar</a>
        </div>
      </div>
</div>
@endsection