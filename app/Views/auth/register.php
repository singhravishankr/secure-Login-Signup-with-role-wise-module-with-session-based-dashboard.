
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sign Up </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">  
</head>
<style>
    .bto{
        text-align:center;
    }
    #pass1 {
  position: absolute;
  right: 25px; /* Adjust as needed */
  top: 72%;
  transform: translateY(-50%);
  cursor: pointer;
}
 #confpass1 {
  position: absolute;
  right: 25px; /* Adjust as needed */
  top: 85%;
  transform: translateY(-50%);
  cursor: pointer;
}
.pd{
    margin-top:5px;
}
    </style>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">

              

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create New Customer Account</h5>
                    
                  </div>

                

     <form method="post" action="/register-post" class="row g-3 needs-validation">             
                    
                    <div class="col-12 pd">
                      <label for="firstname" class="form-label">First Name <span class="text-danger">*</span></label>
                      <div class="input-group has-validation">
                        <input type="text" name="first_name" class="form-control" id="yourUsername" required> 
                       <div class="col-12">
                       <span class="text-danger" ><?= \Config\Services::validation()->showError('first_name') ?></span>
                      </div>
                         </div>
                    </div>

                    <div class="col-12 pd">
                      <label for="lastname" class="form-label">Last Name <span class="text-danger">*</span></label>
                      <div class="input-group has-validation">
                        <input type="text" name="last_name" class="form-control" id="lastname" required>
                        <div class="col-12">
                       <span class="text-danger" ><?= \Config\Services::validation()->showError('last_name') ?></span>
                      </div>
                      </div>
                    </div>

                    <div class="col-12 pd">
                      <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                      <div class="input-group has-validation">
                        <input type="email" name="email" class="form-control" id="email" required>
                       <div class="col-12">
                       <span class="text-danger" ><?= \Config\Services::validation()->showError('email') ?></span>
                      </div>
                      </div>
                    </div>

                     <div class="col-12 pd">
                      <label for="dob" class="form-label">Date of Birth <span class="text-danger">*</span></label>
                      <div class="input-group has-validation">
                        <input type="date" name="dob" class="form-control" id="dob" required>
                       <div class="col-12">
                       <span class="text-danger" ><?= \Config\Services::validation()->showError('dob') ?></span>
                      </div>
                      </div>
                    </div>

                    <div class="col-12">
                   <label for="role-select" class="form-label">Role</label>
    <select id="role-select" name="role" class="form-control" aria-label="Select role">
  <option value="user">User</option>
  <option value="admin">Admin</option>
</select>
 </div>

                    
                    <div class="col-12 pd">
                      <label for="yourPassword" class="form-label">Password <span class="text-danger">*</span></label>
                      <input type="password"  name="password" class="form-control" id="pass" required>
                      <i class="bi bi-eye" id="pass1" onclick="toggle('pass')"></i>
                      <div class="col-12">
                       <span class="text-danger" ><?= \Config\Services::validation()->showError('password') ?></span>
                      </div>
                    </div>
                   
                        
                        

                  <div class="col-12 pd">
                      <label for="confirmPassword" class="form-label">Confirm Password <span class="text-danger">*</span></label>
                      <input type="password"  name="confirm_password" class="form-control" id="confpass" required>
                       <i class="bi bi-eye" id="confpass1" onclick="toggle('confpass')"></i>
                      <div class="col-12">
                       <span class="text-danger" ><?= \Config\Services::validation()->showError('confirm_password') ?></span>
                      </div>
                    </div>

                    
                    
                        
                  
                  
                    
                    
                    <div class="col-12 bto">
                      <a class="btn btn-secondary" href="/login" style="color:white;">Cancel</a>
                    
                      <button class="btn btn-primary" type="submit">Submit</button>
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

