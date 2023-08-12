<?php

namespace Database\Seeders;

use App\Models\ApiKeyTypes;
use Illuminate\Database\Seeder;

class ApiKeyTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $apiKeyTypes = [
            'openai',
        ];

        foreach ($apiKeyTypes as $apiKeyType) {
            ApiKeyTypes::create([
                'name' => $apiKeyType,
            ]);
        }
    }
}
