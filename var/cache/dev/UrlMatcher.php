<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'fos_user_security_login', '_controller' => 'fos_user.security.controller:loginAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login_check' => [[['_route' => 'fos_user_security_check', '_controller' => 'fos_user.security.controller:checkAction'], null, ['POST' => 0], null, false, false, null]],
        '/logout' => [[['_route' => 'fos_user_security_logout', '_controller' => 'fos_user.security.controller:logoutAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profile' => [[['_route' => 'fos_user_profile_show', '_controller' => 'fos_user.profile.controller:showAction'], null, ['GET' => 0], null, true, false, null]],
        '/profile/edit' => [[['_route' => 'fos_user_profile_edit', '_controller' => 'fos_user.profile.controller:editAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'fos_user_registration_register', '_controller' => 'fos_user.registration.controller:registerAction'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/register/check-email' => [[['_route' => 'fos_user_registration_check_email', '_controller' => 'fos_user.registration.controller:checkEmailAction'], null, ['GET' => 0], null, false, false, null]],
        '/register/confirmed' => [[['_route' => 'fos_user_registration_confirmed', '_controller' => 'fos_user.registration.controller:confirmedAction'], null, ['GET' => 0], null, false, false, null]],
        '/resetting/request' => [[['_route' => 'fos_user_resetting_request', '_controller' => 'fos_user.resetting.controller:requestAction'], null, ['GET' => 0], null, false, false, null]],
        '/resetting/send-email' => [[['_route' => 'fos_user_resetting_send_email', '_controller' => 'fos_user.resetting.controller:sendEmailAction'], null, ['POST' => 0], null, false, false, null]],
        '/resetting/check-email' => [[['_route' => 'fos_user_resetting_check_email', '_controller' => 'fos_user.resetting.controller:checkEmailAction'], null, ['GET' => 0], null, false, false, null]],
        '/profile/change-password' => [[['_route' => 'fos_user_change_password', '_controller' => 'fos_user.change_password.controller:changePasswordAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/hello' => [[['_route' => 'hello', '_controller' => 'App\\Controller\\HelloController::index'], null, ['GET' => 0], null, false, false, null]],
        '/traidein' => [[['_route' => 'traidein', '_controller' => 'App\\Controller\\HeaderNavController\\TraideinController::index'], null, ['GET' => 0], null, false, false, null]],
        '/delivery' => [[['_route' => 'delivery', '_controller' => 'App\\Controller\\HeaderNavController\\DeliveryController::index'], null, ['GET' => 0], null, false, false, null]],
        '/warranty' => [[['_route' => 'warranty', '_controller' => 'App\\Controller\\HeaderNavController\\WarrantyController::index'], null, ['GET' => 0], null, false, false, null]],
        '/faq' => [[['_route' => 'faq', '_controller' => 'App\\Controller\\HeaderNavController\\FaqController::index'], null, ['GET' => 0], null, false, false, null]],
        '/contacts' => [[['_route' => 'contacts', '_controller' => 'App\\Controller\\HeaderNavController\\ContactsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/support' => [[['_route' => 'support', '_controller' => 'App\\Controller\\HeaderNavController\\InformationController\\SupportController::index'], null, ['GET' => 0], null, false, false, null]],
        '/reviews' => [[['_route' => 'reviews', '_controller' => 'App\\Controller\\HeaderNavController\\InformationController\\ReviewsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/refund' => [[['_route' => 'refund', '_controller' => 'App\\Controller\\HeaderNavController\\InformationController\\RefundController::index'], null, ['GET' => 0], null, false, false, null]],
        '/purchase' => [[['_route' => 'purchase', '_controller' => 'App\\Controller\\HeaderNavController\\InformationController\\PurchaseController::index'], null, ['GET' => 0], null, false, false, null]],
        '/aboutus' => [[['_route' => 'aboutus', '_controller' => 'App\\Controller\\HeaderNavController\\InformationController\\AboutusController::index'], null, ['GET' => 0], null, false, false, null]],
        '/' => [
            [['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'add_product_to_cart', '_controller' => 'App\\Controller\\CartController::add'], null, ['GET' => 0, 'POST' => 1], null, false, false, null],
        ],
        '/admin' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Admin\\Controller\\DashboardController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/product/add' => [[['_route' => 'admin_add_product', '_controller' => 'App\\Admin\\Controller\\ProductController::add'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/category/add' => [[['_route' => 'admin_add_category', '_controller' => 'App\\Admin\\Controller\\CategoryController::add'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/adnin/user' => [[['_route' => 'admin_users', '_controller' => 'App\\Admin\\Controller\\UserController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/adnin/user/promote' => [[['_route' => 'admin_assing_users_rols', '_controller' => 'App\\Admin\\Controller\\UserController::promote'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/basket' => [[['_route' => 'cart', '_controller' => 'App\\Controller\\CartController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/re(?'
                    .'|gister/confirm/([^/]++)(*:198)'
                    .'|setting/reset/([^/]++)(*:228)'
                .')'
                .'|/category ([^/]++)(*:255)'
                .'|/([^/]++)(*:272)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        198 => [[['_route' => 'fos_user_registration_confirm', '_controller' => 'fos_user.registration.controller:confirmAction'], ['token'], ['GET' => 0], null, false, true, null]],
        228 => [[['_route' => 'fos_user_resetting_reset', '_controller' => 'fos_user.resetting.controller:resetAction'], ['token'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        255 => [[['_route' => 'categories', '_controller' => 'App\\Controller\\CategoryController::products'], ['id'], ['GET' => 0], null, false, true, null]],
        272 => [
            [['_route' => 'view', '_controller' => 'App\\Controller\\HomeController::view'], ['slug'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
