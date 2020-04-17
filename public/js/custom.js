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
   
   // Check if the browser is online or not.
   const onlineStatus = navigator.onLine;
   
   if (onlineStatus === true ) {
      // custom scrollbar
      // $(".table-responsive").mCustomScrollbar({
      //    theme: "dark-2",
      //    axis: "x"
      // });
   
      $("#sidebar").mCustomScrollbar({
         theme: "minimal-dark",
         axis: "y"
      });
   }

   // Form Functions
   // Custom input file label
   if (document.body.contains(document.querySelector(".custom-file-input"))) {
      document.querySelector(".custom-file-input").addEventListener("change", function() {
         const fileName = this.value.split("\\").pop();
         if (this.nextElementSibling.classList.contains("custom-file-label")) {
            this.nextElementSibling.classList.add("selected");
            this.nextElementSibling.innerHTML = fileName;
         }
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

   // Alternatives Functions
   // Function to show selected alternative details in a modal on the Alternative index page.
   const detailsButtons = document.querySelectorAll("button[id*='showDetails-']");

   for  (let i = 0; i < detailsButtons.length; i++) {
      const alternative_id = detailsButtons[i].getAttribute("data-id");
      detailsButtons[i].addEventListener("click", function() {
         getAlternativeDetails(alternative_id);
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

   if (document.body.contains(stickyElement)) {

      // const top = stickyElement.offsetTop;
      // const stop = stickyElement.offsetTop - top;
      
      function stickyTop() {
         // const windowYOffset = window.pageYOffset;
         stickyElement.style.top = "64px";
         // if (windowYOffset >= stop) {
         //    stickyElement.style.top = "" +top+ "px";
         // }
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

   // Function for showing alternative details on the Alternative Scores create page.
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
         url: '/admin/alternatives/' + alternative_id,
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

   // Function to show selected alternative score details on the Alternative Score index page.
   const scoresButtons = document.querySelectorAll("button[id*='showScores-']");
   const alternativeScores = document.querySelector("#alternativeScores");

   scoresButtons.forEach(scoresButton => {
      const id = scoresButton.getAttribute("data-id");
      scoresButton.addEventListener("click", function() {
         getAlternativeScores(id);
      });
   })

   function getAlternativeScores(id) {
      const alternativeScoreId = id;

      $.ajax({
         url: '/admin/alternativescores/' + alternativeScoreId,
         type: 'GET',
         dataType: 'html',
         success: function(alternativeScoreData) {
            if (alternativeScoreData == "no data") {
               const noData = "<h4 class=\"text-center\">Data not found.</h4>";

               alternativeScores.innerHTML = "";
               alternativeScores.innerHTML = noData;
            }
            else {
               alternativeScores.innerHTML = "";
               alternativeScores.innerHTML = alternativeScoreData;
            }
         }
      });
   }

   // Criterion Scores Functions
   // Function to show a modal for displaying the list of scores for a specific criterion.
   const scoresListButtons = document.querySelectorAll("button[id*='showScoresList']");
   const scoresList = document.querySelector("#scoresList");

   scoresListButtons.forEach(scoresListButton => {
      scoresListButton.addEventListener("click", function() {
         const criterionId = scoresListButton.getAttribute("data-id");

         getAllScores(criterionId);
      });
   });

   function getAllScores(id) {
      const criterionId = id;

      $.ajax({
         url: '/admin/criterionscores/criterion/' + criterionId,
         type: 'GET',
         dataType: 'html',
         success: function(allScores) {
            scoresList.innerHTML = "";
            scoresList.innerHTML = allScores;
         }
      });
   }

   // Public Frontend Functions
   // Index page
   // Function to set the text alignment of an element inside the element with 'jumbotron-dy'class.
   const jumbotronDy = document.querySelectorAll(".jumbotron-dy");
   
   setTextAlignment(jumbotronDy);

   window.onresize = function () {
      setTextAlignment(jumbotronDy);
   }
   
   function setTextAlignment(el) {
      for (let i = 0; i < el.length; i++) {
         if (window.innerWidth < 768) {
            for (let j = 0; j < el[i].children.length; j++) {
               if (el[i].children[j].classList.contains("jumbotron-body-dy")) {
                  el[i].children[j].classList.add("text-center");
                  break;
               }
            }
         }
         else {
            for (let j = 0; j < el[i].children.length; j++) {
               if (el[i].children[j].classList.contains("jumbotron-body-dy")) {
                  el[i].children[j].classList.remove("text-center");
                  break;
               }
            }
         }
      }
   }
   
   // Catalog page
   // Live filter function
   const filterWrapper = document.querySelector(".filter-wrapper");
   const catalogItemList = document.querySelector("#catalogItemList");
   let brands = [];
   let rams = [];
   let processors = [];
   let gpus = [];
   let storageTypes = [];
   let page = "";
   
   if (document.body.contains(filterWrapper)) {
      const filtersInput = document.querySelectorAll(".filter input[type='checkbox']");
      // let filters = {};

      // Get parameters for live filter
      filtersInput.forEach(filterInput => {
         filterInput.addEventListener("click", function () {
            const filterGroup = filterInput.getAttribute("name");
            const filter = filterInput.getAttribute("value");

            if (filterInput.checked == true) {
               if (filterGroup == "brand") {
                  brands.push(filter);
                  // filters.brand = brands;
               }
               if (filterGroup == "ram") {
                  rams.push(filter);
                  // filters.ram = rams;
               }
               if (filterGroup == "processor") {
                  processors.push(filter);
               }
               if (filterGroup == "gpu") {
                  gpus.push(filter);
               }
               if (filterGroup == "storage-type") {
                  storageTypes.push(filter);
               }
            }
            else {
               if (filterGroup == "brand") {
                  brands = brands.filter(function(value) {
                     return value != filter;
                  });
                  // filters.brand = brands;
               }
               if (filterGroup == "ram") {
                  rams = rams.filter(function(value) {
                     return value != filter;
                  });
                  // filters.ram = rams;
               }
               if (filterGroup == "processor") {
                  processors = processors.filter(function(value) {
                     return value != filter;
                  });
               }
               if (filterGroup == "gpu") {
                  gpus = gpus.filter(function(value) {
                     return value != filter;
                  });
               }
               if (filterGroup == "storage-type") {
                  storageTypes = storageTypes.filter(function(value) {
                     return value != filter;
                  });
               }
            }

            page = 1;
            const loader = "<div class=\"loader-wrapper\"><div class=\"spinner-border text-secondary-dy loader\"></div></div>";
            catalogItemList.innerHTML = loader;

            reloadCatalog(page, brands, rams, processors, gpus, storageTypes);
         });
      });

      // Ajax pagination
      catalogItemList.addEventListener("click", function(event) {
         event.preventDefault();
         if (event.target.matches("a.pagination-link")) {
            page = event.target.getAttribute("href").split("page=")[1];
            // console.log(page);
            const loader = "<div class=\"loader-wrapper\"><div class=\"spinner-border text-secondary-dy loader\"></div></div>";
            catalogItemList.innerHTML = loader;

            reloadCatalog(page, brands, rams, processors, gpus, storageTypes);
         }
      });

      // Live filter init
      function reloadCatalog(page, brands, rams, processors, gpus, storageTypes) {
         $.ajax({
            url: 'catalog/filter?page='+page+'&brand='+brands+'&ram='+rams+'&processor='+processors+'&gpu='+gpus+'&storage-type='+storageTypes,
            // data: filters,
            type: 'GET',
            success:function(response) {
               catalogItemList.innerHTML = "";
               catalogItemList.innerHTML = response;
               // console.log(this.url);
            }
         });
      }

      // Live search function
      const searchBar = document.querySelector("#searchbar");
      const searchResults = document.querySelector("#searchResults");
      
      // Live search init
      searchBar.addEventListener("keyup", function() {
         let keyword = searchBar.value;

         searchBar.classList.add("remove-border-bottom");
         searchResults.classList.add("show");
         
         if (searchBar.value == "") {
            searchBar.classList.remove("remove-border-bottom");
            searchResults.classList.remove("show");
         }

         const loader = "<div class=\"py-2 d-flex justify-content-center\"><div class=\"spinner-border spinner-border-sm text-secondary-dy\"></div></div>";
         searchResults.innerHTML = loader;

         $.ajax({
            url: 'catalog/search?keyword=' +keyword,
            type: 'GET',
            success:function(result) {
               searchResults.innerHTML = "";
               searchResults.innerHTML = result;
            }
         });
      })
   }

   // Recommendation Page
   // Run the SAW method
   const recommendationList = document.querySelector("#recommendationList");

   if (document.body.contains(recommendationList)) {
      const priceInput = document.querySelector("select[name='price']");
      const processorClassInput = document.querySelector("select[name='processorClass']");   
      const ramInput = document.querySelector("select[name='ram']");   
      const gpuClassInput = document.querySelector("select[name='gpuClass']");   
      const storageTypeInput = document.querySelector("select[name='storageType']");   
      const calculateButton = document.querySelector("#calculateButton");
   
      calculateButton.addEventListener("click", function() {
         // Make criteria object for storing chosen criteria by the user, then use it in tha ajax call.
         let criteria = {};
         
         // Check if the input is the type of integer.
         // If yes, add it as the criteria object property.
         // If no, remove it from properties of criteria object.
         Number.isInteger(parseInt(priceInput.value)) ? criteria.price = priceInput.value : delete criteria.price;
         Number.isInteger(parseInt(processorClassInput.value)) ? criteria.processorClass = processorClassInput.value : delete criteria.processorClass;
         Number.isInteger(parseInt(ramInput.value)) ? criteria.ram = ramInput.value : delete criteria.ram;
         Number.isInteger(parseInt(gpuClassInput.value)) ? criteria.gpuClass = gpuClassInput.value : delete criteria.gpuClass;
         Number.isInteger(parseInt(storageTypeInput.value)) ? criteria.storageType = storageTypeInput.value : delete criteria.storageTyp;

         const loader = "<div class=\"py-2 d-flex justify-content-center\"><div class=\"spinner-border text-secondary-dy\"></div></div>";
         recommendationList.innerHTML = loader;

         $.ajax({
            url: 'recommendation/sawmethod',
            data: criteria,
            type: 'GET',
            success:function(data) {
               window.scrollTo(top);
               recommendationList.innerHTML = "";
               recommendationList.innerHTML = data;
            }
         })
      })
   }
});