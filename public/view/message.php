<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>提示信息</title>
    <link href="https://cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
</head>
<body style="background-color: black">
<div class="jumbotron" style="text-align: center;background-color: black;margin-top: 100px">
    <h1 class="display-3"><?php echo $msg ?></h1>
    <p class="lead"><a href="<?php echo $this->url ?>"><span class="time">3</span>s之后跳转，或点此处跳转</a></p>
        <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">关于作者</a>
    </p>
</div>
<script>
    $(function(){
        setInterval(function(){
            var time = $('.time').html();
            time--;
            if(time == 0){
                location.href = '<?php echo $this->url ?>';
            }
            $('.time').html(time);
        },1000)
    })
</script>
</body>
</html>
