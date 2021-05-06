@extends('layouts.app')

@section('title_page', 'products')

@section('content')
    <div class="container_products">
        <h3>Lunga</h3>
        <div class="container_card">
            @foreach ($paste as $pasta)
                @if ($pasta["tipo"] == "lunga")
                    <div class="card">
                        <img src="{{$pasta['src']}}" alt="">
                        <div class="layover">
                            <p>{{$pasta["titolo"]}}</p>
                        </div>
                    </div>
                   
                @endif
            @endforeach
        </div> 
        <h3>Corta</h3>
        <div class="container_card">
            @foreach ($paste as $pasta)
                @if ($pasta["tipo"] == "corta")
                    <div class="card">
                        <img src="{{$pasta['src']}}" alt="">
                        <div class="layover">
                            <p>{{$pasta["titolo"]}}</p>
                        </div>
                    </div>
                    
                @endif
            @endforeach
        </div> 
        <h3>Cortissima</h3>
        <div class="container_card">
            @foreach ($paste as $pasta)
                @if ($pasta["tipo"] == "cortissima")
                    <div class="card">
                        <img src="{{$pasta['src']}}" alt="">
                        <div class="layover">
                            <p>{{$pasta["titolo"]}}</p>
                        </div>
                    </div>
                    
                @endif
            @endforeach
        </div>
    </div>
    
@endsection