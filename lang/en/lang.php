<?php return [
    'plugin' => [
        'name' => 'Mini Gallery',
        'description' => 'Easy translatable gallery component with page snippet.',
    ],
    'component' => [
        'name' => 'Gallery',
        'description' => 'Display selected gallery',
        'properties' => [
            'gallery_item' => [
                'name' => 'Gallery',
                'description' => 'Select the gallery you want to show',
            ],
            'thumb_width' => [
                'name' => 'Larghezza miniature in px',
            ],
            'thumb_height' => [
                'name' => 'Altezza miniature in px',
            ],
            'thumb_mode' => [
                'name' => 'Metodo',
                'description' => 'How the image should be fitted to dimensions',
            ],
        ],
    ],
];