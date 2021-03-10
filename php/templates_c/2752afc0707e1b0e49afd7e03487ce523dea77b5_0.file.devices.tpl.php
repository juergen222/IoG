<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-10 08:42:58
  from 'D:\xampp\htdocs\IoG\templates\devices.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60487882d7b0d0_72077733',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2752afc0707e1b0e49afd7e03487ce523dea77b5' => 
    array (
      0 => 'D:\\xampp\\htdocs\\IoG\\templates\\devices.tpl',
      1 => 1615362176,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60487882d7b0d0_72077733 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_210933067960487882d663b0_22410636', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_130949978460487882d66ff7_40241975', 'stylesheet');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_156513327060487882d67860_02823526', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21608927660487882d67f49_46459281', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/parent.tpl");
}
/* {block 'title'} */
class Block_210933067960487882d663b0_22410636 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_210933067960487882d663b0_22410636',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
IoG - Devices<?php
}
}
/* {/block 'title'} */
/* {block 'stylesheet'} */
class Block_130949978460487882d66ff7_40241975 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stylesheet' => 
  array (
    0 => 'Block_130949978460487882d66ff7_40241975',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="stylesheet" href="../css/deviceNav.css">  <?php echo '<script'; ?>
 src="../js/device_sent.js"><?php echo '</script'; ?>
> <link rel="stylesheet" href="../css/device.css" <?php
}
}
/* {/block 'stylesheet'} */
/* {block 'header'} */
class Block_156513327060487882d67860_02823526 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_156513327060487882d67860_02823526',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<h1 class="devicesTitle display-1 h1">Meine Messstationen</h1> <?php
}
}
/* {/block 'header'} */
/* {block 'main'} */
class Block_21608927660487882d67f49_46459281 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_21608927660487882d67f49_46459281',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <!--<section class="banner"></section>-->
    <div class="container p-3 bg-white mt-4 " style="max-width: 80%">
        <div class="container " id="mainCon">


            <!--<form METHOD="post">
                <label for="dayOfMeasureStart">Day Start</label>
                <input type="date" id="dayOfMeasureStart" name="MeasureDateStart">
                <label for="dayOfMeasureEnd">Day End</label>
                <input type="date" id="dayOfMeasureEnd" name="MeasureDateEnd">
        </form>-->

        <span><a href="../php/add_device.php">Neue Station anlegen</a></span>
        </div>
        <div class="row justify-content-center ">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dboutput']->value, 'row');
$_smarty_tpl->tpl_vars['row']->index = -1;
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
$_smarty_tpl->tpl_vars['row']->index++;
$__foreach_row_0_saved = $_smarty_tpl->tpl_vars['row'];
?>




            <div class=' col-xl-4 col-lg-3 col-md-6 col-sm-6 col-12  '>


                <div class="card  text-center" >
                    <div class="card-header "> <h2 class='h3 card-title card-titleText m-0 p-0' id="deviceName"> <?php echo $_smarty_tpl->tpl_vars['row']->value['ms_name'];?>
  </h2> </div>
                    <!--<img class="card-img-top card_device_img " src="../res/deviceImage.png" alt="Card image cap">-->
                    <div class="card-body ">

                        <p class="commentOutput card-text mb-0"><?php echo $_smarty_tpl->tpl_vars['row']->value['ms_comment'];?>
</p>

                    </div>




                <?php if (((isset($_smarty_tpl->tpl_vars['dboutputData']->value[$_smarty_tpl->tpl_vars['row']->index]['mw_wert'])))) {?>

                    <?php echo $_smarty_tpl->tpl_vars['dboutputData']->value[$_smarty_tpl->tpl_vars['row']->index]['pa_name'];?>
:<br> <?php echo $_smarty_tpl->tpl_vars['dboutputData']->value[$_smarty_tpl->tpl_vars['row']->index]['mw_wert'];?>
 <?php echo $_smarty_tpl->tpl_vars['dboutputData']->value[$_smarty_tpl->tpl_vars['row']->index]['pa_einheit'];?>
<br>

                <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                <?php }?>


                <?php echo '<script'; ?>
 src="../js/device_sent.js"><?php echo '</script'; ?>
>
                <form action="../php/view_data.php" method="post">
                    <input type="hidden" name="deviceID" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['ms_id'];?>
">
                    <button class='btn btn-dark mt-2 mb-2' type="submit" id="show_btn"  name="showData">Anzeigen</button>
                </form>
            </div>

            </div>


            <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>



    </div>
    <div class="banner-white">
    </div>
    <?php echo '<script'; ?>

            src="https://code.jquery.com/jquery-3.5.1.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
            crossorigin="anonymous"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
        <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'main'} */
}
