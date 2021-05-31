@extends('layouts.main-layout')
@section('content')
  <div class="container text-center">
    <div class="row">
      <div class="col-12">
       <ul>
         @foreach ($employees as $employee)
           <li>
             <h1>
               [{{$employee -> id}}]
               {{ $employee -> firstname }}
               {{ $employee -> lastname }}
             </h1>
             @foreach ($employee -> tasks as $task )
              <h4> Task id -->[{{$task -> id}}]</h4>
              <h4> Title --> {{$task -> title}}</h4>
              <h4> Description --> {{$task -> description }}</h4>
              <br>
             @endforeach

           </li>
         @endforeach
       </ul>
      </div>
    </div>
  </div>
@endsection
