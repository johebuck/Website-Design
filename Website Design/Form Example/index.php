<!DOCTYPE html>
<html lang="en">
<head>
  <title>Chart Generator</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
      .error{color:#ff9900;}
    </style>
</head>
<body>

    <?php 
        $sort=$_POST['sort']; $type=$_POST['type']; $highS=""; $highN=""; $lowS=-1; $lowN=""; $avgSc=0; $avgC=0; $avgSm=0; $data=array(); 
    
    $arr=explode(PHP_EOL,$_POST['data']);
    foreach($arr as $value){
        $arrN=explode(',',$value);
        $arrN[1]=(int)$arrN[1];
        if($arrN[0]!=""){
            $data+=array($arrN[0]=>$arrN[1]);
            if($arrN[1]>$highS){
                $highN=$arrN[0];
                $highS=$arrN[1];
            }
            if(($arrN[1]<$lowS)||$lowS==-1){
                $lowN=$arrN[0];
                $lowS=$arrN[1];
            }
            $avgSm+=$arrN[1];
            $avgC++;
        }
    }
            
    if($sort=="name"){
        ksort($data);
        }
    if($sort=="score"){
        arsort($data);
    }
    
    
    if($sort=="last"){
        foreach($data as $oN=>$oG){
            $namearray=explode(' ',$oN);
            $data+=array(($namearray[1].' '.$namearray[0])=>$oG);
        }
    }
    

    echo '<table border="1"><tr><td><b>NAME</b></td><td><b>GRADE</b></td><td><b>CHART</b></td></tr>';
    foreach($data as $names=>$grades){
        if($type=="ast"){
            $output=str_repeat('*',($grades-($grades%10))/10);
        }
        if($type=="none"){
            $output='<p>blah</p>';
        }
        if($type=="bar"){
            $length=($grades-($grades%10)/10);
            $output='<svg width="'.$length.'" height="10"><rect width="'.$length.'" height="2"/>';
        }
  
        echo '<tr>';
        echo '<td>'.$names.'</td>';
        echo '<td>'.$grades.'</td>';
        echo '<td>'.$output.'</td>';
        echo '</tr>';
        
    }
    
        $avgSc=round($avgSm/$avgC,2);
    
    ?>
    
    
  <div style="color:#FF6600">  
  <h1>Chart Generator</h1>
  </div>
  <br>

  <form method="post";>

    <?php $post=false;
	  if($_SERVER["REQUEST_METHOD"]=="POST"){
	  $post=true;
	  $title=$_POST["title"];}?>

    
    
    Chart Name:<input type="text" name="title" value="<?php echo $title;?>">
    <br>
    <br>
    
    Chart Type: <select name="type">
    <option value="none">None</option>
    <option value="ast">Asterisk</option>
    <option value="bar">Bar</option>
    <option value="pie">Pie</option>
    </select>
    <br>
    <br>
    
    Sort: <select name="sort">
    <option value="none">None</option>
    <option value="score">Score</option>
    <option value="name">Name</option>
    <option value="last">Last Name</option>
    </select>
    <br>
    <br>
    
    Chart Data: <textarea name="data" rows="10" cols="40" placeholder="Enter first and last name then grade seperated by a comma"></textarea>
    <br>
    <br>
    
    <input type="submit" name="Done" value="submit">
           </form>
    
    <h1><?php if($post){echo $title;}?></h1>
    
    <?php
    echo 'High Score: '.$highS.' by '.$highN.'<br>';
    echo 'Low Score: '.$lowS.' by '.$lowN.'<br>';
    echo 'Average: '.$avgSc.'<br>';
    echo 'Type: '.$type.'<br>';
    echo 'Sort: '.$sort.'<br>';
    ?>
    
    
</body>
</html>
