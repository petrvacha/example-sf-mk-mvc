<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Model\UserModel;

class DefaultController extends Controller
{
    /**
     * @Route("/{userId}")
     */
    public function userAction($userId)
    {
        $userModel = new UserModel();
        return $this->render('Default/user.html.twig', ['data' => $userModel->getUserData($userId)]);
    }
}