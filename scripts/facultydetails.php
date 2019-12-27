<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../stylesheets/signup.css">
</head>
<body>
	<h2>FILL UP YOUR DETAILS</h2>
<section class="container" class="two">

<div class="main">

	<form action="teach.php" method="post">
		<label for="first"><b>NAME</b></label>
		<input type="text" name="first" placeholder="name">
		<label for="username"><b>USERNAME</b></label>
		<input type="text" name="username" placeholder="username">
		<label for ="branch"><b>BRANCH ASSOCIATED</b></label>
		<input placeholder="Branch" class="branch" name="branch" list="branch">
  <datalist id="branch">
    <option value="CSE"></option>
    <option value="IT"></option>
    <option value="ECE"></option>
    <option value="EN"></option>
    <option value="CE"></option>
    <option value="ME"></option>
      <option value="EI"></option>
  </datalist>
	<label for="email"><b>EMAIL</b></label>
<input type="text" name="email" placeholder="email">
	<label for="eid"><b>FACULITY ID</b></label>
	<input type="text" name="eid" placeholder="">
		<label for="cor"><b>IS COORDINATOR</b></label>
		<input class="branch" name="cor" list="cor">
		<datalist id="cor">
		<option value="0"></option>
			<option value="1"></option>
		</datalist>
		<label for="cor2"><b>COORDINATED YEAR</b></label>
		<input type="text" name="cor2" placeholder="2">
		<label for="cor3"><b>COORDINATED YEAR SEC</b></label>
		<input type="text" name="cor3" placeholder="3">
		<button type="submit" name="submit" name="submit">submit</button>
	</form>
	</div>
	</section>
	</body>
</html>
