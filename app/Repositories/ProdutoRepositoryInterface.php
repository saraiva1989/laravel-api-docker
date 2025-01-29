<?php
namespace App\Repositories;

interface ProdutoRepositoryInterface
{
    public function todosProdutos($paginate = 10);
    public function criarProduto(array $data);
    public function encontrarProduto($id);
    public function atualizarProduto(array $data, $id);
    public function deletarProduto($id);
}