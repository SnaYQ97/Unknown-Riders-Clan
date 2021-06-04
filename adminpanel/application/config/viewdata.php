<?php defined('BASEPATH') or exit('No direct script access allowed');

$config['Admin'] = [
  //Dashboard
  'index' => [
    'viewPath' => 'admin/Dashboard/Pages/index',
    'header-data' => [
      'scripts' => [
        'vendor/jquery/jquery.min.js',
        'vendor/bootstrap/js/bootstrap.bundle.min.js',
        'vendor/jquery-easing/jquery.easing.min.js',
        'vendor/chart.js/Chart.min.js',
      ],
      'defers' => [
        'assets/build/js/sb-admin-2.min.js',
        'assets/build/js/chart-area.min.js',
        'assets/build/js/chart-pie.min.js'
      ],
      'styles' => [
        'vendor/fontawesome-free/css/all.min.css',
        'assets/build/css/sb-admin-2.min.css',
      ],
      'title' => 'Admin Panel 1.0 - Statystyki',
      'PageHeaderText' => 'Statystyki',
      //'raportButton' => true
    ],
    'active-map' => [
      'header' => 'Dashboard',
      'item' => 'index'
    ]
  ],
  //Tables
  'players' => [
    'viewPath' => 'admin/Dashboard/Pages/players-table',
    'header-data' => [
      'scripts' => [
        'vendor/jquery/jquery.min.js',
        'vendor/bootstrap/js/bootstrap.bundle.min.js',
        'vendor/jquery-easing/jquery.easing.min.js',
        'vendor/datatables/jquery.dataTables.min.js',
        'vendor/datatables/dataTables.bootstrap4.min.js'
      ],
      'defers' => [
        'assets/build/js/sb-admin-2.min.js',
        'assets/build/js/players-datatables.min.js'
      ],
      'styles' => [
        'vendor/fontawesome-free/css/all.min.css',
        'assets/build/css/sb-admin-2.min.css',
        'assets/build/css/dataTables.bootstrap4.min.css',
        'assets/build/css/data-table-extend.min.css'
      ],
      'title' => 'Admin Panel 1.0 - Players table',
      'PageHeaderText' => 'Players table',
      'addButton' => 'Player',
      'buttonFileName' => 'add-player-button'
    ],
    'active-map' => [
      'header' => 'Tables',
      'item' => 'players'
    ]
  ],
  'films' => [
    'viewPath' => 'admin/Dashboard/Pages/films-table',
    'header-data' => [
      'scripts' => [
        'vendor/jquery/jquery.min.js',
        'vendor/bootstrap/js/bootstrap.bundle.min.js',
        'vendor/jquery-easing/jquery.easing.min.js',
        'vendor/datatables/jquery.dataTables.min.js',
        'vendor/datatables/dataTables.bootstrap4.min.js'
      ],
      'defers' => [
        'assets/build/js/sb-admin-2.min.js',
        'assets/build/js/films-datatables.min.js'
      ],
      'styles' => [
        'vendor/fontawesome-free/css/all.min.css',
        'assets/build/css/sb-admin-2.min.css',
        'assets/build/css/dataTables.bootstrap4.min.css',
        'assets/build/css/data-table-extend.min.css'
      ],
      'title' => 'Admin Panel 1.0 - Films table',
      'PageHeaderText' => 'Films table',
      'addButton' => 'Film',
      'buttonFileName' => 'add-film-button'
    ],
    'active-map' => [
      'header' => 'Tables',
      'item' => 'films'
    ]
  ],
  'photos' => [
    'viewPath' => 'admin/Dashboard/Pages/photos-table',
    'header-data' => [
      'scripts' => [
        'vendor/jquery/jquery.min.js',
        'vendor/bootstrap/js/bootstrap.bundle.min.js',
        'vendor/jquery-easing/jquery.easing.min.js',
        'vendor/datatables/jquery.dataTables.min.js',
        'vendor/datatables/dataTables.bootstrap4.min.js'
      ],
      'defers' => [
        'assets/build/js/sb-admin-2.min.js',
        'assets/build/js/photos-datatables.min.js'
      ],
      'styles' => [
        'vendor/fontawesome-free/css/all.min.css',
        'assets/build/css/sb-admin-2.min.css',
        'assets/build/css/dataTables.bootstrap4.min.css',
        'assets/build/css/data-table-extend.min.css'
      ],
      'title' => 'Admin Panel 1.0 - Photos table',
      'PageHeaderText' => 'Photos table',
      'addButton' => 'Photo',
      'buttonFileName' => 'add-photo-button'
    ],
    'active-map' => [
      'header' => 'Tables',
      'item' => 'photos'
    ]
  ],
];

$config['Users'] = [
  //Dashboard
  'login' => [
    'viewPath' => 'user/login',
    'header-data' => [
      'scripts' => [
        'vendor/jquery/jquery.min.js',
        'vendor/bootstrap/js/bootstrap.bundle.min.js',
        'vendor/jquery-easing/jquery.easing.min.js',
      ],
      'defers' => [
        'assets/build/js/sb-admin-2.min.js',
      ],
      'styles' => [
        'vendor/fontawesome-free/css/all.min.css',
        'assets/build/css/sb-admin-2.min.css',
        'assets/build/css/data-table-extend.min.css'
      ],
      'title' => 'Admin Panel 1.0 - Login',
    ]
  ],
];