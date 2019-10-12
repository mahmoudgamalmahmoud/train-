
 <!DOCTYPE html>
 <html>
 <head>
  <meta charset="utf-8">
 	<title></title>
 </head>
 <style type="text/css">
  body {
    margin: 0px;
    padding: 0px;
  }
  #header{
   
    height: 70px;
    background-color: #999 ;


  }
  #b
  {
    height: 10px;
    background-color: #191E22;


  }
  #e
  {
    height: 10px;
    background-color:  #999;


  }
  #h{
  color:white;
  font-size: 30px;
padding:20px;



  }
  #ih
  {

    width: 30px;
    height: 30px;


  }
  #container
  {
  
  text-align: center;
margin-top :20px;


  }
  #fr
  {
    padding: 40px;
  }
  .in
  {
    margin:20px;
    text-align: right;
    width: 400px;
  height: 40px;
border : 2px solid black;
font-size :20px;

background: #F2F2F2;

  }
  #se
  {
margin: 20px;
border : 2px solid black;
width: 200px;
height:40px;
font-size :15px;


background: #F2F2F2;

  

  }
 


  #bt
  {
height: 40px;
background:  #999 ;
margin: 20px;
 border : 2px solid black;
    
    width: 300px;
    color:white;
    font-size:25px;
  }
#end 
{
  background-color :#252F31;
  height: 75px;
  text-align: right;
  color: #999;
}
#final
{ padding: 10px;
font-size :12px; }
#error
{
margin: 20px;
font-size: 25px;
color:#252F31;
line-height: 30px;


}
table {

  margin-left:450px;
  border: 2px solid black;}
  th {
    height: 35px;
    width: 100px;
    font-size: 18px;
     border: 2px solid black;
     background:#999;
     color:black;


  }
  
   td {
    height: 35px;
    width: 100px;
    font-size: 15px;
     border: 2px solid black;
     background:#F2F2F2;
     color:black;
     text-align: center;


  }
  a
  {

        font-size: 25px;
        color: black;
        margin-bottom: 10px;

  }
  #bo
  {

 margin-bottom: 10px;
  }

  
</style>
 <body>
 	 <div id="header" >

 <div id ="h">
  <img id ="ih" src="cut.png">
 Egypt_trains ( قطارلت_مصر ) </div>
  </div>
  <div id="b">
  </div>
     
     <?php
include ('database.php');
 $error= [];
 $i=-1;

if($_POST['submit']=="عرض القطارات")
{
	if(!empty($_POST['txt1']))
	{

		$l=$_POST['txt1'];
	}
	else
	{
		$error[++$i]=" ادخل محطه الوصول *";
 
		}
	if(!empty($_POST['txt2']))
	{

		$r=$_POST['txt2'];
	}
	else
	{
		$error[++$i]=" ادخل محطه المغادره *";
	}

	
	if(!empty($error))
	{
    echo "<div id='container'>";
		 echo "<div id='error'>";
		foreach ($error as  $value) {

			echo $value ."<br>";
            


		}
        echo "</div>";
  echo " </div>";
  
	}
	
}






 ?>
      <?php
      $t= $_POST['sel'];
     
     
if($t=="الكل")
{
$q= "SELECT * FROM train WHERE sl = ? AND sr = ?  ";
 $rows=$db->getRows($q,array($_POST['txt2'],$_POST['txt1']));
 
 echo "<div id='container'>";
 echo "<table><tr> <th>النوع</th><th>مرات الوقوف</th> <th>السرعه</th><th>المده</th><th>وقت القيام </th><th>وقت الوصول </th><th>رقم القطار</th></tr>";


   
     

if(count($rows)>0)
{
      foreach($rows as $row)
{

  echo "<tr>
    <td>" . $row['type'] ."</td>
    <td>" . $row['stops'] ."</td>
    <td>" . $row['speed'] ."</td>
    <td>" . $row['duration'] ."</td>
    <td>" . $row['timel'] . "</td>
    <td>" . $row['timer'] . "</td>
    <td>" . $row['t_id'] . "</td>
    </tr>" ;


}
}
else
{
  echo"<tr> <td  colspan='7'> لا يوجد </td></tr>";
}
}
  else
  {
$q= "SELECT * FROM train WHERE sl = ? AND sr = ? AND type=? ";
 $rows=$db->getRows($q,array($_POST['txt2'],$_POST['txt1'],$t));
 
 echo "<div id='container'>";
 echo "<table><tr> <th>مرات الوقوف</th> <th>السرعه</th><th>المده</th><th> وقت المغادره</th><th>وقت الوصول </th><th>رقم القطار</th></tr>";

   
     

if(count($rows)>0)
{
      foreach($rows as $row)
{

  echo "<tr>
    <td>" . $row['stops'] ."</td>
    <td>" . $row['speed'] ."</td>
    <td>" . $row['duration'] ."</td>
    <td>" . $row['timel'] . "</td>
    <td>" . $row['timer'] . "</td>
    <td>" . $row['t_id'] . "</td>
    </tr>" ;


}
}
else
  {
  echo"<tr> <td  colspan='7'>لا يوجد</td></tr>";
}

}
echo "</table>"  ;
echo "</div>";
?>
<div id="container">
  <div id="bo">
 <a href="main.php">الرجوع الي الصفحه الاساسيه </a>
</div>
</div>
  <div id="e">
  </div>
  
   
   <div  id="end"> 


  <div id="final"> هيثه سكك حديد مصر 
  
  جمهوريه مصر العربيه * 
<br>
 هيثه سكك حديد مصر 
  
  جمهوريه مصر العربيه 
   هيثه سكك حديد مصر 
  
  جمهوريه مصر العربيه *  
  <br>
   
  
  جمهوريه مصر العربيه * 
 </div></div>
 </body>
 </html>