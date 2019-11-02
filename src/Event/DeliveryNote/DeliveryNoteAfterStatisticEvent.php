<?php
namespace Jtl\Connector\Core\Event\DeliveryNote;

use Symfony\Contracts\EventDispatcher\Event;
use Jtl\Connector\Core\Model\Statistic;


class DeliveryNoteAfterStatisticEvent extends Event
{
    const EVENT_NAME = 'deliverynote.after.statistic';

	protected $statistic;

    public function __construct(Statistic &$statistic)
    {
		$this->statistic = $statistic;
    }

    public function getStatistic()
    {
        return $this->statistic;
	}
	
}
