<?php

namespace App\Authorization;

class OAuth
{
    private $endPointAuthorize = 'https://id.twitch.tv/oauth2/authorize';
//    private $endPointAuthorize = 'https://github.com/login/oauth/authorize';

//    private $endPointAccessToken = 'https://github.com/login/oauth/access_token';
    private $endPointAccessToken = 'https://id.twitch.tv/oauth2/token';

    private $redirectUriAuthorize = 'http://pforum.loc/login/oauth/access_token/';

    private $clientId = 'dfq9smwt81rvfvb7utm7643hdv7sya';

    private $clientSecret = '3ssx7rhl9ts5kd63mojlb9soejzt1v';

    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getAuthorizeUrl(): string
    {
        $params = [
            'client_id'    => $this->clientId,
            'redirect_uri' => $this->redirectUriAuthorize . urlencode('&statekey=' . $this->security->getTokenKey()),
            'state'        => hash('sha256', microtime(TRUE) . rand() . $_SERVER['REMOTE_ADDR']),
            'scope'        => 'user:email'
        ];

        return $this->endPointAuthorize . '?' . http_build_query($params);
    }
}