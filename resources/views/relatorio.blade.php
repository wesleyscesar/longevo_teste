@extends('master')

@section('container')

    <div class="row">

        {!! Form::open(['route' => 'relatorio.pesquisar', 'method'=>'post']) !!}

        <div class="col-lg-4">
            <div class="form-group">
                {!! Form::label('pedido', 'Nº Pedido') !!}
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-graduation-cap"></i></div>
                    {!! Form::text('pedido', null, ['class'=>'form-control']) !!}
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="form-group">
                {!! Form::label('email', 'E-mail') !!}
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-graduation-cap"></i></div>
                    {!! Form::text('email', null, ['class'=>'form-control']) !!}
                </div>
            </div>
        </div>

        <div class="col-lg-1">
            <div class="form-group">
                <button style="margin-top: 18px;" type="submit" class="btn btn-lg btn-primary"><i class="fa fa-fw fa-search "></i></button>
            </div>
        </div>

        {!! Form::close() !!}

    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Nº Pedido</th>
                        <th>Titulo</th>
                        <th>Observação</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($chamados as $item)
                        <tr>
                            <td width="40%">{{ $item->nome }}</td>
                            <td width="20%">{{ $item->email }}</td>
                            <td width="8%">{{ $item->num_pedido }}</td>
                            <td width="12%">{{ $item->titulo }}</td>
                            <td width="15%">{{ $item->observacao }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <div align="center">
                    {!! $chamados->render() !!}
                </div>
            </div>
        </div>
    </div>
@endsection