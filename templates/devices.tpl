{extends file="../templates/parent.tpl"}
{block name=title}IoG - Devices{/block}

{block name=stylesheet}<link rel="stylesheet" href="../css/deviceNav.css">  <script src="../js/device_sent.js"></script> <link rel="stylesheet" href="../css/device.css" {/block}
{block name=header}<h1 class="devicesTitle display-1 h1">Meine Messstationen</h1> {/block}

{block name=main}

    <!--<section class="banner"></section>-->
    <div class="container p-3 bg-white mt-4 " style="max-width: 80%">
        <div class="container " id="mainCon">


            <!--<form METHOD="post">
                <label for="dayOfMeasureStart">Day Start</label>
                <input type="date" id="dayOfMeasureStart" name="MeasureDateStart">
                <label for="dayOfMeasureEnd">Day End</label>
                <input type="date" id="dayOfMeasureEnd" name="MeasureDateEnd">
        </form>-->

        <span><a href="../php/add_device.php">Neue Station anlegen</a></span>
        </div>
        <div class="row justify-content-center ">
            {foreach $dboutput as $row}




            <div class=' col-xl-4 col-lg-3 col-md-6 col-sm-6 col-12  '>


                <div class="card  text-center" >
                    <div class="card-header "> <h2 class='h3 card-title card-titleText m-0 p-0' id="deviceName"> {$row.ms_name}  </h2> </div>
                    <!--<img class="card-img-top card_device_img " src="../res/deviceImage.png" alt="Card image cap">-->
                    <div class="card-body ">

                        <p class="commentOutput card-text mb-0">{$row.ms_comment}</p>

                    </div>




                {if (isset($dboutputData[$row@index].mw_wert))}

                    {$dboutputData[$row@index].pa_name}:<br> {$dboutputData[$row@index].mw_wert} {$dboutputData[$row@index].pa_einheit}<br>

                {else}
                {$error}
                {/if}


                <script src="../js/device_sent.js"></script>
                <form action="../php/view_data.php" method="post">
                    <input type="hidden" name="deviceID" value="{$row.ms_id}">
                    <button class='btn btn-dark mt-2 mb-2' type="submit" id="show_btn"  name="showData">Anzeigen</button>
                </form>
            </div>

            </div>


            {/foreach}
        </div>



    </div>
    <div class="banner-white">
    </div>
    <script
            src="https://code.jquery.com/jquery-3.5.1.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
            crossorigin="anonymous"></script>

    <script>
        </script>
{/block}