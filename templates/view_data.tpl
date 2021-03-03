{extends file="../templates/parent.tpl"}
{block name=title}IoG - Home{/block}
{block name=stylesheet}<link rel="stylesheet" href="../css/deviceNav.css">
    <link rel="stylesheet" type="text/css" href="../css/view_data.css"> {/block}
{block name=script}
    {literal}
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Year', 'Sales', 'Expenses'],
                ['2004',  1000,      400],
                ['2005',  1170,      460],
                ['2006',  660,       1120],
                ['2007',  1030,      540]
            ]);

            var options = {
                title: 'Company Performance',
                curveType: 'function',
                legend: { position: 'bottom' }
            };

            var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

            chart.draw(data, options);
        }
    </script>
    {/literal}
{/block}
{block name=header}<h1 class="devicesTitle display-1 h1">My Data</h1> {/block}


{block name=main}


    <div class="container-fluid " >
        <hr>
        {if isset($newData)}


        <div class="row justify-content-center m-0">
            {foreach $newData as $parameter}
                <div class="col-xxl-2 col-xl-2 col-lg-4 col-md-6 col-sm-6 col-12 col-xl-2 " style="max-width: 100%">
                    <div class="card mb-4 shadow-sm  p-0 border-success">
                        <div class="card-header pl-0 pr-0">
                            <h2>{$parameter.pa_name}</h2>
                        </div>
                        <div class="card-body">
                            <p class = "data">
                                {$parameter.mw_wert} {$parameter.pa_einheit}
                            </p>
                        </div>
                    </div>
                </div>
            {/foreach}


            {else}
            <h1 style="text-align: center; "> No Data yet Received  </h1>
        {/if}



            last measurement: {$newData[0].mw_zeit}



        </div>
        <hr>
        <div class="container-fluid mt-4">
        <form method="post">
            <label for="dataType"> Choose the type of data </label>
            <select id="dataType" name="dataType">
                <option value="temperatur">temperature </option>
                <option value="luftdruck">air pressure </option>
                <option value="luftfeuchtigkeit">air moisture </option>
                <option value="uvLevel">UV-level</option>
                <option value="bodenfeuchtigkeit">soil Moisture</option>
            <input
            </select>
            <button id="selectButton" type="submit" name="selectbtn"  class="btn btn-dark">Create</button>

        </form>
        <div id="curve_chart" style="width: 900px; height: 500px"></div>


        </div>
            <section class="banner-white">

        </div>


<!--<div class="container p-3 bg-white " style="max-width: 80%">
    <h1 class="h1 mt-5"></h1>



    </div>
-->
{/block}