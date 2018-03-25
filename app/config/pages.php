<?php
$config['pages'] = [
    'index' => ['route' => '/', 'controller' => 'PageController', 'action' => 'index', 'title' => 'Резюме'],
    'sites' => ['route' => '/sites/(\d{0,4})/?', 'controller' => 'SitesController', 'action' => 'items', 'params' => ['year'], 'title' => 'Сайты'],
    'templates' => ['route' => '/templates/', 'controller' => 'TemplatesController', 'action' => 'items', 'title' => 'Шаблоны'],
    'apps' => ['route' => '/apps/(\d{0,4})/?', 'controller' => 'AppsController', 'action' => 'items', 'params' => ['year'], 'title' => 'Приложения'],
    'skins' => ['route' => '/skins/', 'controller' => 'SkinsController', 'action' => 'items', 'title' => 'Темы'],
    '404' => ['route' => '/404/', 'controller' => 'PageController', 'action' => 'notfound', 'title' => 'Страница не найдена'],
];