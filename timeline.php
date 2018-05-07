<?php include('pageheader.html'); ?>

<?php
$rows = array(
              // array("", "Event at 2018", "Description of event at 2018", "img/team/peijie.jpg"),
              // array("2017", "Event at 2017", "Description of event at 2017", "img/team/no-image.jpg"),
              // array("2017", "Event at 2017", "Description of event at 2017", "img/team/no-image.jpg"),
              // array("2017", "Event at 2017", "Description of event at 2017", "img/team/no-image.jpg"),
              // array("2017", "Event at 2017", "Description of event at 2017", "img/team/no-image.jpg"),
              // array("2017", "Event at 2017", "Description of event at 2017", "img/team/no-image.jpg"),
              array("1958-1963", "Dr. Gerry Combs", "Professor, Dr. Gerry Combs, develops the nutritional principle of calorie:protein ratio and later calorie:amino acid ratios for use in commercial broiler diets. Rapid adoption of this principle along with the use of least cost diet formulation spurs the development of the poultry industry on Maryland’s Eastern Shore.", "img/team/no-image.jpg"),
              array("1947", "Maryland Artificial Breeders Cooperative", "Maryland Artificial Breeders Cooperative (MABC) founded. MABC is one of 10 founding cooperatives that form Select Sire, an international dairy artificial insemination bull stud.", "img/team/no-image.jpg"),
              array("1937", "Depression era", "New campus livestock facilities constructed through Depression era “Works Progress Administration Program.” The last remaining buildings form the current “Campus Farm.”", "img/team/no-image.jpg"),
              array("1914", "Smith-Lever Act", "Smith-Lever Act encourages land-grant colleges to establish community education programs in agriculture and home economics. Results in formation of the Maryland Cooperative Extension Service.", "img/team/no-image.jpg"),
              array("1888", "Hatch Act", "Congress passes Hatch Act creating federally funded agricultural experiment stations. Maryland Agricultural Experiment Station established using The Rossborough Inn as its first headquarters. ", "img/team/no-image.jpg"),
              array("1864", "Land Grant Act", "President Lincoln signs the Morrill Land Grant Act providing federal support for state colleges to teach agriculture, mechanical arts and military tactics. According to formula, Maryland receives 210,000 acres of “Western” land under this legislation", "img/team/no-image.jpg"),

              array("1862", "Public Land for Agricultural Education", "Land Grant Act provides public lands for universities to teach agriculture7", "img/team/no-image.jpg"),
              array("1861-1865", "Civil War", "Before the war, pork was the most popular meat (mainly due to ease of storage), but beef became the most popular meat after the war because of refrigeration. ", "img/team/no-image.jpg"),
              array("1760", "Breeding Animals", "Robert Bakewell, England, began breeding animals for a purpose, created different types", "img/team/no-image.jpg"),
              array("1641", "First Meatpacker", "William Pynchon, Massachusetts, was first meatpacker exporting salt pork", "img/team/no-image.jpg"),
              array("1539", "DeSoto: horses", "DeSoto brought horses and hogs to Florida", "img/team/no-image.jpg"),
              array("1519", "Cattle + Sheep", "Cortez brought cattle and sheep to Mexico", "img/team/no-image.jpg"),
              array("1943", "Livestock", "Columbus brought livestock to the West Indies", "img/team/peijie.jpg"));
?>

<!DOCTYPE html>
<html class="no-js">
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