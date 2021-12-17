<?php
// Snack 1
    // Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario.
    // Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
    // Stampiamo a schermo tutte le partite con questo schema.
    // Olimpia Milano - Cantù | 55-60

    $matches = [
        [
            'team1' => 'Acqua S.Bernardo Cantù',
            'team2' => 'Oriora Pistoia',
            'point_team_1' => 70,
            'point_team_2' => 45
        ],
        [
            'team1' => 'Fortitudo Pompea Bologna',
            'team2' => 'Dolomiti Energia Trentino',
            'point_team_1' => 82,
            'point_team_2' => 83
        ],
        [
            'team1' => 'Pallacanestro Trieste',
            'team2' => 'Virtus Roma',
            'point_team_1' => 72,
            'point_team_2' => 33
        ],
        [
            'team1' => 'Openjobmetis Varese',
            'team2' => 'Germani Basket Brescia',
            'point_team_1' => 101,
            'point_team_2' => 99
        ],
    ];

    echo '<h1>Snack 1</h1><br>';
    for($i = 0; $i < count($matches); $i++) {
        echo $matches[$i]['team1'].' - '.$matches[$i]['team2'].' punteggio: '.$matches[$i]['point_team_1'].' - '.$matches[$i]['point_team_2'].'<br>';
    }
    
// Snack 2
    // Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
    // che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.
    // Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"

    $name = $_GET['nome'];
    $mail = $_GET['mail'];
    $age = $_GET['eta'];

    echo '<h1>Snack 2</h1><br>';
    if(strlen($name) > 3 && strpos($mail, '.') && strpos($mail, '@') && is_numeric($age)) {
        echo ucwords('accesso riuscito!');
    }
    else {
        echo ucwords('accesso negato!');
    }

//Snack 3
    //Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come
    //valore un array di post associati a quella data. Stampare ogni data con i relativi post.
    //Qui l'array di esempio: https://www.codepile.net/pile/R2K5d68z

    $posts = [

        '10/01/2019' => [
            [
                'title' => 'Ginecologia',
                'author' => 'Jacopo Ferroni',
                'text' => 'La medicina è la mia vita, mille volte meglio della...'
            ],
            [
                'title' => 'Prato fiorito',
                'author' => 'Michele Papagni',
                'text' => 'fantastico prato!'
            ],
        ],
        '10/02/2019' => [
            [
                'title' => 'Mare',
                'author' => 'Giulia Ferroni',
                'text' => 'Giornata in barca!'
            ]
        ],
        '15/05/2019' => [
            [
                'title' => 'Montagna',
                'author' => 'Carlo Ferroni',
                'text' => 'Trekking finito!!'
            ],
            [
                'title' => 'Roma',
                'author' => 'Paola Cardone',
                'text' => 'Hotel con vista sui monumenti niente male'
            ],
            [
                'title' => 'Milano',
                'author' => 'Leo salvatorelli',
                'text' => 'Ho visto solo la nebbia...'
            ]
        ],
    ];

    echo '<h1>Snack 3</h1><br>';
    $firtData = $posts['10/01/2019'];
    $seconsData = $posts['10/02/2019'];
    $thirdData = $posts['15/05/2019'];

    for($i = 0; $i < count($firtData); $i++) {
        echo ($i+1).')'.$firtData[$i]['title'].'<br>';
        echo $firtData[$i]['author'].'<br>';
        echo $firtData[$i]['text'].'<br>';
        echo '<br>';
    }

    echo '<br>';
    echo '<br>';

    for($j = 0; $j < count($seconsData); $j++) {
        echo ($j+1).')'.$seconsData[$j]['title'].'<br>';
        echo $seconsData[$j]['author'].'<br>';
        echo $seconsData[$j]['text'].'<br>';
        echo '<br>';
    }

    echo '<br>';
    echo '<br>';

    for($k = 0; $k < count($thirdData); $k++) {
        echo ($k+1).')'.$thirdData[$k]['title'].'<br>';
        echo $thirdData[$k]['author'].'<br>';
        echo $thirdData[$k]['text'].'<br>';
        echo '<br>';
    }
    
//Snack 4
    //Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta

    $randomArray = [];

    echo '<h1>Snack 4</h1><br>';
    while(count($randomArray) < 15) {
        $randomNumber = rand(1, 15);
        if(!in_array($randomNumber, $randomArray)) {
            $randomArray[] = $randomNumber;
        }
    }
    for($i = 0; $i < 15; $i++) {
        echo $randomArray[$i].' ';
    }

//Snack 5
    //Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo  e
    //suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.

    $frase = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

    echo '<h1>Snack 5</h1><br>';

    for($i = 0; $i < strlen(explode('.', $frase)[$i]); $i++) {
        echo explode('.', $frase)[$i].'<br>';
    }

//Snack 6
    //Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli
    //insegnanti in un rettangolo grigio e i PM in un rettangolo verde.

    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

    echo '<h1>Snack 6</h1><br>';

    $teachers = $db['teachers'];
    $pms = $db['pm'];
    echo '<h3>Professori:</h3>';
    for($i = 0; $i < count($teachers); $i++) {
        echo $teachers[$i]['name'].' ';
        echo $teachers[$i]['lastname'].'<br>';
    }

    echo '<h3>Pm:</h3>';
    for($j = 0; $j < count($pms); $j++) {
        echo $pms[$j]['name'].' ';
        echo $pms[$j]['lastname'].'<br>';
    }

//Snack 7
    //Creare un array contenente qualche alunno di un'ipotetica classe. Ogni alunno avrà Nome, Cognome e
    //un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.

    $alunni = [
        [
            'name' => 'Jacopo',
            'lastname' => 'Ferroni',
            'voti' => [
                10,
                2,
                3,
                6,
                8,
            ]
        ],
        [
            'name' => 'Giulia',
            'lastname' => 'Ferroni',
            'voti' => [
                10,
                5,
                7,
                1,
                8,
            ]
        ],
        [
            'name' => 'Carlo',
            'lastname' => 'Ferroni',
            'voti' => [
                9,
                6,
                3,
                2,
                7,
            ]
        ],
        [
            'name' => 'Paola',
            'lastname' => 'Cardone',
            'voti' => [
                10,
                10,
                10,
                9,
                3,
            ]
        ],
        [
            'name' => 'Pierfrancesco',
            'lastname' => 'Scarinci',
            'voti' => [
                10,
                10,
                2,
                1,
                8,
            ]
        ],
        [
            'name' => 'Calogero',
            'lastname' => 'Bonito',
            'voti' => [
                4,
                4,
                5,
                4,
                8,
            ]
        ],
        [
            'name' => 'Leo',
            'lastname' => 'Salvatorelli',
            'voti' => [
                7,
                7,
                7,
                7,
                3,
            ]
            ],
    ];

    echo '<h1>Snack 7</h1><br>';
    for($i = 0; $i < count($alunni); $i++) {
        echo ucwords('Alunno ').($i + 1).': ';
        echo $alunni[$i]['name'].' ';
        echo $alunni[$i]['lastname'].' |'.' ';
        echo ucfirst('media voti: ');
        $voti = $alunni[$i]['voti'];
        $somma = 0;
        for($j = 0; $j < count($voti); $j++) {
            $somma += $voti[$j];
        }
        $media = $somma / $j;
        echo $media.'<br>';
    }
?>