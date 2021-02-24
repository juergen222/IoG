{extends file="../templates/parent.tpl"}
{block name=title}IoG - Devices{/block}

{block name=stylesheet}<link rel="stylesheet" href="../css/deviceNav.css">  <script src="../js/device_sent.js"></script>{/block}
{block name=header}<h1 class="devicesTitle display-1 h1">My Devices</h1> {/block}

{block name=main}

    <!--<section class="banner"></section>-->
    <div class="container p-3 bg-white " style="max-width: 80%">
        <div class="container " id="mainCon">


            <!--<form METHOD="post">
                <label for="dayOfMeasureStart">Day Start</label>
                <input type="date" id="dayOfMeasureStart" name="MeasureDateStart">
                <label for="dayOfMeasureEnd">Day End</label>
                <input type="date" id="dayOfMeasureEnd" name="MeasureDateEnd">
        </form>-->

        <span><a href="../php/add_device.php">Add New Device</a></span>
        </div>
        <div class="row justify-content-center ">
            {foreach $dboutput as $row}
            <div class='col-lg-3 col-md-3 col-sm-6 col-12 stationItem p-0 m-2 '>
                <h2 class='h3 m-0 p-0' id="deviceName"> {$row.ms_name}  </h2>
                <p class="commentOutput">{$row.ms_comment}</p>


                {if (isset($dboutputData[$row@index].mw_wert))}

                    {$dboutputData[$row@index].pa_name}: {$dboutputData[$row@index].mw_wert}<br>

                {else}
                {$error}
                {/if}


                <script src="../js/device_sent.js"></script>
                <form action="../php/view_data.php" method="post">
                    <input type="hidden" name="deviceID" value="{$row.ms_id}">
                    <button class='btn btn-dark m-2 ' type="submit" id="show_btn"  name="showData"> Show </button>
                </form>
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