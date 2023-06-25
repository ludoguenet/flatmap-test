<?php

declare(strict_types=1);

dataset('posts', [
    'posts with comments' => fn () => collect([
        [
            'title' => 'Comment 1',
            'comments' => [
                ['content' => 'Comment 1'],
                ['content' => 'Comment 2'],
            ],
        ],
        [
            'title' => 'Comment 2',
            'comments' => [
                ['content' => 'Comment 3'],
                ['content' => 'Comment 4'],
            ],
        ],
    ]),
]);

dataset('comments', [
    'expected flattened comments' => fn () => [
        ['content' => 'Comment 1'],
        ['content' => 'Comment 2'],
        ['content' => 'Comment 3'],
        ['content' => 'Comment 4'],
    ],
]);
