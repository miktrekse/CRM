<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Keis;

class KeisSeeder extends Seeder
{
    
    public function run(): void
    {
$data = file_get_contents('https://deskplan.lv/muita/app.json');
$muitaData = json_decode($data, true);
$keises=$muitaData['cases'];
foreach ($keises as $keis) {
        Keis::create ([
            'id' => $keis['id'],
        'external_ref' => $keis['external_ref'],
        'status'  => $keis['status'],
        'priority'  => $keis['priority'],
        'arrival_ts' => $keis['arrival_ts'],
        'checkpoint_id' => $keis['checkpoint_id'],
        'origin_country' => $keis['origin_country'],
        'destination_country' => $keis['destination_country'],
        'risk_flags' => json_encode($keis['risk_flags']),
        'declarant_id' => $keis['declarant_id'],
        'consignee_id' => $keis['consignee_id'],
        'vehicle_id' => $keis['vehicle_id'],
        ]);
}
    }
}
