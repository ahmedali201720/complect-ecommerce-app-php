<p class="lead">Shop Name</p>
<div class="list-group">

    <?php

         $query = "SELECT * FROM categories";
         $result = mysqli_query($connection , $query);

         if(!$result){
             die("Connection failed" . ' ' . mysqli_error($connection));
         }
         
         while($row = mysqli_fetch_array($result)){
             echo "<a href='category.html' class='list-group-item'>{$row['title']}</a>";
         }

    ?>
</div>