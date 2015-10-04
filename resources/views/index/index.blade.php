<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Rainy mood</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        body {
            background: url(/img/index.jpg) no-repeat;
            background-size: 100% auto;
        }

        #title {
            color: #FFF;
        }
        #container{
            margin-top: 170px;
            text-align: center;
        }
        #change_volume{
            margin:0 auto;
        }
    </style>
</head>
<body>

{{--<audio autoplay="ture" loop="true">--}}
{{--<source src="/music/RainyMood.mp3" />--}}
{{--</audio>--}}

    <div id="jquery_jplayer_1"></div>

    <div id="container">
        <h1 id="title">rain makes everything better.</h1>

        <div><img id="change_volume" src="/img/volume/vol3.png" /></div>
    </div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!-- jplayer -->
<script src="/js/jquery.jplayer.min.js"></script>
<script>
    $(document).ready(function () {
        var vol=3;
        var jp = $('#jquery_jplayer_1');

        jp.jPlayer({
            ready: function () {
                $(this).jPlayer('setMedia', {
                    mp3: '/music/RainyMood.mp3'
                }).jPlayer('play');
            },
            swfPath: 'swf',
            supplied: 'mp3',
            loop: 'true',
            volume: 1.0
        });

        $('#change_volume').click(function(){

            vol++;
            vol=vol>3?0:vol;
            switch (vol){
                case 3:
                    $('#change_volume').attr('src', '/img/volume/vol3.png');
                    jp.jPlayer('volume', 1.0);
                    break;
                case 2:
                    $('#change_volume').attr('src', '/img/volume/vol2.png');
                    jp.jPlayer('volume', 0.7);
                    break;
                case 1:
                    $('#change_volume').attr('src', '/img/volume/vol1.png');
                    jp.jPlayer('volume', 0.3);
                    break;
                case 0:
                    $('#change_volume').attr('src', '/img/volume/vol0.png');
                    jp.jPlayer('volume', 0);
                    break;
            }
        });
    });
</script>


</body>
</html>