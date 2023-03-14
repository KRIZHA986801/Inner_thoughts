<!DOCTYPE html>
<html lang="en">
    <link rel="icon" href="img/it.png">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inner Thoughts</title>
    <link rel="stylesheet" href="sign_log.css">
</head>
<?php
if(isset($_POST['submit'])){
     $inner_name = $_POST["inner_name"];

     include 'koneksyon.php';

     $sql = "INSERT INTO inner_username VALUES ('', '$inner_name', '$inner_password')";
     $result = $conn->query($sql);

     header('Location: inner_thoughts.php');

     $conn->close();
    }
?>
<body>
    <form action="inner_thoughts.php" method="POST" class="form-group">
        <div class="signup">
            <h1>Sign Up</h1>
            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="inner_name">
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="inner_password"><br>

            <div class="submit">
                <button type="submit" value="signup" name="submit">Sign Up</button>
            </div>
        </div>
        <div class="login">
            <h1>LOG IN</h1>
            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="inner_name">
            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="inner_password"><br>
                
            <div class="submit">
                <button type="submit" value="signup" name="submit">Log In</button>
            </div>
        </div>  
    </form>

        
    <!-- <form action="" method="POST">
        <div class="login">
            <h1>LOG IN</h1>
            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="student_name" required>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="student_password" required><br>
            
            <div class="submit">
                <button type="submit" value="signup" name="submit">Log In</button>
            </div> -->

            <br><p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>


        </div>
    </form>




    <script>
        // Get the modal
        var modal = document.getElementById('id01');
        
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
        }
    </script>
        
    <script>
        var x, i, j, l, ll, selElmnt, a, b, c;
        /*look for any elements with the class "custom-select":*/
        x = document.getElementsByClassName("custom-select");
        l = x.length;
        for (i = 0; i < l; i++) {
          selElmnt = x[i].getElementsByTagName("select")[0];
          ll = selElmnt.length;
          /*for each element, create a new DIV that will act as the selected item:*/
          a = document.createElement("DIV");
          a.setAttribute("class", "select-selected");
          a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
          x[i].appendChild(a);
          /*for each element, create a new DIV that will contain the option list:*/
          b = document.createElement("DIV");
          b.setAttribute("class", "select-items select-hide");
          for (j = 1; j < ll; j++) {
            /*for each option in the original select element,
            create a new DIV that will act as an option item:*/
            c = document.createElement("DIV");
            c.innerHTML = selElmnt.options[j].innerHTML;
            c.addEventListener("click", function(e) {
                /*when an item is clicked, update the original select box,
                and the selected item:*/
                var y, i, k, s, h, sl, yl;
                s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                sl = s.length;
                h = this.parentNode.previousSibling;
                for (i = 0; i < sl; i++) {
                  if (s.options[i].innerHTML == this.innerHTML) {
                    s.selectedIndex = i;
                    h.innerHTML = this.innerHTML;
                    y = this.parentNode.getElementsByClassName("same-as-selected");
                    yl = y.length;
                    for (k = 0; k < yl; k++) {
                      y[k].removeAttribute("class");
                    }
                    this.setAttribute("class", "same-as-selected");
                    break;
                  }
                }
                h.click();
            });
            b.appendChild(c);
          }
          x[i].appendChild(b);
          a.addEventListener("click", function(e) {
              /*when the select box is clicked, close any other select boxes,
              and open/close the current select box:*/
              e.stopPropagation();
              closeAllSelect(this);
              this.nextSibling.classList.toggle("select-hide");
              this.classList.toggle("select-arrow-active");
            });
        }
        function closeAllSelect(elmnt) {
          /*a function that will close all select boxes in the document,
          except the current select box:*/
          var x, y, i, xl, yl, arrNo = [];
          x = document.getElementsByClassName("select-items");
          y = document.getElementsByClassName("select-selected");
          xl = x.length;
          yl = y.length;
          for (i = 0; i < yl; i++) {
            if (elmnt == y[i]) {
              arrNo.push(i)
            } else {
              y[i].classList.remove("select-arrow-active");
            }
          }
          for (i = 0; i < xl; i++) {
            if (arrNo.indexOf(i)) {
              x[i].classList.add("select-hide");
            }
          }
        }
        /*if the user clicks anywhere outside the select box,
        then close all select boxes:*/
        document.addEventListener("click", closeAllSelect);
    </script>
</body>
</html>