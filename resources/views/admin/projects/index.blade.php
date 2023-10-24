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


              </tr>
            @empty
                <h1>Nessun progetto presente</h1>
            @endforelse 
                
          
        
        
        </tbody>
      </table>
    
</div>
@endsection
