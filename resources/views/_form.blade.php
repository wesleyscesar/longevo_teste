@extends('sac')

@section('form')

    {!! Form::open(['route' => 'chamado.store', 'method'=>'post']) !!}
        <div class="form-group">
            {!! Form::hidden('pedido_id', $pedido[0]['id'], ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::hidden('cliente_id', $pedido[0]['cliente_id'], ['class'=>'form-control']) !!}
        </div>

        <div class="col-lg-9">
            <div class="form-group">
                {!! Form::label('nome', 'Nome') !!}
                {!! Form::text('nome', $pedido[0]['nome'], ['class'=>'form-control']) !!}
            </div>
        </div>

        <div class="col-lg-9">
            <div class="form-group">
                {!! Form::label('pedido', 'Nº Pedido') !!}
                {!! Form::text('pedido', $pedido[0]['num_pedido'], ['class'=>'form-control']) !!}
            </div>
        </div>

        <div class="col-lg-9">
            <div class="form-group">
                {!! Form::label('email', 'E-mail') !!}
                {!! Form::text('email', $pedido[0]['email'], ['class'=>'form-control']) !!}
            </div>
        </div>

        <div class="col-lg-9">
            <div class="form-group">
                {!! Form::label('titulo', 'Titulo') !!}
                {!! Form::text('titulo', $pedido[0]['titulo'], ['class'=>'form-control']) !!}
            </div>
        </div>

        <div class="col-lg-9">
            <div class="form-group">
                {!! Form::label('observacao', 'Observação') !!}
                {!! Form::text('observacao', $pedido[0]['observacao'], ['class'=>'form-control']) !!}
            </div>
        </div>

        <div class="col-lg-9">
            <div class="form-group">
                {!! Form::submit('Enviar') !!}
            </div>
        </div>

    {!! Form::close() !!}

@endsection