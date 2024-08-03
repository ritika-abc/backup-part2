<?php include"sidebar.php"; ?>
 <main id="main" class="main">
         <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

           
              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create A New Category</h5>
                  </div>
              <?php
                include "connection.php";
                   if (isset($_POST['submit'])) {
                    
    $filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "./image/" . $filename;
                      $category_name=$_POST["category_name"];
                    $sql = "INSERT IGNORE INTO `category`(`category_name` , `filename`) VALUES ('$category_name' , '$filename')";
                   mysqli_query($conn, $sql);
               	if (move_uploaded_file($tempname, $folder)) {
	echo '<script>alert("Category Added ")</script>';
echo "<script> location.href='category.php'; </script>";
        exit;

	} else {
		echo "<h3> Failed to upload image!</h3>";
	}} 	

?>
                  <form class="row g-3 needs-validation" 	enctype="multipart/form-data" method="POST">
                    <div class="col-12">
                      <label for="yourName" class="form-label">Category Name</label>
                      <input type="text" name="category_name" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Please, enter Category Name!</div>
                    </div>
                       <div class="col-12">
                      <label for="yourName" class="form-label">Category Image</label>
                <input type="file" class="form-control" name="uploadfile" id="subject" />
                      <div class="invalid-feedback">Please, enter Category Name!</div>
                    </div>
                    <div class="col-12 text-center">
                      <button class="btn btn-primary w-100" type="submit" name ="submit" value="submit">Create Account</button>
                    </div>
                   
                  </form>

                </div>
              </div>

            
            </div>
          </div>
        </div>

      </section>

    </div>

</main>
<?php include"footer.php"; ?>