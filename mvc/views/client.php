<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ND Solution</title>
   <!-- <link rel="icon" type="image/x-icon" href="<?= _PATH_CLIENT_IMG ?>logo.png"> -->

   <!-- cdn -->
   <!-- normalize -->
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

   <!-- tailwindcss -->
   <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
   <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <!-- aos -->
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

   <link rel="stylesheet" href="<?php echo _PATH_PUBLIC . '/client/assets/css/normalize.css' ?>">
   <link rel="stylesheet" href="<?php echo _PATH_PUBLIC . '/client/assets/css/base.css' ?>">

   <?php
   if (isset($data['css']) && !empty($data['css'])) {
      foreach ($data['css'] as $item) {

         echo '<link rel="stylesheet" href="' . _PATH_PUBLIC . '/client/assets/css/' . $item . '.css">';
      }
   }

   ?>

</head>

<body>

   <div class="app text-white bg-gray-900">
      <?php
      require_once './mvc/views/block/client/header.php';

      ?>
      <!-- Phần loading spinner -->
      <div id="loading-spinner" class="fixed inset-0 flex justify-center items-center bg-gray-700 opacity-[0.9] z-50">
         <div class="w-16 h-16 border-4 border-t-4 border-white border-solid rounded-full animate-spin"></div>
      </div>
      <div id="content" class="p-[30px] pt-[100px]">
         <?php
         require_once './mvc/views/pages/client/' . $data['pagePath'] . '.php';
         ?>
      </div>

      <?php

      require_once './mvc/views/block/client/footer.php';

      ?>
   </div>

   <!-- jquery 3.7.1 -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

   <!-- bootstrap@5.3.3 -->
   <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->

   <!-- sweetalert2 -->
   <script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.all.min.js
"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <!-- aos -->
   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

   <script src="https://cdn.tailwindcss.com"></script>
   <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>


   <script type="text/javascript" src="<?= _PATH_PUBLIC ?>/client/assets/js/base.js"></script>
   <?php
   if (isset($data['js']) && !empty($data['js'])) {
      foreach ($data['js'] as $item) {
         echo '<script type="text/javascript" src="' . _PATH_PUBLIC . '/client/assets/js/' . $item . '.js"></script>';
      }
   }

   ?>
   <script>
      AOS.init();
   </script>

</body>

</html>