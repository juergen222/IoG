<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" href="../css/nav.css">
    {block name=stylesheet}{/block}


    <meta name="viewport" content="width=device-width, initial-scale=1">
    {block name=script}{/block}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script
            src="https://code.jquery.com/jquery-3.5.1.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
            crossorigin="anonymous"></script>

    <title>{block name=title}{/block}</title>
</head>

<body>
    <header>
        <nav class="navTest">
            <div class="navContainer">
                <div class="logo">
                    <a href="../php/home.php">
                        <img src ="../res/logo.png" alt="IoG">
                    </a>
                </div>
                <div id="mainListDiv" class="main_list">
                    <ul class="navlinks">
                        <li><a href="../php/home.php">Home</a></li>
                        <li><a href="../php/devices.php">Devices</a></li>
                        <li><a href="#">About Us</a></li>
                    </ul>
                </div>
                <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
            </div>
        </nav>
            {block name = header}{/block}
    </header>

    <main>
        {block name = main}{/block}
    </main>

    <footer class="bg-dark text-white p-4">
        <div class="container-fluid " style="max-width: 70%" >
            <div class="row p-sm-0 p-4 " >
                <div class=" col-lg-2 col-md-2 col-sm-4 col-12 ">
                    <div class=" col-lg-2 col-md-2 col-sm-4 col-xs-12">
                        <h3 class="h3 font-weight-bold">Contact</h3>
                        <ul class="list-group-flush">
                            <a class="linkstyle small  list-group-flush" href="#"> Team</a>
                        </ul>
                    </div>

                </div>
                <div class=" col-lg-2 col-md-2 col-sm-4 col-xs-12">
                    <h3 class="h3 font-weight-bold">Components</h3>
                    <ul class="list-group-flush">
                        <li class="list-unstyled">
                            <a class="linkstyle small  list-group-flush" href="https://www.amazon.de/Raspberry-Pi-ARM-Cortex-A72-Bluetooth-Micro-HDMI/dp/B07TC2BK1X/ref=sxts_sxwds-bia-wc-p13n1_0?cv_ct_cx=raspberry+pi&dchild=1&keywords=raspberry+pi&link_code=qs&pd_rd_i=B07TC2BK1X&pd_rd_r=15312756-a7f1-4ef8-965a-6bbc94bd6a4a&pd_rd_w=9QPD9&pd_rd_wg=jz6cc&pf_rd_p=5c4c8825-c15a-42fb-8505-0b8a81aae4b7&pf_rd_r=QZ45TC3JW6WYRJ85NRNM&psc=1&qid=1604313975&sourceid=Mozilla-search&sr=1-1-fdbae751-0fa5-4c0f-900b-865654896618&tag=firefox-de-21"> Raspberry Pi</a>
                        </li>
                        <li class="list-unstyled">
                            <a class="linkstyle small list-group-flush" href="https://www.amazon.de/AZDelivery-NodeMCU-Development-Nachfolgermodell-ESP8266/dp/B071P98VTG/ref=sr_1_3?__mk_de_DE=%C3%85M%C3%85%C5%BD%C3%95%C3%91&dchild=1&keywords=esp32&qid=1604313996&s=ce-de&sr=1-3"> ESP32</a>
                        </li>
                        <li class="list-unstyled">
                            <a class="linkstyle small list-group-flush" href="https://www.amazon.de/Breakout-Antenne-Funkmodul-Arduino-Raspberry/dp/B084NWDFH1/ref=sr_1_3?__mk_de_DE=%C3%85M%C3%85%C5%BD%C3%95%C3%91&dchild=1&keywords=lora+module&qid=1604314013&s=ce-de&sr=1-3"> Lora-Modul</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>



    <script src="../js/navbar.js"></script>

    <!-- Function used to shrink nav bar removing paddings and adding black background -->
    <script>
        $(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
                $('.navTest').addClass('affix');
                console.log("OK");
            } else {
                $('.navTest').removeClass('affix');
            }
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>