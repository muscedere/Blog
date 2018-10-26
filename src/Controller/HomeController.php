<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 26/10/18
 * Time: 15:33
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index()
    {
        $hello ="Hello WCS !";
        return $this->render('home.html.twig', [
            'hello' => $hello,
        ]);
    }
}