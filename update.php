<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{
     margin:0;
    color:#6a6f8c;
     font-family: sans-serif;
     background: url(https://images.static-collegedunia.com/public/college_data/images/appImage/13911_KGRCET_New.jpg);
     font-family: sans-serif;
    background-size: cover;
    background-position: center;
     background-repeat: no-repeat;
     height: 350px;
    }
h1{
  color: orange;
}
select{
  width:300px;
  height:30px;
}
* {
  box-sizing: border-box;
}

/* Add styles to the form container */
.container {
  right: 20;
  margin: 150px;
  margin-top: 5%;
  margin-left: 37.5%;
  max-width: 350px;
  padding: 16px;
  text-align: center;
}
/* Full-width input fields */
input[type=text], input[type=text],input[type=text] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}
input[type=text]:focus, input[type=text]:focus input[type=text]:focus{
  background-color: #ddd;
  outline: none;
}
/* Set a style for the submit button */
.btn {
  background-color:orange;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 90%;
  opacity: 0.9;
}
.btn:hover {
  opacity: 5;
}
.day{
  font-size: 25px;
  color: black;
}
.hour{
  font-size: 25px;
  color: black;
}
.subject{
  font-size: 25px;
  color: black;
}
</style>
</head>
<body>
<div class="bg-img">
  <form  class="container" method="POST" action="dbupdate.php">
  <label for="Enter Day" class="day"><b><strong>Day</strong></b></label>
  <select name="Day" id="Day">
  <option value="Monday">Monday</option>
  <option value="Tuesday">Tuesday</option>
  <option value="Wednesday">Wednesday</option>
  <option value="Thursday">Thursday</option>
  <option value="Friday">Friday</option>
  <option value="Saturday">Saturday</option>
  </select>
  <br>
  <br>
  <label for="Enter Hour" class="hour"><b><strong>Hour</strong></b></label>
  <select name="N" id="Hour">
  <option value="1st">1st</option>
  <option value="2nd">2nd</option>
  <option value="3rd">3rd</option>
  <option value="4th">4th</option>
  <option value="5th">5th</option>
  <option value="6th">6th</option>
  </select>
  <br>
  <br>
  <label for="Enter Subject" class="subject"><strong>Subject</strong></label>
  <select name="Subject" id="Subject">
  <option value="WT">WT</option>
  <option value="FLAT">FLAT</option>
  <option value="PE-1">PE-1</option>
  <option value="PE-2">PE-2</option>
  <option value="CN">CN</option>
  <option value="SE">SE</option>
  </select>
  <br>
  <br>
  <button type="Submit" class="btn">Update</button>
  </form>
  </div>
 </body>
</html>