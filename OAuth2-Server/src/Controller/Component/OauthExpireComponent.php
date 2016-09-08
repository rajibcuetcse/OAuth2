<?php
use OAuthServer\Controller\Component\OAuthComponent;

class OauthExpireComponent extends OAuthComponent
{
    
    public function makeExpire(){
        $oldRefreshTokenParam = $this->server->getRequest()->request->get('refresh_token', null);
        $oldRefreshToken = $this->server->getAccessTokenStorage()->get($oldRefreshTokenParam);
        $oldAccessToken = $oldRefreshToken->getAccessToken();
        $oldAccessToken->expire();
    }
}

