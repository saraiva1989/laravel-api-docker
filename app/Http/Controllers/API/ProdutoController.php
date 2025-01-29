<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Repositories\ProdutoRepositoryInterface;
use Illuminate\Http\Request;
use App\Models\Produto;


class ProdutoController extends Controller
{
    public function __construct(
        private ProdutoRepositoryInterface $produtoRepository
    ) {}

    public function index(Request $request)
    {
        $paginate = $request->get('paginate', 10);
        return response()->json($this->produtoRepository->todosProdutos($paginate));
    }

    public function store(Request $request)
    {
        $validator = Produto::validar($request->all());
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        
        $data = $request->all();
        return response()->json(
            $this->produtoRepository->criarProduto($data), 
            201
        );
    }

    public function show($id)
    {
        return response()->json($this->produtoRepository->encontrarProduto($id));
    }

    public function update(Request $request, $id)
    {
        $validator = Produto::validar($request->all());
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $data = $request->all();
        return response()->json(
            $this->produtoRepository->atualizarProduto($data, $id)
        );
    }

    public function destroy($id)
    {
        $this->produtoRepository->deletarProduto($id);
        return response()->json(null, 204);
    }
}