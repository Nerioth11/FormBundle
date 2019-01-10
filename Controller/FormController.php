<?php

namespace jdelgado\FormBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class FormController extends Controller
{
    public function showAction($groupName)
    {
        return $this->render('@FormBundle/Form/form.html.twig');
    }
}