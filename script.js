function selectDay(element) {
  var selectedDayValue = document.getElementById("selected-day-value");
  selectedDayValue.textContent = element.textContent;

  var days = document.getElementsByClassName("day");
  for (var i = 0; i < days.length; i++) {
    days[i].classList.remove("selected");
  }

  element.classList.add("selected");
}
