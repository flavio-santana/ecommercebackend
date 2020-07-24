<?php

namespace App\Http\Resources\Linha;

use Illuminate\Http\Resources\Json\JsonResource;

class LinhaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'                 => $this->id,
            'identificador_url'  => $this->identificador_url,
            'nome'               => $this->nome,
            'descricao'          => $this->descricao,
            'principal_funcao'   => $this->principal_funcao,
            'titulo_para_seo'    => $this->titulo_para_seo,
            'palavras_chave'     => $this->palavras_chave,
            'descricao_para_seo' => $this->descricao_para_seo,  
            'exibir_na_loja'     => $this->exibir_na_loja,  
            
            'ref' => [
                'href'  => route('linhas.index'),
            ],  
        ];
    }
}
