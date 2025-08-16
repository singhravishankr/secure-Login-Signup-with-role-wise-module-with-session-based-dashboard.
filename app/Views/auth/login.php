
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <!--<link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">-->

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity=
"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<style>
    .bto{
        text-align:center;
        margin-top: 15px;
    }
  

#pass {
  position: absolute;
  right: 25px; /* Adjust as needed */
  top: 70%;
  transform: translateY(-50%);
  cursor: pointer;
}
    </style>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Customer Login</h5>
                    
                  </div>

                  <?php if(session()->getFlashdata('error')): ?>
        <p class="text-danger"><?= session()->getFlashdata('error') ?></p>
    <?php endif; ?>

     <form method="post" action="/login-post" class="row g-3 needs-validation">             
    <!--<form class="row g-3 needs-validation" novalidate>-->

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Email <span class="text-danger">*</span></label>
                      <div class="input-group has-validation">
                        <input type="email" name="email" class="form-control" id="yourUsername" required/>
                       
                      </div>
                    </div>
                    
                    <div class="col-12 password-container">
                      <label for="yourPassword" class="form-label">Password <span class="text-danger">*</span></label>
                      <input type="password"  name="password" class="form-control " id="password"  required/>
                       <i class="bi bi-eye" id="pass" onclick="toggle('password')"></i>
                     
                    </div>
                    
                  
                    
                    
                    <div class="col-12 bto">
                     
                     <a href="/register"><button type="button" class="btn btn-light">SignUp</button></a>
                    
                      <button class="btn btn-primary " type="submit">Login</button>
                     
                    </div>
                   
                  </form>

                </div>
              </div>

             

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
   <script>
function toggle(id) {
    var x = document.getElementById(id);
    x.type = x.type === "password" ? "text" : "password";
}
</script>
 

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>
