<?php namespace estoque\Http\Controllers;

use estoque\Produto;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use estoque\Http\Requests\ProdutoRequest;

class ProdutoController extends Controller
{

    public function lista()
    {
        $produtos = Produto::all();
        return view('produto.listagem')->with('produtos', $produtos);
    }

    public function listaJson()
    {
        $produtos = Produto::all();
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
        $produto = Produto::find($id);
        if (empty($produto)) {
            return "Esse produto não existe";
        }

        return view('produto.detalhes')->with('p', $produto);
    }

    public function novo()
    {
        return view('produto.formulario');
    }

    public function adiciona(ProdutoRequest $request)
    {
        /*$params = Request::all();
        $produto = new Produto($params);

        $produto->save();*/

        // Even simpler
        Produto::create($request->all());

        return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));
    }

    public function remove($id)
    {
        $produto = Produto::find($id);
        $produto->delete();
        return redirect()->action('ProdutoController@lista');
    }
}
