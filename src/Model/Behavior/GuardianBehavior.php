<?php 

namespace Guardian\Model\Behavior;

use Cake\ORM\Behavior;

class GuardianBehavior extends Behavior
{

	public function hasPermission(String $permission): Bool
	{
		
		$user = $this->user;

		foreach ($user->groups as $group) {
			
			foreach ($group->permissions as $group_permission) {
				if ($group_permission->name == $permission) {
					return true;
				}
			}

		}

		return false;

	}


}