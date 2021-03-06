<?php
/**
 * @author Amasty Team
 * @copyright Copyright (c) 2019 Amasty (https://www.amasty.com)
 * @package Amasty_MultiInventory
 */


namespace Amasty\MultiInventory\Ui\Component\Listing\Column;

class TotalShip extends AbstractColumn
{
    /**
     * Get data
     *
     * @param array $item
     * @return string
     */
    protected function prepareItem(array $item)
    {
        return (int) $this->getTotalQty($item['warehouse_id'], 'ship_qty');
    }
}
