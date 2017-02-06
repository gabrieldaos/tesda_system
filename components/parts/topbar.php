<div class="ui top attached tabular menu">
    
    <?php
        if($page == "page1"){
            echo "<a class='active item'>Open Jobs</a>";
            echo "<a href='page2.php' class='item'>Qualified Jobs</a>";
            echo "<a class='item'>Other</a>";
        }else if($page == "page2"){
            echo "<a href='page1.php' class='item'>Open Jobs</a>";
            echo "<a class='active item'>Qualified Jobs</a>";
            echo "<a class='item'>Other</a>";
        }else if($page == "page3"){
            echo "<a class='item'>Open Jobs</a>";
            echo "<a class='item'>Qualified Jobs</a>";
            echo "<a class='active item'>Other</a>";
        }
    
    ?>
    
    

    
</div>