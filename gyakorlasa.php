első feladat:<br>
<?php 
$a; 
$a=false;
$b=12345;
$b=123.45;
$b="macskaköröm";
echo "b ".$b;
print " a ".$a;
echo gettype($a);
?> 
<br>második feladat:<br>
<?php 
$x=2.71; 
echo (bool)$x."<br />";
echo (double)$x."<br />";
echo (int)$x."<br />";
echo (string)$x."<br />";
$y = 321.23;
settype( $y, "double");
echo $y."<br />";
$y=(int)$y;
echo $y;
?> 

</br>Harmadik feladat:</br>

<?php 
$x=12.3; $y=144; $z=12;
echo $y * ($x+$z)."<br />"; 
echo $y * $x + $z."<br />";
echo $y % $z."<br />";
echo $y / $z."<br />";
?> 

</br>Negyedik feladat:</br>

<?php 
$x=12.3; $y=144; $z=12;
echo ($x*$x)>($y*$z) ."<br />"; 
echo $x<$z ."<br />"; 
echo $y==($z*$z) ."<br />"; 
echo ($y % $z) != 0  ."<br />"; 
?>

</br>Ötödik feladat</br>

<?php 
$x=12; 

if(($x % 3)==0){echo "osztható vagyok <br />"; } 

if(($x % 3)==0){echo "osztható vagyok <br />"; }
else { echo "nem <br />";}

switch ($x%7)
{
case 0:echo "nulla <br />";break;
case 1:echo "egy <br />";break;
case 2:echo "kettő <br />";break;
case 3:echo "3 <br />";break;
case 4:echo "4 <br />";break;
case 5:echo "5 <br />";break;
}
?> 
</br>Hatodik feladat</br>
<?php 
$szam=0;
for ($i = 1; $i<12; $i++) 
{ $szam+= $i; } 
echo $szam;
////////////////////////
/////////////////
/////////
$szam=0;
$x=1; 
while($szam<12)
{	
	$szam+= $x; 
	$x++;} 
echo "</br>".$szam; 
//////
$szam=0;$i=1; 
do{ $szam =+$i ; $i++;} 
while($i <12); 
echo "</br>".$szam;
?> 
</br>Hetedik feladat</br>
Lottozó
<?php 
$inf=""; 
$szam=1; 
$x=6; $y=15; 
$inf.=" <table>"; 
	for($i=0;$i<$x;$i++)
	{ 
		$inf.=" <tr>"; 

		for($j=0;$j<$y;$j++){ 
		$inf.="<td>".$szam."</td>"; 
		$szam++; 
		} 
		$inf.=" </tr>"; 
	} 
$inf.=" </table>"; 
echo $inf; 
?> 
</br>Nyolcadik feladat</br>
<?php 
$inf=""; 
$szam=rand(10, 50);; 
$x=2; $y=6; 
$tomb = array();
$inf.=" <table>"; 

	for($i=0;$i<$x;$i++)
	{ 
		$inf.=" <tr>"; 
		if($i==0)
		{
			for($j=0;$j<$y;$j++){ 
			$inf.="<td>".$szam."</td>"; 
			$tomb[$j]=$szam;
			$szam++; 
			} 	
		}
		else
		{
			for($j=0;$j<$y;$j++){ 
			$inf.="<td> ". $tomb[$j]*2 . "</td>"; 
			$szam++; 
			} 
			
		}
		
		$inf.=" </tr>"; 
	} 
$inf.=" </table>"; 
echo $inf; 
?> 
</br>Kilencedik</br>
<?php 
$t=array(); 

$t[0]=rand(1,20);

echo $t[0]."<br />";

for($i=1;$i<12;$i++){
	
$t[$i]=$t[$i-1]+rand(1,20);
echo $t[$i]."<br />";

}
?> 
</br>Több dimenziós tömbök</br>
<?php 
$t=array(); 
$sz=rand(10,22); 
$osszes=0; 
for($i=0;$i<$sz;$i++){ 
$t[$i]=array(); 
$szsz=rand(10,22); 
$osszes+=$szsz; 
for($j=0;$j<$szsz;$j++){ 
$t[$i][$j]=rand(10,99); 
} 
} 
echo $osszes; 
?> 
<br>Szétvágás wtf?<br>
<?php 
$x=array(3,4,5); $y=array(3,4,5);
$z=array_merge($x,$y);
$u=array_slice($z,2,2);
?> 
 
<?php 
$z=array_merge($x,$y);
if(count($z)<(count($x)+count($y))){echo "voltak azonosak";}
else{echo "mind különböző";} 
?> 


<?php 
for($i=131; $i<=140;$i++){
printf("d%10db%10b%h10",$i,$i,$i);
echo "<br />";
} 
?> 

<?php 
$szo="p1cök";
echo "<font size=20 color='#0000ff'>".strtr($szo,"1","2")."</font>"."<br />";
echo "<font size=20 color='#ff0000'>".strtr($szo,"ö","o")."</font>"."<br />";
echo "<font size=20 color='#00ff00'>".strtr($szo,"ö","i")."</font>"."<br />";

?>

<?php 
$szo="<br />"; 
echo htmlentities($szo,ENT_QUOTES);
?> 



<?php 
$e=ord("a");$u=ord("c");
$jelszo="";
for($i=0;$i<12;$i++){
$jelszo.=chr(rand($e,$u));
}
echo "<font size=20 >".$jelszo."</font>";

?> 
<br>ORD és char <br>
<?php 
echo ord("a")."<br />";
echo chr(97);
?>

<br>
<?php 
$t=array(20,32,45,91);
echo implode($t, ",");
echo "<br>"; 
$x = array(20,34,56,77,81);
echo implode($x,",");
$t=explode("20-34-56-77-81","-"); 
$t=explode("-","20-34-56-77-81");

?> 
<br>include<br>
<?php 
 
switch( rand(0,2) ){
case 0 : include("tavi_mese.txt"); break; 
case 1 : include("hegyi_mese.txt");break; 
case 2 : include("mezei_mese.txt"); break; 
} 

?> 


