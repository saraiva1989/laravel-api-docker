<?php
namespace App\Repositories;

use App\Models\Produto;

class ProdutoRepository implements ProdutoRepositoryInterface
{
    public function todosProdutos($paginate = 10)
    {
        return Produto::paginate($paginate);
    }

    public function criarProduto(array $data)
    {
        return Produto::create($data);
    }

    public function encontrarProduto($id)
    {
        return Produto::findOrFail($id);
    }

    public function atualizarProduto(array $data, $id)
    {
        $produto = Produto::findOrFail($id);
        $produto->update($data);
        return $produto;
    }

    public function deletarProduto($id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();
        return true;
    }
}