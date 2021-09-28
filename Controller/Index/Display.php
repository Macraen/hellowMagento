<?php
namespace Macraen\Tmodule\Controller\Index;

use Magento\Framework\Controller\ResultFactory;

class Display extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory)
    {
        $this->_pageFactory = $pageFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
//        $page = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
//        return $page;
        return $this->_pageFactory->create();

    }
}
