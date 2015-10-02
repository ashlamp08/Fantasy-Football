<DOCTYPE! html>
<html>
<style>
	div{
	overflow:hidden;
    overflow-y: scroll;
    height: 500px; // change this to desired height
    display: inline-block;
}
    
    #players{ position: absolute; padding: 10px; padding-right:15px; top: 100px; right: 500px; z-index: 99;}
		
</style>
<body>
<button id="GK_BUTTON" onclick="myfun('GK_TABLE')">GK</button>
<button id="DF_BUTTON" onclick="myfun('DF_TABLE')">DF</button>	
<button id="MF_BUTTON" onclick="myfun('MF_TABLE')">MF</button>
<button id="FW_BUTTON" onclick="myfun('FW_TABLE')">FW</button>	

<script>
	function myfun(id)
	{
		document.getElementById("GK_TABLE").style.display = 'none'; 
		document.getElementById("DF_TABLE").style.display = 'none'; 
		document.getElementById("MF_TABLE").style.display = 'none'; 
		document.getElementById("FW_TABLE").style.display = 'none'; 

		document.getElementById(id).style.display = 'block';
		document.getElementById(id).scrollTop = 0;
	}
</script>	
	
<?php
	require 'connect.php';
	
	$sql = "select * from PLAYER_TABLE;";
	$result = mysqli_query($conn,$sql);
	
	$GK = array();
	$DF = array();
	$MF = array();
	$FW = array();
	$GK_size=0;
	$DF_size=0;
	$MF_size=0;
	$FW_size=0;
	if ($result->num_rows > 0)
	{
		while($player = mysqli_fetch_array($result))
		{
			if($player["POSITION"] == "GK")
				{array_push($GK,$player);
					$GK_size=$GK_size+1;
					}
			else if($player["POSITION"] == "DF")
				{array_push($DF,$player);
					$DF_size=$DF_size+1;
					}
			else if($player["POSITION"] == "MF")
				{array_push($MF,$player);
					$MF_size=$MF_size+1;
					}
			else if($player["POSITION"] == "FW")
				{array_push($FW,$player);	
					$FW_size=$FW_size+1;	
					}
		}
		//echo ($GK[1]['PLAYER_NAME']);
		//echo '<br>';
			
		
		
	}
//	echo $GK_size;
	
	echo '<div id="GK_TABLE"><table >';
	for($i=0; $i<$GK_size; $i++)
    {
	
   echo '<tr>';
    echo '<td>'
    .$GK[$i]['PLAYER_NAME']
    .'</td>'
    .'<td>'
    .$GK[$i]['CLUB_ID']
    .'</td>'
    .'<td>'
    .$GK[$i]['PRICE']
    .'</td>'
    ;        
    echo '</tr>';
    }
	echo '</table></div>';
	
	echo '<div style="display:none" id="DF_TABLE"><table >';
	for($i=0; $i<$DF_size; $i++)
    {
	
   echo '<tr>';
    echo '<td>'
    .$DF[$i]['PLAYER_NAME']
    .'</td>'
    .'<td>'
    .$DF[$i]['CLUB_ID']
    .'</td>'
    .'<td>'
    .$DF[$i]['PRICE']
    .'</td>'
    ;        
    echo '</tr>';
    }
	echo '</table></div>';
	
	echo '<div style="display:none" id="MF_TABLE"><table >';
	for($i=0; $i<$MF_size; $i++)
    {
	
   echo '<tr>';
    echo '<td>'
    .$MF[$i]['PLAYER_NAME']
    .'</td>'
    .'<td>'
    .$MF[$i]['CLUB_ID']
    .'</td>'
    .'<td>'
    .$MF[$i]['PRICE']
    .'</td>'
    ;        
    echo '</tr>';
    }
	echo '</table></div>';
	
	echo '<div style="display:none" id="FW_TABLE"><table >';
	for($i=0; $i<$FW_size; $i++)
    {
	
   echo '<tr>';
    echo '<td>'
    .$FW[$i]['PLAYER_NAME']
    .'</td>'
    .'<td>'
    .$FW[$i]['CLUB_ID']
    .'</td>'
    .'<td>'
    .$FW[$i]['PRICE']
    .'</td>'
    ;        
    echo '</tr>';
    }
	echo '</table></div>';

?>
<form id="players" action="<?php $_SERVER['PHP_SELF']?>" method="POST">
<input type="text" disabled id="S_GK1" name="S_GK1" value=""><br>
<input type="text" disabled id='S_GK2' name="S_GK2" value=""><br>
<input type="text" disabled id='S_DF1' name="S_DF1" value=""><br>
<input type="text" disabled id='S_DF2' name="S_DF2" value=""><br>
<input type="text" disabled id='S_DF3' name="S_DF3" value=""><br>
<input type="text" disabled id='S_DF4' name="S_DF4" value=""><br>
<input type="text" disabled id='S_DF5' name="S_DF5" value=""><br>
<input type="text" disabled id='S_MF1' name="S_MF1" value=""><br>
<input type="text" disabled id='S_MF2' name="S_MF2" value=""><br>
<input type="text" disabled id='S_MF3' name="S_MF3" value=""><br>
<input type="text" disabled id='S_MF4' name="S_MF4" value=""><br>
<input type="text" disabled id='S_MF5' name="S_MF5" value=""><br> 
<input type="text" disabled id='S_FW1' name="S_FW1" value=""><br>
<input type="text" disabled id='S_FW2' name="S_FW2" value=""><br>
<input type="text" disabled id='S_FW3' name="S_FW3" value="">
<input type='submit' value='Confirm Team' style="position: absolute; padding: 10px; padding-right:15px; top: 100px; right: 360px; z-index: 99; border-radius: 20px 20px 20px 20px; border: 0px;">
</form>	
</body>
</html>
