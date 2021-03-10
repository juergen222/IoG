<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-10 08:36:55
  from 'D:\xampp\htdocs\IoG\templates\parent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60487717f3f241_63577081',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '034f4930c977932f65c37b77dd2360dc489680dd' => 
    array (
      0 => 'D:\\xampp\\htdocs\\IoG\\templates\\parent.tpl',
      1 => 1615361814,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60487717f3f241_63577081 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" href="../css/nav.css">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10269930360487717f39516_74202277', 'stylesheet');
?>



    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_159802057360487717f3c0e7_78902247', 'script');
?>

    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>

            src="https://code.jquery.com/jquery-3.5.1.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
            crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30545786960487717f3ca77_82448616', 'script');
?>


    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_212891634160487717f3d358_41371406', 'title');
?>
</title>
</head>

<body>
    <header>
        <nav class="navTest">
            <div class="navContainer">
                <div class="logo">
                    <a href="../php/home.php">
                        <img src ="../res/logo.png" alt="IoG">
                    </a>
                </div>
                <div id="mainListDiv" class="main_list">
                    <ul class="navlinks">
                        <li><a href="../php/home.php">Home</a></li>
                        <li><a href="../php/devices.php">Stationen</a></li>
                        <li><a href="#">Über uns</a></li>
                    </ul>
                </div>
                <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
            </div>
        </nav>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_115817493360487717f3dc24_74669135', 'header');
?>

    </header>

    <main>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5648883860487717f3e4c0_44438683', 'main');
?>

    </main>

    <footer class="bg-dark text-white p-4">
        <div class="container-fluid " style="max-width: 70%" >
            <div class="row p-sm-0 p-4 " >
                <div class=" col-lg-2 col-md-2 col-sm-4 col-12 ">
                    <div class=" col-lg-2 col-md-2 col-sm-4 col-xs-12">
                        <h3 class="h3 font-weight-bold">Kontakt</h3>
                        <ul class="list-group-flush">
                            <a class="linkstyle small  list-group-flush" href="#"> Team</a>
                        </ul>
                    </div>

                </div>
                <div class=" col-lg-2 col-md-2 col-sm-4 col-xs-12">
                    <h3 class="h3 font-weight-bold">Komponenten</h3>
                    <ul class="list-group-flush">
                        <li class="list-unstyled">
                            <a class="linkstyle small  list-group-flush" href="https://www.amazon.de/Raspberry-Pi-ARM-Cortex-A72-Bluetooth-Micro-HDMI/dp/B07TC2BK1X/ref=sxts_sxwds-bia-wc-p13n1_0?cv_ct_cx=raspberry+pi&dchild=1&keywords=raspberry+pi&link_code=qs&pd_rd_i=B07TC2BK1X&pd_rd_r=15312756-a7f1-4ef8-965a-6bbc94bd6a4a&pd_rd_w=9QPD9&pd_rd_wg=jz6cc&pf_rd_p=5c4c8825-c15a-42fb-8505-0b8a81aae4b7&pf_rd_r=QZ45TC3JW6WYRJ85NRNM&psc=1&qid=1604313975&sourceid=Mozilla-search&sr=1-1-fdbae751-0fa5-4c0f-900b-865654896618&tag=firefox-de-21"> Raspberry Pi</a>
                        </li>
                        <li class="list-unstyled">
                            <a class="linkstyle small list-group-flush" href="https://www.amazon.de/AZDelivery-NodeMCU-Development-Nachfolgermodell-ESP8266/dp/B071P98VTG/ref=sr_1_3?__mk_de_DE=%C3%85M%C3%85%C5%BD%C3%95%C3%91&dchild=1&keywords=esp32&qid=1604313996&s=ce-de&sr=1-3"> ESP32</a>
                        </li>
                        <li class="list-unstyled">
                            <a class="linkstyle small list-group-flush" href="https://www.amazon.de/Breakout-Antenne-Funkmodul-Arduino-Raspberry/dp/B084NWDFH1/ref=sr_1_3?__mk_de_DE=%C3%85M%C3%85%C5%BD%C3%95%C3%91&dchild=1&keywords=lora+module&qid=1604314013&s=ce-de&sr=1-3"> Lora-Modul</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>



    <?php echo '<script'; ?>
 src="../js/navbar.js"><?php echo '</script'; ?>
>

    <!-- Function used to shrink nav bar removing paddings and adding black background -->
    <?php echo '<script'; ?>
>
        $(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
                $('.navTest').addClass('affix');
                console.log("OK");
            } else {
                $('.navTest').removeClass('affix');
            }
        });
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
/* {block 'stylesheet'} */
class Block_10269930360487717f39516_74202277 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stylesheet' => 
  array (
    0 => 'Block_10269930360487717f39516_74202277',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'stylesheet'} */
/* {block 'script'} */
class Block_159802057360487717f3c0e7_78902247 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_159802057360487717f3c0e7_78902247',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'script'} */
/* {block 'script'} */
class Block_30545786960487717f3ca77_82448616 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_30545786960487717f3ca77_82448616',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'script'} */
/* {block 'title'} */
class Block_212891634160487717f3d358_41371406 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_212891634160487717f3d358_41371406',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'title'} */
/* {block 'header'} */
class Block_115817493360487717f3dc24_74669135 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_115817493360487717f3dc24_74669135',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'main'} */
class Block_5648883860487717f3e4c0_44438683 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_5648883860487717f3e4c0_44438683',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'main'} */
}
