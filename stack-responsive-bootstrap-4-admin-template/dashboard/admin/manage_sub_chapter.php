<?php include "../common/header.php"; ?>
<?php
include "db.php";

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
                                <h4 class="card-title">Manage Sub Chapter</h4>
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
                                                    <th>Organisation Name</th>
                                                    <th>Class</th>

                                                    <th>Subject</th>
                                                    <th>Chapter</th>
                                                    <th>Sub Chapter</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                                // $sql = "SELECT c.*, o.org_name FROM class c
                                                // INNER JOIN organisation o ON c.org_id = o.id";
                                                $i = 1;
                                                // $sql = "SELECT sub_ch.*, ch.*, sub.*, cls.*, org.*
                                                // FROM chapter_sub_name sub_ch
                                                // INNER JOIN chapter ch ON sub_ch.chapter_id = ch.id
                                                // INNER JOIN subject sub ON ch.subject_id = sub.id
                                                // INNER JOIN class cls ON sub.class_id = cls.id
                                                // INNER JOIN organisation org ON cls.org_id = org.id";
                                                $sql ="SELECT sub_ch.*, ch.*, sub.*, cls.*, org.*
                                                FROM chapter_sub_name sub_ch
                                                INNER JOIN chapter ch ON sub_ch.chapter_id = ch.id
                                                INNER JOIN subject sub ON ch.subject_id = sub.id
                                                INNER JOIN class cls ON sub.class_id = cls.id
                                                INNER JOIN organisation org ON cls.org_id = org.id
                                                ORDER BY ch.chapter_name";
                                        
                                                $result = mysqli_query($conn, $sql);
                                                // $get_org_name= "SELECT * FROM designation
                                                // JOIN organisation ON designation.org_id =organisation.id";
                                                
                                                if (!$result) {
                                                    die("Error in SQL query: " . mysqli_error($conn));
                                                }
                                                //  print_r($get_org_name);
                                                // die();
                                                if (mysqli_num_rows($result) > 0) {
                                                    // output data of each row

                                                    while ($row = mysqli_fetch_assoc($result)) { ?>
                                                        <tr>
                                                            <th> <?php echo $i ?></th>
                                                            <td><?php echo $row['org_name']; ?></td>
                                                            <td><?php echo $row['class']; ?></td>

                                                            <td><?php echo $row['sub_name']; ?></td>
                                                            <td><?php echo $row['chapter_name']; ?></td>
                                                            <td><?php echo $row['chapter_sub_name']; ?></td>
                                                            <td>
                                                                <a href="update_org.php?org_id=<?php echo $row['id']; ?>" title="Edit" class="mr-1"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                                <a href="delete.php?org_id=<?php echo $row['id']; ?>" title="Delete" class=""><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                            </td>

                                                        </tr>


                                                <?php $i++;
                                                    }
                                                } else {
                                                    echo "0 results";
                                                }

                                                mysqli_close($conn);
                                                ?>



                                            </tbody>
                                            <tfoot>

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