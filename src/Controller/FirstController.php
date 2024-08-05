<?php declare(strict_types=1);
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route(path: '/', name: 'first')]
final class FirstController extends AbstractController
{
    public function __invoke(Request $request): Response
    {
        return $this->render('login_form.html.twig', []);
    }
}
