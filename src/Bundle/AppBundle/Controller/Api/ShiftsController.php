<?php

namespace Engel\Bundle\AppBundle\Controller\Api;

use Engel\Bundle\AppBundle\Entity\Shift;
use Engel\Bundle\AppBundle\Repositories\ShiftsRepository;
use FOS\RestBundle\Controller\Annotations as Route;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @author Maximilian Berghoff <Maximilian.Berghoff@mayflower.de>
 */
class ShiftsController extends BaseApiController
{
    /**
     * @Route\Get("shifts")
     *
     * @param Request $request
     *
     * @return Response
     */
    public function getShiftsAction(Request $request)
    {
        $start = $request->query->has('start') ? $request->query->get('start') : null;
        $end = $request->query->has('end') ? $request->query->get('end') : null;
        $locations = $request->query->has('locations') ? $request->query->get('locations') : [];

        if (null === $start) {
            $start = time() - 24*60*60*10;
        }
        if (null === $end) {
            $end = time() + 24*60*60*10;
        }
        /** @var ShiftsRepository $shiftsRepository */
        $shiftsRepository = $this->doctrine->getRepository(Shift::class);
        $shifts = $shiftsRepository->findShifts($start, $end, $locations);

        $view = View::create($shifts);

        return $this->handleView($view);
    }

    /**
     * @Route\Get("shifts/{id}", requirements={"id" = "\d+"})
     *
     * @param $id
     *
     * @return Response
     */
    public function getShiftAction($id)
    {
        /** @var ShiftsRepository $shiftsRepository */
        $shiftsRepository = $this->doctrine->getRepository(Shift::class);
        $shift = $shiftsRepository->find($id);
        $view = View::create($shift);

        return $this->handleView($view);
    }
}
