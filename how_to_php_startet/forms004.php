<?php
if (!empty($_POST)){
    echo 'Thank you!' .'<br>';
    echo 'Your name - '.$_POST['name'] .'<br>';
    echo 'Your login - '.$_POST['login'] .'<br>';
    echo  'Your email - '.$_POST['email'] .'<br>';
}

print_r($_FILES);

if (!empty($_FILES)){
    loadFile();
}

function loadFile(){
    $imagesDir = $_SERVER['DOCUMENT_ROOT'].'/php_starter/docroot/how_to_php_startet/images';
    if(is_uploaded_file($_FILES["fileName"]["tmp_name"]))
    {
        move_uploaded_file($_FILES["fileName"]["tmp_name"], "$imagesDir/".$_FILES["fileName"]["name"]);
    } else {
        echo("Ошибка загрузки файла");
    }
}

?>
<form action = "" method="post" enctype="multipart/form-data">

    <p>Your name: <input type="text" name="name"
       value="<?php if (isset($_POST['name']) && !empty($_POST['name']))
    {echo $_POST['name'];} ?>"></p>
    <br />

    <p>Your login: <input type="text" name="login"
       value="<?php if (isset($_POST['login']) && !empty($_POST['login']))
    {echo $_POST['login'];}?>"></p>
    <br />

    <p>Your email: <input type="text" name="email"
       value="<?php if (isset($_POST['email']) && !empty($_POST['email']))
        {echo $_POST['email'];}?>"></p>
    <br />

    <input type="file" name="fileName" value="">
    <br />

    <p><input type="submit" value="Send" /></p>
    <br />

    <input type="checkbox" name="remember"
     value="1"<?php if(isset($_POST['remember']) && !empty($_POST['remember']))
     {echo 'checked';} ?>> Remember me
</form>
