@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Criar saída</h3>
            {!! Form::open(['url' => route('stock-outputs.store'),'method' => 'POST']) !!}
            @include('stock-movements._create')
            {!! Form::close() !!}
        </div>
    </div>
@endsection