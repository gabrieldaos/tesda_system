<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- CSS, JS -->
        <link type="text/css" rel="stylesheet" href="../components/css/main.css">
        <script type="text/javascript" src="../components/js/jquery.js"></script>
        <script type="text/javascript" src="../components/js/main.js"></script>
        
        <!-- SEMANTIC UI -->
        <link type="text/css" rel="stylesheet" href="../semantic/semantic.css">
        <link type="text/css" rel="stylesheet" href="../semantic/semantic.min.css">
        <script src="../semantic/semantic.min.js"></script>
        <script src="../semantic/semantic.js"></script>
        
        <script>
        $(document).ready(function(){
     $('#example_button').click(function(){
        $('#example_modal').modal('show');    
     });
});
        </script>
        
    </head>
    
    <body>
        
        <div class="ui padded grid computer only fullsizegrid">
            <div class="three wide column">
                <div class="ui visible inverted left vertical sidebar menu" id="sidebara">
                <?php
                    $page = "page1";
                    include '../components/parts/sidebar.php';
                 ?>
            </div>
            
            <div class="thirteen wide column">
                <?php
                    include '../components/parts/topbar.php';
                    include '../components/parts/page1content.php';
                 ?>
            </div>
        </div>
        
        
        <div class="ui padded grid tablet only mobile only">
            <div class="ui sidebar inverted vertical menu" id="sidebartoggle">
                <?php
                    include '../components/parts/sidebar.php';
                ?>
            
            <div class="pusher">
   
                
            </div>
                
                <div class="fifteen wide column">
                    <?php
                        include '../components/parts/navigationbar.php';
                        echo "<br>";
                        include '../components/parts/topbar.php';
                        include '../components/parts/page1content.php';
                     ?>
                </div>
        </div>
        
        
        
    </body>
</html>


<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

