<!DOCTYPE html>
<html>
    <head>
        <title>ERROR</title>
    </head>
    <body>
        <p>This is ERROR page</p>
        <br>
        <b>code:</b>
        <p><?php echo $error->getCode() ?></p>
        <b>description:</b>
        <p><?php echo $error->getDescription() ?></p>
        <b>message:</b>
        <p><?php echo $error->getMessage() ?></p>
    </body>
</html>
