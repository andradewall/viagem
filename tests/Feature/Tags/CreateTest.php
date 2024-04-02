<?php

use function Pest\Laravel\post;

it('can not create a tag without a name', function () {
    post(route('tags.store'), [
        'name' => '',
    ])->assertSessionHasErrors('name');

    expect(Tag::count())->toBe(0);
});

it('can not create a tag with a name that already exists', function () {

});

it('can create a tag without a description', function () {

});

it('can create a tag with a description', function () {

});

it('can create a tag with a description that is too long', function () {

});

it('can create a tag', function () {

});
