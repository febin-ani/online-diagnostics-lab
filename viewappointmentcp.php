<?php 
  include('constant/securityhome.php');
  include('constant/topbar.php');
  include('constant/header.php');
?>

  <section class="section">
    
    <div class="row">
        <div class="col-lg-12 mt-5">

    
        <h1 class="text-center fs-5 mt-3 fw-bold">View Appointment Details</h1>

        <table class="table">
        <thead>
            <tr class="text-center ">
            <th scope="col">Appointment Code</th>
            <th scope="col">Tests Name</th>
            <th scope="col">Appointment Date & Time</th>
            <th scope="col">Prescription</th>
            <th scope="col">Price</th>
            <th scope="col">Status</th>
            <th scope="col">Print</th>
            </tr>
        </thead>
        <tbody>

        <?php
          $id = $_SESSION['id'];
          // $sql = "SELECT * FROM `tb_appointment_list`
          // LEFT JOIN `tb_appointment`
          // ON `tb_appointment.apt_code` = `tb_appointment_list.code`
          // LEFT JOIN `tb_test`
          // ON `tb_appointment.test_id` = `tb_test.test_id`";

          // $sql = "SELECT * FROM tb_appointment_list a JOIN tb_appointment b ON a.code = b.apt_code JOIN tb_test c ON b.test_id = c.test_id";

          $sql = "SELECT
          *
      FROM tb_appointment s
      INNER JOIN tb_test cu  
      ON cu.test_id = s.test_id 
      INNER JOIN tb_appointment_list AS ci
      ON ci.code = s.apt_code WHERE ci.user_id = $id;
      ";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
              // Output data of each row

            while ($row = $result->fetch_assoc()) {

              echo '<tr class="text-center">';
              echo '<td class="nn">' . $row["apt_code"] . '</td>';
              // echo '<td>' . 
              //   . '</td>';
              echo '<td>' . $row["schedule"] . '</td>';
              // Prescription
              echo "<td>" ?> 
              <?php
              $pres=$row["pres"];
              if($pres!==""){
              ?>
                <a class="d-flex justify-content-center link-dark" href=<?php echo "assets/upload/".$row["pres"]; ?> >  <i class="ri-eye-fill"></i></a>
              <?php
              } else {
              ?>
                <i  class="ri-eye-off-fill d-flex justify-content-center "></i>
              <?php
              }
              "</td>";

              echo '<td>' . $row["price"] . '</td>';

              // Status
              echo "<td>" ?> 
                                  
              <?php
              $status=$row['status'];
              if($status==0){
              ?>
                Pending
              <?php
              } elseif($status==1) {
              ?>
                Approved
              <?php
              } else {
              ?>
                Completed
              <?php
              }
                "</td>";
                
              echo "<td></td><td class='btn btn-dark btn-sm text-dark' onclick='printMe(event)'>Print</td></tr>";
            }
          } else { ?>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <?php echo 'No Records Found' ?>
          <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
          </div>
              <?php
          }
          ?>
        </tbody>
      </table>
      <!-- End Table with stripped rows -->
      </div>
    </div>
  </section>

  </main><!-- End #main -->

  <script>
   const hideRows = () => {
    var arr = [];
    var x = document.getElementsByClassName("nn");

    for(let i = 0; i< x.length; i++){
      
      if(arr.includes(x[i].innerHTML)){
        x[i].classList.add("hide");
        x[i].parentElement.style.display = "none";
      }
      arr.push(x[i].innerHTML);
    }

    
   }
   hideRows();

   function printMe(event){
    var y = event.target.parentElement;
    var o = document.getElementsByTagName("tr")[0].innerHTML;
    var m = window.open('','','width=500px','height=500px');
    m.document.write("<link href='assets/vendor/bootstrap/css/bootstrap.min.css' rel='stylesheet'>");
    m.document.write("<table class='table'>");
    m.document.write("<tr>");
    m.document.write(o);
    m.document.write("</tr>");
    m.document.write("<tr>");
    m.document.write(y.innerHTML);
    m.document.write("</tr>");
    m.document.write("</table>");
    m.getElementsByClassName("print")[0].style.display = "";
    m.window.print();
   }
    
  </script>

<?php
include('constant/scripts.php');
include('constant/footer.php');
?>
