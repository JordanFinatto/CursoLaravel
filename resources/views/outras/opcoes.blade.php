@extends('layouts.principal')

@section('titulo','Opcoes')

@section('conteudo')

<div class="options">
    <ul>
        <li><a class="{{request()->is('opcoes/1') ? 'warning selected' : 'warning'}}"
               href="{{ route('opcoes', 1) }}">Warning</a>
        </li>
        <li><a class="{{request()->is('opcoes/2') ? 'info selected' : 'info'}}"
               href="{{ route('opcoes', 2) }}">info</a>
        </li>
        <li><a class="{{request()->is('opcoes/3') ? 'success selected' : 'success'}}"
               href="{{ route('opcoes', 3) }}">Success</a>
        </li>
        <li><a class="{{request()->is('opcoes/4') ? 'error selected' : 'error'}}"
               href="{{ route('opcoes', 4) }}">Error</a>
        </li>
    </ul>
</div>

@if(isset($opcao))
    @switch($opcao)
        @case(1)
            @alerta(['titulo'=>'WARNING', 'tipo'=>'warning'])
            <p><strong>Warning</strong></p>
            <p>Ocorreu um erro inesperado</p>
            @endalerta()
            @break
        @case(2)
            @alerta(['titulo'=>'INFO', 'tipo'=>'info'])
            <p><strong>info</strong></p>
            <p>Ocorreu um erro inesperado</p>
            @endalerta()
            @break
        @case(3)
            @alerta(['titulo'=>'SUCCESS', 'tipo'=>'success'])
            <p><strong>Success</strong></p>
            <p>Ocorreu um erro inesperado</p>
            @endalerta()
            @break
        @case(4)
            @alerta(['titulo'=>'ERROR', 'tipo'=>'error'])
            <p><strong>Error</strong></p>
            <p>Ocorreu um erro inesperado</p>
            @endalerta()
            @break
    @endswitch
@endif

@endsection
