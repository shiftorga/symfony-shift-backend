<?php

namespace Engel\Bundle\AppBundle\Listener;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * @author Maximilian Berghoff <Maximilian.Berghoff@mayflower.de>
 */
class LegacyApplicationOnRouteNotFoundListener
{
    public function onHTTPNotFoundException(GetResponseForExceptionEvent $event)
    {
        if ($event->getException() instanceof NotFoundHttpException) {
            $indexPath = __DIR__ . '/../../../../web/index.php';
            $legacyContent = require_once realpath($indexPath);

            $event->setResponse(new Response($legacyContent));
        }
    }
}
