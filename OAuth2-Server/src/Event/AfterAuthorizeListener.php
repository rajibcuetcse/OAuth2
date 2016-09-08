<?php

namespace App\Event;

use Cake\Log\Log;
use Cake\Event\EventListenerInterface;

class AfterAuthorizeListener implements EventListenerInterface {

    public function implementedEvents() {
        return array(
            'OAuthServer.afterAuthorize' => 'destroyServerSession',
            'afterLogin' => 'redirecthome',
        );
    }

    public function destroyServerSession($event) {
        $event->subject()->Auth->logout();
    }
    
    public function redirecthome($event){echo "safasf";exit;
        $redirectUri = $event->subject()->Auth->redirectUrl();
        $event->subject()->redirect($redirectUri);
    }
}

