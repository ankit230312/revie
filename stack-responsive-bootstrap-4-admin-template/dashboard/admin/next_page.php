<?php include "../common/header.php"; ?>
<?php
include "db.php";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// if (isset($_REQUEST['csv_up'])) {
//     if (isset($_FILES["csv_file"]) && $_FILES["csv_file"]["error"] == 0) {
//         // Define the path to store the uploaded CSV file
//         $upload_dir = "uploads/csv/";

//         $upload_file = $upload_dir . basename($_FILES["csv_file"]["name"]);


//         // Check if the file already exists
//         if (file_exists($upload_file)) {
//             echo "<script>alert('File already exists.')</script>";
//         } else {
//             // Move the uploaded file to the specified directory
//             if (move_uploaded_file($_FILES["csv_file"]["tmp_name"], $upload_file)) {
//                 // Process the CSV file and insert data into the database
//                 $csv_data = array_map('str_getcsv', file($upload_file));
//                     foreach ($csv_data as $row) {



//                     $sql = "INSERT INTO `exam_question`(`org_id`, `class_id`, `subject_id`, `section_id`, `chapter_id`, `exam_id`, `exam_type`, `exam_ques`, `opt1`, `opt2`, `opt3`, `opt4`, `corect_opt`, `marks`, `solution`, `status`) 
//                     VALUES ('$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$row[6]','$row[7]','$row[8]','$row[9]','$row[10]','$row[11]','$row[12]','$row[15]','$row[13]','$row[14]','$row[16]')";

//                     if ($conn->query($sql) === TRUE) {
//                         echo "<script>alert('Record inserted successfully')</script>";
//                         echo "<script>window.location.replace('manage_exam_question.php');</script>";

//                     } else {
//                         echo "Error: " . $sql . "<br>" . $conn->error;
//                     }
//                 }
//                 echo "<script>alert('File uploaded and data inserted successfully.')</script>";

//             } else {
//                 echo "<script>alert('Error uploading file.')</script>";

//             }
//         }
//     } else {
//         echo "<script>alert('No file uploaded or an error occurred.')</script>";

//     }
// }
// else{
//     echo "Check Again";
// }
// if (isset($_REQUEST['csv_upload'])) {
//     if (isset($_FILES["csv_file"]) && $_FILES["csv_file"]["error"] == 0) {
//         // Define the path to store the uploaded CSV file
//         $upload_dir = "uploads/csv/";

//         $upload_file = $upload_dir . basename($_FILES["csv_file"]["name"]);

//         // Check if the file already exists

//         // Move the uploaded file to the specified directory
//         if (move_uploaded_file($_FILES["csv_file"]["tmp_name"], $upload_file)) {
//             // Process the CSV file and insert/update data into the database
//             $csv_data = array_map('str_getcsv', file($upload_file));
//             echo "<pre>";
//             // print_r($csv_data);
//             // die();
//             // Skip the first row as it contains headers
//             $header = array_shift($csv_data);

//             // Check if the session ID is available
//             $session_id = $_SESSION['new_question_id'];

//             if (isset($session_id)) {

//                 $check = "select * from exam_question where id = $session_id}";



//                 foreach ($csv_data as $key => $row) {
//                     // Assuming 'exam_id' is column 6
//                     print_r($key);


//                     // Update the 2nd row based on 'exam_id'
//                     $sql = "UPDATE `exam_question` SET                               
//                                     `exam_ques`='$row[9]', 
//                                     `opt1`='$row[10]', 
//                                     `opt2`='$row[11]', 
//                                     `opt3`='$row[12]', 
//                                     `opt4`='$row[13]', 
//                                     `corect_opt`='$row[16]', 
//                                     `marks`='$row[14]', 
//                                     `solution`='$row[15]', 
//                                     `status`='$row[17]'
//                                     WHERE `exam_id`='$session_id'";

//                     if ($conn->query($sql) === TRUE) {
//                         echo "<script>alert('Record updated successfully')</script>";
//                     } else {
//                         echo "Error: " . $sql . "<br>" . $conn->error;
//                     }

