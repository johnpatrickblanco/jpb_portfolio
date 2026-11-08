<?php

return [

    'nav' => [
        ['name' => 'Home', 'href' => 'home'],
        ['name' => 'About', 'href' => 'about'],
        ['name' => 'Education', 'href' => 'education'],
        ['name' => 'Projects', 'href' => 'projects'],
        ['name' => 'Contact', 'href' => 'contact'],
    ],

    'social' => [
        ['name' => 'GitHub', 'url' => 'https://github.com/johnpatrickblanco', 'icon' => 'github'],
        ['name' => 'Phone', 'url' => 'tel:+639065657910', 'icon' => 'phone'],
        ['name' => 'Facebook', 'url' => 'https://www.facebook.com/johnpatrick.blanco.33/', 'icon' => 'facebook'],
    ],

    'skills' => [
        'Programming' => [
            ['name' => 'Java', 'mark' => 'Ja', 'color' => '#EA2D2F'],
            ['name' => 'C++', 'mark' => 'C++', 'color' => '#00599C'],
            ['name' => 'Python', 'mark' => 'Py', 'color' => '#3776AB'],
            ['name' => 'C#', 'mark' => 'C#', 'color' => '#512BD4'],
        ],
        'Web Development' => [
            ['name' => 'HTML', 'mark' => 'HTML', 'color' => '#E34F26'],
            ['name' => 'JavaScript', 'mark' => 'JS', 'color' => '#F7DF1E'],
            ['name' => 'PHP', 'mark' => 'PHP', 'color' => '#777BB4'],
        ],
        'Databases & Tools' => [
            ['name' => 'MySQL', 'mark' => 'My', 'color' => '#4479A1'],
            ['name' => 'XAMPP', 'mark' => 'XA', 'color' => '#FB7A24'],
            ['name' => 'Visual Studio', 'mark' => 'VS', 'color' => '#5C2D91'],
            ['name' => 'Linux', 'mark' => 'Lx', 'color' => '#4A5568'],
        ],
    ],

    'projects' => [
        [
            'name' => 'SARAK: A Geographic Information System for Business Infrastructure in Bangued, Abra',
            'image' => '/images/Sarak0.png',
            'images' => [
                '/images/Sarak0.png',
                '/images/Sarak1.png',
                '/images/Sarak2.png',
                '/images/Sarak3.png',
                '/images/Sarak4.png',
            ],
            'description' => 'Sarak is a website with a map of important places in Bangued, Abra, like hospitals, pharmacies, coffee shops, fast-food chains, and groceries. Right now, the town\'s planning office only has a yearly spreadsheet of businesses, with no map locations or opening hours, and nobody to check what changes during the year. So people who ask for a place get directions from staff memory, which is often outdated, and they end up at places that are closed or moved. Sarak fixes this by letting residents and business owners add places, report changes, and upload photos. Planning office staff review every submission before it goes live, so the map stays accurate and trustworthy. Anyone can then use the map to search for places and get directions.',
            'technologies' => ['HTML', 'CSS', 'JavaScript', 'PHP', 'MySQL', 'Laravel'],
            'status' => 'Ongoing / Academic Project',
            'githubUrl' => '',
            'liveUrl' => 'https://sarak.free.nf',
        ],
        [
            'name' => 'Casa Nostra Resort and Event Information System with Reservation System',
            'image' => '/images/casanostra0.png',
            'images' => [
                '/images/casanostra0.png',
                '/images/casanostra1.png',
                '/images/casanostra2.png',
            ],
            'description' => 'A resort and event information system with an online reservation feature designed to make the booking process easier, faster, and more organized. The system allows guests to view resort information, check room availability, submit reservations, and view booking details.',
            'technologies' => ['HTML', 'CSS', 'JavaScript', 'PHP', 'MySQL'],
            'status' => '',
            'githubUrl' => '',
            'liveUrl' => '',
        ],
        [
            'name' => 'Bayugo Dental Clinic Online Record Management System',
            'image' => '/images/bayugodental0.png',
            'images' => [
                '/images/bayugodental0.png',
                '/images/bayugodental1.png',
                '/images/bayugodental2.png',
            ],
            'description' => 'An online dental clinic management system designed to help organize patient information, appointments, and dental clinic records. The system aims to reduce manual work and make patient information easier for authorized clinic personnel to manage and access.',
            'technologies' => ['HTML', 'CSS', 'JavaScript', 'PHP', 'MySQL', 'Laravel'],
            'status' => 'Academic Project / Ongoing',
            'githubUrl' => '',
            'liveUrl' => '',
        ],
    ],

    'education' => [
        [
            'level' => 'Tertiary Education',
            'school' => 'Data Center College of the Philippines – Bangued',
            'program' => 'Bachelor of Science in Information Technology (BSIT)',
            'details' => ['Current Level: 4th Year', 'Current Year: 2026', 'Expected Graduation: 2027'],
        ],
        [
            'level' => 'Secondary Education',
            'school' => 'Manabo National High School',
            'program' => '',
            'details' => ['Attended: 2022', 'Graduated: 2023'],
        ],
    ],

    'site' => [
        'name' => 'John Patrick P. Blanco',
        'title' => 'John Patrick P. Blanco | Information Technology',
        'description' => 'A modern portfolio for a web developer',
        'phoneHref' => 'tel:+639065657910',
        'phoneDisplay' => '0906 565 7910',
        'avatar' => '/images/pogi.jpg',
    ],
];