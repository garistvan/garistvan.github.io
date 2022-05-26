function calcAmount() {
    let price = 1000;
    let amountInput = document.querySelector("input[name='amount-input']");
    let amount = parseInt(amountInput.value) * price;
    if (isNaN(amount)) { amount = 0; }
    if (parseInt(amountInput.value) > 10) {
        
        alert("fasz vagy");
        amount = 0;
    }
    //alert("Fizetendő:" + amount + "Ft");
    if(amount < 5000){
      document.getElementById("sumOfPrice").innerHTML = amount + 500;
      document.getElementById("deliveryPrice").innerHTML = 500;
    }
    else {
        document.getElementById("sumOfPrice").innerHTML = amount;   
        document.getElementById("deliveryPrice").innerHTML = 0;
    }

}