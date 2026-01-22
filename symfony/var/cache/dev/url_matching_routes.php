<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_wdt/styles' => [[['_route' => '_wdt_stylesheet', '_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/allergen' => [[['_route' => 'app_allergen_index', '_controller' => 'App\\Controller\\AllergenController::index'], null, ['GET' => 0], null, false, false, null]],
        '/allergen/new' => [[['_route' => 'app_allergen_new', '_controller' => 'App\\Controller\\AllergenController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/category' => [[['_route' => 'app_category_index', '_controller' => 'App\\Controller\\CategoryController::index'], null, ['GET' => 0], null, false, false, null]],
        '/category/new' => [[['_route' => 'app_category_new', '_controller' => 'App\\Controller\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/dish' => [[['_route' => 'app_dish_index', '_controller' => 'App\\Controller\\DishController::index'], null, ['GET' => 0], null, false, false, null]],
        '/dish/new' => [[['_route' => 'app_dish_new', '_controller' => 'App\\Controller\\DishController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/menu' => [[['_route' => 'app_menu', '_controller' => 'App\\Controller\\MenuController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reservation' => [[['_route' => 'app_reservation', '_controller' => 'App\\Controller\\ReservationController::new'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/reservation/admin' => [[['_route' => 'app_reservation_index', '_controller' => 'App\\Controller\\ReservationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/sub/category' => [[['_route' => 'app_sub_category_index', '_controller' => 'App\\Controller\\SubCategoryController::index'], null, ['GET' => 0], null, false, false, null]],
        '/sub/category/new' => [[['_route' => 'app_sub_category_new', '_controller' => 'App\\Controller\\SubCategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/allergen/([^/]++)(?'
                    .'|(*:223)'
                    .'|/edit(*:236)'
                    .'|(*:244)'
                .')'
                .'|/category/([^/]++)(?'
                    .'|(*:274)'
                    .'|/edit(*:287)'
                    .'|(*:295)'
                .')'
                .'|/dish/([^/]++)(?'
                    .'|(*:321)'
                    .'|/edit(*:334)'
                    .'|(*:342)'
                .')'
                .'|/reservation/([^/]++)(?'
                    .'|(*:375)'
                    .'|/edit(*:388)'
                    .'|(*:396)'
                .')'
                .'|/sub/category/([^/]++)(?'
                    .'|(*:430)'
                    .'|/edit(*:443)'
                    .'|(*:451)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        223 => [[['_route' => 'app_allergen_show', '_controller' => 'App\\Controller\\AllergenController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        236 => [[['_route' => 'app_allergen_edit', '_controller' => 'App\\Controller\\AllergenController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        244 => [[['_route' => 'app_allergen_delete', '_controller' => 'App\\Controller\\AllergenController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        274 => [[['_route' => 'app_category_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        287 => [[['_route' => 'app_category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        295 => [[['_route' => 'app_category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        321 => [[['_route' => 'app_dish_show', '_controller' => 'App\\Controller\\DishController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        334 => [[['_route' => 'app_dish_edit', '_controller' => 'App\\Controller\\DishController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        342 => [[['_route' => 'app_dish_delete', '_controller' => 'App\\Controller\\DishController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        375 => [[['_route' => 'app_reservation_show', '_controller' => 'App\\Controller\\ReservationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        388 => [[['_route' => 'app_reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        396 => [[['_route' => 'app_reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        430 => [[['_route' => 'app_sub_category_show', '_controller' => 'App\\Controller\\SubCategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        443 => [[['_route' => 'app_sub_category_edit', '_controller' => 'App\\Controller\\SubCategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        451 => [
            [['_route' => 'app_sub_category_delete', '_controller' => 'App\\Controller\\SubCategoryController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
