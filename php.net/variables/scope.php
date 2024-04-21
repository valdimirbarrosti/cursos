<?php
$a = 1; /* global scope */ 

function test()
{ 
    echo $a; /* reference to local scope variable */ 
} 

test();
?>
/*
<?php
$a = 1;
$b = 2;

function Sum()
{
    global $a, $b;

    $b = $a + $b;
} 

Sum();
echo $b;
?>

<?php
$a = 1;
$b = 2;

function Sum()
{
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
} 

Sum();
echo $b;
?>

<?php
function test_superglobal()
{
    echo $_POST['name'];
}
?>
