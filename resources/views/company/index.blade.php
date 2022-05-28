@extends('layouts.app')
@section('content')
<div class="bg-light p-4 rounded">
    <div class="lead justify-content-center d-flex py-3">
        <a href="{{ route('company.create') }}" class="btn btn-primary btn-sm float-right">CREAR NUEVA COMPAÑIA</a>
    </div>
    
    <div class="table-responsive justify-content-center d-flex ">
        @if (count($companies) > 0)
            
        <table class="table table-striped w-50 ">
            <thead>
            <tr>
                <th scope="col" width="15%">Nombre de la compañia</th>
                <th scope="col" width="15%">Correo</th>
                <th scope="col" width="1%" colspan="3"></th>    
            </tr>
            </thead>
            <tbody>
                @foreach($companies as $company)
                    <tr>
                        <td>{{ $company->name }}</td>
                        <td>{{ $company->email }}</td>
                        <td><a href="{{ route('company.show', $company->id) }}" class="btn btn-warning btn-sm">Detalles</a></td>
                        <td><a href="{{ route('company.edit', $company->id) }}" class="btn btn-info btn-sm">Editar</a></td>
                        <td>
                            <form action="{{route('company.destroy',$company)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm" >Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @else
            <h1>NO EXISTEN COMPAÑIAS</h1>
        @endif
    </div>
    <div class="d-flex justify-content-center py-2">
        {{$companies->links()}}
    </div>
</div>
@endsection