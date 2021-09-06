@extends('templates.base')

@section('title','Comic')

@section('main')
<div class="comics">
    <div class='container'>
        <div class='row'>
            @foreach($fumetti as $fumetto)
                <div class="col-2">
                    <a href="/fumetto/{{$loop->iteration}}">
                        <div class='fumetto'>
                            <img src=" {{ $fumetto['thumb']}}" alt="logo">
                        <h7>{{ $fumetto["title"]}} </h7> 
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>

<!-- <a href="{{route ('fumetto')}}"> COMIC</a> -->

    
@endsection