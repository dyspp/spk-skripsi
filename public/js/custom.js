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

   // $("#sidebar").mCustomScrollbar({
   //    theme: "minimal-dark",
   //    axis: "y"
   // });

   // Form valid class
   function isValid() {
      $(this).addClass("is-valid");
   };

   function notValid() {
      $(this).removeClass("is-valid");
   };

   $("form input:text").on("keyup", function() {
      if ($(this).hasClass("is-invalid")) {
         $(this).removeClass("is-invalid");
      }
      if (!$(this).val() == "") {
         $(this).focusout(isValid);
      }
      else {
         $(this).removeClass("is-valid");
         $(this).focusout(notValid);
      }
   });

   $("form textarea").on("keyup", function() {
      if ($(this).hasClass("is-invalid")) {
         $(this).removeClass("is-invalid");
      }
      if (!$(this).val() == "") {
         $(this).focusout(isValid);
      }
      else {
         $(this).removeClass("is-valid");
         $(this).focusout(notValid);
      }
   });

   $("form select").on("change", function() {
      if ($(this).hasClass("is-invalid")) {
         $(this).removeClass("is-invalid");
      }
   }).on("change", isValid);

   $("form input:file").on("click", function() {
      if ($(this).hasClass("is-invalid")) {
         $(this).removeClass("is-invalid");
      }
      $(this).on("change", function() {
         if ($(this).val() != "") {
            $(this).focusout(isValid);
            $(".input-file-label").addClass("input-file-valid");
         }
         else {
            $(this).focusout(notValid);
            $(".input-file-label").removeClass("input-file-valid");
            $(this).siblings(".custom-file-label").html("Choose file");
         }
      });
   });

   // Alternative Scores Functions
   if (window.innerWidth < 768) {
      sticky();
   }
   if (window.innerWidth > 768) {
      formScroll();
   }

   window.onresize = function() {
      sticky();
      formScroll();
   }

   window.onscroll = function() {
      stickyTop();
   }

   function stickyTop() {
      const els = document.querySelector(".sticky-element");
      const top = els.offsetTop;
      const x = window.pageYOffset;
      
      if ( x > top) {
         els.style.top = "" +top+ "px";
      }
      
   }

   // Function to give a sticky behavior for Alternative Details on the Alternative Scores crate page.
   function sticky() {
      var width = window.innerWidth;
      var minWidth = 768;
      var elements = document.querySelectorAll(".sticky");
      
      if (width < minWidth) {
         for (var i = 0; i < elements.length; i++) {
            if (elements[i].classList.contains("sticky-element")) {
               // console.log("a element " +i+ " has \"sticky-element\" class.");
               elements[i].classList.remove("sticky-element");
               elements[i-1].classList.add("sticky-element");
               break;
            }
         }
      }
      else {
         for (var i = 0; i < elements.length; i++) {
            if (elements[i].classList.contains("sticky-element")) {
               // console.log("a element " +i+ " has \"sticky-element\" class.");
               elements[i].classList.remove("sticky-element");
               elements[i+1].classList.add("sticky-element");
               break;
            }
         }
      }
   }

   // Function to give a scroll behavior for Alternative Score form on the Alternative Scores crate page.
   function formScroll() {
      var formContainers = document.querySelectorAll(".form-scroll");
      var width = window.innerWidth;
      var minWidth = 768;

      for (var formContainer of formContainers) {
         if (width > minWidth) {
            formContainer.setAttribute("style", "max-height:80vh; overflow:auto;");
         }
         else {
            formContainer.removeAttribute("style");
         }
      }
   }

   // Function for showing alternative details on Alternative Scores create page.
   const alternative = document.querySelector("#alternative_id");
   const alternativeDetails = document.querySelector("#alternativeDetails");

   if (document.body.contains(alternative)) {
      alternative.addEventListener("change", function() {
         const id = alternative.value;
         const loader = "<p  class=\"text-center\"><i id=\"loader\" class=\"fas fa-spinner fa-spin\"></i></p>";
         alternativeDetails.innerHTML = loader;
   
         getAlternativeDetails(id);
      });
   }

   function getAlternativeDetails(id) {
      const alternative_id = id;

      $.ajax({
         url: '../alternatives/' + alternative_id,
         type: 'GET',
         dataType: 'html',
         success: function(alternativeData) {
            if (alternativeData == "no data") {
               const noData = "<h4 class=\"text-center\">Data not found.</h4>";

               // Option 1 for "cleaning" HTML element.
               while (alternativeDetails.firstChild) {
                  alternativeDetails.removeChild(alternativeDetails.firstChild);
               }
               // Option 2 for "cleaning" HTML element.
               // alternativeDetails.innerHTML = "";

               alternativeDetails.insertAdjacentHTML("afterbegin", noData);
            }
            else {
               while (alternativeDetails.firstChild) {
                  alternativeDetails.removeChild(alternativeDetails.firstChild);
               }
               alternativeDetails.innerHTML = alternativeData;
            }
         }
      })
   }
});