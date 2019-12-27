
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../stylesheets/signup.css">
</head>
<body>
<div class="hh">
<h1>WELCOME TO CORRESPONADANCE WORLD </h1>
	<h2>FILL UP YOUR DETAILS</h2>
	</div>
<section class="container" class="two">

<div class="main">

	<form action="register.php" method="post">
		<label for="first"><b>NAME</b></label>
	<input type="text" name="first" placeholder="name" required>
		<label for="session"><b>SESSION</b></label>
		<input type="text" name="session" placeholder="session" required>
		
			<label for="branch"><b>BRANCH</b></label>
  <input placeholder="Branch" class="branch" name="branch" list="branch" required>
  <datalist id="branch">
    <option value="CSE"></option>
    <option value="IT"></option>
    <option value="ECE"></option>
    <option value="EN"></option>
    <option value="CE"></option>
    <option value="ME"></option>
      <option value="EI"></option>
  </datalist>
		<label for="phno"><b>MOBILE NUMBER</b></label>
		<input type="text" name="phno" placeholder="mobile number" required>
		
		<label for="dob"><b>DOB</b></label>
		<input type="date" name="dob" placeholder="date of birth" required>
			<label for="sem"><b>SEMESTER</b></label>
		<input type="text" name="sem" placeholder="semester" required>
			<label for="sec"><b>SECTION</b></label>
		<input type="text" name="sec" placeholder="section" required>
			<label for="add"><b>ADDRESS</b></label>
		<input type="text" name="add" placeholder="address" required>
			<label for="rno"><b>Roll no</b></label>
		<input type="text" name="rno" placeholder="roll number" required>
		
		
		
		
		
		
		<label for="email"><b>EMAIL</b></label>
	<input type="text" name="email" placeholder="E-mail">	
		
		<label for="pwd"><b>PASSWORD</b></label>
		<input type="password" name="apwd" placeholder="password">	
		 
		<button type="submit" name="submit" name="submit">submit</button>
	</form>

	</div>

</section>
	</body>
</html>
