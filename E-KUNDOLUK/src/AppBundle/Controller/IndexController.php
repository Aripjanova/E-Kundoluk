<?php
/**
 * Created by PhpStorm.
 * User: Aizada
 * Date: 02.03.2019
 * Time: 19:39
 */

namespace AppBundle\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class IndexController extends Controller
{
    /**
     * @Route("/index", name="index")
     */
    public function IndexAction()
    {

        return $this->render('index.html.twig' );
    }
}