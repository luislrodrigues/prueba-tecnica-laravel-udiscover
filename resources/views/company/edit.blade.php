@extends('layouts.app')
@section('content')
    <div class="bg-light p-4 rounded">
        <div class="lead d-flex justify-content-center">
            <h1>Actualizar compañia</h1>
        </div>
        
        <div class="container mt-4">
            <form method="post" action="{{ route('company.update', $company->id) }}" enctype="multipart/form-data" >
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre de la compañia</label>
                    <input value="{{ $company->name }}" 
                        type="text" 
                        class="form-control" 
                        name="name" 
                        placeholder="Name" >

                    @if ($errors->has('name'))
                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Correo</label>
                    <input value="{{ $company->email }}"
                        type="email" 
                        class="form-control" 
                        name="email" 
                        placeholder="Email address" >
                    @if ($errors->has('email'))
                        <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="pagina_web" class="form-label">Pagina Web</label>
                    <input value="{{ $company->pagina_web }}"
                        type="text" 
                        class="form-control" 
                        name="pagina_web" 
                        placeholder="Pagina web" >
                    @if ($errors->has('pagina_web'))
                        <span class="text-danger text-left">{{ $errors->first('pagina_web') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="logo" class="form-label">Logo</label>
                    <input value="{{ $company->logo }}"
                        type="file" 
                        class="form-control" 
                        name="logo" 
                    >
                    @if ($errors->has('logo'))
                        <span class="text-danger text-left">{{ $errors->first('logo') }}</span>
                    @endif
                </div>


                <button type="submit" class="btn btn-primary text-white">Actualizar</button>
                <button class="btn btn-danger">
                    <a href="{{ route('company.index') }}" class="text-decoration-none text-white">Cancelar</button>
                </button>
            </form>
        </div>
    </div>
@endsection