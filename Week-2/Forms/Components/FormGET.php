<?php $commentitem1 = $commentitem2 = $commentitem3 = "";?>


<h1>On a scale from 1 to 5, please rank these products</h1>

<form action="FormResultsGET.php" method="get">
Ranker Name: <input type="text" name="rankername">




<!--Item 1 Rating-->
<h1>Canopy Rental set - $250</h1>
<img class="homeimg" src="./Media/canopy.webp" alt="canopy">
<h2>A high-durability canopy for providing shade during events. Comes in a 10 pack and includes spare parts.</h2>
<br>
Was this product easy to set up and take down:<br>
<input type="radio" name="ratingitem1criteria1" <?php if(isset($ratingitem1criteria1) && $ratingitem1criteria1=="1") echo "checked";?>value="1">1
<input type="radio" name="ratingitem1criteria1" <?php if(isset($ratingitem1criteria1) && $ratingitem1criteria1=="2") echo "checked";?>value="2">2
<input type="radio" name="ratingitem1criteria1" <?php if(isset($ratingitem1criteria1) && $ratingitem1criteria1=="3") echo "checked";?>value="3">3
<input type="radio" name="ratingitem1criteria1" <?php if(isset($ratingitem1criteria1) && $ratingitem1criteria1=="4") echo "checked";?>value="4">4
<input type="radio" name="ratingitem1criteria1" <?php if(isset($ratingitem1criteria1) && $ratingitem1criteria1=="5") echo "checked";?>value="5">5
<br>

Did this product last for the duration of your event:<br>
<input type="radio" name="ratingitem1criteria2" <?php if(isset($ratingitem1criteria2) && $ratingitem1criteria2=="1") echo "checked";?>value="1">1
<input type="radio" name="ratingitem1criteria2" <?php if(isset($ratingitem1criteria2) && $ratingitem1criteria2=="2") echo "checked";?>value="2">2
<input type="radio" name="ratingitem1criteria2" <?php if(isset($ratingitem1criteria2) && $ratingitem1criteria2=="3") echo "checked";?>value="3">3
<input type="radio" name="ratingitem1criteria2" <?php if(isset($ratingitem1criteria2) && $ratingitem1criteria2=="4") echo "checked";?>value="4">4
<input type="radio" name="ratingitem1criteria2" <?php if(isset($ratingitem1criteria2) && $ratingitem1criteria2=="5") echo "checked";?>value="5">5
<br>

Did this product provide what you needed for your event:<br>
<input type="radio" name="ratingitem1criteria3" <?php if(isset($ratingitem1criteria3) && $ratingitem1criteria3=="1") echo "checked";?>value="1">1
<input type="radio" name="ratingitem1criteria3" <?php if(isset($ratingitem1criteria3) && $ratingitem1criteria3=="2") echo "checked";?>value="2">2
<input type="radio" name="ratingitem1criteria3" <?php if(isset($ratingitem1criteria3) && $ratingitem1criteria3=="3") echo "checked";?>value="3">3
<input type="radio" name="ratingitem1criteria3" <?php if(isset($ratingitem1criteria3) && $ratingitem1criteria3=="4") echo "checked";?>value="4">4
<input type="radio" name="ratingitem1criteria3" <?php if(isset($ratingitem1criteria3) && $ratingitem1criteria3=="5") echo "checked";?>value="5">5
<br>

Did the product come with sufficient spare material:<br>
<input type="radio" name="ratingitem1criteria4" <?php if(isset($ratingitem1criteria4) && $ratingitem1criteria4=="1") echo "checked";?>value="1">1
<input type="radio" name="ratingitem1criteria4" <?php if(isset($ratingitem1criteria4) && $ratingitem1criteria4=="2") echo "checked";?>value="2">2
<input type="radio" name="ratingitem1criteria4" <?php if(isset($ratingitem1criteria4) && $ratingitem1criteria4=="3") echo "checked";?>value="3">3
<input type="radio" name="ratingitem1criteria4" <?php if(isset($ratingitem1criteria4) && $ratingitem1criteria4=="4") echo "checked";?>value="4">4
<input type="radio" name="ratingitem1criteria4" <?php if(isset($ratingitem1criteria4) && $ratingitem1criteria4=="5") echo "checked";?>value="5">5
<br>

