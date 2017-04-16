<?php
namespace Guardian\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class UserController extends AppController
{

    public function beforeFilter(Event $event){
        
        $controller = $event->subject->request->params['controller'];        
        $action = $event->subject->request->params['action'];
        
        $user = Auth::user();
        return $user->hasPermission($controller . $action);
    }

    
    public function index()
    {
        $users = $this->paginate($this->users);

        $this->set(compact('users'));
    }

    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }
}
