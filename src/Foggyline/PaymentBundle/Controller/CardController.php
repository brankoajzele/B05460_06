<?php

namespace Foggyline\PaymentBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Card controller.
 *
 * @Route("/card")
 */
class CheckMoneyController extends Controller
{

    /**
     * Creates a new Card entity.
     *
     * @Route("/process", name="card_process")
     * @Method({"GET", "POST"})
     */
    public function processAction(Request $request)
    {
        // do something, then return json error or success
    }
}
