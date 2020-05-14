<?php

/**
 * Define routes here.
 *
 * Routes follow this format:
 *
 * [METHOD, ROUTE, CALLABLE] or
 * [METHOD, ROUTE, [Class => method]]
 *
 * When controller is used without method (as string), it needs to have a magic __invoke method defined.
 *
 * Routes can use optional segments and regular expressions. See nikic/fastroute
 */

return [
    ['GET', '/', 'Kptask\Core\Web\IndexController'],
   [['GET', 'POST'], '/login/{action}', 'Kptask\User\Web\LoginController'],
    [['GET', 'POST'], '/register/{action}', 'Kptask\User\Web\RegisterController'],
   [['GET', 'POST'], '/user/{action}[/{userId}]', 'Kptask\User\Web\UserController'],

];
