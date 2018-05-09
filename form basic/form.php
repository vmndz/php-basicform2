<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title> Sign up!</title>
<link href="style-main.css" rel="stylesheet">

</head>

<body>
<div id= "header"><img src="img/ph-header2.png" width="739" height="135"></div>
<div id="topline"></div>
<div id="mainConent">

<h1> Hello the Inside! </h1>

<form action="form-action.php" method="post" name="signup" id="signup">
<h2> Contact Information</h2>
<p>
<label for="name"> Name: </label>
<input name="name" type="text" id="name" size="68">
<label for="email"> Email: </label>
<input name="email" type="text" id="email" size="68">

</p>

<h2> Your Interests </h2>
<p> Experience level: <br>
<label><input name="level" type="radio" id="expert" value="expert"> Expert</label>

<label><input name="level" type="radio" id="decent"> Decent</label>
</p>

<p> What do you read? <br>

<label><input name="publications[]" type="checkbox" id="publications_drf" value="BuzzFeed"</label>
<br>
<label><input name="publications[] type="checkbox" id="publications_elle" value="reddit"> Reddit</label>
</p>
<p> Fun stuff; <br>
<select name="howoftentrack" id=howoftenrack">
<option value="daily"> Weekly Highlights</option>
<option value="yearly">GIFs</option>
<option value="email-reminds">Forgotten Emails</options>
</select>
</p>
<p> Tell us about yourself!<br>
<textarea name="comments" id="comments" cols="52" rows="5">
</textarea>
</p>
<input class="button lgButton" type="submit" name="submit"

id="submit" value="Sign me up!">
</form>
</div>
<div id="footer">
<a href="#">Change Your Email</a>
<a href="#"> Contact The Insider</a>
</div>
</body>
</html>

