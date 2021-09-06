@extends('templates.base')

@section('title','HomePage')

@section('main')
    <div class='blue_band'>
        <di class='container'>
                    <div class='row'>
                        <div class="col-2">
                            <img src=" {{ $fumetti[$id]['thumb']}}" alt="logo">
                            <a href="/"> HOME</a>
                        </div>
                </div>
                
            </div>
    </div>

    <div class='container'>
        <div class='row'>
            <div class='col-5'>
             {{ $fumetti[$id]['description']}}
            </div>
        </div>
    </div>





    <!-- <div class='fumetto'>
            <img src=" {{ $fumetti[$id]['thumb']}}" alt="logo">
        <h7>{{ $fumetti[$id]["title"]}} </h7> 
    </div> -->
@endsection


