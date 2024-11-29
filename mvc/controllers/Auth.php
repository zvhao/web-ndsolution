<?php
class Auth extends Controller
{
   private AuthModel $auth;
   function __construct()
   {
      $this->auth = $this->model('Authmodel');
   }

   function login()
   {
      return $this->view('client', [
         'title' => '',
         'pagePath' => 'login',
         'action' => _WEB_ROOT . '/Auth/handleLogin',
         'css' => [],
         'js' => []
      ]);
   }
   function register()
   {
      return $this->view('client', [
         'title' => '',
         'pagePath' => 'register',
         'action' => _WEB_ROOT . '/Auth/handleRegister',
         'css' => [],
         'js' => [],
      ]);
   }
   function handleRegister()
   {
      if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
         $name = trim($_POST['name']);
         $email = trim($_POST['email']);
         $password = trim($_POST['password']);
         $repeat_password = trim($_POST['repeat_password']);

         // $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

         $users = $this->auth->getAll();
         $checkEmail = false;
         $message = '';
         if (!empty($users)) {
            foreach ($users as $user) {
               if ($user['email'] == $email) {
                  $checkEmail = true;
                  break;
               }
            }
         } else {
            $checkEmail = false;
         }
         $checkLogin = false;
         if ($checkEmail) {
            $message = 'Email đã tồn tại!';
            $checkLogin = false;
            $_SESSION['msg'] = $message;
         } else {
            if ($password === $repeat_password) {
               $password = password_hash($password, PASSWORD_DEFAULT);
               $status = $this->auth->register($name, $email, $password);
               if ($status) {
                  $checkLogin = true;

                  $message = 'Đăng ký tài khoản thành công';
               } else {
                  $message = 'Đã xảy ra sự cố với hệ thống, vui lòng thử lại sau!';
                  $checkLogin = false;
               }
            } else {
               $message = 'Mật khẩu không khớp!';
               $checkLogin = 0;
            }
         }
         if ($checkLogin) {
            $_SESSION['msg'] = $message;
            header('Location: ' . _WEB_ROOT . '/Auth/login');
         } else {

            header('Location: ' . _WEB_ROOT . '/Auth/register');
         }
      }
   }
}
