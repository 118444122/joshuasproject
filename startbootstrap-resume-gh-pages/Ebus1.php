<!--Creating a session variable and assigning it to txtTotal-->

<?php
session_start();
$totalValue = "";
$_SESSION['txtTotal'] = $totalValue;
?>

<!DOCTYPE html>
<html lang="en" xmlns="http.//www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Ebusiness 1</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
<script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>
<body>
<style>
body {
background-image: url("https://media.boingboing.net/wp-content/uploads/2018/05/cool-background1.png");
background-repeat: no-repeat;
background-size: 2000px 1000px
}
.opeNav {
    background-color: powderblue;
}
.overlay {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: white;
  background-color: black;
  overflow-x: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top: 25%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: white;
  display: block;
  transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
  color: white;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}



@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  color: white;
  }
}
span{
    color:Black;
}
    </style>
    <div class="form">
            <form name="intCalc" method="post" action="ebus2.php">
        
        <hr />
        <center>
                    <table cellspacing="10">
            <tr>
                            <td><b>Select a consulting Service</b></td>
            </tr>
            <tr>
                            <td>Blockchain @ €1000</td>
                            <td><input type="radio" id="CocaCola" name="rdoGroup" value="1000" /></td>
                        </tr>               
            <tr>
                            <td>Autonomous Things (Robots) @ €2000</td>
                            <td><input type="radio" id="Sprite" name="rdoGroup" value="2000" /></td>
                        </tr>               
            <tr>
                            <td>Immersive Experience @ €3000</td>
                            <td><input type="radio" id="Fanta" name="rdoGroup" value="3000" /></td>
                        </tr>   
                    </table>
                </center>
    <br />

        <center>
            <table cellspacing="10">
        <tr>
                    <td><b></b></td>
                    <td><b>Amount</b></td>
        </tr>
        <tr>
                    <td>Sub Total</td>
                    <td><input type="text" id="txtSubTot" name="txtSub" readonly /></td>
        </tr>
        <tr>
                    <td>-Discount @10%</td>
                    <td><input type="text" id="txtDisc" name="txtDisc" readonly /></td>
        </tr>
                <tr>
                    <td>+VAT @20%</td>
                    <td><input type="text" id="txtVat" name="txtVat" readonly /></td>
        </tr>
                <tr>
                    <td>Total</td>
                    <td><input type="text" id="txtTotal" name="txtTotal" value="" readonly /></td>
                </tr>
            </table>
        </center>
   
    <br />
        <center>
                    <input type="button" name="btnCalc" id="btnCalc" onclick="calcSub()" value="Calculate Cost"/>
                    <input type="button" name="btnClear" id="btnClear" onclick="AmountClear()" value="Clear choice"/>
                    <input type="submit" name="btnProceed" id="btnProceed" onclick="" value="Add To Shopping Cart"/>
        </center>
    </form>
</div>
       
       <script type="text/javascript">
        function calcSub() {
            //Assigning variables to the values
            var subAmount = parseFloat(document.getElementById('txtSubTot').value);
            var CocaCola = parseFloat(document.getElementById('CocaCola').value);
            var Sprite = parseFloat(document.getElementById('Sprite').value);
            var Fanta = parseFloat(document.getElementById('Fanta').value);
           
//            If radio buttons are clicked, values are assigned
            if (document.getElementById('CocaCola').checked) {
                document.intCalc.txtSubTot.value = CocaCola;
                subAmount = CocaCola;
                calculation(subAmount);
               
            }
        else if (document.getElementById('Sprite').checked) {
                document.intCalc.txtSubTot.value = Sprite;
                subAmount = Sprite;
                 calculation(subAmount);
              
            }
        else if (document.getElementById('Fanta').checked) {
                document.intCalc.txtSubTot.value = Fanta;
                subAmount = Fanta;
                 calculation(subAmount);
            }
        }   
       
         //Function for calculating the values
        function calculation(parmSTotal){
           var subTotal = parseFloat(parmSTotal);
           var discCalc = parseFloat(subTotal * .10);
           var vatCalc = parseFloat(subTotal * .20);
           var total = parseFloat(subTotal - discCalc + vatCalc);
          
           //Inserting them into the correct fields
           document.intCalc.txtDisc.value = discCalc; 
           document.intCalc.txtVat.value = vatCalc;
           document.intCalc.txtTotal.value = total;
         
        }
//     

    </script>
   
    <script>
    function AmountClear(){
        document.getElementById("txtSubTot").value="";
    document.getElementById("txtDisc").value="";
        document.getElementById("txtVat").value="";
    document.getElementById("txtTotal").value="";
}
    </script>
    <div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="http://localhost:8000/startbootstrap-resume-gh-pages/index.html">Index</a>
    <a href="http://localhost:8000/startbootstrap-resume-gh-pages/tiltedpage_scroll_demo.html">Interests</a>
    <a href="http://localhost:8000/startbootstrap-resume-gh-pages/Businesshtml.html">About</a>
    <a href="http://localhost:8000/startbootstrap-resume-gh-pages/Employees.html">Meet Our Staff</a>
    <a href="http://localhost:8000/startbootstrap-resume-gh-pages/Block.html">Block Chain Research</a>
    <a href="http://localhost:8000/startbootstrap-resume-gh-pages/autonomous.html">Autonomous Things Research</a>
    <a href="http://localhost:8000/startbootstrap-resume-gh-pages/immersive.html">Immersive Experience Research</a>
    <a href="http://localhost:8000/startbootstrap-resume-gh-pages/Ebus1.php">Ebusiness</a>
  </div>
  
</div>
</body>
</html>



