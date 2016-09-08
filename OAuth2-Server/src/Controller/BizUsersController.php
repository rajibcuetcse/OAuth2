<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * BizUsers Controller
 *
 * @property \App\Model\Table\BizUsersTable $BizUsers
 */
class BizUsersController extends AppController {

    public $modelClass = 'BizUsers';

    public function login() {
        $this->viewBuilder()->layout("login");
        $this->set('title', "login");
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
                } else {
                    $redirectUri = [
                        'controller' => 'biz-users',
                        'action' => 'index'
                    ];
                }

                return $this->redirect($redirectUri);
            } else {
                $this->Flash->error(
                        __('Username or password is incorrect'), 'default', [], 'auth'
                );
            }
        }
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        $bizUsers = $this->paginate($this->BizUsers);

        $this->set(compact('bizUsers'));
        $this->set('_serialize', ['bizUsers']);
    }

    /**
     * View method
     *
     * @param string|null $id Biz User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $bizUser = $this->BizUsers->get($id, [
            'contain' => ['BizUserBalance']
        ]);

        $this->set('bizUser', $bizUser);
        $this->set('_serialize', ['bizUser']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $bizUser = $this->BizUsers->newEntity();
        if ($this->request->is('post')) {
            $bizUser = $this->BizUsers->patchEntity($bizUser, $this->request->data);
            if ($this->BizUsers->save($bizUser)) {
                $this->Flash->success(__('The biz user has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The biz user could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('bizUser'));
        $this->set('_serialize', ['bizUser']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Biz User id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $bizUser = $this->BizUsers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bizUser = $this->BizUsers->patchEntity($bizUser, $this->request->data);
            if ($this->BizUsers->save($bizUser)) {
                $this->Flash->success(__('The biz user has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The biz user could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('bizUser'));
        $this->set('_serialize', ['bizUser']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Biz User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $bizUser = $this->BizUsers->get($id);
        if ($this->BizUsers->delete($bizUser)) {
            $this->Flash->success(__('The biz user has been deleted.'));
        } else {
            $this->Flash->error(__('The biz user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
