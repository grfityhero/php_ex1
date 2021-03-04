<!-- 1 -->
<?php
echo 'Ex-1 '.'<br>' ;

$arr = array(
    'name' => 'Jane Doe',
    'id' => '02259875',
    'born' => '12/01/1973'
);

foreach ($arr as $val) {
    echo '<br>' . $val;
}

echo '<br>' . '-----------------' .'<br><br><br>' ;
echo 'Ex-2 '.'<br>' ;
?>


<!-- 2 -->
<?php
$arr = array(
    'name' => 'Jane Doe',
    'id' => '02259875',
    'born' => '12/01/1973'
);


?>
<h1><?php echo $arr['name']; ?></h1>
<p style='color:green; text-decoration:underline;'><?php echo $arr['id']; ?></p>
<input type='text' value=<?php echo $arr['born']; ?> />
<?php echo '<br>' . '-----------------' .'<br><br><br>' ; ?>
