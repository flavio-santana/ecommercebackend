<?php

namespace App\Http\Resources\Cupom;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * CupomCollection
 */
class CupomCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'                   => $this->id,
            'descricao'            => $this->descricao,
            //'valor_minino_compra'  => $this->valor_minino_compra,
            //'porcentagem_desconto' => $this->porcentagem_desconto,
            //'valor_desconto'       => $this->valor_desconto,
            'data_inicio'          => $this->data_inicio,
            'data_termino'         => $this->data_termino,
            //'tipo_cupom'           => $this->tipo_cupom,
            'ativo'                => $this->ativo,

            'ref1' => [
                'href'  => route('cupons.show', $this->id),
            ],
        ];
    }
}