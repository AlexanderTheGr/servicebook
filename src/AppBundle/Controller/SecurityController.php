<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Controller\Main as Main;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\BufferedOutput;
use AppBundle\Entity\User;

class SecurityController extends Main {

    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request) {


        $this->install();
        //exit;  
        $login = $request->request->get("LoginForm");
        $session = $request->getSession();
        $authenticationUtils = $this->get('security.authentication_utils');
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();


        return $this->render('AppBundle:Security:login.html.twig', array(
                    'pagename' => 'Login',
                    'last_username' => $lastUsername,
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir') . '/..'),
        ));
    }

    function install() {
        $ser = explode(".", $_SERVER["HTTP_HOST"]);
        
        $kernel = $this->get('kernel');
        $application = new Application($kernel);
        $application->setAutoExit(false);
        
        set_time_limit(100000);          
            
        //$options = array('command' => 'doctrine:schema:update', "--force" => true);
        $input = new ArrayInput(array(
            'command' => 'doctrine:schema:update',
            "--force" => true
        ));
        //echo 'sssss';
        $output = new BufferedOutput();
        $application->run($input, $output);

        $user = $this->getDoctrine()
                ->getRepository("AppBundle:User")
                ->find(1);
        
        if (@$user->id == 0) {
            $user = new User;
            $dt = new \DateTime("now");
            $this->newentity['AppBundle:User'] = $user;
            $encodeFactory = $this->container->get('security.encoder_factory');
            
            $user->setTs($dt);
            $user->setCreated($dt);
            $user->setModified($dt);
            $ser[0] = 'admin';
            //$user->setStore($store);
            $user->setEmail($ser[0] . "@partsbox.com");
            $user->setUsername($ser[0]);
            $encoder = $encodeFactory->getEncoder($user);
            $user->setPassword($encoder->encodePassword($ser[0], $user->getSalt()));
            $this->flushpersist($user);           
            
        }
    }

    /**
     * @Route("/login_check", name="login_check")
     */
    public function loginCheckAction(Request $request) {
        
    }

    /**
     * @Route("/login_failure", name="login_failure")
     */
    public function loginFailureAction(Request $request) {
        
    }

    /**
     * @Route("/access_denied", name="access_denied")
     */
    public function accessDeniedAction(Request $request) {
        
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logoutAction(Request $request) {
        
    }

}
