<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 14.01.19
 * Time: 17:31
 */

namespace NovelWizz\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class WelcomeController extends Controller
{
    /**
     * @Route ( "/welcome" , name="Welcome")
     *
     */
    public function welcomeHome()
    {
        return $this->render("welcome.html.twig");
    }

    /**
     * @Route ("/home" , name="home")
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     */
    public function homeAction()
    {
        return $this->render("home.html.twig");
    }
}