<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data_mahasiswa = [
            ['npm' => '2017051039',
            'nama'    => 'Deny aldy apriza',
            'alamat'   => 'Raja Basa',
            'created_at' => Time::now()
        ],
        ['npm' => '2017051030',
            'nama'    => 'Rendy',
            'alamat'   => 'Kemiling',
            'created_at' => Time::now()
        ],
        ['npm' => '2017051040',
            'nama'    => 'Hanif',
            'alamat'   => 'Sukarame',
            'created_at' => Time::now()
        ],
        ];

        
        // Using Query Builder
        foreach ($data_mahasiswa as $data){
        $this->db->table('mahasiswa')->insert($data);
        }
    }
}
