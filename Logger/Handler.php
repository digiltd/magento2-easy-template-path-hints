<?php

namespace OuterEdge\Easypathhints\Logger;

use Magento\Framework\Logger\Handler\Base;


class Handler extends Base
{
    /**
     * @var string
     */
    protected $fileName = '/var/log/OuterEdge_easypathhints.log';

    /**
     * @var int
     */
    protected $loggerType = \Monolog\Logger::INFO;
}