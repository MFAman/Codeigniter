<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductsSeeder extends Seeder
{
    public function run()
    {
        $datas = [
            [
                'product_name' => 'Black Jacket',
                'product_details' => 'Jacket Details',
                'product_price' => '2000',
                'product_category' => 2,
            ],
            [
                'product_name' => 'Red Jacket',
                'product_details' => 'Jacket Details',
                'product_price' => '2500',
                'product_category' => 1,
            ],
            [
                'product_name' => 'Blue Jacket',
                'product_details' => 'Jacket Details',
                'product_price' => '3000',
                'product_category' => 2,
            ],
            [
                'product_name' => 'Green Jacket',
                'product_details' => 'Jacket Details',
                'product_price' => '2200',
                'product_category' => 1,
            ],
            [
                'product_name' => 'Green Shirt',
                'product_details' => 'Shirt Details',
                'product_price' => '2300',
                'product_category' => 2,
            ],
            [
                'product_name' => 'Red Shirt',
                'product_details' => 'Shirt Details',
                'product_price' => '2100',
                'product_category' => 1,
            ],
            [
                'product_name' => 'Green Shirt',
                'product_details' => 'Shirt Details',
                'product_price' => '2600',
                'product_category' => 2,
            ],
            [
                'product_name' => 'Green Pant',
                'product_details' => 'Pant Details',
                'product_price' => '2600',
                'product_category' => 1,
            ],
            [
                'product_name' => 'Blue Pant',
                'product_details' => 'Pant Details',
                'product_price' => '2300',
                'product_category' => 2,
            ],
            [
                'product_name' => 'Black Pant',
                'product_details' => 'Pant Details',
                'product_price' => '2400',
                'product_category' => 1,
            ],
            [
                'product_name' => 'Red Pant',
                'product_details' => 'Pant Details',
                'product_price' => '2700',
                'product_category' => 2,
            ],
            [
                'product_name' => 'Gray Pant',
                'product_details' => 'Pant Details',
                'product_price' => '1800',
                'product_category' => 1,
            ],
        ];
        // Simple Queries
        //$this-db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

        // Using Query Builder

        foreach ($datas as $data)
            $this->db->table('products')->insert($data);
    }
}
