<?php
/**
 * @author Amasty Team
 * @copyright Copyright (c) 2019 Amasty (https://www.amasty.com)
 * @package Amasty_MultiInventory
 */


namespace Amasty\MultiInventory\Ui\Component\Listing\Column\Sales;

class Warehouse extends \Amasty\MultiInventory\Ui\Component\Listing\Column\AbstractColumn
{

    /**
     * Get data
     *
     * @param array $item
     * @return string
     */
    protected function prepareItem(array $item)
    {
        $items = $this->getWarehousesOrder($item['entity_id']);
        $items = array_unique($items);
        $content = '';
        foreach ($items as $item) {
            $content .= $item . "<br/>";
        }

        return $content;
    }
}
