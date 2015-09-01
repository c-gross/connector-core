<?php
namespace jtl\Connector\Event;

use \Symfony\Component\EventDispatcher\EventDispatcher;
use \jtl\Connector\Model\DataModel;
use \jtl\Connector\Core\Model\QueryFilter;
use \jtl\Connector\Core\Utilities\ClassName;

class EventHandler
{
    const BEFORE = 'before';
    const AFTER = 'after';

    public static function dispatch(&$entity, EventDispatcher $dispatcher, $controller, $action, $moment)
    {
        if ((!($entity instanceof DataModel) && !($entity instanceof QueryFilter)) || strlen(trim($action)) == 0 || strlen(trim($moment)) == 0) {
            return;
        }

        $class = ClassName::getFromNS(get_class($entity));

        // Global
        $globalEvent = self::createGeneralEvent($entity, $class, $controller, $action, $moment);
        if ($globalEvent !== null) {
            $dispatcher->dispatch($globalEvent::EVENT_NAME, $globalEvent);
        }

        $event = self::createEvent($entity, $class, $action, $moment);

        if ($event !== null) {
            $dispatcher->dispatch($event::EVENT_NAME, $event);
        }
    }

    protected static function createEvent(&$entity, $class, $action, $moment)
    {
        $eventClassname = sprintf('\jtl\Connector\Event\%s\%s%s%sEvent', $class, $class, ucfirst($moment), ucfirst($action));

        if (class_exists($eventClassname)) {
            return new $eventClassname($entity);
        }

        return null;
    }

    protected static function createGeneralEvent(&$entity, $class, $controller, $action, $moment)
    {
        $eventClassname = sprintf('\jtl\Connector\Event\General\General%sEvent', ucfirst($moment));

        if (class_exists($eventClassname)) {
            return new $eventClassname($entity, $class, $controller, $action);
        }

        return null;
    }
}