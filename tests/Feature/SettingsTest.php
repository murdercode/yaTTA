<?php

use App\Models\ApiKey;

beforeEach(function () {
    // Create random api key
    $apiKeys = ApiKey::factory()->count(3)->create();
});

it('can load settings page', function () {
    $response = $this->get('/settings');

    $response->assertStatus(200);
});
