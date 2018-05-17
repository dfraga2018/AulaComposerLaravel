<?php
namespace estoque/Http\Controllers;

class ProdutoController extends Controller {
    
    public function lista(){
        $produtos =DB::('select * from produtos');
        
        return view ('produtos-listagem')->withProdutos($produtos);
    }
    
    public function mostra(){
        $resposta = // busca do banco
        return view('detalhes')->with('p', $resposta);
    }
    
}

?>