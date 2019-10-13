<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
</head>
<body>
    <?php
               if(isset($success)){
                  echo $success;
               }
            ?>
    <form action="./contact" method="post">
        <fieldset class="form-group">
            <label for="formGroupExampleInput">name</label>
            <input name="_token" type="hidden" class="form-control" id="formGroupExampleInput" value="<?= csrf_token() ?>" >
            <input name="name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input" <?php if (isset($name)) {
                echo 'value="'.$name.'"';
            } ?>>
        </fieldset>
        <fieldset class="form-group">
            <label for="formGroupExampleInput2">title</label>
            <input name="title" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Example input">
        </fieldset>
        <fieldset class="form-group">
            <label for="formGroupExampleInput2">email</label>
            <input name="email" type="email" class="form-control" id="formGroupExampleInput2" placeholder="Example input" <?php if (isset($email)) {
                echo 'value="'.$email.'"';
            } ?>>
        </fieldset>
        <fieldset class="form-group">
            <label for="formGroupExampleInput2">message</label>
            <textarea name="message" row = "5"></textarea>
        </fieldset>
         <fieldset class="form-group">
            <input type="submit" value="Gui">
        </fieldset>
    </form>
</body>
</html>
