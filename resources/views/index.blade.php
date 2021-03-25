@extends('layout')
    @section('content')
    <div class="container">
        
        <a href="/agregar" class="btn btn-primary">CREAR</a>


      <table class="table table-dark table-striped mt-4">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Código</th>
            <th scope="col">Descripción</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Precio</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>    
          @forelse ($registros as $registro)
          <tr>
              <td>{{$registro->id}}</td>
              <td>{{$registro->codigo}}</td>
              <td>{{$registro->descripcion}}</td>
              <td>{{$registro->cantidad}}</td>
              <td>{{$registro->precio}}</td>
              <td>
              <form method="POST" action="{{ url("/{$registro->id}") }}">
                <a href="{{ route('registros.editar', ['id' => $registro->id]) }}" class="btn btn-info">Editar</a>         
                @csrf
                @method('DELETE')
                    
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>          
              </td>        
          </tr>
          @empty
            <p>nope</br> <a href="/agregar">Agregar </a></p>
          @endforelse
        </tbody>
      </table>
    </div>
    @endsection
    
