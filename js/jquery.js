function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

/* When the user clicks on the button,
toggle between hiding and showing the dropdown content*/
function myFunction1() {
document.getElementById("myDropdown1").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
if (!e.target.matches('.downarrow')) {
var myDropdown1 = document.getElementById("myDropdown1");
  if (myDropdown1.classList.contains('show')) {
    myDropdown1.classList.remove('show');
  }
}
}


/* When the user clicks on the button,
toggle between hiding and showing the dropdown content*/
function myFunction() {
document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
if (!e.target.matches('.downarrow')) {
var myDropdown = document.getElementById("myDropdown");
  if (myDropdown.classList.contains('show')) {
    myDropdown.classList.remove('show');
  }
}
}

function myFunction(imgs) {
  var expandImg = document.getElementById("expandedImg");
  var imgText = document.getElementById("imgtext");
  expandImg.src = imgs.src;
  imgText.innerHTML = imgs.alt;
  expandImg.parentElement.style.display = "block";
}


function submit() {
    $('html,body').animate({
        scrollTop: $(".firstmenu1").offset().top},
        'slow');
};
