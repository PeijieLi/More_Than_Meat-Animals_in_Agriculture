<?php include('pageheader.html'); ?>
<script>

var billBooleans = {};
billBooleans['peijie'] = false;
billBooleans['no-image'] = false;



function flipBillImage(id) {
    var img = document.getElementById(id);
    var imageFormat = img.src.substr(img.src.lastIndexOf(".") + 1);
    var basePath = "img/staff/";
    var sillyPath = basePath + id + "_hover." + imageFormat;
    var billPath = basePath + id + "_hidden.jpg";
    if (billBooleans[id]) {
        img.src = sillyPath;
        img.onmouseover = function() {img.src = sillyPath};
        billBooleans[id] = false;
    } else {
        img.src = billPath;
        img.onmouseover = function() {img.src = billPath};
        billBooleans[id] = true;
    }
}

</script>



<!DOCTYPE html>

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Timeline</title>
        <!-- <meta name="description" content=""> -->              
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
        <link rel="stylesheet" href="css/main.css">
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
        <!-- <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> -->
</head>
<body>


        <div class="row">
            <a class="anchor" id="abstract" > </a>
            <div class="col-md-12">
                <h2><font color="white">Abstract</font></h2>
                <p><font color="white">
                    &emsp;&emsp;&emsp;&emsp;This project attempts to examine the current meat industry through the lens of 
                    animal agriculture legislation. Specifically, researchers set out to determine whether 
                    the current animal agriculture system is working, based on the implications on human 
                    health, environmental sustainability, labor conditions, and animal welfare. We also 
                    aim to identify the barriers to achieving effective animal welfare legislation.<br>
                    &emsp;&emsp;&emsp;&emsp;The legislation we have studied demonstrates this systematic failure. Antibiotic use 
                    in animal agriculture is causing the rapid development of untreatable “superbugs,” 
                    and may even be causing the increase of obesity that the United States has seen 
                    since the 1950s. Upon examining the history of federal food safety laws, it becomes 
                    apparent that intensified animal agriculture has required more stringent food safety 
                    laws to protect consumers from bacteria. Unfortunately, federal food safety laws overlook 
                    the relationship between animal welfare and human health, and there have been several failed 
                    attempts to pass laws and amendments to existing laws to improve conditions for farm animals. 
                    Prevent Cruelty California, while it may create a minute increase in the space allocated for 
                    each animal, has negligibly weak enforcement mechanisms. Lobbying from corporate interest groups, 
                    like Big Meat and Big Pharma, challenge the implementation of effective legislation to 
                    improve conditions for farm animals. Although the Humane Slaughter Act attempted to provide 
                    more humane conditions for agricultural animals, it has failed to protect poultry and has 
                    failed to enforce the policies.[Briefly describe the findings from other legislation here].<br>
                    &emsp;&emsp;&emsp;&emsp;Likewise, interviews we have conducted show mistrust of the animal agriculture industry 
                    among the general public. Many people are opting to withdraw their monetary support from 
                    the industry altogether, despite the social challenges that such actions may impose. 
                    Additionally, we found that animal welfare legislation in the United States is very weak 
                    in terms of protecting agricultural animals. The United States lack concrete legislations 
                    for agricultural animals and has fueled the expansion of big agribusiness by ignoring animal 
                    welfare.   [Briefly describe the findings from other interviews here.]<br>
                    &emsp;&emsp;&emsp;&emsp;Although the survey was somewhat limited and we recognize that we only surveyed a 
                    small population, we had some interesting findings. For example, 84% of people selected 
                    environmental welfare as their general reason behind voting, whereas only 75% selected 
                    animal welfare. Similarly, we found that many people said that they were more inclined 
                    to vote for animal welfare legislation if it addressed other issues, especially environmental 
                    health and human health. [Briefly describe findings from survey results here.]

                </font></p>
            </div>
        </div>
</body>

        <!-- <div class="row">
            <a class="anchor" id="podcasts" > </a>

            <div class="col-md-12">
                <h2>Podcasts</h2>



            </div>
            <a href="podcast-animalwelfare.php">Animal Welfare</a><br>
            <a href="podcast-antibiotics.php"><img id="antibiotics" src="img/01-blog-antibiotics-FB.jpg" height="200px" class="img-rounded"/></a> <br>
            <a href="podcast-foodsafety_animalagriculture.php">Food Safety and Animal Agriculture</a><br>
            <a href="podcast-humaneslaughter.php">Humane Slaughter</a><br>
            <a href="podcast-preventcrueltyca.php">Prevent Cruelty California</a><br>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/zomhCOq9YUQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            
        </div> -->

        
<!-- 
        <div class="row">
            <a class="anchor" id="resources" > </a>

            <div class="col-md-12">
                <h2>Resources</h2>
 <table cellSpacing="2" cellPadding="2" class="table table-bordered table-striped" >
  <tr>
    <td>List Resources Here:
    &nbsp;

  <tr>
    <td>List Resources Here:
    &nbsp;
  </tr>

</table>
        </div>
    </div>
 -->

<?php include('pagefooter.html'); ?>
<!-- 
  </body>
</html> -->
