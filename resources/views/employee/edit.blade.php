@extends('layouts.app')
@section('content')
    <div class="bg-light p-4 rounded">
        <div class="lead d-flex justify-content-center">
            <h1>Actualizar compañia</h1>
        </div>
        
        <div class="container mt-4">
            <form method="post" action="{{ route('employee.update', $employee->id) }}" enctype="multipart/form-data" >
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="first_name" class="form-label">Nombres</label>
                    <input value="{{$employee->first_name}}" 
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
                    <input value="{{$employee->last_name}}" 
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
                    <input value="{{$employee->email}}"
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
                    <input value="{{$employee->phone}}"
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
                        <option value="{{$employee->company_id}}" selected>{{$company->name}}</option>
                        @foreach ($companies as $company )
                            <option value="{{$company->id}}">{{$company->name}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('company_id'))
                        <span class="text-danger text-left">{{ $errors->first('company_id') }}</span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary text-white">Actualizar</button>
                <button class="btn btn-danger">
                    <a href="{{ route('employee.index') }}" class="text-decoration-none text-white">Cancelar</button>
                </button>
            </form>
        </div>
    </div>
@endsection