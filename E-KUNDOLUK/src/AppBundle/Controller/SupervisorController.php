<?php
/**
 * Created by PhpStorm.
 * User: Aizada
 * Date: 02.03.2019
 * Time: 14:29
 */

namespace AppBundle\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SupervisorController extends Controller
{


    /**
     * @Route("/e_maalymat", name="e_maalymat")
     */
    public function maalymatAction()
    {

        return $this->render('supervaiser/e-maalymat.html.twig' );
    }


    /**
     * @Route("/jetekchi", name="jetekchi")
     */
    public function okuuchuAction()
    {

        return $this->render('supervaiser/jeke_maalymat.html.twig', array());
    }

    /**
     * @Route("/o_raspisaniye", name="o_raspisaniye")
     */
    public function raspisaniyeAction()
    {

        return $this->render('supervaiser/raspisaniye.html.twig', array());
    }

    /**
     * @Route("/okuuchu_tizmesi", name="okuuchu_tizmesi")
     */
    public function homeworkAction()
    {

        return $this->render('supervaiser/okuu_tizmesi.html.twig', array());
    }

}