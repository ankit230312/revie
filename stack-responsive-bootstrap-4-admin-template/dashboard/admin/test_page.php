<?php include "../common/header.php"; ?>

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

$get_id = $_GET['org_id'];
$sql = "SELECT * FROM exam_title WHERE id = '$get_id'";
$result = mysqli_query($conn, $sql);
$row11 = mysqli_fetch_assoc($result);

// Fetch exam questions and options based on the exam ID
$questions_sql = "SELECT * FROM exam_question WHERE exam_id = '$get_id'";
$questions_result = mysqli_query($conn, $questions_sql);

$questions = array();
while ($question_row = mysqli_fetch_assoc($questions_result)) {
    $questions[] = $question_row;
}

?>

<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-body">
            <!-- Question and options -->
            <section id="exam-section">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"><?php echo $row11['exam_name']; ?></h4>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body card-dashboard">
                                    <div class="question mb-4" id="question-container">
                                        <!-- Question and options will be updated here -->
                                    </div>
                                    <div class="timer-container" id="timer-container">
                                        Time left: <span id="timer">30</span> seconds
                                    </div>
                                    <div class="next-button-container">
                                        <button id="next-button" class="btn btn-primary">Next</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ... (rest of your content) ... -->
        </div>
    </div>
</div>
<script>
    const questions = <?php echo json_encode($questions); ?>;
    const optionsMap = {
        opt1: "a",
        opt2: "b",
        opt3: "c",
        opt4: "d"
    };
    let currentQuestionIndex = 0;
    let timerInterval;
    let questionChangeInterval;

    function displayQuestion(questionIndex) {
        const questionContainer = document.getElementById('question-container');
        const timerContainer = document.getElementById('timer-container');
        const examTitle = document.querySelector('.card-title');
        const currentQuestion = questions[questionIndex];

        examTitle.textContent = currentQuestion.exam_name;
        questionContainer.innerHTML = `
            <p>Q. ${currentQuestion.exam_ques}</p>
            <div class="options">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answer" value="opt1" id="opt1">
                    <label class="form-check-label" for="opt1">${optionsMap.opt1}. ${currentQuestion.opt1}</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answer" value="opt2" id="opt2">
                    <label class="form-check-label" for="opt2">${optionsMap.opt2}. ${currentQuestion.opt2}</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answer" value="opt3" id="opt3">
                    <label class="form-check-label" for="opt3">${optionsMap.opt3}. ${currentQuestion.opt3}</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answer" value="opt4" id="opt4">
                    <label class="form-check-label" for="opt4">${optionsMap.opt4}. ${currentQuestion.opt4}</label>
                </div>
            </div>
        `;

        let secondsLeft = 30; // Change question every 30 seconds

        function updateTimer(secondsLeft) {
            document.getElementById('timer').textContent = secondsLeft;
        }

        clearInterval(timerInterval);
        clearInterval(questionChangeInterval);
        timerInterval = setInterval(() => {
            secondsLeft--;
            if (secondsLeft <= 0) {
                clearInterval(timerInterval);
                showNextQuestion();
            } else {
                updateTimer(secondsLeft);
            }
        }, 1000);

        const radioButtons = document.querySelectorAll('input[type="radio"]');
        radioButtons.forEach(radio => {
            radio.addEventListener('click', () => {
                clearInterval(timerInterval);
                clearInterval(questionChangeInterval);
                showNextQuestion();
            });
        });
    }

    function showNextQuestion() {
        currentQuestionIndex++;
        if (currentQuestionIndex < questions.length) {
            displayQuestion(currentQuestionIndex);
            questionChangeInterval = setInterval(showNextQuestion, 30000); // Auto change question every 30 seconds
        } else {
            // All questions are done
            clearInterval(timerInterval);
            clearInterval(questionChangeInterval);
            document.getElementById('question-container').innerHTML = '<p>All questions are done!</p>';
        }
    }

    // Initial question display
    displayQuestion(currentQuestionIndex);

    // Next button functionality
    document.getElementById('next-button').addEventListener('click', () => {
        clearInterval(timerInterval);
        clearInterval(questionChangeInterval);
        showNextQuestion();
    });
</script>

<?php include "../common/footer.php"; ?>
