/**
 * Function to confirm if the user wants to delete the item.
 */
function confirmationForDeletion(){
    return confirm("Do you want to proceed with deletion?");
}

/**
 * Product id :
    Cannot be blank, cannot be all zeros
    Must be a 6 character integer
 * Price:
    Cannot be blank
    Zero price should be allowed and should be displayed as $0.00
    Price must be either zero, or a positive number with 2 decimals (eg.$2.45)
    If user enters price as 2, it should still be displayed as $2.00
 * Quantity:
    Cannot be blank
    Zero quantity should be allowed
    Quantity must be either zero, or a positive integer
 */
function formValidation(){
    var productId = document.forms["addForm"]["productId"].value;
    if(productId==null || productId=="" || productId === 0){ //alert if the data is empty
        alert("Please enter Product Id to validate!");
        return false;
    }
    else {
        if(!/^[0-9]{6}$/.test(productId)){ //alert if the data is not a 6 digit number
            alert("Entered Product Id is invalid. Should be a 6 digit number!");
            return false;
        }
    }

    var productPrice = document.forms["addForm"]["price"].value;
    
    if(productPrice==null || productPrice=="" ){ //alert if the data is empty
        alert("Please enter Product Price to validate!");
        return false;
    }else {
        if(!/^[0-9]+([.0-9]+)?$/.test(productPrice)){ //alert if the data is not a number
            alert("Entered Product Price is invalid. Should be a number!");
            return false;
        }
    }

    var productquantity = document.forms["addForm"]["quantity"].value;
    if(productquantity==null || productquantity=="" ){ //alert if the data is empty
        alert("Please enter Product Quantity to validate!");
        return false;
    }else {
        if(!/^[0-9]+$/.test(productquantity)){ //alert if the data is not a number
            alert("Entered Product Quantity is invalid. Should be a number!");
            return false;
        }
    }

    return true;
}