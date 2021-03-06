function validate_id(){
  //check id

  var id = document.forms["delete"]["id"].value; // getting the user data
  if(id==null || id=="" ){ //alert if the data is empty
    alert("Please enter product id (eg.000001)!");
    return false;
  }
  else if(!/^[0-9]{6}$/.test(id)){ //alert if the data is not a 6 digit number
    alert("Entered data is invalid. Should be a 6 digit number (eg. 000001)!");
    return false;
  } else {
    return true;
  }
}

function validate_data(){
  var name = document.forms["input"]["name"].value; // getting the user data
  var price = document.forms["input"]["price"].value; // getting the user data
  var qty = document.forms["input"]["qty"].value; // getting the user data
  //var path = document.forms["input"]["path"].value; // getting the user data

  if((name==null || name=="") || (price==null || price=="") || (qty==null || qty=="")){ //alert if the data is empty
    alert("Product information are missing!");
    return false;
  } else if(!/^[0-9]+([.][0-9][0-9])?$/.test(price)){ //alert if the data is not a 6 digit number
      alert("Invalid. Price should be >=0.00 with 2 decimals!");
      return false;
  } else if(!/^[0-9]$/.test(qty)){ //alert if the data is not a 6 digit number
      alert("Invalid. Qty should be >=0 without decimal point!");
      return false;
  }
  else {
    return true;
  }

/*
  //check price
  var price = document.forms["input"]["price"].value; // getting the user data
  if(price==null || price=="" ){ //alert if the data is empty
    alert("Please enter price(eg. 500.50)!");
    return false;
  }
  else if(!/^[0-9]+([.][0-9][0-9])?$/.test(price)){ //alert if the data is not a 6 digit number
      //alert("Invalid. Should be float with 2 decimals!");
      return false;
  }
  */
}
