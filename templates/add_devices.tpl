{extends file="../templates/parent.tpl"}
{block name=title}IoG - Home{/block}
{block name=stylesheet}
    <link rel="stylesheet" href="../css/deviceNav.css">
    <script src="../js/table_appear.js"></script>
{/block}
{block name=header}<h1 class="devicesTitle display-1 h1">Neue Station anlegen</h1>{/block}
{block name=main}
    <div class="container p-3 bg-white " style="max-width: 80%">







        <div class="container-fluid mb-3">
            <h1 class="h1 mt-5"> Neue Station hinzufügen</h1>
            <!--<p>To add new patch press button</p>
            <button type="button" class="btn btn-dark " id="buttonData"> Add patch</button>-->

            <form class="mt-5" id="inputData"   method="POST">
                <div class="form-group">
                    <label for="DatabaseName">Name</label>
                    <span class="careful"> *benötigt*</span>
                    <input type="text" name="name" class="form-control" id="DatabaseName" aria-describedby="emailHelp" placeholder="Name">

                </div>
                <div class="form-group">
                    <label for="InfoPassword">*Kommentar</label> <span class="information"> *max 255 Symbole* </span>
                    <input type="text" name="comment" class="form-control" id="InfoPassword" placeholder="Kommentar">
                </div>
                <div class="form-group">
                    <label for="GeräteID">GeräteID</label>
                    <span class="careful"> *benötigt*</span>
                    <div class="information"> Befindet sich auf dem Gerät </div>
                    <input type="text" name="deviceId" class="form-control" id="InfoPassword" placeholder="GeräteID">
                </div>

                <button id="changeButton" type="submit" name="submitbtn"  class="btn btn-dark">Erstellen</button>
            </form>

{/block}