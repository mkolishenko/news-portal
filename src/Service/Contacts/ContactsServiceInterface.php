<?php
/**
 * Created by PhpStorm.
 * User: maksym
 * Date: 20.12.18
 * Time: 14:32
 */

namespace App\Service\Contacts;

use Symfony\Component\Form\FormBuilderInterface;

interface ContactsServiceInterface
{
    /**
     * @param FormBuilderInterface $init
     * @return mixed
     */
    public function form_initiate (FormBuilderInterface $init);

}