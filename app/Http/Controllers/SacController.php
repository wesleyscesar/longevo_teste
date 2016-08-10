<?php

namespace App\Http\Controllers;

use App\Pedidos;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SacController extends Controller
{
    private $pedidos;

    public function __construct(Pedidos $pedidos)
    {
        $this->pedidos = $pedidos;
    }

    public function index()
    {
        $mensagem = "";
        return view('sac', compact('mensagem'));
    }

    public function pesquisar(Request $request){

        $pedido = $this->pedidos->where('num_pedido',$request->pedido)->join('clientes', 'clientes.id', '=', 'pedidos.cliente_id')->select('clientes.*','pedidos.*')->get();

        if(empty($pedido[0]['num_pedido'])){
            $mensagem = "Numero do Pedido Incorreto";
            return view('sac', compact('mensagem'));
        }

        $mensagem = "";
        //dd($pedido);
        return view('_form', compact('pedido','mensagem'));

    }

}
