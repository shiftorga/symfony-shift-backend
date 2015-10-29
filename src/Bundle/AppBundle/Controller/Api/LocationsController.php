<?php

namespace Engel\Bundle\AppBundle\Controller\Api;

use Engel\Bundle\AppBundle\Entity\Room;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Controller\Annotations as Route;

/**
 * @author Maximilian Berghoff <Maximilian.Berghoff@mayflower.de>
 */
class LocationsController extends BaseApiController
{
    /**
     * @Route\Get("locations")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getLocationsAction()
    {
        $locations = $this->doctrine->getRepository(Room::class)->findAll();
        $view = View::create($locations);

        return $this->handleView($view);
    }
}
