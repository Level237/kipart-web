var date = new Date();

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




Date.prototype.addDays = function(days) {
    var date = new Date(this.valueOf());
    date.setDate(date.getDate() + days);
    return date;
}



console.log(date.addDays(31).toISOString().split('T')[0]);
date=date.addDays(31).toISOString().split('T')[0]

    var today = new Date().toISOString().split('T')[0];
    var lastDay=today + 30;

  document.querySelector('.date').setAttribute('min', today);
  document.querySelector('.date').setAttribute('max', date);
  document.querySelector('.date').value=today;

  var modal = document.getElementById("myModal");
  var span = document.getElementsByClassName("close")[0];
  span.onclick = function() {
    modal.style.display = "none";
    console.log("eed");
  }

  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }






