<?php include('pageheader.html'); ?>

<?php
$rows = array(array("2018", "Event at 2018", "Description of event at 2018", "img/team/peijie.jpg"),
              array("2017", "Event at 2017", "Description of event at 2017", "img/team/no-image.jpg"),
              array("2016", "Event at 2016", "Description of event at 2016", "img/team/peijie.jpg"));
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Timeline</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/main.css">
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div class="container">
            <div class="over-wrap-index">
                <div id="wrap-index" class="wrap-index">
                    <ul id="index" class="index">
                        <?php foreach ($rows AS $v): ?>
                            <li><a href="#"><?php echo $v[0]; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="over-wrap-list">
                <div id="wrap-list" class="wrap-list">
                    <ul id="list" class="list">
                      <?php foreach ($rows AS $v): ?>
                            <li>
                                <div class="image"><img src="<?php echo $v[3]; ?>"></div>
                                <div class="content">
                                    <div class="title"><?php echo $v[1]; ?></div>
                                    <p><?php echo nl2br($v[2]); ?></p>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <a class="prev" href="#" data-toggle="prev"><i class="fa fa-angle-left"></i><a>
                <a class="next" href="#" data-toggle="next"><i class="fa fa-angle-right"></i><a>
            </div>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/main.js"></script>

    </body>
</html>

<!-- <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
    box-sizing: border-box;
}

body {
    background-color: #474e5d;
    font-family: Helvetica, sans-serif;
}

/* The actual timeline (the vertical ruler) */
.timeline {
    position: relative;
    max-width: 1200px;
    margin: 0 auto;
}

/* The actual timeline (the vertical ruler) */
.timeline::after {
    content: '';
    position: absolute;
    width: 6px;
    background-color: white;
    top: 0;
    bottom: 0;
    left: 50%;
    margin-left: -3px;
}

/* Container around content */
.container {
    padding: 10px 40px;
    position: relative;
    background-color: inherit;
    width: 50%;
}

/* The circles on the timeline */
.container::after {
    content: '';
    position: absolute;
    width: 25px;
    height: 25px;
    right: -17px;
    background-color: white;
    border: 4px solid #FF9F55;
    top: 15px;
    border-radius: 50%;
    z-index: 1;
}

/* Place the container to the left */
.left {
    left: 0;
}

/* Place the container to the right */
.right {
    left: 50%;
}

/* Add arrows to the left container (pointing right) */
.left::before {
    content: " ";
    height: 0;
    position: absolute;
    top: 22px;
    width: 0;
    z-index: 1;
    right: 30px;
    border: medium solid white;
    border-width: 10px 0 10px 10px;
    border-color: transparent transparent transparent white;
}

/* Add arrows to the right container (pointing left) */
.right::before {
    content: " ";
    height: 0;
    position: absolute;
    top: 22px;
    width: 0;
    z-index: 1;
    left: 30px;
    border: medium solid white;
    border-width: 10px 10px 10px 0;
    border-color: transparent white transparent transparent;
}

/* Fix the circle for containers on the right side */
.right::after {
    left: -16px;
}

/* The actual content */
.content {
    padding: 20px 30px;
    background-color: white;
    position: relative;
    border-radius: 6px;
}

/* Media queries - Responsive timeline on screens less than 600px wide */
@media screen and (max-width: 600px) {
  /* Place the timelime to the left */
  .timeline::after {
    left: 31px;
  }
  
  /* Full-width containers */
  .container {
    width: 100%;
    padding-left: 70px;
    padding-right: 25px;
  }
  
  /* Make sure that all arrows are pointing leftwards */
  .container::before {
    left: 60px;
    border: medium solid white;
    border-width: 10px 10px 10px 0;
    border-color: transparent white transparent transparent;
  }

  /* Make sure all circles are at the same spot */
  .left::after, .right::after {
    left: 15px;
  }
  
  /* Make all right containers behave like the left ones */
  .right {
    left: 0%;
  }
}
</style>
</head>
<body>

<div class="timeline">
  <div class="container left">
    <div class="content">
      <h2>2017</h2>
      <p>Event</p>
    </div>
  </div>
  <div class="container right">
    <div class="content">
      <h2>2016</h2>
      <p>Event</p>
    </div>
  </div>
  <div class="container left">
    <div class="content">
      <h2>2015</h2>
      <p>Event</p>
    </div>
  </div>
  <div class="container right">
    <div class="content">
      <h2>2012</h2>
      <p>Event</p>
    </div>
  </div>
  <div class="container left">
    <div class="content">
      <h2>2011</h2>
      <p>Event</p>
    </div>
  </div>
  <div class="container right">
    <div class="content">
      <h2>2007</h2>
      <p>Event</p>
    </div>
  </div>
</div>

</body>
</html> -->