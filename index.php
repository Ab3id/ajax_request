<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tribes</title>
</head>
<body>
    <center>
            <input type="text" name="name" placeholder="Name"/> </br></br>
            <input type="number" name="age" placeholder="Sex"/> </br></br>
            <input type="text" name="sex" placeholder="Sex"/> </br></br>
            <label for="tribe">Tribe :</label>
            <select name="tribe" id="tribe_selecr">

            </select>
    </center>
</body>
<script src="lib/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function () {
    var sel = $('select[name="tribe"]');
   function loadTribes(){
    $.ajax({
        type: "GET",
        url : "tribes.php",
        success: function(result) {
           $.each(JSON.parse(result),function(index,value){
            sel.append("<option value=" + value + ">" + value + "</option>");
           });
            
        },
        error: function(result) {
            alert('error');
        }
    });
   }


   $("#tribe_selecr").focus(function(e) {
       e.preventDefault();
       loadTribes();
   });
});
</script>
</html>