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
         }
         if (content) {
            $('#content').removeClass('active');
         }
      } else {
         $('#sidebar').addClass('active');
         $('#content').removeClass('active');
      }
   }
   
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

   // Input = Password
   const inputPassword = document.querySelectorAll("form input[type='password']");

   for (let i = 0; i < inputPassword.length; i++) {
      inputPassword[i].addEventListener("keyup", function() {
         if (this.classList.contains("is-invalid")) {
            this.classList.remove("is-invalid");
         }
         if (this.value == "") {
            this.classList.remove("is-valid");
         }
      });
      inputPassword[i].addEventListener("focusout", function() {
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
         const inputFileLabel = document.querySelector(".input-file-label");

         if (this.value != "") {
            this.addEventListener("focusout", isValid(this));

            if (document.body.contains(inputFileLabel)) {
               inputFileLabel.classList.add("input-file-valid");
            }
         }
         else {
            this.classList.remove("is-valid");
            
            if (document.body.contains(inputFileLabel)) {
               inputFileLabel.classList.remove("input-file-valid");
            }
            if (this.nextElementSibling.classList.contains("custom-file-label")) {
               this.nextElementSibling.innerHTML += "Choose file";
            }
         }
      });
   }

   // Admin Panels functions
   // Show or hide user option
   const userInfo = document.querySelector(".user-info");
   const userOption = document.querySelector(".user-option");
   const userOptionToggle = document.querySelector("#userOptionToggle");

   if (document.body.contains(userInfo)) {
      userOptionToggle.addEventListener("click", showUserOption);
   }

   function showUserOption() {
      userOptionToggle.classList.toggle("active");
      userOption.classList.toggle("show");
   }

   // Logout action
   const logoutLink = document.querySelector("#logoutLink");
   const logoutForm = document.querySelector("#logoutForm");

   if (document.body.contains(logoutLink)) {
      logoutLink.addEventListener("click", function(e) {
         e.preventDefault();
         logoutForm.submit();
      });
   }

   // Show or hide the minimized element
   const showMinimizeElementButton = document.querySelector("#showMinimizeElement");
   const minimzeElement = document.querySelector(".minimize-element");

   if (document.body.contains(minimzeElement)) {
      showMinimizeElementButton.addEventListener("click", displayMinimizedElement);
   }

   function displayMinimizedElement() {
      minimzeElement.classList.toggle("show");

      if (minimzeElement.classList.contains("show")) {
         showMinimizeElementButton.innerText = "Hide";
      }
      else {
         showMinimizeElementButton.innerText = "Show";
      }
   }

   // Confirm to go back to the index page when clicking
   // the confrim button on the cancel modal
   const cancelButton = document.querySelector("#cancelButton");
   const confirmButton = document.querySelector("#confirmButton");

   if (document.body.contains(confirmButton)) {
      confirmButton.addEventListener("click", goToIndexPage);
   }
   
   function goToIndexPage() {
      let indexPageUrl = cancelButton.getAttribute("data-url");

      window.location = indexPageUrl;
   }

   /**
    * blockedKeys for searching:
    * 16 = shift, 17 = ctrl, 18 = alt, 20 = caps lock, 27 = escape
    * 37 = left arrow, 38 = up arrow, 39 = right arrow, 40 = down arrow
    * 144 = numlock
    */
   const blockedKeys = [16, 17, 18, 20, 27, 37, 38, 39, 40, 144];

   // Data Tables Features
   const dataTable = document.querySelector("#dataTable");
   const dataTableSearch = document.querySelector("input[data-name='dataTableSearch']");
   const searchIcon = document.querySelector("#searchIcon");
   const searchLoading = document.querySelector("#searchLoading");
   
   if (document.body.contains(dataTable)) {
      // Url for fetching the data
      let url = "";

      // For live search
      let timeOut = null;
      let keyword = "";

      // For ajax pagination
      let page = "";
      
      // Live search
      if (document.body.contains(dataTableSearch)) {
         dataTableSearch.addEventListener("focus", rotateSearchIcon);

         dataTableSearch.addEventListener("focusout", rotateSearchIcon);

         dataTableSearch.addEventListener("keyup", function(e) {
            keyword = dataTableSearch.value;
            url = dataTableSearch.dataset.url;
            page = 1
            
            if (!blockedKeys.includes(e.which)) {
               clearTimeout(timeOut);
      
               searchIcon.classList.remove("show");
               searchLoading.classList.add("show");
               
               timeOut = setTimeout(function() {
                  reloadDataTable(dataTable, url, page, keyword);
      
                  searchIcon.classList.add("show");
                  searchLoading.classList.remove("show");
               }, 250);
            }
         });
      }

      // Ajax pagination
      dataTable.addEventListener("click", function(e) {
         if (e.target.matches("a.pagination-link")) {
            e.preventDefault();
            
            const paginationLink = e.target;
            page = paginationLink.getAttribute("href").split("page=")[1];
            keyword = dataTableSearch.value;
            url = dataTableSearch.dataset.url;

            reloadDataTable(dataTable, url, page, keyword);
         }
      });
   }

   function reloadDataTable(dataTable, url, page, keyword) {
      $.ajax({
         url: url + "?page=" + page + "&search=" + keyword,
         type: "GET",
         success:function(result) {
            dataTable.innerHTML = "";
            dataTable.innerHTML = result;
         }
      });
   }
   
   function rotateSearchIcon() {
      if (document.activeElement === dataTableSearch) {
         searchIcon.classList.add("rotate")
      }
      else {
         searchIcon.classList.remove("rotate")
      }
   }

   // Delete modal
   const modalDeleteItemName = document.querySelector("#modalDeleteItemName");
   const deleteForm = document.querySelector("#deleteForm");

   if (document.body.contains(dataTable)) {
      dataTable.addEventListener("click", function(e) {
         
         if (e.target.matches(".btn-delete")) {
            e.preventDefault();

            const deleteButton = e.target;
            const deleteUrl = deleteButton.getAttribute("data-url");
            const tableHead = document.querySelector("thead#dataTableHead");
            const itemDesc = tableHead.firstElementChild.children[2];
            const tableRow = deleteButton.parentElement.parentElement.parentElement;
            const itemName = tableRow.children[1].innerText;
            const itemDescVal = tableRow.children[2].innerText;

            if (itemDesc.innerText === "Description") {
               modalDeleteItemName.innerText = "";
               modalDeleteItemName.innerText = itemName + " ( " + itemDescVal + " )";
            }
            else {
               modalDeleteItemName.innerText = "";
               modalDeleteItemName.innerText = itemName;
            }

            deleteForm.setAttribute("action", "");
            deleteForm.setAttribute("action", deleteUrl);
         }
      });
   }

   // Alternatives Functions
   // Function to show selected alternative details in a modal on the Alternative index page.
   if (document.body.contains(dataTable)) {
      dataTable.addEventListener("click", function(e) {
         if (e.target.matches("button[id*='showDetails-']")) {
            const detailsButton = e.target;
            let alternative_id = detailsButton.dataset.id;

            getAlternativeDetails(alternative_id);
         }
      });
   }

   // Alternative Scores Functions

   // Function for showing alternative details on the Alternative Scores create page.
   const alternative = document.querySelector("#alternative_id");
   const alternativeDetails = document.querySelector("#alternativeDetails");

   if (document.body.contains(alternative)) {
      alternative.addEventListener("change", function() {
         const id = alternative.value;
         const loader =
         "<div class=\"d-flex justify-content-center\"><div class=\"spinner-border text-secondary-dy\"></div></div>";

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
   const alternativeScores = document.querySelector("#alternativeScores");

   if (document.body.contains(dataTable)) {
      dataTable.addEventListener("click", function(e) {
         if (e.target.matches("button[id*='showScores-']")) {
            const scoresButton = e.target;
            let id = scoresButton.dataset.id;
            
            getAlternativeScores(id);
         }
      });
   }

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
      if (document.body.contains(navbarMenu)) {
         closeNavbarMenu();
      }
   }

   function closeNavbarMenu() {
      if (navbarMenu.classList.contains("open")) {
         navbarMenu.classList.remove("open");
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
         
         if (event.target.matches("a.pagination-link")) {
            event.preventDefault();
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

      // Get parameters for the live search function
      searchBar.addEventListener("keyup", function(e) {
         if (!blockedKeys.includes(e.which)) {
            let keyword = searchBar.value;
      
            clearTimeout(timeOut);
      
            loader.classList.add("show");
            
            timeOut = setTimeout(function() {
               if (keyword === "") {
                  loader.classList.remove("show");
                  searchBar.classList.remove("remove-border-bottom");
                  searchResults.classList.remove("show");
                  searchResults.innerHTML= "";
               }
               else {
                  let url = 'catalog/search?keyword=' +keyword;
                  
                  liveSearch(url, searchResults);
                  
                  loader.classList.remove("show");
                  searchBar.classList.add("remove-border-bottom");
                  searchResults.classList.add("show");
               }
            }, 250);
         }
      })
   }

   function liveSearch(url, element) {
      $.ajax({
         url: url,
         type: 'GET',
         success:function(result) {
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

   // Elements used by the compare recommendation results functions.
   const compareItemContainer = document.querySelector(".compare-item-container");
   const compareItemContainerToggleOpen = document.querySelector(".compare-item-container-toggle-open");
   const compareItemContainerToggleClose = document.querySelector(".compare-item-container-toggle-close");
   const compareButton = document.querySelector("#compareButton");
   const maxItemToCompare = document.querySelector(".compare-item-max");

   if (document.body.contains(recommendationList)) {
      // The item ids.
      let items = [];
      let isItemsLimitReached;
      let maxItemText = maxItemToCompare.lastElementChild.firstElementChild;

      changeTheRecommendationAlertText();
      maxItemText.innerText = setMaxItemToCompare();

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
         "<div class=\"py-2 d-flex justify-content-center\" style=\"flex: 1 0 0%;\"><div class=\"spinner-border text-secondary-dy\"></div></div>";
         recommendationList.innerHTML = loader;

         getRecommendation(criteria);
      })

      recommendationList.addEventListener("click", function(e) {
         if (e.target.matches("input[type='checkbox'][name='compare']")) {
            let itemId = e.target.getAttribute("value");
            let checkboxes = document.querySelectorAll("input[type='checkbox'][name='compare']");
            let removeButtons = document.querySelectorAll("button.remove-button");
            
            showCompareItemContainer();
            hideCompareItemContainerToggleOpen();
            
            if (e.target.checked == true) {

               items.push(itemId);
               
               getItemDetails(itemId);

               isItemsLimitReached = checkItemsToCompare(items);

               if (isItemsLimitReached == true) {
                  disableCompareCheckboxes(checkboxes);
               }
            }
            else {
               for (let i = 0; i < removeButtons.length; i++) {
                  const removeButton = removeButtons[i];

                  if (itemId == removeButton.previousElementSibling.value) {
                     removeButton.parentElement.remove();
                  }
               }
               
               items = items.filter(function(value) {
                  return value != itemId;
               });

               if (items.length == 0) {
                  hideCompareItemContainer()
                  hideCompareItemContainerToggleOpen();
               }

               isItemsLimitReached = checkItemsToCompare(items);

               if (isItemsLimitReached == false) {
                  enableCompareCheckboxes(checkboxes);
               }
            }
         }
      })

      compareItemContainer.addEventListener("click", function(e) {
         if (e.target.matches("button.remove-button")) {
            let checkboxes = document.querySelectorAll("input[type='checkbox'][name='compare']");
            
            for (let i = 0; i < checkboxes.length; i++) {
               const checkbox = checkboxes[i];

               if (checkbox.value == e.target.previousElementSibling.value) {
                  checkbox.checked = false;

                  items = items.filter(function(value) {
                     return value != checkbox.value;
                  });

                  if (items.length == 0) {
                     hideCompareItemContainer();
                     hideCompareItemContainerToggleOpen();
                  }
               }
            }

            e.target.parentElement.remove();
            
            isItemsLimitReached = checkItemsToCompare(items);

            if (isItemsLimitReached == false) {
               enableCompareCheckboxes(checkboxes);
            }
         }
      })

      compareItemContainerToggleOpen.addEventListener("click", function() {
         showCompareItemContainer();
         hideCompareItemContainerToggleOpen();
      });

      compareItemContainerToggleClose.addEventListener("click", function() {
         hideCompareItemContainer();
         showCompareItemContainerToggleOpen();
      });
      
      compareButton.addEventListener("click", function() {
         if (items.length == 0) {
            alert("Nothing to compare. Please select at least 1 (one) item.");
         }
         else {
            compareRecommendations(items);
         }
      })
   }

   // Close button on the compare recommendation result page.
   const closeButton = document.querySelector("#closeButton");

   if (document.body.contains(closeButton)) {
      closeButton.addEventListener("click", closeRecommendationCompareResultPage);
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

   function changeTheRecommendationAlertText() {
      const alertText = document.querySelector(".alert-secondary-dy").lastElementChild.firstElementChild.firstElementChild;
      if (window.innerWidth > 992) {
         alertText.innerHTML = "on the left side";
      }
      else {
         alertText.innerHTML = "below";
      }
   }

   function setMaxItemToCompare() {
      let windowWidth = window.innerWidth;
      let maxItem = null;
      
      if (windowWidth > 768) { maxItem = 4; }
      if (windowWidth <= 768 && windowWidth > 576) { maxItem = 3; }
      if (windowWidth <= 576) { maxItem = 2; }

      return maxItem;
   }

   function compareRecommendations(items) {
      window.open("/recommendation/compare?items=" + items);
   }

   function closeRecommendationCompareResultPage() {
      window.close();
   }

   function checkItemsToCompare(items) {
      let itemsCount = items.length;
      let maxItems = setMaxItemToCompare();
      let limitReached;

      itemsCount < maxItems ? limitReached = false : limitReached = true;
      
      return limitReached;
   }

   function disableCompareCheckboxes(checkboxes) {
      for (let i = 0; i < checkboxes.length; i++) {
         const checkbox = checkboxes[i];

         if (checkbox.checked == false) {
            checkbox.disabled = true;
            checkbox.parentElement.parentElement.classList.add("disable");
         }
      }
   }

   function enableCompareCheckboxes(checkboxes) {
      for (let i = 0; i < checkboxes.length; i++) {
         const checkbox = checkboxes[i];

         if (checkbox.disabled == true) {
            checkbox.disabled = false;
            checkbox.parentElement.parentElement.classList.remove("disable");
         }
      }
   }

   function getItemDetails(itemId) {
      $.ajax({
         url: '/compare/item-details/' + itemId,
         type: 'GET',
         success:function(response) {
            const compareItemList = document.querySelector(".compare-item-list");

            const compareItem = document.createElement("DIV");
            compareItem.className = "compare-item";

            const itemId = document.createElement("INPUT");
            itemId.setAttribute("value", response.id);
            itemId.setAttribute("type", "hidden");

            const itemName = document.createElement("P");
            itemName.innerText = response.name;

            const itemImage = document.createElement("IMG")
            itemImage.setAttribute("src", "/images/alternatives/"+ response.image +"")

            const removeButton = document.createElement("BUTTON");
            removeButton.innerText = "Remove";
            removeButton.className = "btn btn-outline-danger remove-button";

            compareItem.appendChild(itemImage);
            compareItem.appendChild(itemName);
            compareItem.appendChild(itemId);
            compareItem.appendChild(removeButton);
            compareItemList.appendChild(compareItem);
         }
      });
   }

   function showCompareItemContainer() {
      compareItemContainer.classList.add("show");
   }

   function hideCompareItemContainer() {
      compareItemContainer.classList.remove("show");
   }

   function showCompareItemContainerToggleOpen() {
      compareItemContainerToggleOpen.classList.add("show");
   }

   function hideCompareItemContainerToggleOpen() {
      compareItemContainerToggleOpen.classList.remove("show");
   }

   // Compare Page
   const containerCompare = document.querySelector(".container-compare");
   const compareSearchbars = document.querySelectorAll(".compare-searchbar");
   const comparedItemsWrapper = document.querySelector(".compared-items-wrapper");
   const specsWrapper = document.querySelector(".specs-wrapper");
   const compareLoading =
   "<div style=\"width: 100%; display: flex; justify-content: center; align-items: center; padding: 1rem 0px;\"><div class=\"spinner-border text-secondary-dy\"></div></div>";

   function setItemId(el, param) {
      let itemId = "";

      for (let i = 0; i < el.length; i++) {
         if (el[i].getAttribute("name") === param) {
            itemId = el[i].getAttribute("data-item-id");
            break;
         }
      }
      return itemId;
   }

   function changeMaxLaptopToCompare() {
      const compareHeader = document.querySelector(".compare-header");
      if (document.body.contains(compareHeader)) {
         const maxLaptop = compareHeader.firstElementChild.firstElementChild.nextElementSibling;
   
         if (window.innerWidth > 768) { maxLaptop.innerText = "four" }
         if (window.innerWidth <= 768 && window.innerWidth > 576) { maxLaptop.innerText = "three" }
         if (window.innerWidth <= 576) { maxLaptop.innerText = "two"; }
      }
   }

   function collapseComparedItemsWrapper() {
      const navbar = document.querySelector("nav.public-navbar");

      if (document.body.contains(comparedItemsWrapper)) {
         if (window.scrollY > 100) {
            navbar.classList.add("hide");
            comparedItemsWrapper.classList.add("collapsed");
         }
         else {
            navbar.classList.remove("hide");
            comparedItemsWrapper.classList.remove("collapsed");
         }
      }
   }
   
   if (document.body.contains(containerCompare)) {
      let timeOut = null;
      let firstItem = "";
      let secondItem = "";
      let thirdItem = "";
      let fourthItem = "";
      
      changeMaxLaptopToCompare();
      collapseComparedItemsWrapper();

      firstItem = setItemId(compareSearchbars, "firstCompareItem");
      secondItem = setItemId(compareSearchbars, "secondCompareItem");
      thirdItem = setItemId(compareSearchbars, "thirdCompareItem");
      fourthItem = setItemId(compareSearchbars, "fourthCompareItem");

      compareSearchbars.forEach(function(compareSearchbar) {
         const loading = compareSearchbar.previousElementSibling;
         const compareSearchResults = compareSearchbar.nextElementSibling.firstElementChild;
         
         // Live search for item(s) to compare
         compareSearchbar.addEventListener("keyup", function(e) {
            if (!blockedKeys.includes(e.which)) {
               let keyword = compareSearchbar.value;
               
               if (keyword.length < 3) {
                  loading.classList.remove("show");
               }
               if (keyword.length >= 3) {
                  clearTimeout(timeOut);
                  
                  loading.classList.add("show");
                  
                  timeOut = setTimeout(function() {
                     let url = "compare/search?keyword=" + keyword
   
                     liveSearch(url, compareSearchResults);
      
                     loading.classList.remove("show");
                     compareSearchbar.classList.add("remove-border-bottom");
                     compareSearchResults.classList.add("show");
                  }, 250);
               }
               if (keyword === "") {
                  loading.classList.remove("show");
                  compareSearchbar.classList.remove("remove-border-bottom");
                  compareSearchResults.classList.remove("show");
                  compareSearchResults.innerHTML = "";
                  compareSearchbar.setAttribute("data-item-id", "");
                  compareSearchbar.setAttribute("value", "");
               }
            }
         });

         // Get the item(s) id from clicking on the search results
         compareSearchResults.addEventListener("click", function(element) {
            if (element.target.classList.contains("search-result") && element.target.nodeName == "DIV") {
               compareSearchbar.value = element.target.children[1].innerHTML;
               compareSearchbar.setAttribute("data-item-id", element.target.lastElementChild.getAttribute("value"));
               compareSearchbar.classList.remove("remove-border-bottom");
               compareSearchResults.classList.remove("show");
               compareSearchResults.innerHTML = "";
            }
            if (element.target.nodeName == "P") {
               compareSearchbar.value = element.target.innerHTML;
               compareSearchbar.setAttribute("data-item-id", element.target.nextElementSibling.getAttribute("value"));
               compareSearchbar.classList.remove("remove-border-bottom");
               compareSearchResults.classList.remove("show");
               compareSearchResults.innerHTML = "";
            }
            
            firstItem = setItemId(compareSearchbars, "firstCompareItem");
            secondItem = setItemId(compareSearchbars, "secondCompareItem");
            thirdItem = setItemId(compareSearchbars, "thirdCompareItem");
            fourthItem = setItemId(compareSearchbars, "fourthCompareItem");

            comparedItemsWrapper.innerHTML = compareLoading;
            specsWrapper.innerHTML = compareLoading;

            // Compare the items using ajax
            $.ajax({
               url: '/compare?firstItemId=' + firstItem + '&secondItemId=' + secondItem +
                     '&thirdItemId=' + thirdItem + '&fourthItemId=' + fourthItem,
               type: 'GET',
               success:function(results) {
                  comparedItemsWrapper.innerHTML = results.comparedItems;
                  specsWrapper.innerHTML = results.comparedItemsSpecs;
               }
            });
         });
      });
   }

   // Window Events
   window.onresize = function () {
      if (document.body.contains(containerCompare)) {
         changeMaxLaptopToCompare();
      }
      if (document.body.contains(recommendationList)) {
         let maxItemText = maxItemToCompare.lastElementChild.firstElementChild;

         changeTheRecommendationAlertText();
         maxItemText.innerText = setMaxItemToCompare();
      }
   }

   window.onscroll = function() {
      if (document.body.contains(containerCompare)) {
         collapseComparedItemsWrapper();
      }
   }
});