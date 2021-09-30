<!DOCTYPE html>
<head>
    <title></title>
</head>
<style>
    body {
        background: -webkit-gradient(linear,left top, left bottom,from(yellow), to(red)) fixed;
    }
    form{
        text-align: center;
    }
    .content {
        max-width: 500px;
        margin: auto;
       /*background: white;*/
        padding: 10px;
    }
    h1{
       /* border: 2px solid red;*/
        background: linear-gradient(to right,red,blue,lightgreen,purple);
        /*outline: 5px dashed red;*/
    }
    #myDIV {
        width: 500px;
        height: 320px;
        outline: 1px solid red;
        animation: mymove 2s infinite;
    }

    @keyframes mymove {
        50% {outline: 10px solid gold;}
    }
</style>
<body>
<div class="content">
    <h1 style="text-align: center; color: yellow"; >REGISTRATION FORM</h1>
    <div id="myDIV">
<form>
<table
    <tr>
        <td>Enter Your Name</td>
        <td><input type="text" name="Name" required="" autocomplete="off" placeholder="Your First Name"
                   autofocus=""></td>
    </tr>
    <tr>
        <td>Enter Your Password</td>
        <td><input type="number" name="Password" required="" placeholder="Your Password"></td>
    </tr>
    <tr>
        <td>Enter Your Contact</td>
        <td><input type="number" name="Contact" required="" placeholder=" Your Contact"></td>
    </tr>
    <tr>
        <td>Enter Your Email</td>
        <td><input type="email" required="" placeholder="Your Email"></td>
    </tr>
    <tr>
        <td>Choose Your Gender</td>
        <td>Male<input type="radio" name="gender" value="male">Female<input type="radio" name="gender" value="female">
        </td>
    </tr>

    <td>
        Cricket<input type="checkbox" name="x" value="h1">
        Football<input type="checkbox" name="x" value="h2">
        Music<input type="checkbox" name="x" value="h3">
    </td>
    </tr>
    <tr>
        <td>Enter Your Address</td>
        <td><textarea></textarea></td>
    </tr>
    <tr>
        <td>
            Enter Your D.O.J.
        </td>
        <td><input type="date" placeholder="Select Date" </td>
    </tr>
    <tr>
        <td>Choose Your DP</td>
        <td><input type="file" name="" placeholder="Choose File" </td>
    </tr>
    <tr>
        <td>Select Your Subjects
            <select>

                <option value="" selected="" disabled="">Choose Your Subject</option>
                <option value="1">Java</option>
                <option value="2">C++</option>
                <option value="3">Python</option>
                <option value="4">Ruby</option>
                <option value="5">Hack</option>
            </select></td>
    </tr>
    <tr>
        <td>
            <input type="submit" name="save" value="save">
            <input type="reset" name="reset" value="reset">
        </td>
    </tr>
</table>
</form>
    </div>
</div>
</body>
</html>
