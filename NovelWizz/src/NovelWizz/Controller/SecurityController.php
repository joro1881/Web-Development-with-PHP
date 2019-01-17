<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 14.01.19
 * Time: 17:25
 */

namespace NovelWizz\Controller;

use NovelWizz\Forms\WritersType;
use NovelWizz\Entity\Writers;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends Controller
{

    /**
     * @Route("/login", name="security_login")
     * @return Response
     *
     */
    public function login()
    {
        return $this->render("security/login.html.twig");
    }

    /**
     * @Route ("logout", name="security_logout")
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     * @return RedirectResponse
     */
    public function logout()
    {
        return $this->redirectToRoute("Welcome");
    }

    /**
     * @Route("register", name="register")
     * @param Request $request
     * @return Response
     */
    public
    function registerAction(Request $request)
    {
        $user = new Writers();
        $form = $this->createForm(WritersType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            $password = $this->get('security.password_encoder')
                ->encodePassword($user, $user->getPassword());

            $user->setPassword($password);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute("security_login");
        }
        return $this->render("security/register.html.twig");
    }
}