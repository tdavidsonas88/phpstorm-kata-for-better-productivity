<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MovieController extends Controller
{

    /**
     * @Route("/movies/new", name="movies_new")
     */
    public function newAction($name)
    {
        return $this->render('', array());
    }
}
