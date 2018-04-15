<?php
namespace outeredge\Easypathhints\Block\System\Config\Form\Field;

use Magento\Framework\Data\Form\Element\AbstractElement;

/**
 * Version renderer with link
 *
 * @category   outeredge
 * @package    outeredge_Easypathhints
 * @author     Raj KB <outeredge@gmail.com>
 * @website    http://www.outeredge.com
 */
class Version extends \Magento\Config\Block\System\Config\Form\Field
{
    const EXTENSION_URL = 'http://www.outeredge.com/magento-2-easy-template-path-hints.html';

    /**
     * @var \outeredge\Easypathhints\Helper\Data $helper
     */
    protected $_helper;

    /**
     * @param   \Magento\Backend\Block\Template\Context $context
     * @param   \outeredge\Easypathhints\Helper\Data   $helper
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \outeredge\Easypathhints\Helper\Data $helper
    ) {
        $this->_helper = $helper;
        parent::__construct($context);
    }

    /**
     * @param AbstractElement $element
     * @return string
     */
    protected function _getElementHtml(AbstractElement $element)
    {
        $extensionVersion = $this->_helper->getExtensionVersion();
        $extensionTitle   = 'Easy Template Path Hints';
        $versionLabel     = sprintf(
            '<a href="%s" title="%s" target="_blank">%s</a>',
            self::EXTENSION_URL,
            $extensionTitle,
            $extensionVersion
        );
        $element->setValue($versionLabel);

        return $element->getValue();
    }
}