@extends('layouts.app')
@section('content')

<div class="d-flex justify-content-center">
    <div class="card " style="width: 40%;">
        <div class="d-flex justify-content-center">
            <img class="card-img-top" src="{{$company->logo}}" alt="Card image cap">
        </div>
        <div class="card-body">
            {{-- <h4>Nombre: {{$company->name}}</h4>
            <h4>Correo: {{$company->email}}</h4>
            <h4>Pagina Web: {{$company->pagina_web}}</h4>
            <h4>Cantidad de empleados: {{count($employees)}}</h4> --}}
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Nombre
                  <span >{{$company->name}}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                 Correo
                  <span >{{$company->email}}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Pagina Web
                  <span >{{$company->pagina_web}}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Cantidad de empleados
                    <span>{{count($employees)}}</span>
                </li>
                
              </ul>
            
        </div>
        <div class="mt-2 pb-2 d-flex justify-content-around">
            <a href="{{ route('company.index') }}" class="btn btn-danger">Atras</a>
            <a href="{{ route('company.edit', $company->id) }}" class="btn btn-info">Editar</a>
        </div>
      </div>
</div>
@endsection