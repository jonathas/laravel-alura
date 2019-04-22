<?php namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class ProdutoController extends Controller
{

    public function lista()
    {
        $produtos = DB::select('select * from produtos');
        return view('produto.listagem')->with('produtos', $produtos);
    }

    public function listaJson()
    {
        $produtos = DB::select('select * from produtos');
        return $produtos;
    }

    /*public function mostra()
    {
        // This gets it from the querystring
        // $id = Request::input('id', 1);

        $id = Request::route('id', 1);
        $response = DB::select('select * from produtos where id = ?', [$id]);

        if (empty($response)) {
            return "Esse produto não existe";
        }

        return view('detalhes')->with('p', $response[0]);
    }*/

    /**
     * No need to use the Request if we get it as a parameter in the function!
     */
    public function mostra($id)
    {
        $response = DB::select('select * from produtos where id = ?', [$id]);

        if (empty($response)) {
            return "Esse produto não existe";
        }

        return view('produto.detalhes')->with('p', $response[0]);
    }

    public function novo()
    {
        return view('produto.formulario');
    }

    public function adiciona()
    {
        $nome = Request::input('nome');
        $quantidade = Request::input('quantidade');
        $valor = Request::input('valor');
        $descricao = Request::input('descricao');

        DB::insert(
            'insert into produtos (nome, quantidade, valor, descricao) values (?, ?, ?, ?)',
            [$nome, $quantidade, $valor, $descricao]
        );

        return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));
    }
}
