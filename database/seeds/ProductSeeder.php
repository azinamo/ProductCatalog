<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $products = [
            [   'name' => 'Product 1',
                'sku' => 'PRODUCT123',
                'price' => '499.25',
                'status' => 'active',
                'quality_approved' => 1,
                'image_url' =>'https://dummyimage.com/300x400/000/fff.jpg&text=PRODUCT+1',
                'brand' => 'Zando'
            ],
            [   'name' => 'Product 2',
                'sku' => '',
                'price' => '493.25',
                'status' => 'active',
                'quality_approved' => 1,
                'image_url' =>'https://dummyimage.com/300x400/000/fff.jpg&text=PRODUCT+2',
                'brand' => 'adidas'
            ],
            [   'name' => 'Product 3',
                'sku' => 'PRODUCT345',
                'price' => '1099.25',
                'status' => 'active',
                'quality_approved' => 1,
                'image_url' =>'https://dummyimage.com/300x400/000/fff.jpg&text=PRODUCT+3',
                'brand' => 'adidas'
            ],
            [   'name' => 'Product 4',
                'sku' => 'PRODUCT456',
                'price' => NULL,
                'status' => 'active',
                'quality_approved' => 1,
                'image_url' =>'https://dummyimage.com/300x400/000/fff.jpg&text=PRODUCT+4',
                'brand' => 'Zando'
            ],
            [   'name' => 'Product 5',
                'sku' => 'PRODUCT567',
                'price' => '100.99',
                'status' => 'inactive',
                'quality_approved' => 1,
                'image_url' =>'https://dummyimage.com/300x400/000/fff.jpg&text=PRODUCT+5',
                'brand' => 'Zando'
            ],
            [   'name' => 'Product 6',
                'sku' => 'PRODUCT678    ',
                'price' => '499.25',
                'status' => 'active',
                'quality_approved' => 0,
                'image_url' =>'https://dummyimage.com/300x400/000/fff.jpg&text=PRODUCT+6',
                'brand' => 'Zando'
            ],
            [   'name' => 'Product 7',
                'sku' => 'PRODUCT789',
                'price' => '99',
                'status' => 'active',
                'quality_approved' => 1,
                'image_url' =>'https://dummyimage.com/300x400/000/fff.jpg&text=PRODUCT+7',
                'brand' => 'Zando'
            ],
            [   'name' => 'Product 8',
                'sku' => 'PRODUCT8910',
                'price' => '99',
                'status' => 'deleted',
                'quality_approved' => 1,
                'image_url' =>'https://dummyimage.com/300x400/000/fff.jpg&text=PRODUCT+8',
                'brand' => 'Zando'
            ],
            [   'name' => 'Product 9',
                'sku' => 'PRODUCT91011',
                'price' => '123.45',
                'status' => 'deleted',
                'quality_approved' => 1,
                'image_url' => '',
                'brand' => 'adidas'
            ],
        ];
        foreach($products as $product)
        {
            \App\Product::create($product);
        }
    }
}
