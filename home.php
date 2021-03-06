<?php 
    get_header();
?>

<!-- Big Top Graphic -->
    <div class="jumbo" style="background-image: url('<?php get_template_directory_uri(); ?>/images/MainImage.png');"> 
        <div class="one-col-container">
            <h2 class="title">SUNY Clean Energy Consortium</h2>
        </div> 
    </div>


<!-- Intro Section -->
<section>
    <div class="one-col-container">

        <?php
        /* intro copy widget*/

        ?>

        <h3 class="intro-copy">The industry is made up of five subsectors supporting clean energy:</h3>
            <div class="flex-container">
               
                <div class="flex-col-container">
                        <img  src="images/manufacturing-icon.png" alt="manufacturing icon">
                        <h4>Manufacturing</h4>
                </div>

                <div class="flex-col-container" >
                     <img  src="images/construction-Icon.png" alt="manufacturing icon">
                    <h4>Construction and Installation</h4>
                </div>

                <div class="flex-col-container">
                    <img  src="images/distribution-Icon.png" alt="manufacturing icon">
                    <h4>Energy Distribution</h4>
                </div>

                <div class="flex-col-container">
                    <img  src="images/consulting-icon.png" alt="manufacturing icon">
                    <h4>Professional Services and Consulting</h4>
                </div>

                <div class="flex-col-container">
                    <img  src="images/policy-icon.png" alt="manufacturing icon">
                    <h4>Public Policy and Advocacy</h4>
                </div>

            </div>
</section>


<!-- Green Bar Comments Section -->
<section class="goal-area">
    <div class="one-col-container">               
        <?php
        /* goal copy widget*/

        ?>
    </div>
</section>



<section>
    <div class="one-col-container">
        <?php 
        /* logo gallery widget*/

        ?>
    </div>
</section>



<?php 
    get_footer();
?>