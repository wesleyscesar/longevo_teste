<?php

namespace App\Http\Controllers;

use App\Chamados;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RelatorioController extends Controller
{

    public function index(){
        $chamados = Chamados::join('pedidos', 'pedidos.id', '=', 'chamados.pedido_id')->join('clientes', 'clientes.id', '=', 'pedidos.cliente_id')->select('clientes.*','pedidos.*','chamados.*')->paginate(5);
        return view('relatorio', compact('chamados'));
    }

}
