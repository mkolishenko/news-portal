<?php
/**
 * Created by PhpStorm.
 * User: maksym
 * Date: 16.12.18
 * Time: 11:50
 */

namespace App\Controller;


use App\Service\Home\HomePageServiceInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


final class DefaultController extends AbstractController
{
    public function index(HomePageServiceInterface $service):Response
    {
        $posts = $service->getPosts();
        return $this->render('default/index.html.twig',['posts' => '','dot' => '']);
    }
}