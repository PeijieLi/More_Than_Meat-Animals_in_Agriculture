<?php include('pageheader.html'); ?>

<?php
$rows = array(
              array("2011-2016", "Animal Abuse in Industrial Farms", "After undercover investigations spark public outrage over animal abuse on industrial farms, several American states introduce 'ag-gag' laws in an effort to criminalize such investigations", "img/timeline/2011.jpg"),
              array("2008", "battery cages? Yes or No", "California passes a ballot measure requiring that a chicken 'be able to extend its limbs fully and turn around freely'. This has been described as a ban on battery cages, but battery cages giving 116 square inches per hen are allowed under the law.", "img/timeline/2008.jpg"),
              array("2007", "2007 Amendment to the Animal Welfare Act", "President George W. Bush signed the Animal Fighting Prohibition Act on May 3, 2007. This bill amends the AWA to prohibit knowingly selling, buying, transporting, or delivering, in interstate or foreign commerce, a knife, a gaffe, or any other sharp instrument for attachment to the leg of a bird for use in an animal fighting venture.", "img/timeline/2007.jpeg"),
              
              array("2002", "Florida baned gestation crates.", "Florida becomes the first state to ban gestation crates.", "img/timeline/2002.jpg"),
              array("1976", "Animal Liberation Front", "Released from prison, Ronnie Lee founds the Animal Liberation Front in Britain, which soon spreads to the US. ALF activists see themselves as a modern-day Underground Railroad, removing animals from laboratories and farms, destroying facilities, arranging safe houses and veterinary care, and operating sanctuaries where the animals subsequently live.", "img/timeline/1976.png"),
              array("1976", "1976 Amendment to the Animal Welfare Act", "On April 22, 1976, the bill was signed into law by President Gerald Ford. In addition to outlawing the interstate or foreign transport of animals used in fighting ventures, the bill also refined standards for transporting animals and expanded upon the definition of a “carrier.” “Carrier” now meant any enterprise transporting regulated animals and required these transporters to be licensed.", "img/timeline/1976_2.jpg"),
              array("1970", "1970 Amendment to the Animal Welfare Act", "President Richard Nixon signed the 1970 amendments on December 24, 1970. USDA’s jurisdiction expanded by changing the definition of ‘animal’ and the scope of animals covered. First, the AWA was expanded to include all warm-blooded laboratory animals, removing the earlier narrow focus on six species. Furthermore, coverage no longer depended on the animals crossing state lines. In-state and interstate transported animals all now fell under USDA’s oversight.", "img/timeline/1970.jpg"),
              array("1966", "First Laboratory Animal Welfare Act", "Two popular magazines, Life and Sports Illustrated, published very revealing articles on the procurement process for finding and delivering dogs for biomedical research, stimulating a public outcry which eventually led to the first Laboratory Animal Welfare Act", "img/timeline/1966.jpg"),
              array("1958", "Humane Slaughter Act is passed", "A United States federal law designed to decrease suffering of livestock during slaughter.\n The most notable of these requirements is the need to have an animal completely sedated and insensible to pain. This is to minimize the suffering to the point where the animal feels nothing at all, instead losing a consciousness from which they will never awaken.", "img/timeline/1958.jpg"),
              array("1955", "SAPL", "The Society for Animal Protective Legislation (SAPL), the first organization to lobby for humane slaughter legislation in the US, is founded.", "img/timeline/1955.svg"),
              array("1914", "Smith-Lever Act", "Smith-Lever Act encourages land-grant colleges to establish community education programs in agriculture and home economics. Results in formation of the Maryland Cooperative Extension Service.", "img/timeline/1914.jpg"),

              array("1892", "Animals' Rights: Considered in Relation to Social Progress", "Written by social reformer Henry Salt.\n An early exposition of the philosophy of animal rights.", "img/timeline/1892.jpg"),
              array("1828-1898", "States Protected Laboratory Animals", "There were a number of states that passed anti-cruelty laws between 1828 and 1898. 14 states exempted animal experiments.", "img/timeline/1898.jpg"),
              array("1888", "Hatch Act", "Congress passes Hatch Act creating federally funded agricultural experiment stations. Maryland Agricultural Experiment Station established using The Rossborough Inn as its first headquarters.", "img/timeline/1888.jpg"),
              array("1876", "the Cruelty to Animals Act of 1876", "The first national law to regulate animal experimentation was passed in Britain in 1876. This bill created a central governing body that reviewed and approved all animal use in research. After that, there were numerous countries in Europe that adopted some regulations regarding research with animals.", "img/timeline/1876.jpg"),
              array("1866", "The American Society for the Prevention of Cruelty to Animals is established.", "Since its inception in 1866, the organization's mission is 'to provide effective means for the prevention of cruelty to animals throughout the United States.'", "img/timeline/1866.jpg"),
              array("1864", "Land Grant Act", "President Lincoln signs the Morrill Land Grant Act providing federal support for state colleges to teach agriculture, mechanical arts and military tactics. According to formula, Maryland receives 210,000 acres of “Western” land under this legislation", "img/timeline/1864.jpg"),
              
              array("1861-1865", "Civil War", "Before the war, pork was the most popular meat (mainly due to ease of storage), but beef became the most popular meat after the war because of refrigeration. ", "img/timeline/1865.png"),
              array("1600-1800", "Unregulated Animal Use in Research", "Example: Galen the Physician (126- ca216) dissected animals (pigs, Barbary apes, and other animals) to gain knowledge of the functions of the kidney and spinal cord and similarities between humans and the other mammalian species that people came in contact with. \nLouis Pasteur used rabbits to find an attenuated rabies agent that he used as a vaccine against the disease anthrax and rabies. \nNo laws anywhere that governed how animals were used in research or vaccine production.","img/timeline/1864.jpg"),
              array("1830s", "Early Vegan", "Early vegan and anti-vivisectionist Lewis Gompertz leaves the SPCA to found the Animals' Friend Society, opposing all uses of animals which are not for their benefit.","img/timeline/1830.png"),
              array("1824", "First Animal Protection Organization", "Richard Martin, along with Reverend Arthur Broome and abolitionist Member of Parliament William Wilberforce, founds the Society for the Prevention of Cruelty to Animals (now the Royal Society for the Prevention of Cruelty to Animals), the world's first animal protection organization", "img/timeline/1824.jpg"),
              
              array("1822", "British Parliament Cares About Cattle", "Led by Richard Martin, British Parliament passes the Act to Prevent the Cruel and Improper Treatment of Cattle","img/timeline/1822.jpeg"),
              array("1760", "Breeding Animals", "Robert Bakewell, England, began breeding animals for a purpose, created different types", "img/timeline/1760.jpeg"),
              array("1641", "First Meatpacker", "William Pynchon, Massachusetts, was first meatpacker exporting salt pork", "img/timeline/1641.jpg"),
              array("1539", "DeSoto: horses", "DeSoto brought horses and hogs to Florida", "img/timeline/1539.jpg"),
              array("1519", "Cattle + Sheep", "Cortez brought cattle and sheep to Mexico", "img/timeline/1519.jpg"),
              array("1493", "Livestock", "Columbus brought livestock to the West Indies", "img/timeline/1493.jpg"),
);
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