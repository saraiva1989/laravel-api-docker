<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'descricao', 'preco', 'quantidade_em_estoque'];

    // Método para validação
    public static function validar(array $dados)
    {
        $validator = Validator::make($dados, [
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'preco' => 'required|numeric|min:0',
            'quantidade_em_estoque' => 'required|integer|min:0',
        ]);

        return $validator;
    }
}
