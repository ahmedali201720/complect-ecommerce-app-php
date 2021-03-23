<p class="lead">Shop Name</p>
<div class="list-group">

    <?php

         $query = "SELECT * FROM categories";
         $categories = query($query);

         confirm($categories);
         
         while($row = fetch_array($categories)){
             echo "<a href='category.html' class='list-group-item'>{$row['title']}</a>";
         }

    ?>
</div>