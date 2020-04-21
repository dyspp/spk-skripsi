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
   }

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
         }
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
   window.onscroll = function() {
      if (document.body.contains(stickyElement)) {         
         stickyTop();
      }
   }

   // Function to give a sticky behavior for Alternative Details on the Alternative Scores crate page (ver.2).
   const stickyElement = document.querySelector(".sticky-element");

   function stickyTop() {
      stickyElement.style.top = "64px";
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
   // Navbar
   const navbarToggle = document.querySelector(".navbar-toggle");
   const navbarMenu = document.querySelector(".public-navbar .menu");
   const navbarBackdrop = document.querySelector(".public-navbar .backdrop");

   if (document.body.contains(navbarToggle)) {
      navbarToggle.addEventListener("click", function() {
         navbarMenu.classList.toggle("open");
      });

      navbarBackdrop.addEventListener("click", function() {
         navbarMenu.classList.toggle("open");
      });
   }
   
   if (window.innerWidth > 576) {
      closeNavbarMenu();
   }

   function closeNavbarMenu() {
      if (navbarMenu.classList.contains("open")) {
         navbarMenu.classList.remove("open");
      }
   }

   // Index page
   // Control the text alignment of an element.
   const jumbotronDy = document.querySelectorAll(".jumbotron-dy");
   
   setTextAlignment(jumbotronDy);

   window.onresize = function () {
      setTextAlignment(jumbotronDy);
   }
   
   function setTextAlignment(el) {
      for (let i = 0; i < el.length; i++) {
         if (window.innerWidth < 992) {
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
   const filterWrapper = document.querySelector(".filter-wrapper");
   const catalogItemList = document.querySelector("#catalogItemList");

   if (document.body.contains(filterWrapper)) {

      // Preparation for live filter and ajax pagination
      let brands = [];
      let rams = [];
      let processors = [];
      let gpus = [];
      let storageTypes = [];
      let page = "";
      let loader = "";
      let url = "";

      // Live filter
      const filtersInput = document.querySelectorAll(".filter input[type='checkbox']");
      
      filtersInput.forEach(filterInput => {
         const filterGroup = filterInput.getAttribute("name");
         const filter = filterInput.getAttribute("value");
         
         filterInput.addEventListener("click", function () {
            if (filterInput.checked == true) {
               if (filterGroup == "brand") {brands.push(filter);}
               if (filterGroup == "ram") {rams.push(filter);}
               if (filterGroup == "processor") {processors.push(filter);}
               if (filterGroup == "gpu") {gpus.push(filter);}
               if (filterGroup == "storage-type") {storageTypes.push(filter);}
            }
            else {
               if (filterGroup == "brand") {
                  brands = brands.filter(function(value) {
                     return value != filter;
                  });
               }
               if (filterGroup == "ram") {
                  rams = rams.filter(function(value) {
                     return value != filter;
                  });
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
            loader =
            "<div class=\"loader-wrapper\"><div class=\"spinner-border text-secondary-dy loader\"></div></div>";
            catalogItemList.innerHTML = loader;

            // url for live filter
            url = 'catalog/filter?page='+page+'&brand='+brands+'&ram='+rams+
            '&processor='+processors+'&gpu='+gpus+'&storage-type='+storageTypes;

            reloadData(url, catalogItemList);
         });
      })
      
      // Ajax pagination
      catalogItemList.addEventListener("click", function(event) {
         event.preventDefault();

         if (event.target.matches("a.pagination-link")) {
            page = event.target.getAttribute("href").split("page=")[1];
            loader =
            "<div class=\"loader-wrapper\"><div class=\"spinner-border text-secondary-dy loader\"></div></div>";
            catalogItemList.innerHTML = loader;

            // url for live filter
            url = 'catalog/filter?page='+page+'&brand='+brands+'&ram='+rams+
            '&processor='+processors+'&gpu='+gpus+'&storage-type='+storageTypes;

            reloadData(url, catalogItemList);
         }
      })
   }

   // For live filter, ajax pagination
   function reloadData(url, element) {
      $.ajax({
         url: url,
         type: 'GET',
         success:function(data) {
            element.innerHTML = "";
            element.innerHTML = data;
         }
      });
   }
   
   // Live search function preparation
   const searchBar = document.querySelector("#searchbar");
   const searchResults = document.querySelector("#searchResults");
   const loader = document.querySelector(".spinner-border");
   
   if (document.body.contains(searchBar)) {
      let timeOut = null;

      // Get parameters for live search function
      searchBar.addEventListener("keyup", function() {
         let keyword = searchBar.value;
   
         clearTimeout(timeOut);
   
         loader.classList.add("show");
   
         timeOut = setTimeout(function() {
            liveSearch(keyword, searchResults);
         }, 250);
      })
   }

   function liveSearch(keyword, element) {
      $.ajax({
         url: 'catalog/search?keyword=' +keyword,
         type: 'GET',
         success:function(result) {
            loader.classList.remove("show");

            if (searchBar.value == "") {
               searchBar.classList.remove("remove-border-bottom");
               searchResults.classList.remove("show");
            }
            else {
               searchBar.classList.add("remove-border-bottom");
               searchResults.classList.add("show");
            }

            element.innerHTML = "";
            element.innerHTML = result;
         }
      });
   }

   // Recommendation Page
   // get recommendation function preparation
   const recommendationList = document.querySelector("#recommendationList");
   const priceInput = document.querySelector("select[name='price']");
   const processorClassInput = document.querySelector("select[name='processorClass']");   
   const ramInput = document.querySelector("select[name='ram']");   
   const gpuClassInput = document.querySelector("select[name='gpuClass']");   
   const storageTypeInput = document.querySelector("select[name='storageType']");   
   const calculateButton = document.querySelector("#calculateButton");

   if (document.body.contains(recommendationList)) {
      calculateButton.addEventListener("click", function() {
         let loader = "";

         // Make criteria object for storing chosen criteria by the user,
         // then use it as a parameter for get recommendation function.
         let criteria = {};
         
         // Check if the input is the type of integer.
         // If yes, add it as the criteria object property.
         // If no, remove it from properties of criteria object.
         Number.isInteger(parseInt(priceInput.value)) ?
         criteria.price = priceInput.value : delete criteria.price;
         Number.isInteger(parseInt(processorClassInput.value)) ?
         criteria.processorClass = processorClassInput.value : delete criteria.processorClass;
         Number.isInteger(parseInt(ramInput.value)) ?
         criteria.ram = ramInput.value : delete criteria.ram;
         Number.isInteger(parseInt(gpuClassInput.value)) ?
         criteria.gpuClass = gpuClassInput.value : delete criteria.gpuClass;
         Number.isInteger(parseInt(storageTypeInput.value)) ?
         criteria.storageType = storageTypeInput.value : delete criteria.storageTyp;

         loader =
         "<div class=\"py-2 d-flex justify-content-center\"><div class=\"spinner-border text-secondary-dy\"></div></div>";
         recommendationList.innerHTML = loader;

         getRecommendation(criteria);
      })

   }

   function getRecommendation(data) {
      $.ajax({
         url: 'recommendation/sawmethod',
         data: data,
         type: 'GET',
         success:function(recommendation) {
            window.scrollTo(top);
            recommendationList.innerHTML = "";
            recommendationList.innerHTML = recommendation;
         }
      });
   }
});