<?php
declare(strict_types=1);

namespace Module\Contracts\Realtime;


use Core\Config\ConfigException;
use Core\Parser\ParserException;
use Core\Protocol\Socket\SocketException;
use ErrorException;

interface InterfaceObserverRealtime
{
    /**
     * @throws ConfigException
     * @throws ErrorException
     * @throws ParserException
     * @throws SocketException
     */
    public function update(InterfaceObservableRealtime $observable):void;
}