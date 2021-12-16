<?php
// declare variables from form submission
$first = isset($_POST['first']) ? $_POST['first'] : '';
$last = isset($_POST['last']) ? $_POST['last'] : '';
$title = isset($_POST['title']) ? $_POST['title'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$github = isset($_POST['github']) ? $_POST['github'] : '';
$linkedin = isset($_POST['linkedin']) ? $_POST['linkedin'] : '';
$education = isset($_POST['education']) ? $_POST['education'] : '';
$summary = isset($_POST['summary']) ? $_POST['summary'] : '';
$job1 = isset($_POST['job1']) ? $_POST['job1'] : '';
$company1 = isset($_POST['company1']) ? $_POST['company1'] : '';
$start1 = isset($_POST['start1']) ? $_POST['start1'] : '';
$end1 = isset($_POST['end1']) ? $_POST['end1'] : '';
$desc1 = isset($_POST['desc1']) ? $_POST['desc1'] : '';
$desc2 = isset($_POST['desc2']) ? $_POST['desc2'] : '';
$desc3 = isset($_POST['desc3']) ? $_POST['desc3'] : '';
$skills = isset($_POST['skills']) ? $_POST['skills'] : '';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
</head>

<body>
    <div>
        <p><?php echo $first, ' ', $last; ?></p>
        <p><?php echo $title; ?></p>
    </div>

    <p>Detail</p>
    <div>
        <p><?php echo $phone; ?></p>
        <p><?php echo $email; ?></p>
        <p><?php echo $github; ?></p>
        <p><?php echo $linkedin; ?></p>
    </div>

    <p>Professional Summary</p>
    <div>
        <p><?php echo $summary; ?></p>
    </div>

    <p>Employment History</p>
    <div>
        <p><?php echo $company1; ?></p>
        <p><?php echo $job1; ?></p>
        <p><?php echo $start1, ' - ', $end1; ?></p>
        <p><?php echo $desc1; ?></p>
        <p><?php echo $desc2; ?></p>
        <p><?php echo $desc3; ?></p>
    </div>

    <p>Education</p>
    <div>
        <p><?php echo $education; ?></p>
    </div>

    <p>Skills</p>
    <div>
        <ul>
            <?php foreach ($_POST['skills'] as $value) { ?>
                <li><?php echo $value; ?></li>
            <?php } ?>
        </ul>
    </div>
</body>

</html>