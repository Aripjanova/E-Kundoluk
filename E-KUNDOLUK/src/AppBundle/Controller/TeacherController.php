<?php
/**
 * Created by PhpStorm.
 * User: Nuriza
 * Date: 01.03.2019
 * Time: 23:03
 */

namespace AppBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TeacherController extends Controller
{
    /**
     * @Route("/teacher", name="teach")
     */
    public function teacherAction()
    {

        return $this->render('teachers/teacher.html.twig', array(

        ));
    }

    /**
     * @Route("/maalymat", name="maalymat")
     */
    public function maalymatAction()
    {

        return $this->render('teachers/e-maalymat.html.twig', array(

        ));
    }

    /**
     * @Route("/klasstar", name="klasstar")
     */
    public function klasstarAction()
    {

        return $this->render('teachers/klasstar.html.twig', array(

        ));
    }

    /**
     * @Route("/cheyrek", name="cheyrek")
     */
    public function cheyrekAction()
    {

        return $this->render('teachers/cheyrek.html.twig', array(

        ));
    }

    /**
     * @Route("/jumalar", name="jumalar")
     */
    public function jumalarAction()
    {

        return $this->render('teachers/jumalar.html.twig', array(

        ));
    }

    /**
     * @Route("/katyshuu", name="katyshuu")
     */
    public function katyshuuAction()
    {

        return $this->render('teachers/katyshuu.html.twig', array(

        ));
    }

    /**
     * @Route("/homklasstar", name="homklasstar")
     */
    public function homklasstarAction()
    {

        return $this->render('teachers/homklasstar.html.twig', array(

        ));
    }

    /**
     * @Route("/homcheyrek", name="homcheyrek")
     */
    public function homcheyrekAction()
    {

        return $this->render('teachers/homcheyrek.html.twig', array(

        ));
    }

    /**
     * @Route("/1-juma", name="1-juma")
     */
    public function jumaAction()
    {

        return $this->render('teachers/1-juma.html.twig', array(

        ));
    }

    /**
     * @Route("/homework", name="homework")
     */
    public function homeworkAction()
    {

        return $this->render('teachers/homework.html.twig', array(

        ));
    }

    /**
     * @Route("/raspisaniye", name="raspisaniye")
     */
    public function raspisaniyeAction()
    {

        return $this->render('teachers/raspisaniye.html.twig', array(

        ));
    }
}