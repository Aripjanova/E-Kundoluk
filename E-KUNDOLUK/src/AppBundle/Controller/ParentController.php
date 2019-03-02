<?php
/**
 * Created by PhpStorm.
 * User: Aizada
 * Date: 02.03.2019
 * Time: 14:28
 */

namespace AppBundle\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;



class ParentController extends Controller
{

    /**
     * @Route("/e_maalymat", name="e_maalymat")
     */
    public function maalymatAction()
    {

        return $this->render('parent/e-maalymat.html.twig' );
    }

    /**
     * @Route("/parent", name="parent")
     */
    public function ParentAction()
    {

        return $this->render('parent/jeke_maalymat.html.twig', array());
    }

    /**
     * @Route("/okuchu_raspisaniye", name="okuchu_raspisaniye")
     */
    public function raspisaniyeAction()
    {

        return $this->render('parent/raspisaniye.html.twig', array());
    }

    /**
     * @Route("/tapshyrma", name="tapshyrma")
     */
    public function homeworkAction()
    {

        return $this->render('parent/tapwyrma.html.twig', array());
    }

    /**
     * @Route("/baa_katyshuu", name="baa_katyshuu")
     */
    public function katyshuuAction()
    {

        return $this->render('parent/baa_jana_katywuu.html.twig', array());
    }
}