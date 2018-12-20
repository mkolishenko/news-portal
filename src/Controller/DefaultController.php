<?php
/**
 * Created by PhpStorm.
 * User: maksym
 * Date: 16.12.18
 * Time: 11:50
 */

namespace App\Controller;


use App\Service\Contacts\ContactsService;
use App\Service\Home\HomePageServiceInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\FormTypeInterface;

final class DefaultController extends AbstractController
{
    /**
     * Renders home page.
     *
     * @param HomePageServiceInterface $service
     *
     * @return Response
     */
    public function index(HomePageServiceInterface $service): Response
    {
        $posts = $service->getPosts();

        return $this->render('default/index.html.twig', [
            'posts' => $posts,
        ]);
    }

    public function category(HomePageServiceInterface $service, string $categ): Response
    {
        $posts = $service->getPosts();

        return $this->render('default/index.html.twig', [
            'posts' => $posts,
            'category' => $categ
        ]);
    }

    public function contacts(): Response
    {
        $form_init = $this->createForm(ContactsService::class);
#        $form_init->handleRequest();
        return $this->render('contacts/index.html.twig',['form_data' => $form_init->createView()]);
    }

}


