<?php include "sidebar.php"; ?>
  <main id="main" class="main">
          <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Datatables</h5>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">Category Name</th>
                   <th scope="col"> Category Image </th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
      include "connection.php";
      $sql = "SELECT `category_id`, `category_name`, `filename` FROM `category` WHERE 1 ORDER By category_id DESC ";
  $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
    while($row = $result->fetch_assoc()) {

 ?> 

                  <tr>
                    <th scope="row"><?php echo "$row[category_name]"; ?></th>
                      <td><img style="height:80px; width:80px;" src="image/<?php echo "$row[filename]"; ?>" alt="" ></td>
                
                    <td>
                        <i class="bi bi-pencil-square"></i>
                    <i class="bi bi-trash3-fill"></i>
                    </td>
                  </tr>
                <?php }} ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

</main>
<?php include "footer.php"; ?>