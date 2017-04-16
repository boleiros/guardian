<?php

namespace Guardian\Model\Traits;

use Cake\ORM\TableRegistry;

Trait Guardian
{

    public function hasPermission(String $permissionName): Bool
    {
        $user = $this;


        $userGroupsTable = TableRegistry::get('user_groups');
        $groupTable = TableRegistry::get('Groups');
        $permissionTable = TableRegistry::get('permissions');
        $groupPermissionTable = TableRegistry::get('group_permissions');

        $userGroups = $userGroupsTable->find('all')
            ->where(['user_id =' => $user->id]);

        // $groups = $user->group;

        // var_dump($user->groups);exit();

        foreach ($userGroups as $userGroup) {

            
            $group = $groupTable->get($userGroup->group_id);
            
            $groupPermissions = $groupPermissionTable->find('all')
                ->where(['group_id = ' => $group->id]);

            foreach ($groupPermissions as $groupPermission) {

                $permission = $permissionTable->find('all')
                    ->where(['name = ' => $permissionName])
                    ->first();

                            
                if (!is_null($permission)) {
                    return true;
                }
            }

        }

        return false;

    }

}