
<html>
<head>
<title>
Bio data
</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<!-- Form starts -->
<form action="other_page.php" method= "post">
<h1>Bio-Data</h1>
Name:<br><input type ="text" name = "first_name" placeholder="First Name" required><br>
 <!-- Last Name:<br><input type ="text" name = "last_name" placeholder="Last Name" required Master_dipanakr><br> -->
 Date of Birth:<br> <input type ="date" name="birthday" required><br>
 Email:<br><input type ="email" name = "email_address" placeholder="example@email.com" required><br>
 Gender:<input type = "radio" name = "gender" value ="m" required="required"> Male
            <input type = "radio" name = "gender" value ="f"> Female
		    <input type = "radio" name = "gender" value ="o"> Others<br>
<!-- Religion Fill -->
Religion:<select name= "religion" required = "required">
            <option value="select_any" selected disabled>Please Select</option>
           <option value = "H" required = "required"> Hindu </option>
		   <option value ="I" required = "required"> Islam</option>
		   <option value = "C" required = "required"> Christian</option>
		   </select><br>
<!-- Cast Fill -->
Caste:<input type = "radio" name = "caste" value ="General" required="required"> General
           <input type = "radio" name = "caste" value ="OBC"> OBC
           <input type = "radio" name = "caste" value ="ST"> ST
	       <input type = "radio" name = "caste" value ="SC"> SC<br>
Fathers Name:<br><input type ="text" name = "F_name" placeholder="Full Name" required><br>
Mothers Name:<br><input type ="text" name = "M_name" placeholder="Full Name" required><br>
Language known:<input type = "checkbox" name = "language" value ="E"required="required"> English
               <input type = "checkbox" name = "language" value ="H"> Hindi
			   <input type = "checkbox" name = "language" value ="A" required="required"> Assamese<br>
<!-- Course Fill -->
Course:<input type = "checkbox" name = "course" value ="HS" required="required"> HS
        <input type = "radio" name = "course" value ="B.Sc"> B.Sc
        <input type = "radio" name = "course" value ="BA"> BA
        <input type = "radio" name = "course" value ="B.Com">B.Com
        <input type = "radio" name = "course" value ="BCA" required>BCA<br>
<!-- Address Fill -->
<h2>Address:</h2>
<input type ="text" name = "street_address" placeholder="Street Address" required><br>
<br><input type ="text" name = "street_address2" placeholder="Street Address Line 2"><br>
<br><input type ="text" name = "City" placeholder="City">  <input type ="text" name = "State" placeholder="State"><br>
<br><input id ="zip" type="text" name = "Pin_code" maxlength="6" pattern="[0-9]*" placeholder="Pin Code" required><br>
<br>Contact No:<br><input type ="tel" name = "phone" maxlength="10" pattern="[0-9]*" placeholder="(+91)Enter Your Number" required><br>
<!-- Submit & Reset input buttons -->
<br><input type ="submit" value = "Submit Form">
    <input type ="reset" name = "reset"><br>
</form>
<!-- Form ends -->
<button onclick= "location.href='search.php';">Search</button>
</body>
</html>