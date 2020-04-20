<?php
    $peliculas = [
        [
            'nombre' => 'Akira',
            'director' => 'Katsuhiro Otomo',
            'anho' => 1988,
            'personaje' => 'Kaneda'
        ],
        [
            'nombre' => 'Brazil',
            'director' => 'Terry Gilliam',
            'anho' => 1985,
            'personaje' => 'Sam Lowry'
        ],
        [
            'nombre' => 'Eraserhead',
            'director' => 'David Lynch',
            'anho' => 1977,
            'personaje' => 'Henry Spencer'
        ],
        [
            'nombre' => 'Stalker',
            'director' => 'Andrei Tarkovsky',
            'anho' => 1979,
            'personaje' => 'Stalker'
        ],
        [
            'nombre' => 'Tokyo Story',
            'director' => 'Yasujiro Ozu',
            'anho' => 1953,
            'personaje' => 'Shukichi Hirayama'
        ]
    ];

    foreach($peliculas as $pelicula){
        echo "Pelicula: " . $pelicula['nombre'] . "<br>" . "Director: " . "<b>" . $pelicula['director'] . "</b>" . "<br>" . "Año: " . "<u>" . $pelicula['anho'] . "</u>" . "<br>" . "Personaje principal: " . "<i>" . $pelicula['personaje'] . "</i>" . "<br>" . "<hr>";
    };

    echo "<hr>";
?>