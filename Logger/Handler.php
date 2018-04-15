<?php

namespace OuterEdge\Easypathhints\Logger;

use Magento\Framework\Logger\Handler\Base;

/**
 * @category   OuterEdge
 * @package    OuterEdge_Easypathhints
 * @author     Raj KB <OuterEdge@gmail.com>
 * @website    http://www.OuterEdge.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
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