<?php

namespace App\Controller;

use NewTwitchApi\HelixGuzzleClient;
use NewTwitchApi\NewTwitchApi;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    /**
     * @Route("/")
     *
     * @return Response
     */
    public function index()
    {
//        return $this->render('base.html.twig');

        $helixGuzzleClient = new HelixGuzzleClient('dfq9smwt81rvfvb7utm7643hdv7sya');
        $newTwitchApi = new NewTwitchApi($helixGuzzleClient, 'dfq9smwt81rvfvb7utm7643hdv7sya', '3ssx7rhl9ts5kd63mojlb9soejzt1v');
        echo '<pre>';
        print_r($newTwitchApi->getUsersApi()->getUserByUsername('Ninja')->getBody()->getContents());
//        var_dump(hash('sha256', microtime(TRUE).rand().$_SERVER['REMOTE_ADDR']));
//        var_dump($newTwitchApi->getOauthApi()->getUserAccessToken());
        echo '</pre>';
        die;



        var_dump('csdfsdfsdf');die;
//        $listBuilder = $this->get('wx_admin.builder.list_builder')->build(Author::class);

//        return $this->render('admin/author/list.html.twig', $listBuilder->getListData());
    }

//    /**
//     * @Route("in")
//     *
//     * @return Response
//     */
//    public function index()
//    {
//        return $this->render('base.html.twig');
//    }
}
