<?php
/**
 * @author José Jaime Ramírez Calvo <mr.ljaime@gmail.com>
 * @version 1
 * @since 1
 * Created at 21/08/23 8:14
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route("/")]
class HelloController extends AbstractController
{
    #[Route("/")]
    public function helloAction(): Response
    {
        return $this->json([]);
    }
}