<?php
$confs = [
           100 => "Глухое",
           120 => "С одной створ",
           130 => "С двумя открывающимися створками",
           125 => "Балконный блок " ,
           133 => "Французский балконный блок" ,
           148 => "Одностворчатые двери",
           122 => "Штульповые двери"
		  ];

    




$prof = [
           70 => "Goodwin WHS 72" ,
           50 => "Goodwin WHS 60" , 
		   30 => "Goodwin Softline" ,
		   33 => "Goodwin Softline-82",
           25 => "Goodwin Proline 70" ,
           101 => "Goodwin Euroline Plus" ,
		   100 => "Goodwin TOPLINE" ,
		   105 => "Goodwin Euroline"
		  ];
		   
		   
		   
		   
$dzen = [
		  50 =>"Однокамерный",
		  70 =>"Двухкамерный",
		  65 =>"Однокамерный ЭНЕРГО",
		  90 =>"Двухкамерный ЭНЕРГО",
		  120 =>"Мультифункциональный",
		  200 =>"ClimaGuard Solar" 
		 ];

		   
		   
		 
		$cheks = [
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

            <div class="field">
                
				<label>Конфигурация</label>

                <select name="Conf">
				
				   <?php
                    foreach($confs as $price=>$type){?>
                        <option value="<?php echo $price;?>"><?php echo $type;?></option>
                    <?php }?>
                </select>
				</form>	
					
		<div class="field">
                <label>Профиль</label>
			<select  name="Prof">
                    <?php
                foreach($prof as $price=>$type){?>
                        <option value="<?php echo $price;?>"><?php echo $type;?></option>
						<?php } ?>
			</select>
				
		
			<div class="grou field">
                <label>Тип стеклопакета:</label>
					<select  name="dzen">
				<?php
                 foreach ($dzen as $price=>$type)
                {?>
                 <div class="field">
                        <div class="checkbox">
                           <option value="<?php echo $price;?>"><?php echo $type;?></option>
						<?php } ?>
                            
                        </div>
                    </div>
				</select>
				
                <div class="dop">
                    <label> Дополнительные услуги:</label>
					<select name="cheks"
                    <?php
                 foreach ($cheks as $price=>$type)
                {?>
                 <div class="checks">
                        <div class="checkbox">
                           <option value="<?php echo $price;?>"><?php echo $type;?></option>
						<?php } ?>
                    
                
                <?php 
				 foreach ($cheks as $key=>$type){?>
                 <div class="field">
                    <div class=" checkbox">
                        <input type="checkbox" name="<?php echo $key;?>" value="<?php echo $type['price'];?>>" checked>
                        <label><?php echo $type['name'],$type['price'], ' грн'; ?></label>
                    </div>
                </div>
               <?php }?>
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
            </div>
			
		
            <button  type="submit">Сделать заказ</button>
            </div>												
        </p>
    </div>
</div>
</body>
</html>
<?php
if (!empty($_POST["Conf"]) && !empty($_POST["Width"]) && is_numeric($_POST["Width"]) && is_numeric($_POST["Height"]) && !empty($_POST["Height"])
    && !empty($_POST["Prof"]) && !empty($_POST["dzen"])) {
        $Sum = $_POST["Width"] * $_POST["Height"] + $_POST["Conf"] + $_POST["dzen"] + $_POST["Prof"] +
            $_POST["cheks"];
    }       
            ?>
			  <h2 align="left">Цена<?php echo $Sum ?></h2>
	
		
		

