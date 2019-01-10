<?php

namespace jdelgado\FormBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class FormController extends Controller
{
    public function showForm()
    {
        return $this->render('@FormBundle/Form/form.html.twig');
    }
}