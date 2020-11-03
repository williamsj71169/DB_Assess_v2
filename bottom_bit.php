<div class="box side">
        
    <h2>Search | <a class="side_nav" href="showall.php">Show All</a></h2>

    <i>Type part of the meals name if desired</i>

    <hr /> 

    <!--- START OF Name Search -->

    <form method="post" action="name_search.php" enctype="multipart/form-data">

        <input class="search" type="text" name="name" size="40" value="" required placeholder="Name..." />

        <input class="submit" type="submit" name="find_name" value="Search" />

    </form>

    <!---  END OF Name Search--> 
    
  <hr/>    
    
    <!--- START OF Where Search -->

    <form method="post" action="where_search.php" enctype="multipart/form-data">

        <select name="where" required>
            <option value="" disabled selected>Where...</option>
            <?php
            // retrive unique values in genre column
            $where_sql="SELECT DISTINCT `Where` FROM `91879_food_reviews` ORDER BY `Where` ASC";
            $where_query=mysqli_query($dbconnect, $where_sql);
            $where_rs=mysqli_fetch_assoc($where_query);
            
            do {
                
                ?>
            
            <option value="<?php echo $where_rs['Where']; ?>"><?php echo $where_rs['Where']; ?></option>
            
            <?php
                
            } // end of where option retrieval
            
            while($where_rs=mysqli_fetch_assoc($where_query));
            
            ?>
            
        </select>
        
        <input class="submit" type="submit" name="find_where" value="Search" />

    </form>

    <!---  END OF Where Search-->
    
    <hr/>    
    
    <!--- START OF meal_time Search -->

    <form method="post" action="meal_search.php" enctype="multipart/form-data">

        <select name="meal" required>
            <option value="" disabled selected>Meal Time...</option>
            <?php
            // retrive unique values in meal column
            $meal_sql="SELECT DISTINCT `Meal Time` FROM `91879_food_reviews` ORDER BY `Meal Time` ASC";
            $meal_query=mysqli_query($dbconnect, $meal_sql);
            $meal_rs=mysqli_fetch_assoc($meal_query);
            
            do {
                
                ?>
            
            <option value="<?php echo $meal_rs['Meal Time']; ?>"><?php echo $meal_rs['Meal Time']; ?></option>
            
            <?php
                
            } // end of meal option retrieval
            
            while($meal_rs=mysqli_fetch_assoc($meal_query));
            
            ?>
            
        </select>
        
        <input class="submit" type="submit" name="find_meal" value="Search" />

    </form>

    <!---  END OF meal Search-->  
    
    <hr/>    
    
    <!--- START OF vege Search -->

    <form method="post" action="vege_search.php" enctype="multipart/form-data">

        <select name="vegetarian" required>
            <option value="" disabled selected>Vegetarian?</option>
            <?php
            // retrive unique values in vege column
            $vegetarian_sql="SELECT DISTINCT `Vegetarian?` FROM `91879_food_reviews` ORDER BY `Vegetarian?` ASC";
            $vegetarian_query=mysqli_query($dbconnect, $vegetarian_sql);
            $vegetarian_rs=mysqli_fetch_assoc($vegetarian_query);
            
            do {
                
                ?>
            
            <option value="<?php echo $vegetarian_rs['Vegetarian?']; ?>"><?php echo $vegetarian_rs['Vegetarian?']; ?></option>
            
            <?php
                
            } // end of vege option retrieval
            
            while($vegetarian_rs=mysqli_fetch_assoc($vegetarian_query));
            
            ?>
            
        </select>
        
        <input class="submit" type="submit" name="find_vegetarian" value="Search" />

    </form>

    <!---  END OF vege Search-->
    
    <hr/> 
    
  <i>Ratings Search</i>
    
    <!---  start of ratings form-->
    
    <form method="post" action="ratings_search.php" enctype="multipart/form-data">
        
        <select class="half width" name="amount">
            <option value="exactly" >Exactly...</option>
            <option value="more" selected>At least...</option>
            <option value="less" >At most...</option>          
        </select>
    
        <select class="half width" name="stars">
            <option value=1>&#9733;</option>
            <option value=2>&#9733;&#9733;</option>
            <option value=3 selected>&#9733;&#9733;&#9733;</option>
            <option value=4>&#9733;&#9733;&#9733;&#9733;</option>
            <option value=5>&#9733;&#9733;&#9733;&#9733;&#9733;</option>
            
        </select>
        
            <input type="submit" class="submit" name="find_rating" value="Search"/>
    
    </form>
    
</div>  <!-- / side box -->
    
    <!---  end of ratings form-->
    
        <div class="box footer">
        CC Jessika Williams 2020
    </div>  <!-- / footer -->

    </div>  <!-- / wrapper  -->
    
</body>        
