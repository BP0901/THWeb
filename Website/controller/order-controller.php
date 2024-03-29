<?php
include_once '../Model/Product.php';
include_once './BaseController.php';
include_once '../utils/ValidateData.php';
include_once '../Model/Order.php';
class OrderController extends BaseController{
    public function getProductById($product){
        return $product->getProductById();
    }

    public function insertOrder($order){
        $order->insertOrder();
    }

    public function getNewOrder($order){
        return $order->getNewOrder();
    }

    public function insertOrderDetail($order, $order_id, $product_id, $current_price, $quality){
        $order->insertOrderDetail($order_id, $product_id, $current_price, $quality);
    }
}

$orderController = new OrderController();

session_start();
$order_action = "";
if(count($_POST) > 0){
    $order_action = $_POST['order_action'];
}elseif (isset($_GET['action'])){
    $order_action = $_GET['action'];
    if(isset($_GET['delete']) && $_GET['delete'] == 'true'){
        $id = $_GET['id'];
        unset($_SESSION['cart-item'][$id]);
        header("Location: ../controller/order-controller.php?action=checkcart");
    }
    if(isset($_GET['plus']) && $_GET['plus'] == 'true'){
        $id = $_GET['id'];
        $amount = $_SESSION['cart-item'][$id]->getAmount();
        $_SESSION['cart-item'][$id]->setAmount($amount + 1);
        header("Location: ../controller/order-controller.php?action=checkcart");
    }
    if(isset($_GET['minus']) && $_GET['minus'] == 'true'){
        $id = $_GET['id'];
        $amount = $_SESSION['cart-item'][$id]->getAmount();
        $_SESSION['cart-item'][$id]->setAmount($amount - 1);
        if($_SESSION['cart-item'][$id]->getAmount() == 0){
            unset($_SESSION['cart-item'][$id]);
        }
        header("Location: ../controller/order-controller.php?action=checkcart");
    }
}

switch ($order_action) {
    case 'add':
        $id = (int)$_POST['txt_id'];
       
        $pro = new Product("", "", 0, "", 1, 0, $id);
        $dataPro = $orderController->getProductById($pro);
        $selectedProduct = new Product($dataPro[0]['product_name'], "", $dataPro[0]['product_price'], $dataPro[0]['product_img'], $dataPro[0]['product_price_discount'], 0, $dataPro[0]['id']);
        if(!empty($_SESSION['username'])){
            if(!empty($_SESSION['cart-item'])){
                if(array_key_exists($id, $_SESSION['cart-item'])){
                    $amount = $_SESSION['amount'][$id];
                    $_SESSION['amount'][$id] = $amount + 1;
                    // var_dump($_SESSION['cart-item']);
                    // die;
                } else {
                    $_SESSION['cart-item'][$id] = $selectedProduct;
                    $_SESSION['amount'][$id] = 1;
                    // var_dump($_SESSION['cart-item']);
                    // die;
                }
                echo '<script>
                        alert("Thêm vào giỏ hàng thành công");
                        window.history.back();
                    </script>';
            } else {
                $_SESSION['cart-item'][$id] = $selectedProduct;
                $_SESSION['amount'][$id] = 1;
                // die;
                echo '<script>
                        alert("Thêm vào giỏ hàng thành công");
                        window.history.back();
                    </script>';
            }
        }else{
            header("Location: ../view/account.php");
            exit();
        }
        break;

    case 'checkcart':
        if(isset($_SESSION['cart-item'])){
            $data['cart'] = $_SESSION['cart-item'];
            $orderController->view("cart", $data);
        } else {
            $data['cart'] = array();
            $orderController->view("cart", $data);
        }
        break;

    case 'clear':
        unset($_SESSION);
        session_destroy();
        break;

    case 'order':
        $user_id = $_SESSION['userId'];
        $receiver = $_POST['txt_receiver'];
        $address = $_POST['txt_address'];
        $phoneNumber = $_POST['txt_phoneNumber'];
        $totalPrice = $_SESSION['total'];
        $paymentMethods = $_POST['radPaymentMethods'];

        $err = checkOrder($receiver, $address, $phoneNumber);
        if(!empty($err)){
            echo '<script>
                    alert("'.$err.'");
                    window.history.back();
                </script>';
        } else {
            $order = new Order($receiver, $address, $phoneNumber, $totalPrice, $paymentMethods, 0, $user_id);
            $orderController->insertOrder($order);
            $dbCon = new MySQLUtils();
            $query = "select * from user where user_id = :user_id";
            $param = [
                ":user_id"  => $user_id
            ];
            $user = $dbCon->getData($query, $param);
            $dbCon->disconnect();
            $payment = $paymentMethods == 1 ? "Thanh toán khi nhận hàng!!" : "Thanh toán online";
            $newOrder = $orderController->getNewOrder($order);
            $order_id = $newOrder[0]['order_id'];
            foreach($_SESSION['cart-item'] as $product){
                $currentPrice = $product->getAmount() * $product->getPriceCurrent();
                $detailOrder = new Order("", "", "", 0, 0,0,0);
                $orderController->insertOrderDetail($detailOrder, $order_id, $product->getProductId(), $currentPrice, $product->getAmount());
            }
            $mail             = new PHPMailer();
            $mail->IsSMTP();             
            $mail->CharSet  = "utf-8";
            $mail->SMTPDebug  = 0;
            $mail->SMTPAuth   = true;
            $mail->SMTPSecure = "tls";
            $mail->Host       = "smtp.gmail.com";
            $mail->Port       = 587;
            $mail->Username   = "phammanh2508@gmail.com"; 
            $mail->Password   = "twlmxdysgaxabsqe";
            $mail->SetFrom("phammanh2508@gmail.com", "phammanh2508@gmail.com");
            $mail->AddReplyTo('phammanh2508@gmail.com', 'Mạnh');
            $mail->Subject    = 'Xác nhận đơn hàng của bạn!!!';
            $mail->MsgHTML(
                "<html>
                    <body>
                        <h3>Tên người nhận: $receiver</h3>
                        <h3>Địa chỉ nhận hàng: $address</h3>
                        <h3>SĐT nhận hàng: $phoneNumber</h3>
                        <h3>Tổng tiền đơn hàng: $totalPrice</h3>
                        <h3>Thanh toán: $payment</h3>
                    </body>
                </html>"
            );
            if (!empty($user)) 
                {
                foreach($user as $row){
                        $mail->AddAddress("".$row['email']."", "".$row['email']."");
                    }
                } 
            else {
                echo "Không có record nào";
            }

            if(!$mail->Send()) {
                echo '<script>
                alert("Có lỗi khi gửi mail vui lòng thử lại!!");
                window.history.back();
            </script>';  
            } else {
                echo '<script>
                alert("Đặt hàng thành công");
                window.location.replace("../view/home.php");
            </script>';
            }
            unset($_SESSION['cart-item']);
        }
        break;
    default:
        # code...
        break;
}