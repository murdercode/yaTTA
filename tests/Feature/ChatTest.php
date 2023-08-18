<?php

use App\Models\ApiKey;
use App\Models\Chat;

it('can load index page', function () {
    $response = $this->get('/');
    $response->assertStatus(200);
});

it('can load a chat specific page', function () {
    $chat = createChat();
    $response = $this->get('/chat/' . $chat->id);
    $response->assertStatus(200);
});

it('can see the empty chat message', function () {
    createApiKey();
    $chat = createChat();
    $response = $this->get('/chat/' . $chat->id);
    $response->assertSee('This chat is empty. Start sending messages to fill it.');
});

it('can see an input message in the chat', function () {
    createApiKey();
    $chat = createChat();
    $chat->messages()->create([
        'body' => 'Hi Barbie!',
        'in_out' => 1,
    ]);
    $response = $this->get('/chat/' . $chat->id);
    $response->assertSee('Hi Barbie!');
});

it('can see an output message in the chat', function () {
    createApiKey();
    $chat = createChat();
    $chat->messages()->create([
        'body' => 'Hi Ken!',
        'in_out' => 0,
    ]);
    $response = $this->get('/chat/' . $chat->id);
    $response->assertSee('Hi Ken!');
});

function createApiKey(): void
{
    ApiKey::factory()->create();
}

function createChat(): Chat
{
    return Chat::factory()->create();
}
