<?php include "sidebar.php"; ?>
  <main id="main" class="main">
          <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Total Orders</h5>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">Image </th>
                    <th scope="col">product Details</th>
                    <th scope="col">Customer name </th>
                    <th scope="col">Address </th>
                    <th scope="col">Payment Mode </th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
      include "connection.php";
      $sql = "SELECT
    customer_requirement.ord_id,
    customer_requirement.prod_id,
    customer_requirement.username,
    customer_requirement.qty,
    customer_requirement.time,
    customer_requirement.date,
    customer_requirement.status,
    customer_requirement.fname,
    customer_requirement.lname,
    customer_requirement.cemail,
    customer_requirement.mobile,
    customer_requirement.address1,
    customer_requirement.address2,
    customer_requirement.country,
    customer_requirement.city,
    customer_requirement.state,
    customer_requirement.zip,
    customer_requirement.payment,
    customers.customer_id,
    customers.name,
    customers.email,
    customers.username,
    customers.password,
    product.product_id,
    product.product_name,
    product.price,
    product.filename
FROM
    (
        (
            customer_requirement
        INNER JOIN customers ON customer_requirement.username = customers.username
        )
    INNER JOIN product ON product.product_id = customer_requirement.prod_id
    )

";
  $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
    while($row = $result->fetch_assoc()) {

 ?> 

                  <tr>
                                            <td><img style="height:80px; width:80px;" src="image/<?php echo "$row[filename]"; ?>" alt="" ></td>
                    <th scope="row"><?php echo "$row[product_name]"; ?>
                    <p>Price: <?php echo "$row[price]"; ?></p>
                     <p>Qty: <?php echo "$row[qty]"; ?></p>
                    </th>
                  <td><?php echo "$row[fname]"; ?> <?php echo "$row[lname]"; ?></td>
                 <td> 
                  <p> <?php echo "$row[address1]"; ?></p>
                     <p> <?php echo "$row[address2]"; ?></p>
                      <p> <?php echo "$row[city]"; ?>, <?php echo "$row[state]"; ?>, <?php echo "$row[country]"; ?>, <?php echo "$row[zip]"; ?></p>
                 </td>
                  <td><?php echo "$row[payment]"; ?></td>
                  <td>
                      <form action="edit_order.php">
                            <input name="product_id" type="hidden" value="<?php echo "$row[ord_id]"; ?>">
                        <select name="status" id="status" class="form-control">
                            <option class="text-center form-control"><?php echo "$row[status]"; ?></option>
                             <option class="text-center form-control">Confirm </option>
                           <option class="text-center form-control">Pending </option>
                        </select>
                        <button  class="btn btn-primary w-100"  type="submit" name="submit" id="submit" value="submit">Done</button>
                    </form> 
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