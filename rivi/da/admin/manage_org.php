<?php include "../common/header.php"; ?>
<?php
$servername = "localhost";
$username = "u694067246_rivietechnolog";
$password = "Y^Es3q/hZ4";
$dbname = "u694067246_rivietechnolog";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}




?>
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">

        <div class="content-body">
            <!-- Zero configuration table -->
            <section id="configuration">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Manage Orgainsation</h4>
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li>
                                            <a data-action="collapse"><i class="feather icon-minus"></i></a>
                                        </li>
                                        <li>
                                            <a data-action="reload"><i class="feather icon-rotate-cw"></i></a>
                                        </li>
                                        <li>
                                            <a data-action="expand"><i class="feather icon-maximize"></i></a>
                                        </li>
                                        <li>
                                            <a data-action="close"><i class="feather icon-x"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body card-dashboard">
                                    <p class="card-text">

                                    </p>
                                    <div class="table-responsive">
                                    <table id="manage_org" class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>S.no</th>
                                                <th>Organisation code</th>
                                                <th>Organisation Name</th>                                          
                                                <th>E-mail</th>
                                                <th>Contact Number</th>
                                                <th>Address</th>                                              
                                                <th>About Orgainisation</th>
                                                <th>Registration Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $sql = "SELECT * FROM organisation";
                                            $result = mysqli_query($conn, $sql);
                                            $i= 1;
                                            // print_r($result);
                                            if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                
                                                while ($row = mysqli_fetch_assoc($result)) { ?>
                                                    <tr>
                                                        <th> <?php echo $i++ ?></th>
                                                        <td><?php echo $row['org_code']; ?></td>
                                                        <td><?php echo $row['org_name']; ?></td>
                                                        <td><?php echo $row['org_email']; ?></td>
                                                        <td><?php echo $row['org_contact']; ?></td>                                                      
                                                        <td><?php echo $row['org_add']; ?></td>
                                                        <td><?php echo $row['org_abt']; ?></td>
                                                        <td><?php echo $row['org_registraiom']; ?></td>
                                                        <td>
                                                            <a href="update_org.php?org_id=<?php echo $row['id']; ?>" title="Edit" class="mr-1"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                            <a href="delete.php?org_id=<?php echo $row['id']; ?>" title="Delete" class=""><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                        </td>

                                                    </tr>


                                            <?php  $i++;  }
                                            } else {
                                                echo "0 results";
                                            }

                                            mysqli_close($conn);
                                            ?>









                                        </tbody>
                                        <tfoot>
                                            <tr>
                                            <th>S.no</th>
                                                <th>Organisation code</th>
                                                <th>Organisation Name</th>
                                                <th>Registration Date</th>
                                                <th>E-mail</th>
                                                <th>Contact Number</th>
                                                <th>Address</th>
                                                <th>About Orgainisation</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    </div>
                                 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--/ Zero configuration table -->
        </div>

    </div>
</div>





<?php include "../common/footer.php"; ?>