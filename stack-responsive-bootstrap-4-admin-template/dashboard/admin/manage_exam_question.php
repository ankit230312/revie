<?php include "../common/header.php";
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rivi";

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
                                                    <th>Question</th>
                                                    <th>Option</th>
                                                    <th>Correct Option</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                               

                                                <?php
                                                
                                                $sql = "SELECT org.*, class.*, subject.*, sub_section.*, exam_title.*, exam_question.* FROM exam_question
                                                 JOIN organisation AS org ON exam_question.org_id = org.id
                                                  JOIN class ON exam_question.class_id = class.id 
                                                  JOIN subject ON exam_question.subject_id = subject.id 
                                                  JOIN sub_section ON exam_question.section_id = sub_section.id
                                                  JOIN exam_title ON exam_question.exam_id = exam_title.id;";
                                                $result = mysqli_query($conn, $sql);
                                                // $get_org_name= "SELECT * FROM designation
                                                // JOIN organisation ON designation.org_id =organisation.id";
                                                $i = 1;

                                                //  print_r($get_org_name);
                                                // die();
                                                if (mysqli_num_rows($result) > 0) {
                                                    // output data of each row

                                                    while ($row = mysqli_fetch_assoc($result)) { ?>
                                                        <tr>
                                                            <th> <?php echo $i++ ?></th>
                                                            <td><?php echo $row['org_name']; ?></td>
                                                            <td><?php echo $row['class']; ?></td>
                                                            <td><?php echo $row['sub_name']; ?></td>
                                                            <td><?php echo $row['section_title']; ?></td>
                                                            <td><?php echo $row['exam_name']; ?></td>
                                                            <td><?php echo $row['exam_type']; ?></td>
                                                            <td>
                                                                <textarea name="" disabled id="" cols="30" rows="">  <?php echo $row['exam_ques']; ?></textarea>
                                                            </td>

                                                            <td>
                                                                <select class="form-control" style=" width: 163px;" >
                                                                    <option value=""><?php echo $row['opt1']; ?></option>
                                                                    <option value=""><?php echo $row['opt2']; ?></option>
                                                                    <option value=""><?php echo $row['opt3']; ?></option>
                                                                    <option value=""><?php echo $row['opt4']; ?></option>
                                                                </select>
                                                            </td>
                                                        <td><?php echo $row['corect_opt']; ?></td>
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
                                            <tfoot>
                                                <tr>
                                                <th>S.no</th>
                                                    <th>Exam Tilte</th>
                                                    <th>Question</th>
                                                    <th>Option</th>
                                                    <th>Correct Option</th>
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