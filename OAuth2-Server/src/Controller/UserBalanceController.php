<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * UserBalance Controller
 *
 * @property \App\Model\Table\UserBalanceTable $UserBalance
 */
class UserBalanceController extends AppController
{
    public $modelClass = 'UserBalance';
    
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
    }
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Client']
        ];
        $userBalance = $this->paginate($this->UserBalance);

        $this->set(compact('userBalance'));
        $this->set('_serialize', ['userBalance']);
        $this->set("title","Client Balance");
    }

    /**
     * View method
     *
     * @param string|null $id User Balance id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userBalance = $this->UserBalance->get($id, [
            'contain' => ['Client']
        ]);
        $users = $this->UserBalance->Client->find('list', ['limit' => 200]);
        $this->set('userBalance', $userBalance);
        $this->set('users', $users);
        $this->set('_serialize', ['userBalance']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userBalance = $this->UserBalance->newEntity();
        if ($this->request->is('post')) {
            $userBalance = $this->UserBalance->patchEntity($userBalance, $this->request->data);
            if ($this->UserBalance->save($userBalance)) {
                $this->Flash->success(__('The user balance has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user balance could not be saved. Please, try again.'));
            }
        }
        $results = $this->UserBalance->Client->find('all', ['limit' => 200]);
        $usersLists = $results->toArray();
        foreach ($usersLists as $usersList){
            $users[$usersList->id] = $usersList['name'];
        }
        $this->set(compact('userBalance', 'users'));
        $this->set('_serialize', ['userBalance']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User Balance id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userBalance = $this->UserBalance->get($id, [
            'contain' => ['Client']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userBalance = $this->UserBalance->patchEntity($userBalance, $this->request->data);
            if ($this->UserBalance->save($userBalance)) {
                $this->Flash->success(__('The user balance has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user balance could not be saved. Please, try again.'));
            }
        }
        $users = $this->UserBalance->Client->find('list', ['limit' => 200]);
        $this->set(compact('userBalance', 'users'));
        $this->set('_serialize', ['userBalance']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User Balance id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userBalance = $this->UserBalance->get($id);
        if ($this->UserBalance->delete($userBalance)) {
            $this->Flash->success(__('The user balance has been deleted.'));
        } else {
            $this->Flash->error(__('The user balance could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function userbalance(){
        $user = $this->Auth->user();
        $userBalance = $this->UserBalance->find('all')->where(['client_id' => $user['id']])->limit(1)->order(array('id' => 'desc'));
        echo json_encode($userBalance);exit;
    }
}
