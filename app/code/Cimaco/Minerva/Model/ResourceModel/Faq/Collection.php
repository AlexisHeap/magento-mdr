<?php declare(strict_types=1);

namespace Cimaco\Minerva\Model\ResourceModel\Faq;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Cimaco\Minerva\Model\Faq;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Faq::class, \Cimaco\Minerva\Model\ResourceModel\Faq::class);
    }
}