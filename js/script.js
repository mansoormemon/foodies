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
    return "<p><b>" + label +"</b>: " + value + "</p>";
}

function food_items_formatter(food_items) {
    let out = "<div class=\"container p-3\">";
    food_items.forEach(element => {
        out += "<div class=\"card p-2\"><br>";
        out += fmt_label("ID", element.id);
        out += fmt_label("Name", element.name);
        out += fmt_label("Price", "Rs. " + element.price);
        out += fmt_label("Description", element.desc + ".");
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

const Restaurants = [
  "Karachi Biryani House",
  "Lahore Grill",
  "Islamabad Spice",
  "Peshawari Delights",
  "Rawalpindi Tandoor",
  "Hyderabad Sweets ",
  "Quetta BBQ Corner",
  "Multan Dera",
  "Faisalabad Lahori ",
  "Gujranwala Spice",
  "Sialkot Kebab House",
  "Sargodha Curry House",
  "Gujrat Food Paradise",
  "Bahawalpur Naan Shop",
  "Larkana Kabab Corner",
  "Sukkur Dumpling House",
  "Abbottabad Tandoori Hut",
  "Peshawar Chapli Kebab",
  "Swat Valley Bistro",
  "Gilgit Karakoram Cafe",
  "Chitral Chai House",
  "Hunza Valley View",
  "Rawalakot Kashmiri",
  "Muzaffarabad Food",
  "Mirpur Dum Biryani",
  "Loralai Sajji House",
  "Quetta Shami Kabab",
  "Skardu Momos Corner",
  "Khuzdar Tikkah Inn",
  "Gwadar Seafood Shack",
];

const fastFoodItems = [
  "Cheeseburger",
  "Chicken Nuggets",
  "French Fries",
  "Pizza",
  "Hot Dog",
  "Taco",
  "Burrito",
  "Fried Chicken",
  "Chicken Sandwich",
  "Fish and Chips",
  "Milkshake",
  "Soft Drink",
  "Onion Rings",
  "Nachos",
  "Sushi",
  "Donut",
  "Ice Cream",
  "Pancakes",
  "Waffles",
  "Sub Sandwich",
  "Chicken Wings",
  "Gyros",
  "Falafel",
  "McDonald's Big Mac",
  "KFC Original Recipe ",
  "Wendy's Baconator",
  "Taco Bell Crunchwrap",
  "Arby's Roast Beef ",
  "In-N-Out Double-Double",
  "Chick-fil-A Chicken ",
];

// m1.addEventListener("change", function () {
//     if (m1.options[m1.selectedIndex].text == "Food items") {
//         var d1 = document.getElementsByClassName("modal-body");
//         for (let i = 0; i < fastFoodItems.length; i++) {
//             var d2 = document.createElement('div');
//             d2.innerHTML = fastFoodItems[i];
//             var text = fastFoodItems[i].offsetWidth;
//             d2.style.cssText = "background-color:#e8e5df;height: 31px;border-radius: 30px;text-align: center;font-family: 'Inter',sans-serif";
//             d2.style.width = text + "px";
//             d1[0].appendChild(d2);
//         }
//     }
// })

// function Chip(Array) {
//     var d1 = document.getElementsByClassName('modal-body');
//     var rows = Math.round((Array.length) / 5);
//     var count = 0;
//     for (let i = 0; i <= rows; i++) {
//         var d2 = document.createElement('div');
//         d2.classList.add("row");
//         for (let i = 0; i <= 4; i++) {
//             var d3 = document.createElement('div');
//             d3.innerHTML = Array[count];
//             var text = Array[count].offsetWidth;
//             d3.style.cssText = "background-color:#e8e5df;height: 31px;border-radius: 30px;text-align: center;font-family: 'Inter',sans-serif;margin-left:2vw;margin-bottom:2.5vh";
//             d3.style.width = text + "px";
//             d3.classList.add("col-2");
//             d2.appendChild(d3);
//             count++;
//             d1[0].appendChild(d2);

//         }
//     }
// }

// m1.addEventListener("change", function () {
//     var h1 = document.getElementsByClassName('modal-body');
//     if (m1.options[m1.selectedIndex].text == "Food items") {
//         h1[0].innerHTML = " ";
//         Chip(fastFoodItems);

//     } else if (m1.options[m1.selectedIndex].text == "Restaurants") {
//         h1[0].innerHTML = " ";
//         Chip(Restaurants);
//     }
// })

// For Restaurant page

function Restaurant() {
  var m1 = document.getElementById("container");
  var c1 = document.createElement("div"); //Setting up structure of a bootstrap card
  var c2 = document.createElement("img");
  var c3 = document.createElement("div");
  var c4 = document.createElement("h5");
  var c5 = document.createElement("p");
  var c6 = document.createElement("a");
  var c4 = document.createElement("h5");

  c1.classList.add("card", "col-3");
  c1.style.width = "18rem";

  c2.classList.add("card-img-top");
  c2.setAttribute("src", " ");
  c2.setAttribute("alt", " ");

  c3.classList.add("card-body");

  c4.classList.add("card-title");

  c5.classList.add("card-text");

  c6.classList.add("btn", "btn-primary");

  c3.appendChild(c4);
  c3.appendChild(c5);
  c3.appendChild(c6);

  c1.append(c2);
  c1.append(c3);
  m1.appendChild(c1);
  return m1;
}

var n_R = 20;
//number of restaurant to be shown on restaurant page

var rest_rows = n_R / 4; //no of rows that would be formed
//mumber of restaurants should be in multiple of 4!!!!

//one row will consist of 4 restaurants

for (let i = 1; i <= rest_rows; i++) {
  var n1 = document.createElement("div");
  n1.classList.add("row");
  for (let i = 1; i <= 4; i++) {
    n1.appendChild(Restaurant());
  }
}
