<?php
  include "database.php"; 
  $payamha= mysqli_query($connection, "SELECT *FROM contacts");
?>


<html dir="rtl">
<head>
  
   <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.rtl.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Phonebook</title>
     
</head>
<body>
  <div class="container">

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
          <a class="navbar-brand" href="#">
          <img src="Images/Phonebook-256.webp" alt="" width="40" height="30" class="d-inline-block align-text-top">
            دفترچه تلفن
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                      </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link disabled">Disabled</a>
                      </li>
                  </ul>
                  <form class="d-flex">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-light" type="submit">Search</button>
                  </form>
              </div>
          </div>
      </nav>

             
    
      <div class="col-12">
          <div class="table-responsive">
              <table class="table table-bordered text-center table-dark table-striped mt-2">
              <thead>
              <tr>
                  <th scope="col">کد</th>
                  <th scope="col">نام</th>
                  <th scope="col">نام خانوادگی</th>
                  <th scope="col">ایمیل</th>
                  <th scope="col">شماره تلفن</th>
                  <th scope="col">شماره ثابت</th>
              </tr>
              </thead>
                <tbody>


              <?php foreach($payamha as $payam): ?>
                  <tr>
                      <td><?php echo $payam["id"]; ?></td>
                      <td><?php echo $payam["first_name"]; ?></td>
                      <td><?php echo $payam["last_name"]; ?></td>
                      <td><?php echo $payam["email"]; ?></td>
                      <td><?php echo $payam["phone_number"]; ?></td>
                      <td><?php echo $payam["landline_number"]; ?></td>   
                  </tr>
              <?php endforeach; ?>



                </tbody>
              </table>
              </div>  
            </div>
          </div>

          <a href="index2.php">
              <div class="new_contact">
                  <img src="Images/312-256.webp" alt="add_contact" width="40px">
                  افزودن مخاطب جدید
              </div>
          </a>
        
          <!-- Button trigger modal -->
          <button type="button" class="btn message" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <img src="Images/9223632.png" alt="add_contact" width="40px">
          پاک کردن لیست مخاطبین    
          </button>

          <!-- Modal -->
          
          <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <form  method="post" action="delet_contact_list.php">
                  <div class="modal-header">
                    <h5 class="modal-title " id="exampleModalLabel" style="margin-right:10%;">پاک بشه دیگه برنمیگرده هاااااپاک بشه ؟😩🤦🏻‍♀️</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-footer mrg" >
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" style="margin-left:9%;">نه بیخیال 😅</button>
                    <button type="submit" class="btn btn-primary" style="margin-left:20%;" name="delet_list">ارههههههههه😏</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
  
    </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="js/bootstrap.js"></script>
  </body>
</html>