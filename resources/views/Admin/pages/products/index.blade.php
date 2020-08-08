@extends('admin.layouts.app')

@section('title', 'Gestão de Produtos')
    


@section('content')
    <h1>Exibindo os produtos</h1>

    @if ($teste === 123)
        é igual
    @elseif($teste == 123)
        é igual a 123
    @else
        é diferente    
    @endif

    @unless ($teste === '123')
        Só entra aqui se for falso
    @else
        SÓ ENTRA AQUI SE FOR FALSO
    @endunless

    @isset($teste2)
        <p>{{$teste2}}</p>
        
    @endisset

    @empty($teste3)
        <p>Vazio...</p>        
    @endempty

    @auth
        <P>Autenticado</P>
    @else
        <p>Não autenticado</p>
    @endauth

    @guest
        <p>Não autenticado</p> 
    @endguest

    @switch($teste)
        @case(1)
            Igual 1
            @break
        @case(2)
            Igual 2
            @break
        @case(3)
            Igual 3
            @break
        @case(123)
            Igual 123
            @break    
        @default
            Default
    @endswitch
@endsection
