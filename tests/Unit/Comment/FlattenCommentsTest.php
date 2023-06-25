<?php

declare(strict_types=1);

use Illuminate\Support\Collection;

it('flattens posts comments', function (Collection $posts, array $expectedFlattenedArray) {
    $flattenedComments = $posts->flatMap(function (array $post): array {
        return $post['comments'];
    });

    expect($flattenedComments->all())->toEqual($expectedFlattenedArray);
})->with('posts', 'comments');

it('flattens posts comments with chaining method', function (Collection $posts, array $expectedFlattenedArray) {
    $flattenedComments = $posts->flatMap->comments;

    expect($flattenedComments->all())->toEqual($expectedFlattenedArray);
})->with('posts', 'comments');
