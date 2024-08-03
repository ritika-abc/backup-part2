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
                    <td>Customer Name</td>
                   <td>Email </td>
                    <td>Subject </td>
                    <td >message </td>
                    <td>Action</td>
                  </tr>
                </thead>
                <tbody>
                    <?php
      include "connection.php";
      $sql = "SELECT `message_id`, `cname`, `cemail`, `subject`, `message`, `date`, `time` FROM `customer_msg` WHERE 1 ORDER By message_id DESC ";
  $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
    while($row = $result->fetch_assoc()) {

 ?> 

                  <tr>
                    <th ><?php echo "$row[cname]"; ?></th>
                    <td><?php echo "$row[cemail]"; ?></td>
                    <td><?php echo "$row[subject]"; ?></td>
                    <td><?php echo "$row[message]"; ?></td>
                   
                    <td>
                   <a href="delete_message.php?type=delete&message_id=<?php echo "$row[message_id]"; ?>">
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