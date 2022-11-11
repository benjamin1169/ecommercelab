<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<!-- //form action is useless if you are using javascript -->
<form action="../actions/collectme.php">
<!-- <select name="mycat" id="mycat">
        <option value="1">Cat 1</option>
        <option value="2">Cat 2</option>
        <option value="3">Cat 3</option>
        <option value="4">Cat 4</option>
        <option value="5">Cat 5</option>
    </select>

    <select name="mybrand" id="mybrand">
        <option value="1">Brand 1</option>
        <option value="2">Brand 2</option>
        <option value="3">Brand 3</option>
        <option value="4">Brand 4</option>
        <option value="5">Brand 5</option>
    </select> -->


    <input type="text" name="ptitle" id="ptitle">
    <input type="text" name="pprice" id="pprice">
    <input type="text" name="pdesc" id="pdesc">
    <input type="text" name="pkeyword" id="pkeyword">
    <input type="submit" value="finalme" id="finalme" onclick="callMeforaJAX()">
</form>
</body>
</html>


<!-- 
<form action="">
    <input type="text" name="newname">
    <input type="text" name="lookforme">
    <input type="submit" value="Final me">
</form> -->

<!-- <script type="text/javascript">
    function callMeforAjax(){
         //stop the form from submitting 
    event.preventDefault();

     // collect form data
     let myname = document.getElementById('ptitle').value;
     let mydrop = document.getElementById('mybrand').value;

     //send the http request to the action page for processing 
        alert(mydrop);
        }


</script> -->