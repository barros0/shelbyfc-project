function enableSubmit() {
  let inputs = document.getElementsByClassName("required");
  let btn = document.getElementById("login-btn");
  let isValid = true;
  for (var i = 0; i < inputs.length; i++) {
    let changedInput = inputs[i];
    if (changedInput.value.trim() === "" || changedInput.value === null) {
      isValid = false;
      break;
    }
  }
  btn.disabled = !isValid;
}

function showPass() {
  var x = document.getElementById("password");
  var y = document.getElementById("eye");
  if (x.type === "password") {
    x.type = "text";
    y.classList.remove("fa-eye");
    y.classList.add("fa-eye-slash");
  } else {
    x.type = "password";
    y.classList.add("fa-eye");
    y.classList.remove("fa-eye-slash");
  }
}

function showPassRegisto() {
  var x = document.getElementById("password_registo");
  var y = document.getElementById("eye_registo");
  if (x.type === "password") {
    x.type = "text";
    y.classList.remove("fa-eye");
    y.classList.add("fa-eye-slash");
  } else {
    x.type = "password";
    y.classList.add("fa-eye");
    y.classList.remove("fa-eye-slash");
  }
}


function showPassConfirm() {
  var x = document.getElementById("password_confirm");
  var y = document.getElementById("eye_confirm");
  if (x.type === "password") {
    x.type = "text";
    y.classList.remove("fa-eye");
    y.classList.add("fa-eye-slash");
  } else {
    x.type = "password";
    y.classList.add("fa-eye");
    y.classList.remove("fa-eye-slash");
  }
}

var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  let x = document.getElementsByClassName("tab");
  let y = document.getElementsByClassName("btn-registo");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";

    for(var i=0; i< y.length;i++){
      y[i].style.width = "100%";

   }
  } else {
    document.getElementById("prevBtn").style.display = "inline";
       for(var i=0; i< y.length;i++){
      y[i].style.width = "45%";

   }

  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "CRIAR CONTA";
  } else {
    document.getElementById("nextBtn").innerHTML = "SEGUINTE";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}

function Mudar(){

  let x = document.getElementById("conta");
  let login = document.getElementById("seccao-login");
  let registo = document.getElementById("seccao-registo");

  if(registo.style.display == 'none'){

    registo.style.setProperty("display", "flex", "important")
    login.style.setProperty("display", "none", "important")
    x.innerHTML = "INICIAR SESSÃO";

  }else{

    registo.style.setProperty("display", "none", "important")
    login.style.setProperty("display", "flex", "important")
    x.innerHTML = "CRIAR CONTA";


  }


}