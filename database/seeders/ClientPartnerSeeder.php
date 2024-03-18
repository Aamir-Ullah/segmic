<?php

namespace Database\Seeders;

use App\Models\ClientPartner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientPartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ClientPartner=[
            [
                'name'=>'Testing',
                'logo'=>'/public/clientpartner/image/oil&gas.webp'],
           ];
           ClientPartner::insert($ClientPartner);   
    }
}
