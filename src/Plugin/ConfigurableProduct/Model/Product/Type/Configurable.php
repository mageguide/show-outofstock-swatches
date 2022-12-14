<?php
namespace MageGuide\OutOfStockSwatches\Plugin\ConfigurableProduct\Model\Product\Type;

use Magento\ConfigurableProduct\Model\Product\Type\Configurable as NativeConfigurable;
use Magento\ConfigurableProduct\Model\ResourceModel\Product\Type\Configurable\Product\Collection;

/**
 * Class Configurable
 */
class Configurable
{
    /**
     * @param NativeConfigurable $subject
     * @param Collection $collection
     *
     * @return Collection
     */
    public function afterGetUsedProductCollection(NativeConfigurable $subject, $collection)
    {
        $collection->setFlag('has_stock_status_filter', true);

        return $collection;
    }
}
