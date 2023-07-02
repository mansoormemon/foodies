function CartAdd(food_item_id) {
  let items = document.getElementsByClassName("foodItemCounterBox");
  let selected_item = items[food_item_id - 1];

  var data = {
    item: food_item_id,
    quantity: parseInt(selected_item.value)
  };

  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'update_cart.php');
  xhr.setRequestHeader('Content-Type', 'application/json');
  xhr.onreadystatechange = function() {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        console.log('Data appended successfully');
        console.log(xhr.response);
      } else {
        console.log('Request failed with status ' + xhr.status);
      }
    }
  };
  xhr.send(JSON.stringify(data));

  console.log(data);
  
  selected_item.value = "1";

  alert("Item added to cart!");
}
