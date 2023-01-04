<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Qbtest extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect('query_builder');

        //111111111111
        // $builder = $db->table('employees')->select('firstName, lastName, email, jobTitle')->where('jobTitle = "Sales Rep"');
        // echo "<pre>";
        // $data = $builder->get()->getResult();
        // print_r($data);

        //2222222222222
        // $builder = $db->table('employees')->select('firstName, lastName, email, jobTitle')->where('jobTitle = "Sales Rep" and reportsTo = 1143');
        // echo "<pre>";
        // $data = $builder->get()->getResult();
        // print_r($data);

        //333333333333333
        // $builder = $db->table('employees, offices')->select('firstName, lastName, email, city, country')->where('employees.officeCode = offices.officeCode and offices.country = "USA"');
        // echo "<pre>";
        // $data = $builder->get()->getResult();
        // print_r($data);

        //444444444444444
        // $builder = $db->table('orders');
        // $builder->select('customerName, phone, city, orderNumber, orderDate, status');
        // $row = $builder->join('customers', 'customers.customerNumber = orders.customerNumber');
        // echo "<pre>";
        // $data = $row->get()->getResult();
        // print_r($data);

        //555555555555555555
        //use joine ******
        // $builder = $db->table('customers');
        // $builder->select('customerName, phone, city, orders.orderNumber, orderDate, status, quantityOrdered, priceEach');
        // $row = $builder->join('orders', 'orders.customerNumber = customers.customerNumber');
        // $row = $builder->join('orderdetails', 'orderdetails.orderNumber = orders.orderNumber');
        // echo "<pre>";
        // $data = $row->get()->getResult();
        // print_r($data);

        // use where *****
        // $builder = $db->table('orders,orderdetails,customers');
        // $builder->select('customerName, phone, city, orders.orderNumber, orderDate, status, quantityOrdered, priceEach');
        // $row = $builder->where('orders.customerNumber = customers.customerNumber');
        // $row = $builder->where('orderdetails.orderNumber = orders.orderNumber');
        // echo "<pre>";
        // $data = $row->get()->getResult();
        // print_r($data);


        //6666666666666666666
        $builder = $db->table('orders,orderdetails,customers, products');
        $builder->select('customerName, city, orders.orderNumber, orderDate, products.productCode, productName, quantityOrdered, priceEach, MSRP')->selectSum('quantityOrdered')->selectSum('priceEach')->groupBy('orders.orderNumber')->where('orders.orderNumber = orderdetails.orderNumber and
        products.productCode = orderdetails.productCode and
        orders.customerNumber =  customers.customerNumber');
        echo "<pre>";
        $data = $builder->get()->getResult();
        print_r($data);
    }
}
