<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProdukCategorySeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'        => 'Makanan',
            ],
            [
                'name'        => 'Minuman',
            ],
            [
                'name'        => 'Alat Tulis',
            ]
        ];

        $this->db->table('ProdukCategory')->insertBatch($data);
    }
}
