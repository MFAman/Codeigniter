<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Automattic\WooCommerce\Admin\API\Orders;

class ReportsController extends BaseController
{
    public function stafflist()
    {
        $db = db_connect('query_builder');
        $builder = $db->table("offices");
        $data = $builder->get()->getResultArray();
        // dd($data);
        // echo "<pre>";
        // print_r($data);
        return view('reports/office_list', ['offices' => $data]);
    }

    public function allstaff()
    {
        // echo "hello";
        // echo $_GET['offcode'];
        $code = $_GET['offcode'];
        $db = db_connect("query_builder");
        $builder = $db->table("employees");
        $builder->where('officeCode', $code);
        $data['empls'] = $builder->get()->getResultArray();
        // dd($data);
        return view('reports/staff_form', $data);
    }
    public function orderlist()
    {
        return view('reports/orderlist_form');
    }
    public function orderquery()
    {
        $start = $_GET['start'];
        $end = $_GET['end'];
        $db = db_connect("query_builder");
        // $builder = $db->table('customers, orders');
        // $builder->where('orders.customerNumber = customers.customerNumber');
        $builder = $db->query("SELECT customerName, phone, city, orderNumber, orderDate, status FROM orders, customers WHERE orders.customerNumber = customers.customerNumber AND orders.orderDate between '$start' AND '$end'");
        // echo "<pre>";
        $data['orders'] = $builder->getResultArray();
        // dd($data);
        // print_r($data);
        return view('reports/order_report_form', $data);
    }
}
