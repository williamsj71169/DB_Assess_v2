<?php include "topbit.php"; 


// if find button pushed...
if(isset($_POST['find_rating']))
    
{
    
$amount=test_input(mysqli_real_escape_string($dbconnect,$_POST['amount']));
$stars=test_input(mysqli_real_escape_string($dbconnect,$_POST['stars']));

if ($amount=="exactly")
{
    $showall_sql = "SELECT *FROM `91879_food_reviews` WHERE `Rating` = $stars LIMIT 0 , 30";
}
    
elseif ($amount=="less")
{
    $showall_sql = "SELECT *FROM `91879_food_reviews` WHERE `Rating` <= $stars LIMIT 0 , 30";
}

else
{
    $showall_sql = "SELECT *FROM `91879_food_reviews` WHERE `Rating` >= $stars LIMIT 0 , 30";
}



    
$showall_query=mysqli_query($dbconnect, $showall_sql);
$showall_rs=mysqli_fetch_assoc($showall_query);
$count=mysqli_num_rows($showall_query);


?>
        
<div class="box main">
            
    <h2>Rating Search</h2>
    
    <?php
    
    // check if therer are any results
    
    if ($count<1)
        
    {
        
    ?>
    
    <div class="error">
        Sorry! There and no results that match your search.
        Please use the search bar in the sidebar to try again.
    
    </div>
        
    <?php
    
    } // and count 'if'
        
    // if therer are not any, output an error
    else{
        
        do{
            
        ?>
    
            <!--- Results go here-->
    <div class="results">
        
        <p>Name: <span class="sub_heading"><?php echo $showall_rs["Name"]; ?></span> </p>
        
        <p>Where: <span class="sub_heading"><?php echo $showall_rs["Where"]; ?></span> </p>
        
        <p>Meal Time: <span class="sub_heading"><?php echo $showall_rs["Meal Time"]; ?></span> </p>
        
        <p>Vegetarian: <span class="sub_heading"><?php echo $showall_rs["Vegetarian?"]; ?></span> </p>
        
        
        <p>Rating: <span class="sub_heading">
            
            <?php 
            for($x=0; $x < $showall_rs["Rating"]; $x++)
                
            {
                echo "&#9733;";
            }
           
            ?>
            
        </span> </p>
        
        <p><span class="sub_heading">Review / Response</span></p>
        
        <p>
            <?php echo $showall_rs["Review"]; ?>
        
        </p>

    
    
    </div>
    
    <br />
    
    <?php
            
        } // end of do
        
        while($showall_rs=mysqli_fetch_assoc($showall_query));
        
    } // end else
        
} // end of button pushed if
        
    ?>


</div>    <!-- / main -->
        
<?php include "bottom_bit.php"; ?>