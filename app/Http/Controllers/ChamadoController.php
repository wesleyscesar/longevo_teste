<?php

namespace App\Http\Controllers;

use App\Chamados;
use App\Clientes;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ChamadoController extends Controller
{
    private $chamado;

    public function __construct(Chamados $chamado)
    {
        $this->chamado = $chamado;

    }

    public function pesquisar(Request $request){
        if($request->pedido != ""){
            $chamados = $this->chamado->where('num_pedido',$request->pedido)->join('pedidos', 'pedidos.id', '=', 'chamados.pedido_id')->join('clientes', 'clientes.id', '=', 'pedidos.cliente_id')->select('clientes.*','pedidos.*','chamados.*')->paginate(5);
        }

        if($request->email != ""){
            $chamados = $this->chamado->where('email',$request->email)->join('pedidos', 'pedidos.id', '=', 'chamados.pedido_id')->join('clientes', 'clientes.id', '=', 'pedidos.cliente_id')->select('clientes.*','pedidos.*','chamados.*')->paginate(5);
        }

        return view('relatorio', compact('chamados'));

    }

    public function store(Request $request){

        Clientes::find($request->cliente_id)->update(['email' => $request->email]);

        $this->chamado->create($request->all());

        $mensagem = "Chamado cadastrado com sucesso";

        return view('sac', compact('mensagem'));
    }
}
