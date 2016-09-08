<?php
namespace App\Controller;



/**
 * OauthClients Controller
 *
 * @property \OAuthServer\Model\Table\ClientsTable $Clients
 */
class ClientsController extends AppController
{

    public $modelClass = 'OAuthServer.Clients';
    
    public $server = '';
    public $paginate = [
        'page' => 1,
        'limit' => 10,
        'maxLimit' => 100,
        'fields' => [
            'id', 'name'
        ],
        'sortWhitelist' => [
            'id', 'name'
        ]
    ];
    
    public function expiretoken(){
        try{
            $this->server = $this->OAuth->Server;
            $oldRefreshTokenParam = $this->server->getRequest()->request->get('access_token', null);
    //        echo $oldRefreshTokenParam;exit;
            $oldRefreshToken = $this->server->getAccessTokenStorage()->get($oldRefreshTokenParam);
            $this->server->getAccessTokenStorage()->delete($oldRefreshToken);
            json_encode(array('access_token' => null));exit;
        }catch(Exception $e){
            json_encode(array('access_token' => $oldRefreshTokenParam));exit;
        }
    }
}