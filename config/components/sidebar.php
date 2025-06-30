<?php

/**
 * Each sidebar menu item is an array with the following structure:
 * [
 *     'label'      => (string) The menu display name,
 *     'route'      => (string) The Laravel route name to redirect when clicked,
 *     'icon'       => (string) Icon class (supports FontAwesome, Nucleo, etc),
 *     'section'    => (string|null) (Optional) Menu section name for grouping, just call at once and next item will be in the same section,
 *     'permission' => (string|null) (Optional) Permission/ability name from policy/gate,
 * ]
 */


return [
    [
        'label' => 'Dashboard',
        'route' => 'dashboard',
        'icon' => 'ni ni-tv-2',
        'section' => 'Dashboard',
    ],
];
