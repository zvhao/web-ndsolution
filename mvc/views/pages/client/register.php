<form class="max-w-sm mx-auto mt-5" method="POST" action="<?= $data['action'] ?>">
   <div class="mb-5">
      <label for="name" class="block mb-2 text-sm font-medium text-white">Nhập họ tên hoặc username</label>
      <input type="text" id="name" name="name" class=" bg-gray-700 border   text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 border-gray-600 placeholder-gray-400 text-white shadow-sm-light" placeholder="Nguyen Van H" required />
   </div>
   <div class="mb-5">
      <label for="email" class="block mb-2 text-sm font-medium text-white">Nhập email (dùng để đăng nhập)</label>
      <input type="email" id="email" name="email" class=" bg-gray-700 border   text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 border-gray-600 placeholder-gray-400 text-white shadow-sm-light" placeholder="name@gmail.com" required />
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

   <div class="mb-5">
      <label for="repeat_password" class="block mb-2 text-sm font-medium text-white">Nhập lại mật khẩu</label>
      <div class="relative">
         <input
            type="password"
            id="repeat_password"
            name="repeat_password"
            class="bg-gray-700 border text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 pr-10 border-gray-600 placeholder-gray-400 text-white shadow-sm-light"
            required />
         <i
            class="fa fa-eye absolute inset-y-0 right-3 flex items-center text-gray-400 cursor-pointer toggle-password"
            data-target="repeat_password"></i>
      </div>
   </div>

   <div class="flex items-start mb-5">
      <div class="flex items-center h-5">
         <input id="terms" type="checkbox" value="" class="w-4 h-4 border rounded bg-gray-700 focus:ring-3 border-gray-600 focus:ring-blue-600 ring-offset-gray-800 dark:focus:ring-offset-gray-800" required />
      </div>
      <label for="terms" class="ms-2 text-sm font-medium text-gray-300">Tôi đồng ý với <a href="#" class="hover:underline text-blue-500">các điều khoản và điều kiện</a></label>
   </div>
   <div class="flex justify-between items-center">
      <button type="submit" name="register" class="text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">Đăng ký tài khoản</button>
      <a href="<?= _WEB_ROOT ?>/Auth/login" class="text-gray-300 hover:text-blue-500">Đăng nhập</a>
   </div>
</form>