<?php 


get_header();

?>

<section>
    <div class="pages-col-container" id="box3">
        <?php 
        if ( have_posts() ) : 
            while ( have_posts() ) : the_post(); 
                // Display post content
                echo "<h1>";
                the_title();
                echo "</h1>";

                echo "<div class='inside-content'";
                the_content();
                echo "</div>";
            endwhile; 
        endif; 

        ?>
    </div>
</section>






<?php 
get_footer();

?>