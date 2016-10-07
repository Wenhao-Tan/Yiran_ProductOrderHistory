<?php
/**
 * Created by PhpStorm.
 * User: Paul
 * Date: 2016/6/21
 * Time: 5:25
 */
class Yiran_ProductOrderHistory_Model_Customer extends Mage_Core_Model_Abstract
{
    protected function _construct()
    {
        $this->_init('productorderhistory/customer');
    }

    public function getCustomerNames()
    {
        $collections = Mage::getModel('sales/order')->getCollection();
        $collections->getSelect()->join(['order_item' => 'sales_flat_order_item'], 'order_item.order_id = main_table.entity_id', ['order_item.sku']);

        $collections->load('sku');

        // Mage::registry('current_product');

        foreach ($collections as $collection) {
            $customerNames[] = $collection->getCustomerName();
        }

        return $customerNames;

    }
}