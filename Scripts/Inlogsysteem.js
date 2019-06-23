Gebruikersnaam = sessionStorage.getItem("Username");
        if (Gebruikersnaam) {
            document.getElementById("User").innerHTML = Gebruikersnaam;
            document.getElementById("Logtext").innerHTML = "Log out";
        }
        else {
            document.getElementById("User").innerHTML = "No one";
            document.getElementById("Logtext").innerHTML = "Log in";
        }
    
        function Logout() {
            sessionStorage.clear("Username");
            location.reload();
        }
        function Log() {
          if (Gebruikersnaam){
            sessionStorage.clear("Username");
            location.reload();
          }
          else{
            location.href = 'Login_page.html';
          }
        }