On a scale of 1 to 5, would you purchase this product again, where 1 is never purchasing again and 5 is definitely purchasing agian:<br>
<input type="radio" name="ratingitem1criteria5" <?php if(isset($ratingitem1criteria5) && $ratingitem1criteria5=="1") echo "checked";?>value="1">1
<input type="radio" name="ratingitem1criteria5" <?php if(isset($ratingitem1criteria5) && $ratingitem1criteria5=="2") echo "checked";?>value="2">2
<input type="radio" name="ratingitem1criteria5" <?php if(isset($ratingitem1criteria5) && $ratingitem1criteria5=="3") echo "checked";?>value="3">3
<input type="radio" name="ratingitem1criteria5" <?php if(isset($ratingitem1criteria5) && $ratingitem1criteria5=="4") echo "checked";?>value="4">4
<input type="radio" name="ratingitem1criteria5" <?php if(isset($ratingitem1criteria5) && $ratingitem1criteria5=="5") echo "checked";?>value="5">5
<br>
Comments:<br> <textarea name="commentitem1" rows="5" cols="40"><?php echo $commentitem1;?></textarea><br>


<!--Item 2 Rating-->
<h1>Food Warmer Rental - $400</h1>
<img class="homeimg" src="./Media/foodwarmer.webp" alt="Foomerd War">
<h2>Water-based food warmer. Comes with 10 units that include three aluinum pans and three extra propane fuel capsules.</h2>
<br>

Was this product easy to set up and take down:<br>

<input type="radio" name="ratingitem2criteria1" <?php if(isset($ratingitem2criteria1) && $ratingitem2criteria1=="1") echo "checked";?>value="1">1
<input type="radio" name="ratingitem2criteria1" <?php if(isset($ratingitem2criteria1) && $ratingitem2criteria1=="2") echo "checked";?>value="2">2
<input type="radio" name="ratingitem2criteria1" <?php if(isset($ratingitem2criteria1) && $ratingitem2criteria1=="3") echo "checked";?>value="3">3
<input type="radio" name="ratingitem2criteria1" <?php if(isset($ratingitem2criteria1) && $ratingitem2criteria1=="4") echo "checked";?>value="4">4
<input type="radio" name="ratingitem2criteria1" <?php if(isset($ratingitem2criteria1) && $ratingitem2criteria1=="5") echo "checked";?>value="5">5
<br>


Did this product last the duration of your event:<br>
<input type="radio" name="ratingitem2criteria2" <?php if(isset($ratingitem2criteria2) && $ratingitem2criteria2=="1") echo "checked";?>value="1">1
<input type="radio" name="ratingitem2criteria2" <?php if(isset($ratingitem2criteria2) && $ratingitem2criteria2=="2") echo "checked";?>value="2">2
<input type="radio" name="ratingitem2criteria2" <?php if(isset($ratingitem2criteria2) && $ratingitem2criteria2=="3") echo "checked";?>value="3">3
<input type="radio" name="ratingitem2criteria2" <?php if(isset($ratingitem2criteria2) && $ratingitem2criteria2=="4") echo "checked";?>value="4">4
<input type="radio" name="ratingitem2criteria2" <?php if(isset($ratingitem2criteria2) && $ratingitem2criteria2=="5") echo "checked";?>value="5">5
<br>

