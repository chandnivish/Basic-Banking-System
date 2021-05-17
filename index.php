<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
    
  </head>

  <body style="background-color: #00008B">
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="intro py-4" style="background-color: #000080">
                <div >
                   <div >
                       <center>.<h3 style ="color:#FFD700;"><b>Welcome to</b></h3></center>
                       <center>.<h1 style ="color:#FFD700;">Sparks Foundation Bank</h></center>
                    </div>
                </div>
                <div class="col-sm-12 col-md img text-center">
                </div>
            </div>
            

              
            

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/B1.jpg" class="img-fluid" width="200" height="150">
                    <br>
                    <a href="createuser.php"><button class="button" style="background-color: #ffd700" onMouseOver="this.style.color='red'"onMouseOut="this.style.color='#28048a'"type="submit" name="submit" value="Transfer" style="height:40px; width:150px;"><b>Create User</b></button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/ww.png" class="img-fluid" width="200" height="150">
                    <br>
                    <a href="transfermoney.php"><button class="button" style="background-color: #ffd700"  onMouseOver="this.style.color='red'"onMouseOut="this.style.color='#28048a'"type="submit" name="submit" value="Transfer" style="height:40px; width:150px;"><b>Transaction</b></button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/hh.png" class="img-fluid" width="200" height="150">
                    <br>
                    <a href="transactionhistory.php"><button class="button"  style="background-color: #ffd700" onMouseOver="this.style.color='red'"onMouseOut="this.style.color='#28048a'"type="submit" name="submit" value="Transfer" style="height:40px; width:150px;"><b>History</b></button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-3" style="background-color: #000080">
        <p>.<h1 style =" font-size: 20px; color:#FFD700; text-shadow: 2px 2px black">&copy 2021. Made by <b>CHANDNI VISHWAKARMA</b> <br> The Sparks Foundation</h1></p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>