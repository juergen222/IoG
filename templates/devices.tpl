{extends file="../templates/parent.tpl"}
{block name=title}IoG - Devices{/block}
{block name=stylesheet}<link rel="stylesheet" href="../css/deviceNav.css">{/block}
{block name=header}<h1 class="devicesTitle display-1 h1">My Devices</h1> {/block}

{block name=main}

    <!--<section class="banner"></section>-->
    <div class="container p-3 bg-white " style="max-width: 80%">
        <div class="container">


            <!--<form METHOD="post">
                <label for="dayOfMeasureStart">Day Start</label>
                <input type="date" id="dayOfMeasureStart" name="MeasureDateStart">
                <label for="dayOfMeasureEnd">Day End</label>
                <input type="date" id="dayOfMeasureEnd" name="MeasureDateEnd">
        </form>-->

        <span><a href="../php/add_device.php"> Add New Device  </a>  </span>
        </div>
        <div class="row justify-content-center ">
            {foreach $dboutput as $row}
            <div class='col-lg-3 col-md-3 col-sm-6 col-12 stationItem p-0 m-2 '>
                <h2 class='h3 m-0 p-0'> {$row.name}  </h2>
                <p class="commmentOutput">{$row.comment}</p>


                {if (isset($dboutputData[$row@index].Wert))}

                    {$dboutputData[$row@index].Name}: {$dboutputData[$row@index].Wert}<br>

                {else}

                {$error}
                {/if}



                <form action="view_data.php">
                    <input class='btn btn-dark m-2 '  type="submit" name="showData"> Show </input>
                </form>


            </div>


            {/foreach}
        </div>



    </div>
    <div class="banner-white">
    </div>
{/block}