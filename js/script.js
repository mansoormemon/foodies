"use strict";

$(document).ready(() => {
  $("#signUpAgreementChk").change(() => {
    $("#signUpSubmit").prop(
      "disabled",
      !$("#signUpAgreementChk").prop("checked")
    );
  });

  $("#signUpShowPassword").click(() => {
    var signUpPassword = $("#signUpPassword");
    signUpPassword.attr(
      "type",
      signUpPassword.attr("type") == "password" ? "text" : "password"
    );
    $("#signUpEye").toggleClass("d-none");
    $("#signUpEyeSlash").toggleClass("d-none");
  });

  $("#signInShowPassword").click(() => {
    var signInPassword = $("#signInPassword");
    signInPassword.attr(
      "type",
      signInPassword.attr("type") == "password" ? "text" : "password"
    );
    $("#signInEye").toggleClass("d-none");
    $("#signInEyeSlash").toggleClass("d-none");
  });

  var CART_ITEMS = {};
  var CART_ITEMS_STR = JSON.stringify(CART_ITEMS);
  localStorage.setItem("CART_ITEMS", CART_ITEMS_STR);

  handleSearch();

  // Fetch all the forms we want to apply custom Bootstrap validation styles.
  var forms = document.querySelectorAll(".needs-validation");

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms).forEach(function (form) {
    form.addEventListener(
      "submit",
      function (event) {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }

        form.classList.add("was-validated");
      },
      false
    );
  });
});

function fmt_label(label, value) {
  return "<p><b>" + label + "</b>: " + value + "</p>";
}

function link_food_item(id) {
  return '<a href="www/fooditems.php#' + id + '">See More</a>';
}

function link_restaurant(id) {
  return '<a href="www/restaurant.php#' + id + '">See More</a>';
}

function food_items_formatter(food_items) {
  let out = '<div class="container p-3">';
  food_items.forEach((element) => {
    out += '<div class="card p-2"><br>';
    out += fmt_label("ID", element.id);
    out += fmt_label("Name", element.name);
    out += fmt_label("Price", "Rs. " + element.price);
    out += fmt_label("Description", element.desc + ".");
    out += link_food_item(element.id);
    out += "</div><br>";
  });
  out += "</div>";
  return out;
}

function restaurants_formatter(restaurants) {
  let out = '<div class="container p-3">';
  restaurants.forEach((element) => {
    out += '<div class="card p-2"><br>';
    out += fmt_label("ID", element.id);
    out += fmt_label("Name", element.name);
    out += fmt_label("Address", element.address);
    out += link_restaurant(element.id);
    out += "</div><br>";
  });
  out += "</div>";
  return out;
}

function handleSearch() {
  let searchQuery = document.getElementById("indexPageFilter");
  if (searchQuery == null) {
    return;
  }
  searchQuery = searchQuery.value.trim();
  let filterBasedOn = document.getElementById("filterBasedOn").value;

  let matches = document.getElementById("matches");
  let filterDump = document.getElementById("filterDump");

  var matchCount = 0;
  // Make an AJAX request
  var xhr = new XMLHttpRequest();
  xhr.open(
    "GET",
    "./www/search.php?query=" +
      encodeURIComponent(searchQuery) +
      "&basedOn=" +
      encodeURIComponent(filterBasedOn),
    true
  );
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      // Update the elements with the fetched data
      var response = xhr.responseText;
      if (filterBasedOn == "food_items") {
        response = JSON.parse(response);
        matchCount = response.length;
        if (matchCount == 0) {
          response = "No matches found.";
        } else {
          response = food_items_formatter(response);
        }
      } else if (filterBasedOn == "restaurants") {
        response = JSON.parse(response);
        matchCount = response.length;
        if (matchCount == 0) {
          response = "No matches found.";
        } else {
          response = restaurants_formatter(response);
        }
      } else {
        response = "none";
      }
      if (matchCount > 0 && searchQuery != "") {
        matches.innerHTML = "<p>Matches: " + matchCount + "</p>";
      } else {
        matches.innerHTML = "";
      }
      filterDump.innerHTML = response;
    }
  };
  xhr.send();
}

//For the display of card details
function handleDropdownChange() {
  var dropdown = document.getElementById("paymentMethod");
  var selectedOption = dropdown.value;
  var togglebox = document.getElementsByClassName("togglebox");

  var creditCardNumber = document.getElementById("creditCardNumber");
  var creditCardDate = document.getElementById("creditCardDate");
  var creditCardCode = document.getElementById("creditCardCode");

  if (selectedOption == "Card") {
    togglebox[0].style.display = "block";

    creditCardNumber.required = true;
    creditCardDate.required = true;
    creditCardCode.required = true;
  } else {
    togglebox[0].style.display = "none";

    creditCardNumber.required = false;
    creditCardDate.required = false;
    creditCardCode.required = false;
  }
}

function CardMaking() {
  var cardContainer = document.createElement("div");
  cardContainer.className = "card";

  var row = document.createElement("div");
  row.className = "row g-0";

  var colImage = document.createElement("div");
  colImage.className = "col-md-4";

  var cardImage = document.createElement("img");
  cardImage.src = "your-image.jpg";
  cardImage.className = "card-img";
  cardImage.alt = "Image";

  colImage.appendChild(cardImage);

  var colBody = document.createElement("div");
  colBody.className = "col-md-8";

  var cardBody = document.createElement("div");
  cardBody.className = "card-body d-flex flex-column align-items-end";

  var cardTitle = document.createElement("h5");
  cardTitle.className = "card-title upside-down-text";
  cardTitle.innerText = "Food Item";

  var cardDescription = document.createElement("p");
  cardDescription.className = "card-text upside-down-text";
  cardDescription.innerText = "Price";

  cardBody.appendChild(cardTitle);
  cardBody.appendChild(cardDescription);

  colBody.appendChild(cardBody);

  row.appendChild(colImage);
  row.appendChild(colBody);
  cardContainer.appendChild(row);
  return cardContainer;
}

function CartAdd(food_item_id) {
  // var j1 = document.getElementsByClassName("c1");
  // j1[0].appendChild(CardMaking());

  var CART_ITEMS_STR = localStorage.getItem('CART_ITEMS');
  CART_ITEMS = JSON.parse(CART_ITEMS_STR);
  alert(CART_ITEMS);
}

function Clear() {
  var j1 = document.getElementsByClassName("c1");
  j1[0].innerHTML = " ";
}
