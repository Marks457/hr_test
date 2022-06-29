<?php

namespace Database\Seeders;


use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $limit = 1000;

        $products = Product::get();
        $orders = Order::get();

        for ($orderId = 1; $orderId <= $limit; $orderId++) {
            $pLimit = rand(1,4);
            $order = $orders->where('id', $orderId)->first();
            $insert=[];
			for ($productsOrderCnt = 1; $productsOrderCnt <= $pLimit; $productsOrderCnt++) {
				$product = $products->random();
                $insert[]=[
                    'order_id' => $orderId,
                    'product_id' => $product->id,
                    'quantity' => rand(1,3),
                    'price' => $product->price,
                    'created_at' => $order->created_at,
                    'updated_at' => $order->updated_at,
                ];
			}
            OrderProduct::insert($insert);
        }
    }
}
