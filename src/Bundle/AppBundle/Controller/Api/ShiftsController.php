<?php

namespace Engel\Bundle\AppBundle\Controller\Api;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Route;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Response;

/**
 * @author Maximilian Berghoff <Maximilian.Berghoff@mayflower.de>
 */
class ShiftsController extends FOSRestController
{
    /**
     * @Route\Get("shifts")
     */
    public function getShiftsAction()
    {
        $view = View::create([
            [
                "SID" => 1,
                'title' => 'First shift in 1h',
                'shiftType' => [
                    'id' => 1,
                    'name' => 'ShiftType 1',
                ],
                'start' => time() + 60*60*1,
                'end' => time() + 60*60*3
            ],
            [
                "SID" => 2,
                'title' => 'First shift in 10h',
                'shiftType' => [
                    'id' => 2,
                    'name' => 'ShiftType 2',
                ],
                'start' => time() + 60*60*10,
                'end' => time() + 60*60*13
            ],
        ]);

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
        $first = [
            "SID" => 1,
            'title' => 'First shift in 1h',
            'shiftType' => [
                'id' => 1,
                'name' => 'ShiftType 1',
            ],
            'start' => time() + 60 * 60 * 1,
            'end' => time() + 60 * 60 * 3
        ];
        $second = [
            "SID" => 2,
            'title' => 'First shift in 10h',
            'shiftType' => [
                'id' => 2,
                'name' => 'ShiftType 2',
            ],
            'start' => time() + 60 * 60 * 10,
            'end' => time() + 60 * 60 * 13
        ];
        $view = View::create(($id == 1 ? $first : $second));

        return $this->handleView($view);
    }
}
