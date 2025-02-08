<?php
declare(strict_types=1);

namespace Module\Contracts\Cron;

use Core\Database\DatabaseInterface;
use Module\Contracts\Interfaces\CacheInterface;

interface InterfaceObservableCronWorker
{
    public function attach(InterfaceObserverCronWorker $observer);
    public function detach(InterfaceObserverCronWorker $observer);
    public function isEveryMinute(): bool;
    public function notify():void;
    public function getCache():CacheInterface;
    public function getDatabase():DatabaseInterface;
    public function isDebug(): bool;
    public function isNormalRun():bool;
}