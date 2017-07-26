<?php return [
    'plugin' => [
        'name' => 'Mini Gallery',
        'description' => 'Semplice componente per gallery multilingua con snippets per le pagine statiche',
    ],
    'component' => [
        'name' => 'Gallery',
        'description' => 'Mostra la gallery selezionata',
        'properties' => [
            'gallery_item' => [
                'name' => 'Gallery',
                'description' => 'Seleziona la gallery che vuoi mostrare',
            ],
            'thumb_width' => [
                'name' => 'Larghezza miniature in px',
            ],
            'thumb_height' => [
                'name' => 'Altezza miniature in px',
            ],
            'thumb_mode' => [
                'name' => 'Metodo',
                'description' => 'Come l\'immagine deve essere adattata',
            ],
        ],
    ],
];