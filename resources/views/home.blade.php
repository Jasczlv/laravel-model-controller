@extends('layouts.app')
@section('content')


<div>
    <h1>
        Home Page!
    </h1>
<div class="container d-flex justify-content-center align-center flex-wrap">
    @foreach ($movies as $movie)
    
    <div class="card m-5 p-4">
       <p><span class="fw-bold">Title: </span> {{$movie->title}} </p>   
       <p><span class="fw-bold">Original Title: </span> {{$movie->original_title}} </p>   
       <p><span class="fw-bold">Nationality: </span> {{$movie->nationality}} </p>   
       <p><span class="fw-bold">Date: </span> {{$movie->date}} </p>   
       <p><span class="fw-bold">Vote: </span> {{$movie->vote}} </p>   
          
    </div>

@endforeach
</div>

</div>
@endsection