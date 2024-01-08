<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> Online banking</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="auto.css" rel="stylesheet">
  
    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">
     

</head>

<body style="background-color:#003679">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Register new customer</h1>
                
              </div>
              <form autocomplete="on" class="user" method="POST" action="scripts/adminrecript.php" enctype="multipart/form-data">
               
               <!-- form notification message -->

               <?php
               
               $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
               if(strpos($url, "mail=empty")== true){
                 echo "<p style='color:red'>Forms must be filled before Procceding With Registration..</p>";}
              if(strpos($url, "mail=invalid")==true){
                echo "<p style='color:red'>email must be a valid email..</p>";
              }
              if(strpos($url, "mail=success")==true){
                echo "<p style='color:red'>Your Application is successful an Email would be sent to you..</p>";
              }
              
        
               
               ?>
               
               
               
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  
                    <input type="text" name="acctname" class="form-control form-control-user" id="exampleFirstName" placeholder="Account Name">
                  
                  </div>
                 
                  <div class="col-sm-6">
                    <input type="email" name="email" class="form-control form-control-user" id="exampleLastName" placeholder="Email">
                 
                  </div>
                </div>
               
                <div class="form-group">
                  <input type="text" name="tel" class="form-control form-control-user" id="exampleInputEmail" placeholder="Telephone">
                <div><?php ?></div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="accttype" class="form-control form-control-user" id="exampleInputPassword" placeholder="Account Type">
                  <div><?php?></div>
                  </div>
                  <div class="col-sm-6">
                
                    <input type="date" name="birth" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Date Of Birth">
                <div><?php?></div>
                 </div>
                 </div>
                <div class="form-group row">
                  <div class="col-sm-6">
                    <input type="text" name="addr" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Address">
                  <div><?php?></div>
                  </div>
                  <div class="col-sm-6 autocomplete">
                    <input type="text" name="nation" class="form-control form-control-user" id="myInput" placeholder="Nationality">
                 <div><?php?></div>
                  </div>
                 </div>
                 <div class="form-group">
                  <input type="text" name="city" class="form-control form-control-user" id="exampleInputEmail" placeholder="City">
                <div><?php?></div>
                </div>
                <div class="form-group row">
                 
               
                  <div class="col-sm-6 autocomplete">
                    <input type="text" name="marital" id="myInput" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Marital Status">
                  <div><?php?></div>
                  </div>
                 </div>
                 <div class="form-group row">
                  <div class="col-sm-6">
                    <input type="text" name="gender" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Gender">
                 <div><?php?></div>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="username" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Username">
                 <div><?php?></div>
                  </div>
                 </div>
                 <div class="form-group row">
                  <div class="col-sm-6">
                    <input type="password" name="pwd" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Password">
                 <div><?php?></div>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" name="pin" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Pin">
                  <div><?php?></div>
                  </div>
                 </div>
                 <div class="form-group">
                Photo
                  <input type="file"   placeholder="upload profile image" name="img" >
               <div><?php?></div>
                </div>
               
               
                
                <input type="submit" class="btn btn-primary btn-user btn-block" name="adminreg" value="REGISTER">
                
          <!--autocomplete scripts-->
                <script>
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

/*An array containing all the country names in the world:*/
var countries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua & Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia & Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre & Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts & Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad & Tobago","Tunisia","Turkey","Turkmenistan","Turks & Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), countries);
</script>



              </form>
             
              
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
