{extends file="../templates/parent.tpl"}
{block name=title}IoG - Home{/block}
{block name=header}
    <section class="home">
        <section class="bar align-middle"></section>
        <div class="heading">
            <h1 class="display-1">Overhaul your Garden</h1>
        </div>
    </section>
{/block}

{block name=main}
    <div class="container p-3 bg-white" style="max-width: 80%" >
        <div class="container-fluid bg-white p-5 ">
            <h1 class="h1  ">
                Internet of Gardening: Verbessere deinen Garten
            </h1>
            <p class="lead">
                <!--Welcome to IOG, a project created by two students within the borders of a schoolproject. IOG was designed take an easier approach towards gardening and drastically improve your
                gardening experience. It is best suited for someone who wants a more comfortable way of handling and maintaining your garden.-->

                Willkommen zu IOG, ein Projekt von zwei Maturanten innerhalb der Grenzen eines Maturaprojekts. IOG wurde entworfen, um Garten arbeit neu zu definieren und drastisch zu verbessern.
                Am besten ist dieses System geeignet für den Gärtner, der sich auch gerne mal zurücklehnt.
            </p>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center  " >
                    <h2 class="display-4 text-center font-weight-bold">Was</h2>
                    <img class="img-fluid p-3" src="../res/question.png" alt="?">
                    <p class="justify-content-center">
                        <b> I O G </b>
                        <!--stands for Internet of Gardening and is a system devoloped by Jürgen Ederer & Tobias Zeller.
                        It's sole purpose is to change your gardening experience forever.-->
                        IOG steht für "Internet of Gardening" und ist ein System entwickelt von Jürgen Ederer und Tobias Zeller.
                        Der Sinn dieses Systems ist, deine Sicht gegenüber Pflanzen für immer zu ändern.
                    </p>
                </div>
                <div class="col-lg-4 col-md-4  text-center" >
                    <h2 class="display-4 text-center font-weight-bold ">
                        Wie
                    </h2>
                    <img class="img-fluid p-3" src="../res/question.png" alt="?">
                    <p class="justify-content-center ">
                        <!--IOG uses several different sensors to aquire all the possible data, about your about your garden. All the data is read per click on this website.-->
                        Das System verwendent mehrere Sensoren, welche alle möglichen Daten deines Gartens misst und dir übermittelt. Alle Daten befindet sich auf dieser Website.
                    </p>
                </div>
                <div class="col-lg-4 col-md-4 text-center   "  >
                    <h2 class="display-4 text-center font-weight-bold">
                        Warum
                    </h2>
                    <img class="img-fluid p-3 " src="../res/question.png" alt="?">
                    <p class="justify-content-center ">
                        <!--What started off as a simple project for graduation, evolved into a full on business model.-->
                        Was dieses Projekt in Gang gelegt hat, war der Wunsch einen persönlichen Garten zu bewirtschaften, ohne einen Finger zu krümmen.
                    </p>
                </div>
            </div>
            <hr>
        </div>
    </div>
{/block}