@extends('layouts.app')

@section('content')
<div class="container">

  <a class="btn btn-outline-success my-3" href="{{route('admin.projects.create')}}">Crea progetto</a>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Url Git</th>
            <th scope="col">Slug</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($projects as $project)
            <tr>
                <th scope="row">{{$project->id}}</th>
                <td>{{$project->title}}</td>
                <td>{{$project->description}}</td>
                <td>{{$project->url}}</td>
                <td>{{$project->slug}}</td>
                <td><a class="btn btn-success" href="{{route('admin.projects.show',$project)}}">Mostra dettagli</a></td>
                <td><a class="btn btn-primary" href="{{route('admin.projects.edit',$project)}}">Modifica dettagli</a></td>

                <form action="" method="POST">
                  @csrf
                  @method('DELETE')
                  <td><a class="btn btn-danger" href="#" data-bs-toggle="modal" data-bs-target="delete-project-modal-{{$project->id}}"  >Elimina progetto</a></td>

                </form>



              </tr>
            @empty
                <h1>Nessun progetto presente</h1>
            @endforelse 
                
          
        
        
        </tbody>
      </table>
    
</div>
@endsection


@section('modals')
@foreach ($projects as $project)
    

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="delete-project-modal-{{$project->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Attenzione!</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Vuoi eliminare definitivamente il progetto "{{$project->title}}"?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger">Elimina</button>
      </div>
    </div>
  </div>
</div>
@endforeach
@endsection
