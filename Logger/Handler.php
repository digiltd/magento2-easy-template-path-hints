<?php

namespace outeredge\Easypathhints\Logger;

use Magento\Framework\Logger\Handler\Base;

/**
 * @category   outeredge
 * @package    outeredge_Easypathhints
 * @author     Raj KB <outeredge@gmail.com>
 * @website    http://www.outeredge.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Handler extends Base
{
    /**
     * @var string
     */
    protected $fileName = '/var/log/outeredge_easypathhints.log';

    /**
     * @var int
     */
    protected $loggerType = \Monolog\Logger::INFO;
}