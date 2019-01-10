<?php

namespace jdelgado\FormBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class FormController extends AbstractController
{
    public function showAction()
    {
        return $this->render('@Form/Form/form.html.twig');
    }
}