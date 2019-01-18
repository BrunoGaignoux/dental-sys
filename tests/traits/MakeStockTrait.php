<?php

use Faker\Factory as Faker;
use App\Models\Stock;
use App\Repositories\StockRepository;

trait MakeStockTrait
{
    /**
     * Create fake instance of Stock and save it in database
     *
     * @param array $stockFields
     * @return Stock
     */
    public function makeStock($stockFields = [])
    {
        /** @var StockRepository $stockRepo */
        $stockRepo = App::make(StockRepository::class);
        $theme = $this->fakeStockData($stockFields);
        return $stockRepo->create($theme);
    }

    /**
     * Get fake instance of Stock
     *
     * @param array $stockFields
     * @return Stock
     */
    public function fakeStock($stockFields = [])
    {
        return new Stock($this->fakeStockData($stockFields));
    }

    /**
     * Get fake data of Stock
     *
     * @param array $postFields
     * @return array
     */
    public function fakeStockData($stockFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'codigo_clinica' => $fake->randomDigitNotNull,
            'codigo_produtos' => $fake->randomDigitNotNull,
            'codigo_pedido' => $fake->randomDigitNotNull,
            'codigo_plano_contas' => $fake->randomDigitNotNull,
            'codigo_usuario' => $fake->randomDigitNotNull,
            'codigo_nivel' => $fake->randomDigitNotNull,
            'status' => $fake->randomDigitNotNull,
            'quantidade' => $fake->randomDigitNotNull,
            'motivo' => $fake->text,
            'tipo_acao' => $fake->date('Y-m-d H:i:s'),
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s'),
            'deleted_at' => $fake->date('Y-m-d H:i:s')
        ], $stockFields);
    }
}
