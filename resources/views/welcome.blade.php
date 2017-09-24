<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ZainCash</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-inverse navbar-static-top" style="margin: 0px;">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">
                <img alt="Brand" src="/2.jpg" width="80px" height="50px" style="margin-top: -16px">
            </a>
        </div>
    </div>
</nav>
<div class="content">
    <img src="/banner.jpg" width="100%" height="500px" style="background-size: contain;background-repeat: no-repeat">
    <div class="row">
        <div class="text-center col-md-8 col-md-offset-2">
            <h1 class="text-center">Sending a birthday sms to the customers</h1>
            <br><br><br>
            <div>
                @if($reserves != null)
                    @foreach($reserves as $reserve)
                        {{ $reserve }}
                    @endforeach
                @endif
            </div>

            <form action="/sms" method="get">
                <button type="submit" class="btn btn-danger">Send Sms</button>
            </form>
        </div>
    </div>
</div>

<script
        src="http://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

</body>
</html>