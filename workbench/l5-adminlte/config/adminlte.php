<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | The default title of your admin panel, this goes into the title tag
    | of your page. You can override it per page with the title section
    | like so: @section('title', 'Dashboard | My Great Admin Panel')
    |
    */

    'title' => 'EDC System',

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | This logo is displayed at the upper left corner of your admin panel.
    | You can use basic HTML here if you want. The logo has also a mini
    | variant, used for the mini side bar. Make it 3 letters or so
    |
    */

    'logo' => '<b>EDC</b> System',

    'logo_mini' => '<b>E</b>DC',

    'version' => 'v.0.11.27',

    /*
    |--------------------------------------------------------------------------
    | Skin Color
    |--------------------------------------------------------------------------
    |
    | Choose a skin color for your admin panel. The available skin colors:
    | blue, black, purple, yellow, red, and green. Each skin also has a
    | ligth variant: blue-light, purple-light, purple-light, etc.
    |
    */

    'skin' => 'fromz',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Register here your dashboard, logout, login and register URLs. The
    | first two must respond to a GET request, the last two to a POST.
    | Set register_url to null if you don't want a register link.
    |
    */

    'assets'        => asset('themes/adminlte/dist').'/',
    'js'            => asset('themes/adminlte/dist/js/app.js'),
    'css'           => asset('themes/adminlte/dist/css/AdminLTE.min.css'),
    'script'        => asset('themes/adminlte/script/').'/',
    'plugin'        => asset('themes/adminlte/plugins').'/',

    'bootstrap'     => asset('themes/adminlte/bootstrap/').'/',

    'bootstrap-css' => asset('themes/adminlte/bootstrap/css/bootstrap.min.css'),
    'bootstrap-js'  => asset('themes/adminlte/bootstrap/js/bootstrap.min.js'),
    'jQuery'        => asset('themes/adminlte/plugins/jQuery/jQuery-2.1.4.min.js'),


    'dashboard-js'  => asset('themes/adminlte/script/dashboard.js'),


    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |*/

    'dashboard_url' => 'dashboards',

    'logout_url' => 'logout',

    'login_url' => 'login',

    'register_url' => 'register',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Specify your menu items to display in the left sidebar. Each menu item
    | should have a text and and a URL. You can also specify an icon from
    | Font Awesome. A string instead of an array represents a header.
    |
    */

    'menu'  => [
        'MAIN NAVIGATION',
        [
            'treeview' => '',
            'text'     => ' Dashboard',
            'url'      => 'dashboards',
            'icon'     => 'dashboard',
        ],
        [
            'treeview' => 'report',
            'text'     => ' Report',
            'url'      => '#',
            'icon'     => 'bar-chart',
        ],
        'DATA MANAGER',
        [
            'treeview' => 'company',
            'text'     => ' Company',
            'url'      => '#',
            'icon'     => 'company',
        ],
        [
            'treeview' => 'product',
            'text'     => ' Product',
            'url'      => '#',
            'icon'     => 'cubes',
        ],
        'ACCOUNT SETTINGS',
        [
            'treeview' => '',
            'text'     => ' Profile',
            'url'      => 'admin/settings',
            'icon'     => 'user',
        ],
        [
            'treeview' => '',
            'text'     => ' Change Password',
            'url'      => 'password',
            'icon'     => 'lock',
        ],
    ],
    'child' => [
        [
            'menu' => 'report',
            'text' => ' Map Report',
            'url'  => 'dashboards/map',
            'icon' => 'map-marker',
        ], [
            'menu' => 'report',
            'text' => ' Data Report',
            'url'  => 'dashboards/map',
            'icon' => 'map-marker',
        ],
        [
            'menu' => 'company',
            'text' => ' List',
            'url'  => 'company',
            'icon' => 'lock',
        ],
        [
            'menu' => 'company',
            'text' => ' Create',
            'url'  => 'company/create',
            'icon' => 'lock',
        ],
        [
            'menu' => 'company',
            'text' => ' List',
            'url'  => 'company',
            'icon' => 'lock',
        ],
        [
            'menu' => 'company',
            'text' => ' List',
            'url'  => 'company',
            'icon' => 'lock',
        ],
        [
            'menu' => 'product',
            'text' => ' List',
            'url'  => 'product',
            'icon' => 'cube',
        ],
    ],
];