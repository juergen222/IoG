<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-24 16:04:35
  from 'D:\xampp\htdocs\IoG\templates\devices.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60366b03baa5f4_74947391',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2752afc0707e1b0e49afd7e03487ce523dea77b5' => 
    array (
      0 => 'D:\\xampp\\htdocs\\IoG\\templates\\devices.tpl',
      1 => 1614178364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60366b03baa5f4_74947391 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54665234360366b03b923c3_24220845', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195970506660366b03b93f24_89202944', 'stylesheet');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_67599447060366b03b94961_95011393', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88493817660366b03b95138_91448959', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/parent.tpl");
}
/* {block 'title'} */
class Block_54665234360366b03b923c3_24220845 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_54665234360366b03b923c3_24220845',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
IoG - Devices<?php
}
}
/* {/block 'title'} */
/* {block 'stylesheet'} */
class Block_195970506660366b03b93f24_89202944 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stylesheet' => 
  array (
    0 => 'Block_195970506660366b03b93f24_89202944',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="stylesheet" href="../css/deviceNav.css">  <?php echo '<script'; ?>
 src="../js/device_sent.js"><?php echo '</script'; ?>
><?php
}
}
/* {/block 'stylesheet'} */
/* {block 'header'} */
class Block_67599447060366b03b94961_95011393 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_67599447060366b03b94961_95011393',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<h1 class="devicesTitle display-1 h1">My Devices</h1> <?php
}
}
/* {/block 'header'} */
/* {block 'main'} */
class Block_88493817660366b03b95138_91448959 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_88493817660366b03b95138_91448959',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <!--<section class="banner"></section>-->
    <div class="container p-3 bg-white " style="max-width: 80%">
        <div class="container " id="mainCon">


            <!--<form METHOD="post">
                <label for="dayOfMeasureStart">Day Start</label>
                <input type="date" id="dayOfMeasureStart" name="MeasureDateStart">
                <label for="dayOfMeasureEnd">Day End</label>
                <input type="date" id="dayOfMeasureEnd" name="MeasureDateEnd">
        </form>-->

        <span><a href="../php/add_device.php">Add New Device</a></span>
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
            <div class='col-lg-3 col-md-3 col-sm-6 col-12 stationItem p-0 m-2 '>
                <h2 class='h3 m-0 p-0' id="deviceName"> <?php echo $_smarty_tpl->tpl_vars['row']->value['ms_name'];?>
  </h2>
                <p class="commentOutput"><?php echo $_smarty_tpl->tpl_vars['row']->value['ms_comment'];?>
</p>


                <?php if (((isset($_smarty_tpl->tpl_vars['dboutputData']->value[$_smarty_tpl->tpl_vars['row']->index]['mw_wert'])))) {?>

                    <?php echo $_smarty_tpl->tpl_vars['dboutputData']->value[$_smarty_tpl->tpl_vars['row']->index]['pa_name'];?>
: <?php echo $_smarty_tpl->tpl_vars['dboutputData']->value[$_smarty_tpl->tpl_vars['row']->index]['mw_wert'];?>
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
                    <button class='btn btn-dark m-2 ' type="submit" id="show_btn"  name="showData"> Show </button>
                </form>
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
