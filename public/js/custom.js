$(document).ready(function () {
   // Sidebar button
   $('#sidebarCollapse').on('click', function () {
      $('#sidebar, #content').toggleClass('active');
   });
   
   // Custom input file label
   $(".custom-file-input").on("change", function() {
      var fileName = $(this).val().split("\\").pop();
      $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
   });

   // $(".table-responsive").mCustomScrollbar({
   //    theme: "dark-2",
   //    axis: "x"
   // });

   $("#sidebar").mCustomScrollbar({
      theme: "minimal-dark",
      axis: "y"
   });
});