<?php

namespace Prince\Productattach\Api\Data;

interface ProductAttachTableSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{
    /**
     * Get productattach list.
     * @return \Prince\Productattach\Api\Data\ProductattachTableInterface[]
     */
    public function getItems();

    /**
     * Set test list.
     * @param \Prince\Productattach\Api\Data\ProductattachTableInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
