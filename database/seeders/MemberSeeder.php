<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $batchSize = 10000; // Insert in batches of 10,000 records
        for ($i = 0; $i < 200000; $i += $batchSize) {
            Member::factory()->count($batchSize)->create();
        }
    }
}
