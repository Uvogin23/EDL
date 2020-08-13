<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Statistics</title>
    
    <link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.css">
    <script src="/vendor/jquery/jquery.js"></script>
    <script>
        setInterval(
            function(){
                $('#content').load('<?php echo url('datafolder/data1');?>');
            },3000);
        
    </script>
</head>
<body>
       
    
    <div id="content">
        
        
        
        <div>

    <script src="{{ asset('js/app.js') }}"></script>
    
</body>
</html>