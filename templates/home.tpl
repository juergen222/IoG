{extends file="../templates/parent.tpl"}
{block name=title}IoG - Home{/block}
{block name=header}
    <section class="home">
        <section class="bar align-middle"></section>
        <div class="heading">
            <h1>Overhaul your Garden</h1>
        </div>
    </section>
{/block}

{block name=main}
    <div class="container p-3 bg-white" style="max-width: 80%" >
        <div class="container-fluid bg-white p-5 ">
            <h1 class="h1  ">
                Internet of Gardening: Improving Gardening
            </h1>
            <p class="lead">
                Welcome to IOG, a project created by two students within the borders of a schoolproject. IOG was designed take an easier approach towards gardening and drastically improve your
                gardening experience. It is best suited for someone who wants a more comfortable way of handling and maintaining your garden.
            </p>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center  " >
                    <h2 class="display-4 text-center font-weight-bold">What</h2>
                    <img class="img-fluid p-3" src="../res/question.png" alt="?">
                    <p class="justify-content-center text-justify">
                        <b> I O G </b> stands for Internet of Gardening and is a system devoloped by Jürgen Ederer & Tobias Zeller.
                        It's sole purpose is to change your gardening experience forever.
                    </p>
                </div>
                <div class="col-lg-4 col-md-4  text-center" >
                    <h2 class="display-4 text-center font-weight-bold ">
                        How
                    </h2>
                    <img class="img-fluid p-3" src="../res/question.png" alt="?">
                    <p class="justify-content-center text-justify">
                        IOG uses several different sensors to aquire all the possible data, about your about your garden. All the data is read per click on this website.
                    </p>
                </div>
                <div class="col-lg-4 col-md-4 text-center  " >
                    <h2 class="display-4 text-center font-weight-bold">
                        Why
                    </h2>
                    <img class="img-fluid p-3 " src="../res/question.png" alt="?">
                    <p class="justify-content-center text-justify">
                        What started off as a simple project for graduation, evolved into a full on business model.
                    </p>
                </div>
            </div>
            <hr>
        </div>
    </div>
{/block}