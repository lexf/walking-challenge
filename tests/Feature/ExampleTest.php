<?php

it('returns a successful response', function () {
    $response = $this->get('/');

    // returning redirect to login page
    $response->assertStatus(302);
});
