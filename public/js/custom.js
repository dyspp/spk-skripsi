$(document).ready(function () {
   // Sidebar button
   $('#sidebarCollapse').on('click', function () {
      // $('#sidebar, #content').toggleClass('active');
      if ($('#sidebar').hasClass('active')) {
         $('#sidebar').removeClass('active');
      }
      else {
         $('#sidebar').addClass('active');
      }
      if ($('#content').hasClass('active')) {
         $('#content').removeClass('active');
      }
      else {
         $('#content').addClass('active');
      }
   });
   
   // Set active class for #sidebar and #content
   // based on window size dynamically.
   $(window).resize(resetActive);

   function resetActive() {
      var w = $(window).width();
      var min = 768;
      var sidebar = $('#sidebar').not('active');
      var content = $('#content').hasClass('active');
      
      // console.log('window size now is ' + w);
      if (w > min) {
         if (sidebar) {
            $('#sidebar').addClass('active');
         };
         if (content) {
            $('#content').removeClass('active');
         };
      } else {
         $('#sidebar').addClass('active');
         $('#content').removeClass('active');
      };
   };

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

   // Get alternative details
   $('#load').hide();

   $('#alternative').change(function() {
      $('#load').show();
      var id = $(this).val();

      $.ajax({
         url: '../alternatives/'+id,
         type: 'get',
         success: function(response) {
            if (response.length == 0)
            {
               // $('#alternative-details').find('li').remove();
               $('#load').hide();
               $('#alternative-details').empty();
               $('#alternative-details').html('no data');
               
            }
            else {
               $('#load').hide();
               $('#alternative-details').empty();
               
               var id = "<li>ID: "+response.id+"</li>";
               var name = "<li>Name: "+response.name+"</li>";
               var url = "http://127.0.0.1:8000/images/alternatives/";
               var image = "<li><img src=\""+url+""+response.image+"\" alt=\""+response.name+"\" width=\"auto\" height=\"75px\"></li>";
               var brand = "<li>Brand: "+response.brand+"</li>";
               var price = "<li>Price: "+response.price+"</li>";
               var processor = "<li>Processor: "+response.processor+"</li>";
               var gpu = "<li>GPU: "+response.gpu+"</li>";
               var ram = "<li>RAM: "+response.ram+"</li>";
               var storage = "<li>Storage: "+response.storage+"</li>";
               var screen = "<li>Screen: "+response.screen+"</li>";
               var unitWeight = "<li>Unit Weight: "+response.unit_weight+"</li>";
               var features = "<li>Features: "+response.features+"</li>";

               $('#alternative-details').append(id);                                            
               $('#alternative-details').append(name);                                            
               $('#alternative-details').append(image);                                            
               $('#alternative-details').append(brand);                                            
               $('#alternative-details').append(price);                                            
               $('#alternative-details').append(processor);                                            
               $('#alternative-details').append(gpu);                                            
               $('#alternative-details').append(ram);                                            
               $('#alternative-details').append(storage);                                            
               $('#alternative-details').append(screen);                                            
               $('#alternative-details').append(unitWeight);                                            
               $('#alternative-details').append(features);                                            
            }

         }
      });
   });

   // Test function to use in alternative score edit page
   function alternativeDetail() {
      console.log('ready!');
   };

   if ($('#alternative-details').length > 0) {
      alternativeDetail();
   }
});