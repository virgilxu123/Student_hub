//login
    // Get the modal
    var modal2 = document.getElementById("myModal2");


    // Get the button that opens the modal
    var login = document.getElementById("login");
  
    // Get the <span> element that closes the modal
    var span2 = document.getElementsByClassName("close2")[0];
  
    // When the user clicks on the button, open the modal
    login.onclick = function() {
      modal2.style.display = "block";
    }
  
    // When the user clicks on <span> (x), close the modal
    span2.onclick = function() {
      modal2.style.display = "none";
    }
  
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal2) {
        modal2.style.display = "none";
      }
    }
//login