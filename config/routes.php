<?php
/**
 * Routes configuration.
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * It's loaded within the context of `Application::routes()` method which
 * receives a `RouteBuilder` instance `$routes` as method argument.
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

return function (RouteBuilder $routes): void {
    $routes->setRouteClass(DashedRoute::class);

    $routes->scope('/', function (RouteBuilder $builder): void {
        // Page d'accueil
        $builder->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);

        // Qui sommes-nous
        $builder->connect('/presentationdesalon', ['controller' => 'Pages', 'action' => 'display']);
        $builder->connect('/lalgerie', ['controller' => 'Pages', 'action' => 'lalgerie']);
        $builder->connect('/presentationdesecteur', ['controller' => 'Pages', 'action' => 'display']);
        $builder->connect('/fichetechniquesalon', ['controller' => 'Pages', 'action' => 'display']);

        // Espace exposant
        $builder->connect('/exposantnational', ['controller' => 'Pages', 'action' => 'display']);
        $builder->connect('/exposantinternational', ['controller' => 'Pages', 'action' => 'display']);
        $builder->connect('/epaiment', ['controller' => 'Pages', 'action' => 'display']);

        // Plan du salon
        $builder->connect('/plandusalon', ['controller' => 'Pages', 'action' => 'display']);

        // Édition précédente
        $builder->connect('/photos', ['controller' => 'Pages', 'action' => 'display']);
        $builder->connect('/videos', ['controller' => 'Pages', 'action' => 'display']);

        // Contact
        $builder->connect('/contact', ['controller' => 'Pages', 'action' => 'display']);


        // Routes de fallback pour tous les autres contrôleurs
        $builder->fallbacks();
    });
};
