<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
/**
 * BizusersController Controller
 *
 * @property \App\Model\Table\BizUsersTable $BizUser
 */

class BizusersController extends AppController
{
	public function beforeFilter(Event $event)
        {
            parent::beforeFilter($event);
        }
	
	public function login()
	{
                $this->viewBuilder()->layout("login");
                $this->set('title',"login");
		if ($this->request->is('post')) {
			$user = $this->Auth->identify();
			if ($user) {
				$this->Auth->setUser($user);				
				if ($this->request->query['redir'] === 'oauth') {
					$redirectUri = [
						'plugin' => 'OAuthServer',
						'controller' => 'OAuth',
						'action' => 'authorize',
						'?' => $this->request->query
					];
				}else{
                                    $redirectUri = [
						'controller' => 'clients',
						'action' => 'index'
					];
                                }
                                
				return $this->redirect($redirectUri);
			} else {
				$this->Flash->error(
					__('Username or password is incorrect'),
					'default',
					[],
					'auth'
				);
			}
		}
	}
	
	public function add()
        {
            $user = $this->BizUsers->newEntity();
            if ($this->request->is('post')) {
                $user = $this->Users->patchEntity($user, $this->request->data);
                if ($this->Users->save($user)) {
                    $this->Flash->success(__('The user has been saved.'));
                    return $this->redirect(['action' => 'add']);
                }
                $this->Flash->error(__('Unable to add the user.'));
            }
            $this->set('user', $user);
        }
	public function logouttest()
        {
            return $this->redirect($this->Auth->logout());
        }
        public function getuserbalance(){
            echo "111";exit;
        }
        
        public function dashboard(){
        }
}
?>