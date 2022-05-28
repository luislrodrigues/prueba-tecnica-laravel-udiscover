@extends('layouts.app')
@section('content')
    <div class="bg-light p-4 rounded">
        <div class="lead d-flex justify-content-center">
            <h1>Crear nueva empleado</h1>
        </div>

        <div class="container mt-4 d-flex justify-content-center">
            <form method="POST" class="w-50 " action="{{route('employee.store')}}">
                @csrf
                <div class="mb-3">
                    <label for="first_name" class="form-label">Nombres</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        name="first_name" 
                        placeholder="Nombres">
                    @if ($errors->has('first_name'))
                        <span class="text-danger text-left">{{ $errors->first('first_name') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="last_name" class="form-label">Apellidos</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        name="last_name" 
                        placeholder="Apellidos" >
                    @if ($errors->has('last_name'))
                        <span class="text-danger text-left">{{ $errors->first('last_name') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Correo</label>
                    <input
                        type="email" 
                        class="form-control" 
                        name="email" 
                        placeholder="Email address">
                    @if ($errors->has('email'))
                        <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Telefono</label>
                    <input
                        type="text" 
                        class="form-control" 
                        name="phone" 
                        placeholder="Telefono" >
                    @if ($errors->has('phone'))
                        <span class="text-danger text-left">{{ $errors->first('phone') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="company_id" class="form-label">Compañia</label>
                    <select class="form-select" name="company_id">
                        <option value="" selected disabled hidden>Seleccionar compañia</option>
                        @foreach ($companies as $company )
                            <option value="{{$company->id}}">{{$company->name}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('company_id'))
                        <span class="text-danger text-left">{{ $errors->first('company_id') }}</span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Crear</button>
                <a href="{{ route('employee.index') }}" class="btn btn-danger mx-2">Cancelar</a>
            </form>
        </div>

    </div>
@endsection