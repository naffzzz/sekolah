<?php

use Illuminate\Database\Seeder;
use App\Models\Permission;
use App\Models\Module;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::truncate();
        Module::truncate();
        
        //families
        $families_module=Module::Create([
            'name'=>'families'
        ]);

        Permission::insert(
        [
            [
                'module_id'=>$families_module['id'],
                'key'=>'view_families',
                'name'=>'View'
            ],
            [
                'module_id'=>$families_module['id'],
                'key'=>'create_families',
                'name'=>'Create'
            ],
            [
                'module_id'=>$families_module['id'],
                'key'=>'edit_families',
                'name'=>'Edit'
            ],
            [
                'module_id'=>$families_module['id'],
                'key'=>'delete_families',
                'name'=>'Delete'
            ],
        ]
        );

        //roles
        $roles_module=Module::Create([
            'name'=>'roles'
        ]);

        Permission::insert(
        [
            [
                'module_id'=>$roles_module['id'],
                'key'=>'view_role',
                'name'=>'View'
            ],
            [
                'module_id'=>$roles_module['id'],
                'key'=>'create_role',
                'name'=>'Create'
            ],
            [
                'module_id'=>$roles_module['id'],
                'key'=>'edit_role',
                'name'=>'Edit'
            ],
            [
                'module_id'=>$roles_module['id'],
                'key'=>'delete_role',
                'name'=>'Delete'
            ],
        ]
        );

        //users
        $users_module=Module::Create([
            'name'=>'users'
        ]);

        Permission::insert(
        [
            [
                'module_id'=>$users_module['id'],
                'key'=>'view_user',
                'name'=>'View'
            ],
            [
                'module_id'=>$users_module['id'],
                'key'=>'create_user',
                'name'=>'Create'
            ],
            [
                'module_id'=>$users_module['id'],
                'key'=>'edit_user',
                'name'=>'Edit'
            ],
            [
                'module_id'=>$users_module['id'],
                'key'=>'delete_user',
                'name'=>'Delete'
            ],
        ]
        );
        
        //backups
        $backups_module=Module::Create([
            'name'=>'Backups'
        ]);

        Permission::insert(
        [
            [
                'module_id'=>$backups_module['id'],
                'key'=>'view_backup',
                'name'=>'View'
            ],
            [
                'module_id'=>$backups_module['id'],
                'key'=>'create_backup',
                'name'=>'Create'
            ],
            [
                'module_id'=>$backups_module['id'],
                'key'=>'delete_backup',
                'name'=>'Delete'
            ],
        ]
        );

        //settings
        $setting_module=Module::Create([
            'name'=>'setting'
        ]);

        Permission::insert(
        [
            [
                'module_id'=>$setting_module['id'],
                'key'=>'view_setting',
                'name'=>'Update'
            ],
        ]
        );

        //chat
        $chat_module=Module::Create([
            'name'=>'Chat'
        ]);

        Permission::insert(
        [
            [
                'module_id'=>$chat_module['id'],
                'key'=>'view_chat',
                'name'=>'View'
            ]
        ]
        );

        //activity log
        $log_module=Module::Create([
            'name'=>'Actvity logs'
        ]);

        Permission::insert(
        [
            [
                'module_id'=>$log_module['id'],
                'key'=>'view_activity_log',
                'name'=>'View'
            ],
            [
                'module_id'=>$log_module['id'],
                'key'=>'clear_activity_log',
                'name'=>'Clear'
            ],
        ]
        );

        //translation
        $translation_module=Module::Create([
            'name'=>'Translation'
        ]);

        Permission::insert(
        [
            [
                'module_id'=>$translation_module['id'],
                'key'=>'view_translation',
                'name'=>'View'
            ],
            [
                'module_id'=>$translation_module['id'],
                'key'=>'edit_translation',
                'name'=>'Edit'
            ],
        ]
        );


    }
}
