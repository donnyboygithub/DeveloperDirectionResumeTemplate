<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Resume Template</title>
</head>

<body>
	<h1>Welcome to My Resume Builder!</h1>
	<h3>Instructions: Please fill out your relevant information below:</h3>
	<form action="resume.php" method="POST">
		<p>Basic Information</p>
		<div>
			<label for="first">First Name</label>
			<input type="text" id="first" name="first" placeholder="First Name" required>
			<label for="last">Last Name</label>
			<input type="text" id="last" name="last" placeholder="Last Name" required>
		</div>

		<div>
			<label for="title">Job Title</label>
			<input type="text" name="title" id="title" placeholder="Developer" required>
		</div>
		<div>
			<div>
				<label for="phone">Phone:</label>
				<input type="tel" name="phone" id="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="123-456-7890" maxlength="12">
			</div>
			<div>
				<label for="email">Email</label>
				<input type="email" name="email" id="email" placeholder="you@site.com">
			</div>
			<div>
				<label for="github">GitHub</label>
				<input type="text" id="github" placeholder="github.com/you">
			</div>
			<div>
				<label for="linkedin">LinkedIn</label>
				<input type="text" id="linkedin" placeholder="linkedin.com/you">
			</div>
			<div>
				<label for="education">Education</label>
				<input type="text" id="education" placeholder="Stanford">
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
		<div>
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
		</div>
		<button>Submit</button>
	</form>
</body>

</html>