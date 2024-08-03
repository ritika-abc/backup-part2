<?php include "sidebar.php"; ?>
  <main id="main" class="main">
          <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Inactive Products Database</h5>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">product Name</th>
                   <th scope="col">Image </th>
                    <th scope="col">price </th>
                    <th scope="col">Category </th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
      include "connection.php";
      $sql = "SELECT `product_id`, `product_name`, `category`, `price`, `custom_field`, `filename`, `status` FROM `product` WHERE status='Inactive' ORDER By product_id DESC ";
  $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
    while($row = $result->fetch_assoc()) {

 ?> 

                  <tr>
                    <th scope="row"><?php echo "$row[product_name]"; ?></th>
                      <td><img style="height:80px; width:80px;" src="image/<?php echo "$row[filename]"; ?>" alt="" ></td>
                    <td><?php echo "$row[price]"; ?></td>
                    <td><?php echo "$row[category]"; ?></td>
                   
                    <td>
                        <i class="bi bi-pencil-square"></i>
                   <a href="delete_product.php?type=delete&product_id=<?php echo "$row[product_id]"; ?>">
                   <i class="bi bi-trash3-fill"></i>
                   </a>
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