<?php

namespace App\Controller;

use App\Authorization\OAuth;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class Session extends Controller
{
//    /**
//     * @Route("/login/oauth/authorize")
//     *
//     * @return Response
//     */
//    public function authorize()
//    {
//        if (!$this->get('session')->get('user')) {
//            $oauth = new OAuth();
//
//            return $this->redirect($oauth->getAuthorizeUrl(), 301);
//        }
//    }
//
//    /**
//     * @Route("/login/oauth/access_token")
//     *
//     * @return Response
//     */
//    public function accessToken()
//    {
//
//    }
}