Did this product keep your food adequately warm:<br>
<input type="radio" name="ratingitem2criteria3" <?php if(isset($ratingitem2criteria3) && $ratingitem2criteria3=="1") echo "checked";?>value="1">1
<input type="radio" name="ratingitem2criteria3" <?php if(isset($ratingitem2criteria3) && $ratingitem2criteria3=="2") echo "checked";?>value="2">2
<input type="radio" name="ratingitem2criteria3" <?php if(isset($ratingitem2criteria3) && $ratingitem2criteria3=="3") echo "checked";?>value="3">3
<input type="radio" name="ratingitem2criteria3" <?php if(isset($ratingitem2criteria3) && $ratingitem2criteria3=="4") echo "checked";?>value="4">4
<input type="radio" name="ratingitem2criteria3" <?php if(isset($ratingitem2criteria3) && $ratingitem2criteria3=="5") echo "checked";?>value="5">5
<br>

Did the product come with sufficient spare materials:<br>
<input type="radio" name="ratingitem2criteria4" <?php if(isset($ratingitem2criteria4) && $ratingitem2criteria4=="1") echo "checked";?>value="1">1
<input type="radio" name="ratingitem2criteria4" <?php if(isset($ratingitem2criteria4) && $ratingitem2criteria4=="2") echo "checked";?>value="2">2
<input type="radio" name="ratingitem2criteria4" <?php if(isset($ratingitem2criteria4) && $ratingitem2criteria4=="3") echo "checked";?>value="3">3
<input type="radio" name="ratingitem2criteria4" <?php if(isset($ratingitem2criteria4) && $ratingitem2criteria4=="4") echo "checked";?>value="4">4
<input type="radio" name="ratingitem2criteria4" <?php if(isset($ratingitem2criteria4) && $ratingitem2criteria4=="5") echo "checked";?>value="5">5
<br>

On a scale of 1 to 5, would you purchase this product again, where 1 is never purchasing again and 5 is definitely purchasing agian:<br>
<input type="radio" name="ratingitem2criteria5" <?php if(isset($ratingitem2criteria5) && $ratingitem2criteria5=="1") echo "checked";?>value="1">1
<input type="radio" name="ratingitem2criteria5" <?php if(isset($ratingitem2criteria5) && $ratingitem2criteria5=="2") echo "checked";?>value="2">2
<input type="radio" name="ratingitem2criteria5" <?php if(isset($ratingitem2criteria5) && $ratingitem2criteria5=="3") echo "checked";?>value="3">3
<input type="radio" name="ratingitem2criteria5" <?php if(isset($ratingitem2criteria5) && $ratingitem2criteria5=="4") echo "checked";?>value="4">4
<input type="radio" name="ratingitem2criteria5" <?php if(isset($ratingitem2criteria5) && $ratingitem2criteria5=="5") echo "checked";?>value="5">5
<br>

Comments:<br> 
<textarea name="commentitem2" rows="5" cols="40"><?php echo $commentitem2;?></textarea><br>



<!--Item 3 Rating-->
<h1>Generator - $60</h1>
<img class="homeimg" src="./Media/generator.jpg" alt="generator">
<h2>A long-lasting generator for providing power across your event. Comes prefueled and includes an extra 10 Gallons of fuel.</h2>
<br>

Was this product easy to set up and take down:<br>
<input type="radio" name="ratingitem3criteria1" <?php if(isset($ratingitem3criteria1) && $ratingitem3criteria1=="1") echo "checked";?>value="1">1
<input type="radio" name="ratingitem3criteria1" <?php if(isset($ratingitem3criteria1) && $ratingitem3criteria1=="2") echo "checked";?>value="2">2
<input type="radio" name="ratingitem3criteria1" <?php if(isset($ratingitem3criteria1) && $ratingitem3criteria1=="3") echo "checked";?>value="3">3
<input type="radio" name="ratingitem3criteria1" <?php if(isset($ratingitem3criteria1) && $ratingitem3criteria1=="4") echo "checked";?>value="4">4
<input type="radio" name="ratingitem3criteria1" <?php if(isset($ratingitem3criteria1) && $ratingitem3criteria1=="5") echo "checked";?>value="5">5
<br>

