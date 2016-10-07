<?php

/**
 * Created by PhpStorm.
 * User: Paul
 * Date: 2016/6/21
 * Time: 6:11
 */
class Yiran_ProductOrderHistory_IndexController extends Mage_Core_Controller_Front_Action
{
    public function IndexAction()
    {
        /*
        $collections = Mage::getModel('sales/order')->getCollection();
        $collections->getSelect()->join(['order_item' => 'sales_flat_order_item'], 'order_item.order_id = main_table.entity_id', ['order_item.sku']);

        $collections->addFieldToFilter('sku', '1001');

        foreach ($collections as $collection)
        {
            $customerName[] = $collection->getCustomerName();
        }
        */

        $customerName = Mage::getModel('productorderhistory/customer')->getCustomerNames();

        print_r($customerName);
    }
}