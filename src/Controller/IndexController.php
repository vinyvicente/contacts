<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends Controller
{
    /**
     * @Route("/", name="redirect_to_address_book")
     */
    public function redirectToAddressBook()
    {
        return $this->redirectToRoute('contacts');
    }
}
