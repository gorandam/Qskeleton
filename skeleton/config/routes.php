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
    ['GET', '/', 'Skeleton\Core\Web\IndexController'],
   [['GET', 'POST'], '/login/{action}', 'Skeleton\User\Web\LoginController'],
    [['GET', 'POST'], '/register/{action}', 'Skeleton\User\Web\RegisterController'],
   [['GET', 'POST'], '/user/{action}[/{userId}]', 'Skeleton\User\Web\UserController'],
    [['GET', 'POST'], '/student[/{studentId}]', 'Skeleton\Student\Api\StudentController'],

];