//                     // Insert the rest of the rows
//                     $sql = "INSERT INTO `exam_question`(`org_id`, `class_id`, `subject_id`, `section_id`, `chapter_id`, `sub_chapter_id` ,`exam_id`, `exam_type`, `exam_ques`, `opt1`, `opt2`, `opt3`, `opt4`, `corect_opt`, `marks`, `solution`, `status`) 
//                              VALUES ('$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$row[6]','$row[7]','$row[8]','$row[9]','$row[10]','$row[11]','$row[12]','$row[15]','$row[13]','$row[14]','$row[16]','$row[17]')";

//                     if ($conn->query($sql) === TRUE) {
//                         echo "<script>alert('Record inserted successfully')</script>";
//                     } else {
//                         echo "Error: " . $sql . "<br>" . $conn->error;
//                     }
//                 }

//                 echo "<script>alert('File uploaded and data processed successfully.')</script>";
//                 echo "<script>window.location.replace('next.php');</script>";
//             }
//         } else {
//             echo "<script>alert('Error uploading file.')</script>";
//         }
//     } else {
//         echo "<script>alert('No file uploaded or an error occurred.')</script>";
//     }
// } else {
//     echo "Check Again";
// }

if (isset($_REQUEST['csv_upload'])) {
    if (isset($_FILES["csv_file"]) && $_FILES["csv_file"]["error"] == 0) {
        // Define the path to store the uploaded CSV file
        $upload_dir = "uploads/csv/";
        $upload_file = $upload_dir . basename($_FILES["csv_file"]["name"]);

        // Check if the file already exists
        // if (file_exists($upload_file)) {
        //     echo "<script>alert('File already exists.')</script>";
        // } 
        if ($upload_file) {
            // Move the uploaded file to the specified directory
            if (move_uploaded_file($_FILES["csv_file"]["tmp_name"], $upload_file)) {
                // Process the CSV file and insert/update data into the database
                $csv_data = array_map('str_getcsv', file($upload_file));

                // Skip the first row as it contains headers
                $header = array_shift($csv_data);

                // Check if the session ID is available
                $session_id = $_SESSION['new_question_id'];

                if (isset($session_id)) {
                    // Update the 2nd row based on 'exam_id'
                    $sql = "UPDATE `exam_question` SET                               
                            `exam_ques`=?, 
                            `opt1`=?, 
                            `opt2`=?, 
                            `opt3`=?, 
                            `opt4`=?, 
                            `corect_opt`=?, 
                            `marks`=?, 
                            `solution`=?, 
                            `status`=?
                            WHERE `id`=?";

                    $stmt = $conn->prepare($sql);
                    $insertedRecords = 0;
                    foreach ($csv_data as $key => $row) {
                        // print_r($key);
                        // echo
                        // Assuming 'exam_id' is in the last column
                        $exam_id = $row[count($row) - 1];

                        if ($key == 0) {
                            // This is the 2nd row, update it
                            $stmt->bind_param(
                                "ssssssssss",
                                $row[0],
                                $row[1],
                                $row[2],
                                $row[3],
                                $row[4],
                                $row[7],
                                $row[5],
                                $row[6],
                                $row[8],
                                $session_id
                            );

                            if ($stmt->execute()) {
                                echo "<script>alert('Record updated successfully')</script>";
                            } else {
                                echo "Error updating record: " . $stmt->error;
                            }
                        } else if ($key > 0) {

                            $get_data = "select * from exam_question where id = {$_SESSION['new_question_id']}";
                            $result = mysqli_query($conn, $get_data);

                            $i = 1;

                            if (mysqli_num_rows($result) > 0) {
                                // output data of each row

                                while ($row11 = mysqli_fetch_assoc($result)) {

                                    $sql = "INSERT INTO `exam_question`(`org_id`, `class_id`, `subject_id`, `section_id`, `chapter_id`, `sub_chapter_id`, `exam_id`, `exam_type`, `exam_ques`, `opt1`, `opt2`, `opt3`, `opt4`, `corect_opt`, `marks`, `solution`, `status`) 
                                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

                                    $stmt = $conn->prepare($sql);

                                    $stmt->bind_param(
                                        "sssssssssssssssss",
                                        $row11["org_id"],
                                        $row11["class_id"],
                                        $row11["subject_id"],
                                        $row11["section_id"],
                                        $row11["chapter_id"],
                                        $row11["sub_chapter_id"],
                                        $row11["exam_id"],
                                        $row11["exam_type"],
                                        $row[0],
                                        $row[1],
                                        $row[2],
                                        $row[3],
                                        $row[4],
                                        $row[7],
                                        $row[5],
                                        $row[6],
                                        $row[8]
                                    );

                                    if ($stmt->execute()) {
                                        $insertedRecord = array(
                                            'exam_ques' => $row[0],
                                            'opt1' => $row[1],
                                            'opt2' => $row[2],
                                            'opt3' => $row[3],
                                            'opt4' => $row[4],
                                            'corect_opt' => $row[7],
                                            'marks' => $row[5],
                                            'solution' => $row[6],
                                            'status' => $row[8]
                                        );
                                        $insertedRecordDetails[] = $insertedRecord;
                                        $insertedRecords++;
                                        // echo "<script>alert('Record inserted successfully')</script>";
                                    } else {
                                        echo "Error inserting record: " . $stmt->error;
                                    }
                                }
                            }

                            // This is not the 2nd row, insert it
                            // echo "<script>alert('Record inserted successfully')</script>";
                        }
                    }

                    // echo "<script>alert('File uploaded and data processed successfully.')</script>";
                    // echo "<script>window.location.replace('next_page.php');</script>";
                }
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
                                <h4 class="card-title">Upload question</h4>
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
                                                    <th>Organisation</th>
                                                    <th>Exam name</th>
                                                    <th>Class</th>
                                                    <th>subject</th>
                                                    <th>Section</th>
                                                    <th>Exam Type</th>
                                                    <th>Chapter</th>
                                                    <th>Sub Chapter</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php


                                                // $sql = "SELECT *, eq.id as eq_id
                                                // FROM exam_question eq
                                                // INNER JOIN chapter_sub_name sub_chap ON eq.sub_chapter_id = sub_chap.id
                                                // INNER JOIN chapter ch ON sub_chap.chapter_id = ch.id
                                                // INNER JOIN exam_type et ON eq.exam_type = et.id
                                                // INNER JOIN sub_section sub_sec ON eq.section_id = sub_sec.id
                                                // INNER JOIN subject sb ON eq.subject_id = sb.id
                                                // INNER JOIN class cls ON eq.class_id = cls.id
                                                // INNER JOIN exam_title ex_title ON eq.exam_id = ex_title.id
                                                // INNER JOIN organisation org ON eq.org_id = org.id
                                                // WHERE eq.id = {$_SESSION['new_question_id']}
                                                // ";
                                                // $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));


                                                //  $sql = "SELECT *, eq.id as eq_id
                                                //     FROM exam_question eq
                                                //     INNER JOIN chapter_sub_name sub_chap ON eq.sub_chapter_id = sub_chap.id
                                                //     INNER JOIN chapter ch ON sub_chap.chapter_id = ch.id
                                                //     INNER JOIN exam_type et ON eq.exam_type = et.id
                                                //     INNER JOIN sub_section sub_sec ON eq.section_id = sub_sec.id
                                                //     INNER JOIN subject sb ON eq.subject_id = sb.id
                                                //     INNER JOIN class cls ON eq.class_id = cls.id
                                                //     INNER JOIN exam_title ex_title ON eq.exam_id = ex_title.id
                                                //     INNER JOIN organisation org ON eq.org_id = org.id
                                                //     WHERE eq.id = {$_SESSION['new_question_id']}";

                                                $sql = "select eq.*, eq.id as eq_id,
                                                sub_chap.*,
                                                ch.*,
                                                et.*,
                                                sub_sec.* ,
                                                sb.* ,
                                                cls.* ,
                                                ex_title.* ,
                                                org.*
                                                 from
                                             exam_question eq
                                             INNER JOIN chapter_sub_name sub_chap ON eq.sub_chapter_id = sub_chap.id
                                                INNER JOIN chapter ch ON sub_chap.chapter_id = ch.id
                                                  INNER JOIN exam_type et ON eq.exam_type = et.id
                                                  INNER JOIN sub_section sub_sec ON eq.section_id = sub_sec.id
                                                  INNER JOIN subject sb ON eq.subject_id = sb.id
                                                  INNER JOIN class cls ON eq.class_id = cls.id
                                                  INNER JOIN exam_title ex_title ON eq.exam_id = ex_title.id
                                                  INNER JOIN organisation org ON eq.org_id = org.id

                                            
                                            where eq.id= {$_SESSION['new_question_id']}";


                                                $result = mysqli_query($conn, $sql);

                                                $i = 1;

                                                if (mysqli_num_rows($result) > 0) {
                                                    // output data of each row

                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        // echo "<pre>";
                                                        // print_r($row);
                                                ?>
                                                        <tr>
                                                            <th> <?php echo $row['eq_id']; ?></th>
                                                            <td><?php echo $row['org_name']; ?></td>
                                                            <td><?php echo $row['exam_name']; ?></td>
                                                            <td><?php echo $row['class']; ?></td>
                                                            <td><?php echo $row['sub_name']; ?></td>
                                                            <td><?php echo $row['section_title']; ?></td>
                                                            <td><?php echo $row['exam__type_name']; ?></td>
                                                            <td><?php echo $row['chapter_name']; ?></td>
                                                            <td><?php echo $row['chapter_sub_name']; ?></td>
                                                            <!-- <td>
                                                            <a href="update_brd.php?org_id=<?php echo $row['id']; ?>" title="Edit" class="mr-1"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                            <a href="det_brd.php?org_id=<?php echo $row['id']; ?>" title="Delete" class=""><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                        </td> -->

                                                        </tr>


                                                <?php $i++;
                                                    }
                                                } else {
                                                    echo "0 results";
                                                }


                                                ?>

                                            </tbody>

                                        </table>


                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <form action="" method="post" enctype="multipart/form-data">
                                                <div class="row">

                                                    <div class="col-md-3">
                                                        <input type="file" class="form-control" name="csv_file" accept=".csv">

                                                    </div>
                                                    <div class="col-md-3">

                                                        <input type="submit" class="btn btn-warning" name="csv_upload" value="Upload CSV">
                                                    </div>


                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="row my-5">
                                        <div class="col-md-12">
                                            <form action="" method="post" enctype="multipart/form-data">
                                                <div class="row">
                                                  
                                                    <div class="col-md-6">
                                                        <!-- Display the count of inserted records -->
                                                        <?php // if ($insertedRecords > 0) : ?>
                                                            <!-- <div class="alert alert-success">
                                                                <?php // echo "Inserted " . $insertedRecords . " records into the database."; ?>
                                                            </div> -->
                                                        <?php // endif; ?>

                                                        <!-- Display the details of inserted records in a table -->
                                                        <?php if (!empty($insertedRecordDetails)) : ?>
                                                            <h3>Inserted Record Details:</h3>
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th>exam_ques</th>
                                                                        <th>opt1</th>
                                                                        <th>opt2</th>
                                                                        <th>opt3</th>
                                                                        <th>opt4</th>
                                                                        <th>corect_opt</th>
                                                                        <th>marks</th>
                                                                        <th>solution</th>
                                                                        <th>status</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach ($insertedRecordDetails as $record) : ?>
                                                                        <tr>
                                                                            <td><?php echo $record['exam_ques']; ?></td>
                                                                            <td><?php echo $record['opt1']; ?></td>
                                                                            <td><?php echo $record['opt2']; ?></td>
                                                                            <td><?php echo $record['opt3']; ?></td>
                                                                            <td><?php echo $record['opt4']; ?></td>
                                                                            <td><?php echo $record['corect_opt']; ?></td>
                                                                            <td><?php echo $record['marks']; ?></td>
                                                                            <td><?php echo $record['solution']; ?></td>
                                                                            <td><?php echo $record['status']; ?></td>
                                                                        </tr>
                                                                    <?php endforeach; ?>
                                                                </tbody>
                                                            </table>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
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