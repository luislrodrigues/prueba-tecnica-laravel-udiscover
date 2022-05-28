@extends('layouts.app')
@section('content')
    <div class="bg-light p-4 rounded">
        <div class="lead d-flex justify-content-center">
            <h1>Crear nueva compañia</h1>
        </div>

        <div class="container mt-4 d-flex justify-content-center">
            <form method="POST" class="w-50 " action="{{route('company.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        name="name" 
                        placeholder="Name" required>
                    @if ($errors->has('name'))
                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input 
                        type="email" 
                        class="form-control" 
                        name="email" 
                        placeholder="Email address" required>
                    @if ($errors->has('email'))
                        <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="pagina_web" class="form-label">Pagina web</label>
                    <input
                        type="text" 
                        class="form-control" 
                        name="pagina_web" 
                        placeholder="Pagina web" required>
                    @if ($errors->has('pagina_web'))
                        <span class="text-danger text-left">{{ $errors->first('pagina_web') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="logo" class="form-label">Logo</label>
                    <input 
                        type="file" 
                        class="form-control" 
                        name="logo" 
                        >
                    @if ($errors->has('logo'))
                        <span class="text-danger text-left">{{ $errors->first('logo') }}</span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Crear</button>
                <a href="{{ route('company.index') }}" class="btn btn-danger mx-2">Cancelar</a>
            </form>
        </div>

    </div>
@endsection