<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Portfolio Creater</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<!-- CSS -->
<style>
    html, body {
    margin:0px;
    height:100%;
    }
    img
    {
        height: 100%;
        width: 100%;
    }
    .leftPanel
    {
        width: 50%;
    }
    .code
    {
        width: 50%; 
    }
    .whole{
        display: flex;
        position:fixed;

        width: 100%;
        height: 100%;
    }
    .check
    {
        padding-top: 30%;
        padding-left: 20%;
        height: 40%;
    }
    .c{
        position: absolute;
    }
    .another
    {
        display: flex;
        padding-left: 20%;
    }
    p{
        padding-right: 10%;
    }
    @media screen and (max-width: 1008px) {
        .check{
            padding-left: 20px;
        }
        .another
        {
            padding-left: 0%;
        }
    }
    @media screen and (max-width: 1018px) {
        .check{
            padding-left: 20px;
        }
        .another
        {
            padding-left: 10%;
        }
    }
    @media screen and (max-width: 645px) {
        #vc
        {
            width: 50%;
        }
    }
    @media screen and (max-width: 920px) {
        .check{
            padding-left: 0%;
        }
        .another
        {
            padding-left: 0%;
        }
    }
</style>
</head>
<body>
    <div class="whole">
        <div class="leftPanel">
            <img src="./images/ver.png">
        </div>
        <div class="code">
            <div class="check">
                <div class="alert alert-success c" role="alert">
                    Verfication code has been sent to your registered email
                  </div>
            </div>
            <div class="another">
                <p>Verification code</p>
                <input type="text" id="vc">
            </div>
        </div>
    </div>
</body>
</html>