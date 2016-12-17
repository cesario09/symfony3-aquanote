<?php
/**
 * Created by PhpStorm.
 * User: cesario09
 * Date: 12/17/16
 * Time: 8:15 PM
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class defaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function showAction(){
        return new Response('homer');
    }

}