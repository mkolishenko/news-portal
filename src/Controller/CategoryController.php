<?php
/**
 * Created by PhpStorm.
 * User: maksym
 * Date: 16.12.18
 * Time: 14:34
 */

namespace App\Controller;

use App\Service\Home\HomePageServiceInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

final class CategoryController extends AbstractController
{
    public function index(HomePageServiceInterface $service):Response
    {
        $request = Request::createFromGlobals();
        $path = explode('/',$request->getPathInfo());
        return $this->render('category/index.html.twig',['posts' => $path[2], 'dot' => '.']);

    }
}