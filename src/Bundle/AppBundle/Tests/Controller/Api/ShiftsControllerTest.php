<?php

namespace Engel\Bundle\AppBundle\Tests\Controller\Api;

use Doctrine\Common\Persistence\ManagerRegistry;
use Engel\Bundle\AppBundle\Controller\Api\ShiftsController;
use Engel\Bundle\AppBundle\Entity\Shift;
use Engel\Bundle\AppBundle\Repositories\ShiftsRepository;
use FOS\RestBundle\View\ConfigurableViewHandlerInterface;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Request;

/**
 * @author Maximilian Berghoff <Maximilian.Berghoff@mayflower.de>
 */
class ShiftsControllerTest extends \PHPUnit_Framework_TestCase
{
    private $repository;
    private $doctrine;
    private $viewHandler;

    /**
     * @var ShiftsController
     */
    private $controller;

    public function setUp()
    {
        $this->viewHandler = $this->getMock('FOS\RestBundle\View\ViewHandlerInterface');
        $this->controller = new ShiftsController($this->viewHandler);
        $this->doctrine = $this->getMockBuilder('Doctrine\Common\Persistence\ManagerRegistry')
            ->disableOriginalConstructor()
            ->getMock();
        $this->repository = $this->getMockBuilder('Engel\Bundle\AppBundle\Repositories\ShiftsRepository')
            ->disableOriginalConstructor()
            ->getMock();
        $this->doctrine
            ->expects($this->any())
            ->method('getRepository')
            ->with($this->equalTo(Shift::class))
            ->will($this->returnValue($this->repository));
        $this->controller->setDoctrine($this->doctrine);
    }

    public function testDefaultValueSettingForNoParametersOnGetShifts()
    {
        $expectedStart = time() - 24*60*60*10;
        $expectedEnd = time() + 24*60*60*10;
        $this->repository
            ->expects($this->once())
            ->method('findShifts')
            ->with($this->equalTo($expectedStart), $this->equalTo($expectedEnd), $this->equalTo([]));
        $request = new Request();
        $request->setMethod('GET');

        $this->controller->getShiftsAction($request);
    }

    public function testUseGivenParametersOnGetShifts()
    {
        // preconditions
        $expectedStart = time() - 24*60*60*11;
        $expectedEnd = time() + 24*60*60*12;
        $expectedLocations = [1, 2];
        $request = new Request();
        $request->setMethod('GET');
        $request->query->add(['start' => $expectedStart, 'end' => $expectedEnd, 'locations' => $expectedLocations]);

        // expected method call
        $this->repository
            ->expects($this->once())
            ->method('findShifts')
            ->with($this->equalTo($expectedStart), $this->equalTo($expectedEnd), $this->equalTo($expectedLocations));

        $this->controller->getShiftsAction($request);
    }

    public function testGetShiftsReturnAListOfShifts()
    {
        // preconditions
        $expectedStart = time() - 24*60*60*11;
        $expectedEnd = time() + 24*60*60*12;
        $expectedLocations = [1, 2];
        $request = new Request();
        $request->setMethod('GET');
        $request->query->add(['start' => $expectedStart, 'end' => $expectedEnd, 'locations' => $expectedLocations]);
        $shifts = [['SID' => 1]];
        $view = View::create($shifts);

        // expected method call
        $this->repository
            ->expects($this->once())
            ->method('findShifts')
            ->with($this->equalTo($expectedStart), $this->equalTo($expectedEnd), $this->equalTo($expectedLocations))
            ->will($this->returnValue($shifts));
        $this->viewHandler
            ->expects($this->once())
            ->method('handle')
            ->with($this->equalTo($view))
            ->will($this->returnValue('[{"SID": 1}]'));

        $result = $this->controller->getShiftsAction($request);

        $this->assertEquals('[{"SID": 1}]', $result);
    }

    public function testGetShiftReturnTheShiftReturnedByDoctrine()
    {
        $shift = new \stdClass();
        $shift->SID = 1;
        $this->repository
            ->expects($this->once())
            ->method('find')
            ->with($this->equalTo(1))
            ->will($this->returnValue($shift));
        $view = View::create($shift);
        $this->viewHandler
            ->expects($this->once())
            ->method('handle')
            ->with($this->equalTo($view))
            ->will($this->returnValue('{"SID": 1}'));

        $result = $this->controller->getShiftAction(1);

        $this->assertEquals('{"SID": 1}', $result);
    }
}
