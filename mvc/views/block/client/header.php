<nav class="border-gray-600 bg-gray-900 w-full fixed bg-opacity-900">
   <div class="flex justify-between items-center mx-auto max-w-screen-2xl p-4">
      <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
         <!-- <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" /> -->
         <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">SD Solution</span>
      </a>

      <div id="mega-menu-full" class="items-center justify-between font-medium hidden w-full md:flex md:w-auto md:order-1">
         <ul class="flex flex-col p-4  mt-4 border  rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 bg-gray-900 border-gray-700">
            <li>
               <a href="<?= _WEB_ROOT ?>" class=" py-2 px-3 block  md:hover:bg-transparent  text-white hover:text-blue-500 bg-transparent " aria-current="page">Trang chủ</a>
            </li>

            <li>
               <button id="websiteBuilderButton" data-dropdown-toggle="websiteBuilderDropdown" class="py-2 px-3  md:hover:bg-transparent text-white hover:text-blue-500 bg-transparent">Thiết kế Website<i class="pl-2 fa-solid fa-angle-down"></i></button>
               <!-- Dropdown menu -->
               <div id="websiteBuilderDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                  <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="websiteBuilderButton">
                     <li>
                        <a href="#website-builder-home" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Thực tế</a>
                     </li>
                     <li>
                        <a href="#website-builder-edu-home" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Học sinh sinh viên</a>
                     </li>
                     
                  </ul>
               </div>
            </li>
            <li>
               <button id="hostingButton" data-dropdown-toggle="hostingDropdown" class=" py-2 px-3 rounded  md:hover:bg-transparent  text-white hover:text-blue-500 bg-transparent">Hosting<i class="pl-2 fa-solid fa-angle-down"></i></button>
               <!-- Dropdown menu -->
               <div id="hostingDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                  <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="hostingButton">
                     <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                     </li>
                     <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                     </li>
                    
                  </ul>
               </div>
            </li>

            <li>
               <a href="#" class=" py-2 px-3 block    md:hover:bg-transparent  text-white hover:text-blue-500 bg-transparent">Tên miền</a>
            </li>
            <li>
               <a href="#" class=" py-2 px-3 block    md:hover:bg-transparent  text-white hover:text-blue-500 bg-transparent">Chạy quảng cáo</a>
            </li>
            <li>
               <a href="#" class=" py-2 px-3 block   md:hover:bg-transparent  text-white hover:text-blue-500 bg-transparent">Liên hệ</a>
            </li>
            <li>
               <a href="<?= _WEB_ROOT ?>/Auth/login">
                  <button class="relative inline-flex items-center justify-center p-0.5 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                     <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                     Đăng nhập
                     </span>
                  </button>
               </a>
            </li>

            <!-- <li>
               <button id="profileButton" data-dropdown-toggle="profileDropdown" class="flex items-center justify-between w-full py-2 px-3 block text-gray-900 rounded md:w-auto hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-600  dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700" type="button">Hồ sơ <i class="pl-2 fa-solid fa-angle-down"></i>
               </button>

               <div id="profileDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                  <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="profileButton">
                     <li>
                        <a href="#" class=" px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                     </li>
                     <li>
                        <a href="#" class=" px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                     </li>
                     <li>
                        <a href="#" class=" px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                     </li>
                     <li>
                        <a href="#" class=" px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                     </li>
                  </ul>
               </div>
            </li> -->

         </ul>
      </div>
   </div>

</nav>