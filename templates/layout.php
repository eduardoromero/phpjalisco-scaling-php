<!DOCTYPE html>
<html>
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properties -->
    <title>PHP Jalisco - Scaling PHP Example</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.10/semantic.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/semantic-ui/2.2.10/semantic.min.js"></script>


    <style type="text/css">
        body {
            background-color: #FFFFFF;
        }

        .ui.menu .item img.logo {
            margin-right: 1.5em;
        }

        .main.container {
            margin-top: 7em;
            min-height: 40vh !important;
            margin-bottom: 7em;
        }

        .ui.footer.segment {
            bottom: 0;
            position: fixed;
            width: 100% !important;
            margin: 5em 0em 0em;
            padding: 5em 0em;
        }
    </style>

</head>
<body>

<div class="ui fixed inverted menu">
    <div class="ui container">
        <a href="#" class="header item">
            PHP Jalisco
        </a>
        <a href="#" class="item">Home</a>
    </div>
</div>

<div class="ui main container">
    <?= $this->section('content'); ?>
</div>

<div class="ui inverted vertical footer segment">
    <div class="ui center aligned container">

        <div class="ui horizontal inverted small divided link list">
            <p><?php echo date('Y'); ?> &copy; Eduardo Romero</p>
        </div>
    </div>
</div>
</body>

</html>