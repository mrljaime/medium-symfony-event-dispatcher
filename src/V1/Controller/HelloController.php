<?php
/**
 * @author José Jaime Ramírez Calvo <mr.ljaime@gmail.com>
 * @version 1
 * @since 1
 * Created at 21/08/23 8:14
 */

namespace App\V1\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    #[Route("/hello")]
    public function helloAction(Request $request, EntityManagerInterface $em): Response
    {
        $em->getConnection()->executeQuery('SELECT 1')->fetchOne();

        return $this->json(
            [
                'Hello' => $request->get('name', 'World')
            ]
        );
    }
}