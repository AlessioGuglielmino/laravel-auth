@extends('layouts.app')

@section('content')
<div class="container">

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
            <tr>
                <th scope="row">{{$project->id}}</th>
                <td>{{$project->title}}</td>
                <td>{{$project->description}}</td>
                <td>{{$project->url}}</td>
                <td>{{$project->slug}}</td>
              </tr>
           
          
        
        
        </tbody>
      </table>
    
</div>
@endsection
