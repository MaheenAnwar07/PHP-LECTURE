<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <input type="text" id="text">
    <h1 id="result"></h1>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function(){
        $("#text").keydown(function(){
            var text = $("#text").val();
            var result = $("#result");
            result.html(text);
        })
    })
    // $(document).ready(funtion(){
    //     $("#text").keyup(function(){
    //         var text = $("#text").val();
    //         var result = $("#reslut");
    //         result.html(text);
    //     })
    // })
</script>
</body>
</html>