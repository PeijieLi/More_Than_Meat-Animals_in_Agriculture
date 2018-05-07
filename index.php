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
                    &emsp;&emsp;&emsp;&emsp;This project attempts to examine the current meat industry through 
                    the lens of animal agriculture legislation. Specifically, researchers set out to determine whether 
                    the current animal agriculture system is working, based on the implications on human health, environmental 
                    sustainability, labor conditions, and animal welfare. We also aim to identify the barriers to achieving 
                    effective animal welfare legislation.<br>
                    &emsp;&emsp;&emsp;&emsp;The legislation we have studied demonstrates this systematic failure. Antibiotic use 
                    in animal agriculture is causing the rapid development of untreatable “superbugs,” and may even be causing 
                    the increase of obesity that the United States has seen since the 1950s. Upon examining the history of federal 
                    food safety laws, it becomes apparent that intensified animal agriculture has required more stringent food safety 
                    laws to protect consumers from bacteria. Unfortunately, federal food safety laws overlook the relationship between 
                    animal welfare and human health, and there have been several failed attempts to pass laws and amendments to existing 
                    laws to improve conditions for farm animals. Prevent Cruelty California, while it may create a minute increase in the 
                    space allocated for each animal, has negligibly weak enforcement mechanisms. Lobbying from corporate interest groups, 
                    like Big Meat and Big Pharma, challenge the implementation of effective legislation to improve conditions for farm animals. 
                    Although the Humane Slaughter Act attempted to provide more humane conditions for agricultural animals, it has failed to 
                    protect poultry and has failed to enforce the policies. <br>
                    &emsp;&emsp;&emsp;&emsp;Likewise, interviews we have conducted show mistrust of the animal agriculture industry 
                    among the general public. Many people are opting to withdraw their monetary support from the industry altogether, 
                    despite the social challenges that such actions may impose. Additionally, we found that animal welfare legislation 
                    in the United States is very weak in terms of protecting agricultural animals. The United States lack concrete 
                    legislations for agricultural animals and has fueled the expansion of big agribusiness by ignoring animal welfare. 
                    Although the survey was somewhat limited and we recognize that we only surveyed a small population, we had some 
                    interesting findings. For example, 84% of people selected environmental welfare as their general reason behind voting, 
                    whereas only 75% selected animal welfare. Similarly, we found that many people said that they were more inclined to vote 
                    for animal welfare legislation if it addressed other issues, especially environmental health and human health. <br>
                    &emsp;&emsp;&emsp;&emsp;Katie and Kalena worked on the Humane Slaughter Act podcast and interviewed a graduate student 
                    in the Goldman School of Public Policy for the podcast. Bri wrote three podcasts: Introduction + Framing Animal Welfare 
                    Legislation, Federal Food Safety and Animal Welfare, and Lobbying. She also interviewed students about their perceptions 
                    of animal welfare to supplement the framing podcast. Kalena worked on the Animal Welfare Legislation Demographics survey. 
                    Heliya conducted research for, wrote, produced, edited, and interviewed people for the Antibiotics and Prevent Cruelty 
                    California podcast. Heliya also submitted 10 additional Meet and Greet interviews, and helped organize survey results. 
                    Alicia worked on exploring what sustainable meat means by interviewing Monica Rocchino, a local butcher in Berkeley who 
                    believes in sourcing meat from sustainable farms, and creating a podcast addressing this. Alicia also created the 
                    “More Than Meat” logo for the website. Peijie created and edited the website. <br>
                    &emsp;&emsp;&emsp;&emsp;In short, our interviews, surveys, research, podcast, and website demonstrate failure 
                    to protect human health, environmental sustainability, labor conditions, and animal welfare. We conclude 
                    that the current system of animal agriculture is working poorly. <br>
                </font></p>
            </div>
        </div>
</body>

<?php include('pagefooter.html'); ?>
