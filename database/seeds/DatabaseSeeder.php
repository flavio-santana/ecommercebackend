<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        factory(App\Model\Linha::class,17)->create();
        
        factory(App\Model\Produto::class,223)->create();

        factory(App\Model\TipoCabelo::class,17)->create();

        factory(App\Model\LinhaRecomendada::class,67)->create();

        factory(App\Model\Usuario::class,155)->create();

        factory(App\Model\Endereco::class,203)->create();

        factory(App\Model\Variacao::class,151)->create();

        factory(App\Model\Cupom::class,11)->create();

        factory(App\Model\Pedido::class,99)->create();

        factory(App\Model\Promocao::class,20)->create();

        factory(App\Model\ItemPedido::class,799)->create();

    }
}