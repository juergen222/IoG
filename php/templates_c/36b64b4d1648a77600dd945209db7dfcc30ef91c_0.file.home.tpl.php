<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-10 13:25:32
  from 'D:\xampp\htdocs\IoG\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6023d0bc157828_66899154',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36b64b4d1648a77600dd945209db7dfcc30ef91c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\IoG\\templates\\home.tpl',
      1 => 1612959929,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6023d0bc157828_66899154 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15203467426023d0bc154fd0_01237936', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16966520126023d0bc156360_05954177', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_98438416023d0bc157045_88852679', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/parent.tpl");
}
/* {block 'title'} */
class Block_15203467426023d0bc154fd0_01237936 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_15203467426023d0bc154fd0_01237936',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
IoG - Home<?php
}
}
/* {/block 'title'} */
/* {block 'header'} */
class Block_16966520126023d0bc156360_05954177 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_16966520126023d0bc156360_05954177',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section class="home">
        <section class="bar align-middle"></section>
        <div class="heading">
            <h1>Overhaul your Garden</h1>
        </div>
    </section>
<?php
}
}
/* {/block 'header'} */
/* {block 'main'} */
class Block_98438416023d0bc157045_88852679 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_98438416023d0bc157045_88852679',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
<?php
}
}
/* {/block 'main'} */
}
