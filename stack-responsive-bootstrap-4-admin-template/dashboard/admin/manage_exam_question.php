<?php include "../common/header.php";
?>
<?php
include "db.php";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_REQUEST['csv_up'])) {
    if (isset($_FILES["csv_file"]) && $_FILES["csv_file"]["error"] == 0) {
        // Define the path to store the uploaded CSV file
        $upload_dir = "uploads/csv/";

        $upload_file = $upload_dir . basename($_FILES["csv_file"]["name"]);


        // Check if the file already exists
        if (file_exists($upload_file)) {
            echo "<script>alert('File already exists.')</script>";
        } else {
            // Move the uploaded file to the specified directory
            if (move_uploaded_file($_FILES["csv_file"]["tmp_name"], $upload_file)) {
                // Process the CSV file and insert data into the database
                $csv_data = array_map('str_getcsv', file($upload_file));
                foreach ($csv_data as $row) {


                    // Adjust the SQL query to match your table structure
                    // $sql = "INSERT INTO `exam_question`(`org_id`, `class_id`, `subject_id`, `section_id`, `chapter_id`, `exam_id`, `exam_type`, `exam_ques`, `opt1`, `opt2`, `opt3`, `opt4`, `corect_opt`,  `marks`,  `solution`, `status`) 
                    // VALUES ('$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$row[6]','$row[7]','$row[8]','$row[9]','$row[10]','$row[11]','$row[12]','$row[15]','$row[13]','$row[14]','$row[16]'')";
                    $sql = "INSERT INTO `exam_question`(`org_id`, `class_id`, `subject_id`, `section_id`, `chapter_id`, `exam_id`, `exam_type`, `exam_ques`, `opt1`, `opt2`, `opt3`, `opt4`, `corect_opt`, `marks`, `solution`, `status`) 
                    VALUES ('$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$row[6]','$row[7]','$row[8]','$row[9]','$row[10]','$row[11]','$row[12]','$row[15]','$row[13]','$row[14]','$row[16]')";

                    if ($conn->query($sql) === TRUE) {
                        echo "<script>alert('Record inserted successfully')</script>";
                        echo "<script>window.location.replace('manage_exam_question.php');</script>";
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                }
                echo "<script>alert('File uploaded and data inserted successfully.')</script>";
            } else {
                echo "<script>alert('Error uploading file.')</script>";
            }
        }
    } else {
        echo "<script>alert('No file uploaded or an error occurred.')</script>";
    }
} else {
    echo "Check Again";
}



// Close the database connection



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
                                <h4 class="card-title">Manage Question</h4>
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
                                    <!-- <form action="" method="post" enctype="multipart/form-data">
                                        <div class="row">

                                            <div class="col-md-3">
                                                <input type="file" class="form-control" name="csv_file" accept=".csv">

                                            </div>
                                            <div class="col-md-3">

                                                <input type="submit" class="btn btn-warning" name="csv_up" value="Upload CSV">
                                            </div>


                                        </div>
                                    </form> -->
                                    <p class="card-text">

                                    </p>
                                    <div class="table-responsive">
                                        <table id="manage_org" class="table table-striped table-bordered zero-configuration">
                                            <thead>
                                                <tr>

                                                    <th>S.no</th>
                                                    <th>
                                                        Orgainisation Name
                                                    </th>
                                                    <th>Class</th>
                                                    <th>Subject </th>
                                                    <th>Section </th>
                                                    <th>Exam Title</th>
                                                    <th>Exam type</th>
                                                    <th>Chapter</th>
                                                    <th>Sub Chapter</th>
                                                    <th>Question</th>
                                                    <th>Option</th>
                                                    <th>Correct Option</th>
                                                    <th>Solution</th>
                                                    <th>Marks</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>



                                                <?php

                                                $sql = "SELECT *, eq.id as eq_id
                                                FROM exam_question eq
                                                INNER JOIN chapter_sub_name sub_chap ON eq.sub_chapter_id = sub_chap.id
                                                INNER JOIN chapter ch ON sub_chap.chapter_id = ch.id
                                                INNER JOIN exam_type et ON eq.exam_type = et.id
                                                INNER JOIN sub_section sub_sec ON eq.section_id = sub_sec.id
                                                INNER JOIN subject sb ON eq.subject_id = sb.id
                                                INNER JOIN class cls ON eq.class_id = cls.id
                                                INNER JOIN exam_title ex_title ON eq.exam_id = ex_title.id
                                                INNER JOIN organisation org ON eq.org_id = org.id";
                                                $result = mysqli_query($conn, $sql);
                                               
                                                // $get_org_name= "SELECT * FROM designation
                                                // JOIN organisation ON designation.org_id =organisation.id";
                                                $i = 1;
                                                $result = mysqli_query($conn, $sql);

                                                if (!$result) {
                                                    die("Query failed: " . mysqli_error($conn));
                                                }
                                                //  print_r($get_org_name);
                                                // die();
                                                if (mysqli_num_rows($result) > 0) {
                                                    // output data of each row

                                                    while ($row = mysqli_fetch_assoc($result)) {  ?>
                                                        <tr>
                                                            <th> <?php echo $i ?></th>
                                                            <td><?php echo $row['org_name']; ?></td>
                                                            <td><?php echo $row['class']; ?></td>
                                                            <td><?php echo $row['sub_name']; ?></td>
                                                            <td><?php echo $row['section_title']; ?></td>
                                                            <td><?php echo $row['exam_name']; ?></td>
                                                            <td><?php echo $row['exam_type']; ?></td>
                                                            <td><?php echo $row['chapter_name']; ?></td>
                                                            <td><?php echo $row['chapter_sub_name']; ?></td>
                                                            <td>
                                                                <textarea name="" disabled id="" cols="30" rows="">  <?php echo $row['exam_ques']; ?></textarea>
                                                            </td>

                                                            <td>
                                                                <select class="form-control" style=" width: 163px;">
                                                                    <option value=""><?php echo $row['opt1']; ?></option>
                                                                    <option value=""><?php echo $row['opt2']; ?></option>
                                                                    <option value=""><?php echo $row['opt3']; ?></option>
                                                                    <option value=""><?php echo $row['opt4']; ?></option>
                                                                </select>
                                                            </td>
                                                            <td><?php echo $row['corect_opt']; ?></td>
                                                            <td>
                                                            <textarea name="" disabled id="" cols="30" rows="">  <?php echo $row['solution']; ?></textarea>
                                                                <?php // echo $row['solution']; ?>
                                                            
                                                            </td>
                                                            <td class="no_pd"><?php echo $row['marks'] . " " . "Marks"; ?></td>
                                                            <td>
                                                                <a href="update_designation.php?org_id=<?php echo $row['org_id']; ?>" title="Edit" class="mr-1"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                                <a href="delete_all.php?table_name=designation&id=<?php echo $row['id']; ?>" title="Delete" class=""><i class="fa fa-trash" aria-hidden="true"></i></a>

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