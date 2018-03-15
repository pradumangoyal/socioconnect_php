<!DOCCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<head>
<title>FORM-VALIDATION</title>
<link href="./style.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<body>
<form name="my_form" action="" method=post id="my_form">
<span id="key">Username: </span>
<input name="uname" type=text placeholder="Enter a Username" onkeyup="check()" id="uname" onChange="unameval()">
<span id="user-availability-status"></span>
<span id="uname-error" class="error"></span>
<BR>
<span id="key">Name: </span>
<input name="name" type=text placeholder="Enter Your Name" onchange="nameval()" id="name">
<span id="name-error" class="error"></span>
<BR>
<span id="key">Phone Number:</span>
<input type="text" name="phone" placeholder="Enter Your Mobile Number" onchange="phoneval()" required="yes" id="phone">
<span id="phone-error" class="error"></span>
<BR>
<span id="key">Age:</span>
<input name="phone" type=text placeholder="Enter Your Age" onchange="ageval()" id="age">
<span id="age-error" class="error"></span>
<BR>
<span id="key">Gender:</span>
<input name="gender" onchange="genval()" type="radio" value="male" id="gender"><span>MALE</span><input name="gender" type="radio" value="female" onchange="genval()" id="gender"><span>FEMALE</span>
<span id="gender-error" class="error"></span>
<BR>
<span id="key">E-mail: </span>
<input name="E-mail" type=text placeholder="Enter Your E-mail" onchange="eval()" id="email">
<span id="email-error" class="error"></span>
<BR>
<span id="key">Password: </span>
<input name="pwd" type=password placeholder="Enter Your Password" required="yes" id="pwd" onchange="pval()" value="">
<span id="pwd-error" class="error"></span>
<BR>
<span id="key">Re-type Password: </span>
<input name="r-pwd" type=password placeholder="Confirm Password" onchange="repval()" id="r-pwd">
<span id="rpwd-error" class="error"></span>
<BR>
<input type="submit" value="SUBMIT">
</form>
<script type="text/javascript" src=./scripts.js></script>
</body>
</html>

