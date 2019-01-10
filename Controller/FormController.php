<?php

namespace jdelgado\FormBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class FormController extends Controller
{
    public function showAction()
    {
        return $this->render('@Form/Form/form.html.twig');
    }
}