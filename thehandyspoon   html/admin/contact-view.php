<html>
<head>
    
</head>
<?php include "sidebar.php"; ?>
  <main id="main" class="main">
<body>
    <style>
        .style{
            width:45%;
            height:40px;
            border: solid #b5c1d7 1px;
            border-radius:5px;
            margin:10px;
        }
    </style>

  
    <div class="form-container">
         <?php
include "connection.php";
 
?>

        <form name="frmContact" id="" frmContact"" method="POST"
            action="" enctype="multipart/form-data"
            onsubmit="return validateContactForm()">

           <div class="input-row" >
                <label style="padding-top: 20px;">Product Name</label>
                <span id="userName-info" class="info"></span><br /> 
                    <input  type="text"  class="form-control" name="product_name"  id="userName" />
            </div>  <br>
            <div class="input-row" >
                <label style="padding-top: 20px;">Product Price</label>
                <span id="userName-info" class="info"></span><br /> 
                    <input  type="text"  class="form-control" name="price"  id="userName" />
            </div>  <br>
            <div class="input-row" >
                <label>Product Category</label> 
                <span id="userEmail-info" class="info"></span><br /> 
                <select  class="form-control" name="category" >
                    <option>Select Category</option>
                    <?php
    
      $sql = "SELECT `category_id`, `category_name` FROM `category` WHERE 1";
  $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
    while($row = $result->fetch_assoc()) {
 ?> 
 <option><?php echo "$row[category_name]"; ?></option>
<?php }} ?>

                </select>
            </div>  <br>
            <div class="input-row">
                <label>Product image</label> 
                <span id="subject-info" class="info"></span><br /> 
                <input type="file" class="form-control" multiple name="uploadfile" id="subject" />
            </div>
        <br><br>
            <div id="custom-box">
                <label class="custom-input-label">Custom Fields</label>
                <div id="custom-input-container">
                    <div class="input-row">
                        <input type="text" class="custom-input-field style "
                            name="custom_name[]" />
                            <input type="text" 
                            class="custom-input-field float-right style"
                            name="custom_value[]" />
                    </div>
                </div>
                <input type="button"  class="btn btn-primary " value="Add More" onClick="addMore()" />
            </div>

            <div class="text-center">
                <input type="submit" name="submit" value="submit" class="btn btn-primary " value="Send" />

              
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-2.1.1.min.js"
        type="text/javascript"></script>
    <script type="text/javascript">
        function validateContactForm() {
            var valid = true;

            $(".info").html("");
            $(".input-field").css('border', '#e0dfdf 1px solid');
            var userName = $("#userName").val();
            var userEmail = $("#userEmail").val();
            var subject = $("#subject").val();
            var content = $("#content").val();
            
            if (userName == "") {
                $("#userName-info").html("Required.");
                $("#userName").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (userEmail == "") {
                $("#userEmail-info").html("Required.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#userEmail-info").html("Invalid Email Address.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (subject == "") {
                $("#subject-info").html("Required.");
                $("#subject").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (content == "") {
                $("#userMessage-info").html("Required.");
                $("#content").css('border', '#e66262 1px solid');
                valid = false;
            }
            return valid;
        }

        function addMore() {
        	   $("<DIV>").load("input.php", function() {
        	      $("#custom-input-container").append($(this).html());
        	   });	
        	}
</script>
</main>
<?php include "footer.php"; ?>
</body>
</html>