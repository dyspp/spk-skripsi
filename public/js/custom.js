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
   
   // Check if the browser is online or not.
   const onlineStatus = navigator.onLine;
   
   if (onlineStatus === true ) {
      // custom scrollbar
      $(".table-responsive").mCustomScrollbar({
         theme: "dark-2",
         axis: "x"
      });
   
      $("#sidebar").mCustomScrollbar({
         theme: "minimal-dark",
         axis: "y"
      });
   }

   // Form valid and invalid class control.
   function isValid(el) {
      el.classList.add("is-valid");
   };

   function invalidFeedback(el) {
      const validFeedback = "<strong class='invalid-feedback'>This field should not be empty.</strong>";
      
      if (el.nextElementSibling === null) {
         el.insertAdjacentHTML("afterend", validFeedback);
      }
   };

   function notValid(el) {
     el.classList.add("is-invalid");
   };

   // Input = Text
   const inputText = document.querySelectorAll("form input[type='text']");

   for (let i = 0; i < inputText.length; i++) {
      inputText[i].addEventListener("keyup", function() {
         if (this.classList.contains("is-invalid")) {
            this.classList.remove("is-invalid");
         }
         if (this.value == "") {
            this.classList.remove("is-valid");
         }
      });
      inputText[i].addEventListener("focusout", function() {
         if (!this.value == "") {
            isValid(this);
            // invalidFeedback(this);        
         }
         // else {
         //    isValid(this);
         // }
      });
   }

   // Input = Text Area
   const inputTextArea = document.querySelectorAll("form textarea");

   for (let i = 0; i < inputTextArea.length; i++) {
      inputTextArea[i].addEventListener("keyup", function() {
         if (this.classList.contains("is-invalid")) {
            this.classList.remove("is-invalid");
         }
         if (this.value == "") {
            this.classList.remove("is-valid");
         }
      });
      inputTextArea[i].addEventListener("focusout", function() {
         if (!this.value == "") {
            isValid(this);
            // invalidFeedback(this);
         }
         // else {
         //    isValid(this);
         // }
      });
   }

   // Input = Select
   const inputSelect = document.querySelectorAll("form select");

   for (let i = 0; i < inputSelect.length; i++) {
      inputSelect[i].addEventListener("change", function() {
         if (this.classList.contains("is-invalid")) {
            this.classList.remove("is-invalid");
            isValid(this);
         }
      });
   }

   // Input = File
   const inputFile = document.querySelectorAll("form input[type='file']");

   for (let i = 0; i < inputFile.length; i++) {
      inputFile[i].addEventListener("click", function() {
         if (this.classList.contains("is-invalid")) {
            this.classList.remove("is-invalid");
         }
      });
      inputFile[i].addEventListener("change", function() {
         if (this.value != "") {
            this.addEventListener("focusout", isValid(this));
            document.querySelector(".input-file-label").classList.add("input-file-valid");
         }
         else {
            this.classList.remove("is-valid");
            document.querySelector(".input-file-label").classList.remove("input-file-valid");
            if (this.nextElementSibling.classList.contains("custom-file-label")) {
               this.nextElementSibling.innerHTML += "Choose file";
            }
         }
      });
   }

   // Alternative Scores Functions
   if (window.innerWidth < 768) {
      // sticky();
   }
   if (window.innerWidth > 768) {
      // formScroll();
   }

   window.onresize = function() {
      // sticky();
      // formScroll();
   }

   window.onscroll = function() {
      if (document.body.contains(stickyElement)) {         
         stickyTop();
      }
   }

   // Function to give a sticky behavior for Alternative Details on the Alternative Scores crate page (ver.2).
   const stickyElement = document.querySelector(".sticky-element");

   function stickyTop() {
      const top = stickyElement.offsetTop;
      const windowYOffset = window.pageYOffset;
      
      if ( windowYOffset > top) {
         stickyElement.style.top = "" +top+ "px";
      }
   }

   // Function to give a sticky behavior for Alternative Details on the Alternative Scores crate page (ver.1).
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