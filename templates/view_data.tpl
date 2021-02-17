{extends file="../templates/parent.tpl"}
{block name=title}IoG - Home{/block}
{block name=stylesheet}<link rel="stylesheet" href="../css/deviceNav.css">{/block}
{block name=header}<h1 class="devicesTitle display-1 h1">My Data</h1> {/block}


{block name=main}

<div class="container p-3 bg-white " style="max-width: 80%">
    <h1 class="h1 mt-5"> Your current data </h1>
    //TODO Name fix
    <h2 class="h2">{$dboutput.messtation.name}</h2>
    <div class='row'>
    {foreach $dboutput as $row}
        <h2 class="h2">{$row.Date}</h2>
        <br>
        <div class='col-lg-3 col-md-3 col-sm-6 col-12'>

            <p> {$row.Wert} : {$row.Einheit} </p>

        </div>
        <hr>


    {/foreach}



    </div>

{/block}