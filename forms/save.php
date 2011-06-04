<?php

	// Include ezSQL database specific component
	include_once "../ezsql/ez_sql_mysql.php";

	// Initialise database object and establish a connection
	// at the same time - db_user / db_password / db_name / db_host
	$db = new ezSQL_mysql();

	/**********************************************************************
	*  Save to Product
	*/
	$type = $_GET['type'];
switch($type)
{
    case "prod":    // insert into table 'products'
        $datetime = $db->get_var("SELECT " . $db->sysdate());    	
        $sqlStr1  = "INSERT INTO products (";
        $sqlStr2  = " VALUES(";
        
        $sqlStr1 .= "cat_kind_id, ";
        $sqlStr2 .= $_POST['cat_kind_id'].", ";        
        if (!empty($_POST['name']))
        {
            $sqlStr1 .= "name, ";
            $sqlStr2 .= "'".mysql_real_escape_string(trim($_POST['name']))."', ";
        }        
        if (!empty($_POST['price1']))
        {
            $sqlStr1 .= "innerprice, ";
            $sqlStr2 .= $_POST['price1'].", ";
        }
        if (!empty($_POST['price2']))
        {
            $sqlStr1 .= "price, ";
            $sqlStr2 .= $_POST['price2'].", ";
        }
        if (!empty($_POST['desc']))
        {
            $sqlStr1 .= "item_desc, ";
            $sqlStr2 .= "'".mysql_real_escape_string(trim($_POST['desc']))."', ";
        }
        if (!empty($_POST['code']))
        {
            $sqlStr1 .= "code, ";
            $sqlStr2 .= "'".mysql_real_escape_string(trim($_POST['code']))."', ";
        }        
        if (!empty($_POST['oem']))
        {
            $sqlStr1 .= "oem_id, ";
            $sqlStr2 .= $_POST['oem'].", ";
        }
        if (!empty($_POST['hide']))
        {
            $sqlStr1 .= "hide, ";
            $sqlStr2 .= "1, ";
        }
        if (!empty($_POST['push']))
        {
            $sqlStr1 .= "recommend, ";
            $sqlStr2 .= "1, ";
        }
        if (!empty($_POST['comments1']))
        {
            $sqlStr1 .= "reserved, ";
            $sqlStr2 .= "'".mysql_real_escape_string(trim($_POST['comments1']))."', ";
        }        
        if (!empty($_POST['comments2']))
        {
            $sqlStr1 .= "sellsreserved, ";
            $sqlStr2 .= "'".mysql_real_escape_string(trim($_POST['comments2']))."', ";
        }
        if (!empty($_POST['viewtimes']))
        {
            $sqlStr1 .= "viewtimes, ";
            $sqlStr2 .= $_POST['viewtimes'].", ";
        }
        if (!empty($_POST['storage']))
        {
            $sqlStr1 .= "storage, ";
            $sqlStr2 .= $_POST['storage'].", ";
        }        
        $sqlStr1 = substr($sqlStr1, 0, strrpos($sqlStr1, ","));
        $sqlStr2 = substr($sqlStr2, 0, strrpos($sqlStr2, ","));
        $sqlStr1 .= ")";
        $sqlStr2 .= ")";
    	
        //$db->query("INSERT INTO products (cat_kind_id, name, innerprice, price, item_desc, code, oem_id, hide, recommend, reserved, sellsreserved, viewtimes, storage) ".
        //"VALUES($_POST['cat_kind_id'],$_POST['name'],$_POST['price1'],$_POST['price2'],$_POST['desc'],$_POST['code'],$_POST['oem'],$_POST['hide'],$_POST['push'],$_POST['comments1'],$_POST['comments2'],$_POST['viewtimes'],$_POST['storage'] )") ;         
        //"VALUES($f0, $f1, $f2, $f3, $f4, $f5, $f6, $f7, $f8, $f9, $f10, $f11, $f12)") ; 
    	// Print out last query and results..
    	$db->query($sqlStr1.$sqlStr2);
    	//$db->debug();
    	
    	$tmp = $db->insert_id;
    	$tmp1 = $db->get_var("SELECT code,reserved FROM products WHERE id = $tmp", 0);
        $tmp2 = $db->get_var(null, 1);
        
  	    echo "完毕 $tmp1->$tmp2";
    	break;
	default:
	    echo "he";
}
?>
