<h1>Ranker Name: <?PHP 
if ($_POST ["rankername"] == null) {
echo "Name not provided";
} 
else
    echo $_POST ["rankername"];?>
</h1>

<!--Item 1 Ratings-->
<h1>Canpoy</h1>


<table>
<tr>
    <th>Ease of Setup</th>
    <th>Durability</th>
    <th>Purpose Fulfillment</th>
    <th>Sufficient Materials</th>
    <th>Repurchase Likelihood</th>
</tr>
    <tr>
    <th><?php echo $_POST["ratingitem1criteria1"]; ?></th>
    <th><?php echo $_POST["ratingitem1criteria2"]; ?></th>
    <th><?php echo $_POST["ratingitem1criteria3"]; ?></th>
    <th><?php echo $_POST["ratingitem1criteria4"]; ?></th>
    <th><?php echo $_POST["ratingitem1criteria5"]; ?></th>
    </tr>
</table>




<h2>Comment:</h2>
<div class="comment">
<?php echo $_POST["commentitem1"]; ?>
</div>


<!--Item 2 Ratings-->
<h1>Food Warmer</h1>

<Table>
<tr>
    <th>Ease of Setup</th>
    <th>Durability</th>
    <th>Purpose Fulfillment</th>
    <th>Sufficient Materials</th>
    <th>Repurchase Likelihood</th>
</tr>
<tr>
    <th><?php echo $_POST["ratingitem2criteria1"]; ?></th>
    <th><?php echo $_POST["ratingitem2criteria2"]; ?></th>
    <th><?php echo $_POST["ratingitem2criteria3"]; ?></th>
    <th><?php echo $_POST["ratingitem2criteria4"]; ?></th>
    <th><?php echo $_POST["ratingitem2criteria5"]; ?></th>
</tr>
</Table>


<h2>Comment:</h2>
<div class="comment">
 <?php echo $_POST["commentitem2"]; ?><br>
 </div>

<!--Item 3 Ratings-->
<h1>Generator</h1>

<table>
<tr>
    <th>Ease of Setup</th>
    <th>Durability</th>
    <th>Purpose Fulfillment</th>
    <th>Sufficient Materials</th>
    <th>Repurchase Likelihood</th>
</tr>
<tr>
    <th><?php echo $_POST["ratingitem3criteria1"]; ?></th>
    <th><?php echo $_POST["ratingitem3criteria2"]; ?></th>
    <th><?php echo $_POST["ratingitem3criteria3"]; ?></th>
    <th><?php echo $_POST["ratingitem3criteria4"]; ?></th>
    <th><?php echo $_POST["ratingitem3criteria5"]; ?></th>
</tr>
</table>



<h2>Comment:</h2>
<div class="comment">
 <?php echo $_POST["commentitem3"]; ?>
 </div>