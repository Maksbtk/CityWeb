<?php  
$mysqli=false;
function  connectDB (){
    global $mysqli;
    $mysqli = new mysqli("localhost","mysql","mysql","testbase");
$mysqli  -> query("SET NAMES 'utf-8'");

}

function closeDB () {
    global $mysqli ;
    $mysqli-> close();
}

function getProduct ($limit){
    global $mysqli;
    connectDB();
    $result = $mysqli->query("SELECT * FROM `product` ORDER BY `ID` LIMIT $limit") or die($mysqli->error);;



    closeDB();

    return resultToArray ($result); 
}

function resultToArray ($result){
    $array  = array();
    while (($row = mysqli_fetch_assoc($result)) != false  )
    {
        $array[] = $row;
        
    }
    
    return $array;
} 

?>