<?php
/**
 * Created by PhpStorm.
 * User: maksym
 * Date: 20.12.18
 * Time: 14:26
 */

namespace App\Service\Contacts;



use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;


final class ContactsService extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, $options)
    {
        $builder
            ->add('name',TextType::class)
            ->add('email', EmailType::class)
            ->add('feedback',TextareaType::class)
            ->add('submit', SubmitType::class, ['label' => 'Send Your Feedback'] );
    }
}

