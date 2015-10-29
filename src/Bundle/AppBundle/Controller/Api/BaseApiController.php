<?php

namespace Engel\Bundle\AppBundle\Controller\Api;

use Doctrine\Common\Persistence\ManagerRegistry;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use FOS\RestBundle\View\ViewHandlerInterface;
use Symfony\Component\HttpFoundation\Response;

/**
 * @author Maximilian Berghoff <Maximilian.Berghoff@mayflower.de>
 */
abstract class BaseApiController extends FOSRestController
{
    /**
     * @var ViewHandlerInterface
     */
    protected $viewHandler;

    /**
     * @var ManagerRegistry
     */
    protected $doctrine;

    /**
     * @param ViewHandlerInterface $viewHandler
     */
    public function __construct(ViewHandlerInterface $viewHandler)
    {
        $this->viewHandler = $viewHandler;
    }

    /**
     * @param View $view
     *
     * @return Response
     */
    protected function handleView(View $view)
    {
        return $this->viewHandler->handle($view);
    }

    /**
     * @param ManagerRegistry $managerRegistry
     */
    public function setDoctrine(ManagerRegistry $managerRegistry)
    {
        $this->doctrine = $managerRegistry;
    }
}
