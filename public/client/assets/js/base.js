$(document).ready(function() {
   // Khi trang tải xong
   $(window).on('load', function() {
       // Ẩn phần loading spinner
       $('#loading-spinner').fadeOut();
       
       // Hiển thị nội dung trang
       $('#content').fadeIn();
   });
 });

 $(document).ready(function () {
  $(".toggle-password").on("click", function () {
    const targetInput = $("#" + $(this).data("target"));
    const inputType = targetInput.attr("type") === "password" ? "text" : "password";
    targetInput.attr("type", inputType);

    // Thay đổi biểu tượng mắt
    $(this).toggleClass("fa-eye fa-eye-slash");
  });
});