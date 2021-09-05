@extends('templates.base')

@section('title','Comic')

@section('main')

test
<br> 
<a href="{{route ('fumetto')}}"> COMIC</a>
   @dump($fumetti);

    
@endsection