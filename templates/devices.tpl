{extends file="../templates/parent.tpl"}
{block name=title}IoG - Devices{/block}
{block name=stylesheet}<link rel="stylesheet" href="../css/deviceNav.css">{/block}
{block name=header}{/block}

{block name=main}


    <div class="container p-3 bg-white " style="max-width: 80%">
        <div class="container">
            <h1 class="devicesTitle">My Devices</h1>
            <p>Choose a span of days, in which you would like to see your measurements</p>
            <form METHOD="post">
            <label for="dayOfMeasureStart">Day Start</label>
            <input type="date" id="dayOfMeasureStart" name="MeasureDateStart">
            <label for="dayOfMeasureEnd">Day End</label>
            <input type="date" id="dayOfMeasureEnd" name="MeasureDateEnd">


        </form>
        </div>
        <div class="row">
        {foreach $dboutput as $row}
        <div class='col-lg-4 col-md-4 col-sm-6 col-12 stationItem p-0 m-2'>
            <h3 class='h3 m-0 p-0'> {$row.name} <br> <span class='information'> {$row.M_Id} </span> </h3>
            <p>{$row.comment}</p>
            <button class='btn btn-dark' >
        </div>


        {/foreach}
        </div>


    </div>
{/block}