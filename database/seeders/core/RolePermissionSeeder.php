<?php

namespace Database\Seeders\core;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        $roles = ['Administrator', 'Editor', 'User'];
        $roleInstances = [];

        foreach ($roles as $role) {
            $roleInstances[$role] = Role::firstOrCreate(
                ['name' => $role, 'guard_name' => 'web']
            );
        }

        $permissions = ['browse', 'read', 'add', 'edit', 'delete'];
        $menus = [
            'master-data',
            'master-sub-kegiatan',
            'master-paket',
            'perencanaan',
            'realisasi',
            'laporan',
            'user'
        ];

        $createdPermissions = [];
        foreach ($permissions as $perm) {
            foreach ($menus as $menu) {
                $key = $perm . ' ' . $menu;
                $createdPermissions[$key] = Permission::firstOrCreate(
                    ['name' => $key, 'guard_name' => 'web']
                );
            }
        }

        $rolePermissions = [
            'Administrator' => [
                'browse',
                'read',
                'add',
                'edit',
                'delete'
            ],
            'Editor'        => [
                'browse',
                'read',
                'edit'
            ],
            'User'          => [
                'browse',
                'read'
            ],
        ];

        $except = [
            'user' => [
                'Editor' => [
                    'browse',
                    'read',
                    'edit'
                ],
                'User' => [
                    'browse',
                    'read'
                ],
            ],
        ];

        foreach ($rolePermissions as $roleName => $perms) {
            $permissionsToAssign = [];
            foreach ($perms as $perm) {
                foreach ($menus as $menu) {
                    $key = $perm . ' ' . $menu;
                    $permissionsToAssign[] = $createdPermissions[$key];
                }
            }
            $roleInstances[$roleName]->syncPermissions($permissionsToAssign);
        }

        foreach ($except as $menu => $rolesExcept) {
            foreach ($rolesExcept as $roleName => $perms) {
                $role = $roleInstances[$roleName];
                foreach ($perms as $perm) {
                    $key = $perm . ' ' . $menu;
                    if (isset($createdPermissions[$key])) {
                        $role->revokePermissionTo($createdPermissions[$key]);
                    }
                }
            }
        }
    }
}