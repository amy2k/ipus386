<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Accessible Forms</title>    
    <link rel="stylesheet" type="text/css" media="screen" href="cmxform.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#demo_div").html("tmp");
    $(".button").click(function() 
	{
    var form = $("form.cmxform");
	alert("ha "+$(form).serialize());	
    $.ajax({
        type: "POST",
        url: $(form).attr("action"),
        data: $(form).serialize(),
        dataType: "text",
        beforeSend: function(xhr) {
            xhr.setRequestHeader("Ajax-Request", "true");
        },
        success: function(response) {
            $("#demo_div").html(response);
        }
    });
    return false;
    });
			
});

</script>    
</head>

<body>
<div id="demo_div"></div>
<form action="save.php?type=prod" class="cmxform">
	<fieldset>
	  <legend>产品信息</legend>
		<ol>
			<li>
			  <label for="cat_kind_id">所属产品类别 <em>*</em></label> 
              <select id="cat_kind_id" name="cat_kind_id">
              	<option value="1">Temp1</option>
              	<option value="2">Temp2</option>
              </select>
          </li>
        
			<li>
			  <label for="name">产品名称 <em>*</em></label> <input type="text" id="name" name="name"/></li>

			<li>
			  <label for="code">产品编号 <em>*</em></label> <input type="text" id="code" name="code"/></li>
			<li>
			  <label for="price1">入货价格 <em>*</em></label> 
			  <input id="price1" name="price1" type="text"/></li>
			<li>
			  <label for="price2">建议价格 <em>*</em></label> 
			  <input id="price2" name="price2" type="text"/></li>
			<li>
			  <label for="oem">厂家 <em>*</em></label> 
              <select id="oem" name="oem">
              	<option value="1">Temp1</option>
              	<option value="2">Temp2</option>
              </select>
            </li>
			<li>
			  <label for="desc">产品说明</label> 
			  <textarea id="desc" name="desc" rows="3" cols="25"></textarea>
            </li>
			<li>
            <label for="hide"><input id="hide" name="hide" type="checkbox" /> 隐藏 </label></li>
            <li><label for="push"><input id="push" name="push" type="checkbox" /> 推荐</label>
            </li>        
			<li>
			  <label for="viewtimes">浏览次数</label><input id="viewtimes" name="viewtimes" type="text" />
            </li>
			<li>
			  <label for="storage">库存</label><input id="storage" name="storage" type="text" />
            </li>
	  </ol>
  </fieldset>
<fieldset>
		<legend>其他信息</legend>
		<ol>			
			<li><label for="comments1">采购附注</label> <textarea id="comments1"name="comments1"  rows="3" cols="25"></textarea></li>
		  <li><label for="comments2">销售附注</label> <textarea id="comments2" name="comments2" rows="3" cols="25"></textarea></li>              
	</ol>
	</fieldset>
	<p><input type="submit" value="Submit order" class="button"/></p>
</form>
</body>

</html>