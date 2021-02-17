{extends file="../templates/parent.tpl"}
{block name=title}IoG - Home{/block}
{block name=stylesheet}<link rel="stylesheet" href="../css/deviceNav.css">{/block}
{block name=header}<h1 class="devicesTitle display-1 h1">My Data</h1> {/block}


{block name=main}

<div class="container p-3 bg-white " style="max-width: 80%">
    <h1 class="h1 mt-5"> Your current data </h1>

  <h3 class='h3 m-0 p-0'> {$dbname}   </h3>

    </div>

{/block}