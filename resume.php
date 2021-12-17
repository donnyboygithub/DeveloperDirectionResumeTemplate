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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Resume</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <h3><strong><?php echo $first, ' ', $last; ?></strong></h3>
        </div>
        <div class="row">
            <p><?php echo $title; ?></p>
        </div>

        <div class="row">
            <div class="col-8">
                <div class="row">
                    <h4><strong><i class="bi bi-person-fill"></i> Professional Summary</strong></h4>
                </div>
                <div class="row">
                    <p><?php echo $summary; ?></p>
                </div>
            </div>
            <div class="col-4">
                <div class="row">
                    <strong>Detail</strong>
                </div>
                <div class="row">
                    <p><i class="bi bi-telephone-fill"></i> <?php echo $phone; ?></p>
                </div>
                <div class="row">
                    <p><i class="bi bi-envelope-fill"></i> <?php echo $email; ?></p>
                </div>
                <div class="row">
                    <p><i class="bi bi-github"></i> <?php echo $github; ?></p>
                </div>
                <div class="row">
                    <p><i class="bi bi-linkedin"></i> <?php echo $linkedin; ?></p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-8">
                <div class="row">
                    <h5><strong><i class="bi bi-briefcase-fill"></i> Employment History</strong></h5>
                </div>
                <div class="row">
                    <p><?php echo $company1; ?></p>
                </div>
                <div class="row justify-content-between">
                    <div class="col-4">
                        <p><?php echo $job1; ?></p>
                    </div>
                    <div class="col-4">
                        <p><?php echo $start1, ' - ', $end1; ?></p>
                    </div>
                </div>
                <div class="row">
                    <ul>
                        <li><?php echo $desc1; ?></li>
                    </ul>
                </div>
                <div class="row">
                    <ul>
                        <li><?php echo $desc2; ?></li>
                    </ul>
                </div>
                <div class="row">
                    <ul>
                        <li><?php echo $desc3; ?></li>
                    </ul>
                </div>
            </div>
            <div class="col-4">
                <div class="row">
                    <strong>Skills</strong>
                </div>
                <div>
                    <ul>
                        <?php if (!empty($_POST['skills'])) { ?>
                            <?php foreach ($_POST['skills'] as $value) { ?>
                                <li><?php echo $value; ?></li>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-8">
                <div class="row">
                    <h5><strong><i class="bi bi-mortarboard-fill"></i> Education</strong></h5>
                </div>
                <div>
                    <p><?php echo $education; ?></p>
                </div>
            </div>
        </div>

    </div>
</body>

</html>