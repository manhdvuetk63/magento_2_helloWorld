<?php

namespace Inchoo\Helloworld\Controller\Index;

use Magento\Framework\App\Action\Context;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;
    protected $_postFactory;
    protected $helperData;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \Inchoo\Helloworld\Model\PostFactory $postFactory,
        \Inchoo\Helloworld\Helper\Data $helperData
    )
    {
        $this->_pageFactory = $pageFactory;
        $this->_postFactory = $postFactory;
        $this->helperData = $helperData;
        return parent::__construct($context);
    }

    public function execute()
    {
        $page = $this->_pageFactory->create();
//        get data from configure.
        $enable= $this->helperData->getGeneralConfig('enable');
        $text = $this->helperData->getGeneralConfig('display_text');
//        passing data from configure to block: helloworld to change content.
        $block = $page->getLayout()->getBlock('helloworld');
        $block->setData('content', $text);
        return $page;
    }
}