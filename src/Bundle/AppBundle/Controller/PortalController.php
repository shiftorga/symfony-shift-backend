<?php

namespace Engel\Bundle\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @author Maximilian Berghoff <Maximilian.Berghoff@mayflower.de>
 */
class PortalController extends Controller
{
    public function UserShiftsAction()
    {
        return $this->render('EngelAppBundle:Portal:index.html.twig');
    }
}