Did this product the duratino of your event:<br>
<input type="radio" name="ratingitem3criteria2" <?php if(isset($ratingitem3criteria2) && $ratingitem3criteria2=="1") echo "checked";?>value="1">1
<input type="radio" name="ratingitem3criteria2" <?php if(isset($ratingitem3criteria2) && $ratingitem3criteria2=="2") echo "checked";?>value="2">2
<input type="radio" name="ratingitem3criteria2" <?php if(isset($ratingitem3criteria2) && $ratingitem3criteria2=="3") echo "checked";?>value="3">3
<input type="radio" name="ratingitem3criteria2" <?php if(isset($ratingitem3criteria2) && $ratingitem3criteria2=="4") echo "checked";?>value="4">4
<input type="radio" name="ratingitem3criteria2" <?php if(isset($ratingitem3criteria2) && $ratingitem3criteria2=="5") echo "checked";?>value="5">5
<br>

Did this product provide adequate energy for your devices:<br>
<input type="radio" name="ratingitem3criteria3" <?php if(isset($ratingitem3criteria3) && $ratingitem3criteria3=="1") echo "checked";?>value="1">1
<input type="radio" name="ratingitem3criteria3" <?php if(isset($ratingitem3criteria3) && $ratingitem3criteria3=="2") echo "checked";?>value="2">2
<input type="radio" name="ratingitem3criteria3" <?php if(isset($ratingitem3criteria3) && $ratingitem3criteria3=="3") echo "checked";?>value="3">3
<input type="radio" name="ratingitem3criteria3" <?php if(isset($ratingitem3criteria3) && $ratingitem3criteria3=="4") echo "checked";?>value="4">4
<input type="radio" name="ratingitem3criteria3" <?php if(isset($ratingitem3criteria3) && $ratingitem3criteria3=="5") echo "checked";?>value="5">5
<br>

Did the product come with sufficient spare materials:<br>
<input type="radio" name="ratingitem3criteria4" <?php if(isset($ratingitem3criteria4) && $ratingitem3criteria4=="1") echo "checked";?>value="1">1
<input type="radio" name="ratingitem3criteria4" <?php if(isset($ratingitem3criteria4) && $ratingitem3criteria4=="2") echo "checked";?>value="2">2
<input type="radio" name="ratingitem3criteria4" <?php if(isset($ratingitem3criteria4) && $ratingitem3criteria4=="3") echo "checked";?>value="3">3
<input type="radio" name="ratingitem3criteria4" <?php if(isset($ratingitem3criteria4) && $ratingitem3criteria4=="4") echo "checked";?>value="4">4
<input type="radio" name="ratingitem3criteria4" <?php if(isset($ratingitem3criteria4) && $ratingitem3criteria4=="5") echo "checked";?>value="5">5
<br>

On a scale of 1 to 5, would you purchase this product again, where 1 is never purchasing again and 5 is definitely purchasing agian:<br>
<input type="radio" name="ratingitem3criteria5" <?php if(isset($ratingitem3criteria5) && $ratingitem3criteria5=="1") echo "checked";?>value="1">1
<input type="radio" name="ratingitem3criteria5" <?php if(isset($ratingitem3criteria5) && $ratingitem3criteria5=="2") echo "checked";?>value="2">2
<input type="radio" name="ratingitem3criteria5" <?php if(isset($ratingitem3criteria5) && $ratingitem3criteria5=="3") echo "checked";?>value="3">3
<input type="radio" name="ratingitem3criteria5" <?php if(isset($ratingitem3criteria5) && $ratingitem3criteria5=="4") echo "checked";?>value="4">4
<input type="radio" name="ratingitem3criteria5" <?php if(isset($ratingitem3criteria5) && $ratingitem3criteria5=="5") echo "checked";?>value="5">5
<br>
Comments:<br>
 <textarea name="commentitem3" rows="5" cols="40"><?php echo $commentitem3;?></textarea> <br>

<input type="submit">
</form>