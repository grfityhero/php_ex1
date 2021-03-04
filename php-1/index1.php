<!-- 3 -->
<?php
echo 'Ex-3 '.'<br>' ;
$open = "";
$close = "";
$txt = "";
$int = 0;

for ($i=$int; $i < 3; $i++) { 
  switch ($i) {
    case 0:
        $open = "<h6>";
        $close = "</h6>";
        $txt = "this is an h6 tag";
        break;
    case 1:
        $open = "<p>";
        $close = "</p>";
        $txt = "this is a p tag";
        break;
    case 2:
        $open = "<h1>";
        $close = "</h1>";
        $txt = "this is a h1 tag";
        break;
}
echo $open . $txt . $close;
}

?>

<!-- 4 -->

<?php
echo '<br>' . '-----------------' .'<br><br><br>' ;
echo 'Ex-4 '.'<br><br>' ;
$myArr = array("hi",3.14);
function myFunc($myArr) {
    $myArr2 =$myArr;
    var_dump($myArr2);
    }

 myFunc($myArr) 
 ?>


<!-- 5 -->
<?php
echo '<br>' . '-----------------' .'<br><br><br>' ;
echo 'Ex-5 '.'<br><br>' ;

$strArr = array("What", "are" ,"you" ,"saying");
$StrToFind = "a";


for($i = 0; $i < count($strArr); $i++){
  echo $i .') Check the string - '.$strArr[$i].':<br>';
    $pos = strpos($strArr[$i], $StrToFind);
    
    if ($pos !== false) {
        echo "the string: '" . $strArr[$i] . "'  contains the letter 'a' , in position " . $pos  .'<br><br>';
    } else
        echo "the string: '", $strArr[$i] . "'   does not contain the letter 'a' " .'<br><br>';
}

 ?>