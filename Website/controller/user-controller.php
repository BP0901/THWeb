<?php
    include '../utils/ValidateData.php';
    include '../utils/MySQLUtils.php';
    include '../Model/User.php';
    // include '../PHPMailer/class.smtp.php';
    // include "../PHPMailer/class.phpmailer.php";
    if(!isset($_SESSION)) session_start();

    class UserController{
        public function insertUser($user){
            $user->insertUser();
        }

        public function getUserByEmail($user){
            return $user->getUserByEmail();
        }

        public function deleteUser($user){
            $user->deleteUser();
        }

        public function updateUser($user){
            $user->updateUser();
        }
    }

    if($_POST > 0){
        $grp_user_controller = $_POST['grp_user_controller'];
        $userControl = new UserController();
        switch ($grp_user_controller) {
            case 'user_login':
                $email = trim($_POST["email"]);
                $password = md5(trim($_POST["password"]));

                if(checkEmail($email)){
                    $loginUser = new User("", $email, $password, 0, 0);
                    $user = $userControl->getUserByEmail($loginUser);

                    if(sizeof($user) == 0){
                         //header("Location: ../view/login.php");
                         echo '<script>
                                alert("Sai email!!");
                                window.history.back();
                            </script>';
                    }else{
                        if($user[0]['password'] == $password){
                            $_SESSION["userId"] = $user[0]['user_id'];
                            $_SESSION["username"] = $user[0]['username'];
                            $_SESSION["email"] = $user[0]['email'];
                            $_SESSION["pw"] = $user[0]['password'];
                            $_SESSION["sex"] = $user[0]['sex'];
                            header("Location: ../view/home.php");
                        }else{
                            // header("Location: ../view/login.php");
                            echo '<script>
                              alert("Sai mật khẩu");
                              window.history.back();
                            </script>';
                        }
                    }
                }else{
                    //header("Location: ../view/login.php");
                    echo '<script>
                            alert("Bạn nhập không phải email");
                            window.history.back();
                        </script>';
                }
                break;

            case 'user_register':
                $txtUsername = trim($_POST['txtUsername']);
                $txtEmail = trim($_POST['txtEmail']);
                $txtPassword = trim($_POST['txtPassword']);
                $radGender = $_POST['radGender'];

                if(empty($txtUsername)){
                    echo '<script>
                            alert("Bạn chưa nhập username");
                            window.history.back();
                        </script>';
                }else if(empty($txtEmail)){
                    echo '<script>
                            alert("Bạn chưa nhập email");
                            window.history.back();
                        </script>';
                } else if(empty($txtPassword)){
                    echo '<script>
                            alert("Bạn chưa nhập password");
                            window.history.back();
                        </script>';
                }else{
                    if(checkEmail($txtEmail)){
                        $md5Password = md5($txtPassword);
                        $sex = $radGender == "Nam" ? true : false;
                        $newUser = new User($txtUsername, $txtEmail, $md5Password, $sex);
                        $data = $userControl->getUserByEmail($newUser);

                        if($data == null){
                            if(checkLengthPw($txtPassword)){
                                $userControl->insertUser($newUser);

                                echo '<script>
                                        alert("Đăng ký thành công!");
                                        window.history.back();
                                    </script>';
                            }else{
                                echo '<script>
                                        alert("Mật khẩu phải có ít nhất 8 ký tự!!");
                                        window.history.back();
                                    </script>';
                            }
                        }
                        else{
                            echo '<script>
                                    alert("Email này đã được sử dụng");
                                    window.history.back();
                                </script>';
                        }
                    }else {
                        echo '<script>
                            alert("Bạn nhập không phải email");
                            window.history.back();
                        </script>';
                    }
                }
                break;

            case 'update':
                $newName = trim($_POST['txt_username']);
                $newEmail = trim($_POST['txt_email']);
                $newSex = trim($_POST['rad_gender']);
                $newPass = trim($_POST['txt_password']);

                var_dump($newName, $newEmail, $newSex, $newPass);
                die;
                break;
            case 'lost_pass':
                $txtEmail = trim($_POST['mail_to']);
                $loginUser = new User("", $txtEmail, "", 0, 0);
                $user = $userControl->getUserByEmail($loginUser);
                if(!empty($user)){
                    $conn = new mysqli('localhost', 'root', '', 'dbcuahang');
                    if ($conn->connect_error) {
                        die("Kết nối thất bại: " . $conn->connect_error);
                    } 
                    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                    $charactersLength = strlen($characters);
                    $randomString = '';
                    for ($i = 0; $i < 9; $i++) {
                        $randomString .= $characters[rand(0, $charactersLength - 1)];
                    }
                    $sql = "UPDATE User SET password=MD5('$randomString') WHERE email='$txtEmail'";
                    if ($conn->query($sql) === TRUE) {
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
                        $mail->Subject    = 'Xác nhận thông tin quên mật khẩu';
                        $mail->MsgHTML('Mật khẩu mới của bạn là: '. $randomString);
                        $mail->AddAddress("$txtEmail", "$txtEmail");
                        if(!$mail->Send()) {
                            echo '<script>
                            alert("Có lỗi khi gửi mail vui lòng thử lại!!");
                            window.history.back();
                        </script>';  
                        } else {
                            echo '<script>
                            alert("Vui lòng kiểm tra mail để nhận mật khẩu mới!!");
                            window.location.replace("../view/login.php");
                            </script>';
                        }
                    } else {
                        echo "Update thất bại: " . $conn->error;
                    }
                }
                else{
                    echo '<script>
                    alert("Email chưa đc đăng ký!!");
                    window.history.back();
                </script>';
                }
                break;
            default:
                # code...
                break;
        }
    }
?>