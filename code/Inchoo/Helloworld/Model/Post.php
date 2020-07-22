<?php
namespace Inchoo\Helloworld\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'inchoo_helloworld_post';

    protected $_cacheTag = 'inchoo_helloworld_post';

    protected $_eventPrefix = 'inchoo_helloworld_post';

    protected function _construct()
    {
        $this->_init('\Inchoo\Helloworld\Model\ResourceModel\Post');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }
}