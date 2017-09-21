<?php
namespace Mage2\Magento2RequireJs\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\Json\Helper\Data;
class Main extends Template
{
    /**
     * @var Data
     */
    protected $jsonHelper;

    /**
     * Main constructor.
     * @param Template\Context $context
     * @param array $data
     * @param Data $jsonHelper
     */
    public function __construct(Template\Context $context,  array $data = [], Data $jsonHelper)
    {
        $this->jsonHelper = $jsonHelper;
        parent::__construct($context, $data);
    }

    /**
     * @return $this
     */
    protected function _prepareLayout()
    {
        return parent::_prepareLayout(); // TODO: Change the autogenerated stub
    }

    /**
     * @return array
     */
    public function getTestData()
    {
        $data = [
            'index-1' => 'test1',
            'index-2' => 'test2'
        ];

        $serializedData = $this->jsonHelper->jsonEncode($data);
        return $serializedData;
    }
}