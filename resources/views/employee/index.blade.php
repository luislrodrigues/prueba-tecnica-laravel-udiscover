@extends('layouts.app')
@section('content')
<div class="bg-light p-4 rounded">
    <div class="lead justify-content-center d-flex py-3">
        <a href="{{ route('employee.create') }}" class="btn btn-primary btn-sm float-right">CREAR NUEVO EMPLEADO</a>
    </div>
    
    <div class="table-responsive  ">
        @if (count($employees) > 0)
            
        <table class="table table-striped w-100 ">
            <thead>
            <tr>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Correo</th>
                <th scope="col">Telefono</th>
                <th scope="col">Compañia</th>
                <th scope="col" colspan="3"></th>    
            </tr>
            </thead>
            <tbody>
                @foreach($employees as $employee)
                    <tr>
                        <td>{{ $employee->first_name }}</td>
                        <td>{{ $employee->last_name }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->phone }}</td>
                        <td>{{ $employee->company->name }}</td>
                        <td><a href="{{ route('employee.edit', $employee->id) }}" class="btn btn-info btn-sm">Editar</a></td>
                        <td>
                            <form action="{{route('employee.destroy',$employee)}}" method="POST">
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
            <h1>NO EXISTEN EMPLEADOS</h1>
        @endif
    </div>
    <div class="d-flex justify-content-center py-2">
        {{$employees->links()}}
    </div>
</div>
@endsection