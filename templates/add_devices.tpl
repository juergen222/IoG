{extends file="../templates/parent.tpl"}
{block name=title}IoG - Home{/block}
{block name=stylesheet}
    <link rel="stylesheet" href="../css/deviceNav.css">
    <script src="../js/table_appear.js"></script>
{/block}
{block name=header}<h1 class="devicesTitle display-1 h1">ADD Devices</h1>{/block}
{block name=main}
    <div class="container p-3 bg-white " style="max-width: 80%">







        <div class="container-fluid mb-3">
            <h1 class="h1 mt-5"> Add a new device</h1>
            <!--<p>To add new patch press button</p>
            <button type="button" class="btn btn-dark " id="buttonData"> Add patch</button>-->

            <form class="mt-5" id="inputData"   method="POST">
                <div class="form-group">
                    <label for="DatabaseName">Name</label>
                    <span class="careful"> *required*</span>
                    <input type="text" name="name" class="form-control" id="DatabaseName" aria-describedby="emailHelp" placeholder="Name">

                </div>
                <div class="form-group">
                    <label for="InfoPassword">*Comment</label>
                    <input type="text" name="comment" class="form-control" id="InfoPassword" placeholder="Comment">
                </div>
                <div class="form-group">
                    <label for="GeräteID">GeräteID</label>
                    <span class="careful"> *required*</span>
                    <div class="information">  Can be found on measure device  </div>
                    <input type="text" name="deviceId" class="form-control" id="InfoPassword" placeholder="GeräteID">
                </div>

                <button id="changeButton" type="submit" name="submitbtn"  class="btn btn-dark">Create</button>
            </form>

{/block}