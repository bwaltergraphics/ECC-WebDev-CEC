<?php 
    get_header();
?>

<!-- Big Top Graphic -->
    <div class="jumbo"> 
        <div class="one-col-container">
            <h2 class="title">SUNY Clean Energy Consortium</h2>
        </div> 
    </div>


<!-- Intro Section -->
<section>
    <div class="one-col-container" id="box1">
        <?php
            if ( have_posts() ) : 
            while ( have_posts() ) : the_post(); 
                // Display post content
                /* echo "<h1 class'headline'>";
                the_title();
                echo"</h1>";
                */

                echo "<h3 class='intro-copy'>";
                the_content();
                echo "</h3>";
            endwhile; 
        endif; 
        ?>


        <?php
        /* intro copy widget*/

        ?>

        <h3 class="intro-copy">The industry is made up of five subsectors supporting clean energy:</h3>
            <div class="flex-container">
               
                <div class="flex-col-container">
                        <img  src="../images/manufacturing-icon.png" alt="manufacturing icon">
                        <h4>Manufacturing</h4>
                </div>

                <div class="flex-col-container" >
                     <img  src="../images/construction-Icon.png" alt="manufacturing icon">
                    <h4>Construction and Installation</h4>
                </div>

                <div class="flex-col-container">
                    <img  src="../images/distribution-Icon.png" alt="manufacturing icon">
                    <h4>Energy Distribution</h4>
                </div>

                <div class="flex-col-container">
                    <img  src="../images/consulting-icon.png" alt="manufacturing icon">
                    <h4>Professional Services and Consulting</h4>
                </div>

                <div class="flex-col-container">
                    <img  src="../images/policy-icon.png" alt="manufacturing icon">
                    <h4>Public Policy and Advocacy</h4>
                </div>

            </div>
            
</section>


<!-- Green Bar Comments Section -->
<section class="goal-area" id="box2">
    <div class="one-col-container"> 
                      
        <?php 
            /* goal copy widget*/
            dynamic_sidebar( 'goal-area-sidebar' ); 
            ?>
        </div>

</section>



<section>
    <div class="one-col-container" id="box3">
        <?php 
            /* logo gallery widget*/
            dynamic_sidebar( 'logo-area-sidebar' );
            ?>
        </div>
    </div>
</section>



<?php 
    get_footer();
?>
