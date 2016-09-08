<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * BizUserBalance Controller
 *
 * @property \App\Model\Table\BizUserBalanceTable $BizUserBalance
 */
class BizUserBalanceController extends AppController
{
    public $modelClass = 'BizUserBalance';
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['BizUsers']
        ];
        $bizUserBalance = $this->paginate($this->BizUserBalance);

        $this->set(compact('bizUserBalance'));
        $this->set('_serialize', ['bizUserBalance']);
    }

    /**
     * View method
     *
     * @param string|null $id Biz User Balance id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bizUserBalance = $this->BizUserBalance->get($id, [
            'contain' => ['BizUsers']
        ]);

        $this->set('bizUserBalance', $bizUserBalance);
        $this->set('_serialize', ['bizUserBalance']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bizUserBalance = $this->BizUserBalance->newEntity();
        if ($this->request->is('post')) {
            $bizUserBalance = $this->BizUserBalance->patchEntity($bizUserBalance, $this->request->data);
            if ($this->BizUserBalance->save($bizUserBalance)) {
                $this->Flash->success(__('The biz user balance has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The biz user balance could not be saved. Please, try again.'));
            }
        }
        $results = $this->BizUserBalance->BizUsers->find('all', ['limit' => 200]);
        $usersLists = $results->toArray();
        foreach ($usersLists as $usersList){
            $bizUsers[$usersList->id] = $usersList['username'];
        }
        $this->set(compact('bizUserBalance', 'bizUsers'));
        $this->set('_serialize', ['bizUserBalance']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Biz User Balance id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bizUserBalance = $this->BizUserBalance->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bizUserBalance = $this->BizUserBalance->patchEntity($bizUserBalance, $this->request->data);
            if ($this->BizUserBalance->save($bizUserBalance)) {
                $this->Flash->success(__('The biz user balance has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The biz user balance could not be saved. Please, try again.'));
            }
        }
        $bizUsers = $this->BizUserBalance->BizUsers->find('list', ['limit' => 200]);
        $this->set(compact('bizUserBalance', 'bizUsers'));
        $this->set('_serialize', ['bizUserBalance']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Biz User Balance id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bizUserBalance = $this->BizUserBalance->get($id);
        if ($this->BizUserBalance->delete($bizUserBalance)) {
            $this->Flash->success(__('The biz user balance has been deleted.'));
        } else {
            $this->Flash->error(__('The biz user balance could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    public function userbalance(){
        $user = $this->Auth->user();
        $userBalance = $this->BizUserBalance->find('all')->where(['biz_user_id' => $user['id']])->limit(1)->order(array('id' => 'desc'));
        $userList = $this->BizUserBalance->BizUsers->find('all', ['limit' => 1])->where(['id' => $user['id']]);
        $username = '';
        $balance = array();

        foreach($userList as $userLists){
            $username = $userLists->username;
        }
        foreach($userBalance as $userBalances){
            $balance['balance'] = $userBalances->balance;
            $balance['biz_user_name'] = $username;
        }
//        $userBalance = json_encode($userBalance);
//        $userBalance = json_decode($userBalance);
//        $userBalance[0]['biz_user_name'] = $userList[0]['username'];
        echo json_encode($balance);exit;
    }
}
