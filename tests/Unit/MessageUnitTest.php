<?php

use App\Models\Message;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

test('can get from user attribute', function () {
    $message = new Message([
        'in_out' => true,
    ]);
    expect($message->from_user)->toBeTrue();
});

test('can get from ai attribute', function () {
    $message = new Message([
        'in_out' => false,
    ]);
    expect($message->from_ai)->toBeTrue();
});

test('can compress message', function () {
    $message = new Message([
        'body' => 'Hello World',
    ]);
    expect($message->compressed_body)->toBe('HelloWorld');
});

test('can get chat relationship', function () {
    $message = new Message();
    expect($message->chat())->toBeInstanceOf(BelongsTo::class);
});
