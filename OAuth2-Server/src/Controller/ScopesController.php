<?php
namespace App\Controller;

use Crud\Controller\ControllerTrait;

/**
 * Scopes Controller
 *
 * @property \OAuthServer\Model\Table\ScopesTable $Scopes
 */
class ScopesController extends AppController
{

    public $modelClass = 'OAuthServer.Scopes';
    
    public $paginate = [
        'page' => 1,
        'limit' => 10,
        'maxLimit' => 100,
        'fields' => [
            'id', 'description'
        ],
        'sortWhitelist' => [
            'id', 'description'
        ]
    ];
}