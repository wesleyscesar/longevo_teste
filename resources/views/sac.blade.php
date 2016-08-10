@extends('master')

@section('container')
<div class="row">
    <div class="col-lg-12">
        <h2>Atendimento ao Cliente (SAC)</h2>
    </div>

    {!! Form::open(['route' => 'sac.pesquisar', 'method'=>'post']) !!}

        <div class="col-lg-6">
            <div class="form-group">
                {!! Form::label('pedido', 'Nº Pedido') !!}
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-graduation-cap"></i></div>
                    {!! Form::text('pedido', null, ['class'=>'form-control']) !!}
                </div>
            </div>
        </div>

        <div class="col-lg-1">
            <div class="form-group">
                <button style="margin-top: 18px;" type="submit" class="btn btn-lg btn-default"><i class="fa fa-fw fa-search "></i></button>
            </div>
        </div>

    {!! Form::close() !!}
    <?php if($mensagem != ""){ ?>
    <div class="col-lg-1">
        <div class="form-group">
            <button style="margin-top: 18px;" type="submit" class="btn btn-lg btn-default">{{ $mensagem }}</button>
        </div>
    </div>
    <?php } ?>

    @yield('form')

</div>
@endsection