<?php
$confs = [
           100 => "Глухое",
           120 => "С одной створ",
           130 => "С двумя открывающимися створками",
           125 => "Балконный блок " ,
           133 => "Французский балконный блок" ,
           148 =>"Одностворчатые двери",
           122 =>"Штульповые двери"
		  ];

    




$prof = [
           70 => "Goodwin WHS 72" ,
           50 => "Goodwin WHS 60" , 
		   30 => "Goodwin Softline" ,
		   33 => "Goodwin Softline-82",
           25 => "Goodwin Proline 70" ,
           101 => "Goodwin Euroline Plus" ,
		   100 => "Goodwin TOPLINE" ,
		   105 =>"Goodwin Euroline"
		  ];
		   
		   
		   
		   
$dzen = [
		  50 =>"Однокамерный",
		  70 =>"Двухкамерный",
		  65 =>"Однокамерный ЭНЕРГО",
		  90 =>"Двухкамерный ЭНЕРГО",
		  120 =>"Мультифункциональный",
		  200 =>"ClimaGuard Solar" 
		 ];

		   
		   
		 
		$cheks =   [
    'dop_montaj' => [
        'name' => "Монтаж",
        'price' => 30,
    ],
    'dop_montaj' => [
        'name' => "Установка отлива",
        'price' => 23,
    ],
    'dop_montaj' => [
        'name' => "Установка подоконника",
        'price' => 25,
    ],
    'dop_montaj' => [
        'name' => "Установка козырька",
        'price' => 30,
    ],
    'dop_montaj' => [
        'name' => "Москитная сетка",
        'price' => 22,
    ],  
	];
?>
<html>
html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Lab1-windows</title>
<body>

<div id="Windowscalc">
 <form>
 <div id="Windows">
 </div>
 <div id="config_site">
 </div>
 </form>
</div>
<form class="configuration"  method="post" action="https://http:index.php>
            <div class="field">
                
				<label>Конфигурация</label>

                <select name="Conf">
				
				</html>
                   
				   <?php
                    foreach($confs as $price=>$type){?>
                        <option value="<?php echo $price;?>"><?php echo $type;?></option>
                    <?php }?>
                </select>
            </div>

            <div class="two fields">
                <div class="field">
                    <label>Ширина(см)</label>
                    <input type="number" name="Width" placeholder="Width">
                </div>
                <div class="field">
                    <label>Высота(см)</label>
                    <input type="number" name="Height" placeholder="Height">
                </div>
            </div>
			
		<div class="field">
                <label>Профиль</label>
			<select class="prof" name="Prof">
                    <?php
                    foreach($profs as $price=>$type)?>
                        <option value="<?php echo $price;?>">
						<?php echo $type;?>
						</option>
			</select>
			<div class="grou field">
                <label>Тип стеклопакета:</label>
				
				<?php
                foreach($dzens as $price=>$type){?>
                    <div class="field">
                        <div class="checkbox">
                            <input name="dzen" type="radio" value="<?php echo $price;?>">
                            <label><?php echo $type;?></label>
                        </div>
                    </div>
                <?php }?>

                <div class="grou filed">
                    <label>Дополнительные услуги</label>
                </div><?php foreach ($checks as $key=>$type){?>
                 <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" name="<?php echo $key;?>" value="<?php echo $type['price'];?>>" checked>
                        <label><?php echo $type['name'],$type['price'], ' грн'; ?></label>
                    </div>
                </div>
               <?php }?>
            </div>
            <button  class="pform" type="submit">Сделать заказ
            </button>
        </form>													
        </p>
    </div>
</div>
</body>
</html>
<?php
if (!empty($_POST["Conf"]) && !empty($_POST["Width"]) && is_numeric($_POST["Width"]) && is_numeric($_POST["Height"]) && !empty($_POST["Height"])
    && !empty($_POST["Prof"]) && !empty($_POST["dzen"])) {
        $Sum = $_POST["Width"] * $_POST["Height"] + $_POST["Conf"] + $_POST["dzen"] + $_POST["Prof"] +
            $_POST["a"] + $_POST["b"] + $_POST["c"] + $_POST["d"] + $_POST["e"];
        ?>
<p><strong>
		  Размер окна:</strong></p>
          <table border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="270px">Высота окна (1см)</td>
			
                <td><input id="" name="" size="1" type="text" value="0"> 10грн.</td>
              </tr>
          </table>

          <table border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="270px">Ширина окна (1см)</td>
			
                <td><input id="" name="" size="1" type="text" value="0"> 10грн.</td>
              </tr>
          </table>
</div>