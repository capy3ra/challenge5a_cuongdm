<html>
<body>
    <form method="POST" action="" enctype="multipart/form-data">
        Nhap: <input type='file' name="uploads"/>
        <input type="submit" name="submit" value="upload data">
    </form>

<?php 
    if(isset($_POST['submit'])){
        move_uploaded_file($_FILES['uploads']['tmp_name'], 'uploads/'.$_FILES['uploads']['name']);
        echo "<pre>";
        print_r($_FILES['uploads']);
        echo "</pre>";
        $st = "uploads/".$_FILES['uploads']['name'];
        echo "<br/><a href='$st'>Download</a>";
    }


?>



</body>


</html>