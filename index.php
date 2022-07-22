<?php 
    include 'lessphp/lessc.inc.php';
    include 'scssphp/scss.inc.php';
    use ScssPhp\ScssPhp\Compiler;
    
    //appelle sass
    $compiler = new Compiler();
    $contentsass = $compiler->compileString(file_get_contents('test.scss'))->getCss();
    file_put_contents('css/style.scss.css',$contentsass);

    //appel less
    $less = new lessc;
    $content = $less->compileFile("test.less");
    file_put_contents('css/style.css', $content);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test couleur</title>
    <link rel="stylesheet" href="css/style.scss.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <div class="required-field-block">
        <div class="required-icon">
            <div class="text">
                <div class="null">
                        test
                </div>
                <div class="classe">test</div>
                <div class="classe">test</div>
                <div class="classe">test</div>
                <div class="classe">test</div>
                <div class="classe">test</div>
                <div class="classe">test</div>
                <div class="classe">test</div>
                <div class="classe">test</div>
                <div class="classe">test</div>
                <div class="classe">test</div>

            </div>
        </div>
    </div>
  
</body>
</html>