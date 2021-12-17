<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Resume Template</title>
</head>

<body>
	<h1>Welcome to My Resume Builder!</h1>
	<h3>Instructions: Please fill out your relevant information below:</h3>
	<form action="resume.php" method="POST">
		<p>Basic Information</p>
		<div class="form-group row">
			<label for="first" class="col-sm-2 col-form-label">First Name</label>
			<div class="col-sm-10">
				<input type="text" id="first" name="first" placeholder="First Name" required>
			</div>
		</div>
		<div class="form-group row">
			<label for="last" class="col-sm-2 col-form-label">Last Name</label>
			<div class="col-sm-10">
				<input type="text" id="last" name="last" placeholder="Last Name" required>
			</div>
		</div>

		<div class="form-group row">
			<label for="title" class="col-sm-2 col-form-label">Job Title</label>
			<div class="col-sm-10">
				<input type="text" name="title" id="title" placeholder="Developer" required>
			</div>
		</div>
		<div class="form-group row">
			<label for="phone" class="col-sm-2 col-form-label">Phone:</label>
			<div class="col-sm-10">
				<input type="tel" name="phone" id="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="123-456-7890" maxlength="12">
			</div>
		</div>
		<div class="form-group row">
			<label for="email" class="col-sm-2 col-form-label">Email</label>
			<div class="col-sm-10">
				<input type="email" name="email" id="email" placeholder="you@site.com">
			</div>
		</div>
		<div class="form-group row">
			<label for="github" class="col-sm-2 col-form-label">GitHub</label>
			<div class="col-sm-10">
				<input type="text" name="github" id="github" placeholder="github.com/you">
			</div>
		</div>
		<div class="form-group row">
			<label for="linkedin" class="col-sm-2 col-form-label">LinkedIn</label>
			<div class="col-sm-10">
				<input type="text" name="linkedin" id="linkedin" placeholder="linkedin.com/you">
			</div>
		</div>
		<div class="form-group row">
			<label for="education" class="col-sm-2 col-form-label">Education</label>
			<div class="col-sm-10">
				<input type="text" name="education" id="education" placeholder="Stanford">
			</div>
		</div>

		<p>Professional Summary</p>
		<div>
			<textarea name="summary" id="summary" cols="70" rows="5" placeholder="I am..."></textarea>
		</div>

		<p>Experiences</p>
		<div>
			<div>
				<label for="job1">Job Title</label>
				<input type="text" name="job1" id="job1" placeholder="Developer">
				<label for="company1">Company</label>
				<input type="text" name="company1" id="company1" placeholder="E-Corp">
			</div>

			<div>
				<label for="start1">Employment Dates</label>
				<input type="date" name="start1" id="start1">
				<input type="date" name="end1" id="end1">
			</div>

			<p>Accomplishments</p>
			<div>
				<label for="desc1">Accomplishment 1</label>
				<input type="text" name="desc1" id="desc1" size="70">
			</div>
			<div>
				<label for="desc2">Accomplishment 2</label>
				<input type="text" name="desc2" id="desc2" size="70">
			</div>
			<div>
				<label for="desc3">Accomplishment 3</label>
				<input type="text" name="desc3" id="desc3" size="70">
			</div>
		</div>

		<p>Skills</p>
		<fieldset class="form-group">
			<div>
				<input type="checkbox" id="html" name="skills[]" value="HTML">
				<label for="html">HTML</label>
			</div>
			<div>
				<input type="checkbox" id="css" name="skills[]" value="CSS">
				<label for="css">CSS</label>
			</div>
			<div>
				<input type="checkbox" id="python" name="skills[]" value="Python">
				<label for="python">Python</label>
			</div>
			<div>
				<input type="checkbox" id="js" name="skills[]" value="JavaScript">
				<label for="js">JavaScript</label>
			</div>
		</fieldset>
		<button>Submit</button>
	</form>
</body>

</html>