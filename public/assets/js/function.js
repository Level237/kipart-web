function increaseNumberOfPassengers(){
    var numberOfPassengers = document.getElementById("number-of-passengers");
    numberOfPassengers.value = +numberOfPassengers.value + 1;
}
function decreaseNumberOfPassengers(){

    var numberOfPassengers = document.getElementById("number-of-passengers");
    if(numberOfPassengers.value > 0){
        numberOfPassengers.value = +numberOfPassengers.value - 1;
}
}

function getCurrentDay(){



}




    var today = new Date().toISOString().split('T')[0];
    var lastDay=today + 30;

  document.getElementsByName("dateDeparture")[0].setAttribute('min', today);
  document.getElementsByName("dateDeparture")[0].setAttribute('max', lastDay);
  document.getElementsByName("dateDeparture")[0].value=today;

