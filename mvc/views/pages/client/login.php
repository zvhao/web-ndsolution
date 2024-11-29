<form class="max-w-sm mx-auto mt-5">
   <div class="mb-5">
      <label for="email" class="block mb-2 text-sm font-medium text-white">Nhập email</label>
      <input type="email" id="email" class="  border  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white shadow-sm-light" placeholder="name@gmail.com" required />
   </div>
   <div class="mb-5">

      <label for="password" class="block mb-2 text-sm font-medium text-white">Nhập mật khẩu</label>
      <div class="relative">
         <input
            type="password"
            id="password"
            name="password"
            class="bg-gray-700 border text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 pr-10 border-gray-600 placeholder-gray-400 text-white shadow-sm-light"
            required />
         <i
            class="fa fa-eye absolute inset-y-0 right-3 flex items-center text-gray-400 cursor-pointer toggle-password"
            data-target="password"></i>
      </div>
   </div>
   <div class="flex items-start mb-5">
      <div class="flex items-center h-5">
         <input id="rememberme" type="checkbox" value="" class="w-4 h-4 border  rounded  focus:ring-3 bg-gray-700 border-gray-600 focus:ring-blue-600 ring-offset-gray-800 focus:ring-offset-gray-800" required />
      </div>
      <label for="rememberme" class="ms-2 text-sm font-medium text-gray-300">Hãy nhớ tôi</label>

   </div>
   <div class="flex justify-between items-center">
      <button type="submit" class="text-white   focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-600 dhover:bg-blue-700 focus:ring-blue-800">Đăng nhập</button>
      <a href="<?= _WEB_ROOT ?>/Auth/register" class="text-gray-300 hover:text-blue-500">Đăng ký tài khoản</a>
   </div>
</form>