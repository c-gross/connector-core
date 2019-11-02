<?php
namespace Jtl\Connector\Core\Event\Manufacturer;

use Symfony\Contracts\EventDispatcher\Event;
use Jtl\Connector\Core\Model\Manufacturer;


class ManufacturerBeforeDeleteEvent extends Event
{
    const EVENT_NAME = 'manufacturer.before.delete';

	protected $manufacturer;

    public function __construct(Manufacturer &$manufacturer)
    {
		$this->manufacturer = $manufacturer;
    }

    public function getManufacturer()
    {
        return $this->manufacturer;
	}
	
}
