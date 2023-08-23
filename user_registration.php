<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>User-Registration</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
   integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
   crossorigin="anonymous">
</head>

<body>
   <div class="container-fluid my-3">
    <h2 class="text-center text-primary">New User Registration</h2>
       <div class="row d-flex align-items-center justify-content-center">
          <div class="col-lg-12 col-xl-6">
   <form action="" method="post" enctype="multiple/form-data">
           <div class="form-outline mb-4">
            <!-- user name field -->
            <label for="user_username" class="form-label">Username</label>
            <input type="text" id="user_username" class="form-control"
            placeholder="Enter Your Name" autocomplete="off" 
            required="required" name="user_username"/>
           </div>

   <div class="form-outline mb-4">
      <!-- user email field -->
      <label for="user_email" class="form-label">Email</label>
      <input type="email" id="user_email" class="form-control"
      placeholder="Enter Your Email" autocomplete="off" 
      required="required" name="user_email"/>
   </div>

   <div class="form-outline mb-4">
      <!-- user image field -->
      <label for="user_image" class="form-label">User Image</label>
      <input type="file" id="user_image" class="form-control"
      required="required" name="user_image"/>
   </div>

   <div class="form-outline mb-4">
      <!-- password field -->
      <label for="user_password" class="form-label">Passsword</label>
      <input type="password" id="user_password" class="form-control"
      placeholder="Enter Your Password" autocomplete="off" 
      required="required" name="user_password"/>
   </div>

   <div class="form-outline mb-4">
      <!-- confirm password field -->
      <label for="conf_user_password" class="form-label">Confirm Passsword</label>
      <input type="password" id="conf_user_password" class="form-control"
      placeholder="Confirm Password" autocomplete="off" 
      required="required" name="conf_user_password"/>
   </div>

   <div class="form-outline mb-4">
      <!-- Address field -->
      <label for="user_address" class="form-label">Address</label>
      <input type="text" id="user_address" class="form-control"
      placeholder="Enter Your Address" autocomplete="off" 
      required="required" name="user_address"/>
   </div>

   <div class="form-outline mb-4">
      <!-- Address field -->
      <label for="user_contact" class="form-label">Contact</label>
      <input type="" id="user_contact" class="form-control"
      placeholder="Enter Your Mobile Number" autocomplete="off" 
      required="required" name="user_contact"/>
   </div>
   <div class="mt-4 pt-2">
      <input type="submit" value="Register" 
      class="bg-info py-2 px-3 border-0" name="user_register">
      <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account?<a class="text-danger"href="user_login.php"> Login</a></p>
      
   </div>
</form>     
            
      </div>
    </div>
 </div>
 
    
 </body>
 </html>