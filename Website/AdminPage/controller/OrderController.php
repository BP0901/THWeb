<?php
    include_once '../utils/MySQLUtils.php';
    include_once '../model/Order.php';
    include_once '../model/Product.php';
    include_once '../model/Category.php';
    include_once '../controller/BaseController.php';

    class OrderController extends BaseController{
        public function orderPage(){
            $order = new Order("", "", "", 0, 0, 0, 0);
            $data['list-order'] = $order->getAllOrder();
            $this->view("orders", $data);
        }

        public function orderViewPage($orderId){
            $order = new Order("", "", "", 0, 0, 0, 0, $orderId);
            $data['order'] = $order->getOrderById();
            $data['order_detail'] = $order->getDetailOderById();
            $data['product'] = [];
            for($i = 0; $i < count($data['order_detail']); $i++){
                $proId = $data['order_detail'][$i]['product_id'];
                $product = new Product("", "", 0, "", 0, 0, $proId);
                $dataPro = $product->getProductById();
                array_push($data['product'], $dataPro);
            }
            $this->view("order_view", $data);
        }
    }

    $orderController = new OrderController();
    $orderAction = "";
    if(count($_GET) > 0){
        $orderAction = $_GET['order_action'];
    }

    switch ($orderAction) {
        case 'detail':
            $orderId = $_GET['order_id'];
            $orderController->orderViewPage($orderId);
            break;
        
        default:
            $orderController->orderPage();
            break;
    }
?>