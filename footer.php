<?php
/*
================================================================================================
Merriment - footer.php
================================================================================================
This is the most generic template file in a WordPress theme and is one of the two required files 
for a theme (the other header.php). The footer.php template file only displays the footer section
of this theme. This also displays the navigation menu for Socal Navigation as well.

@package        Merriment WordPress Theme
@copyright      Copyright (C) 2017. Benjamin Lu
@license        GNU General Public License v2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
@author         Benjamin Lu (https://www.benjlu.com/)
================================================================================================
*/
?>
        </section>
        <footer id="site-footer" class="site-footer">
            <div id="site-info" class="site-info">
                <a href="<?php echo esc_url(__('https://wordpress.org/', 'merriment')); ?>">
                    <?php printf(esc_html__('Proudly Powered by %s', 'merriment'), 'WordPress'); ?>
                </a>
                <br />
                <?php printf(esc_html__( 'Theme: %1$s by %2$s.', 'merriment' ), 'Merriment', '<a href="https://www.benjaminlu.net/">Benjamin Lu</a>' );
                ?>
            </div><!-- .site-info -->
        </footer>
    </section>
    <?php wp_footer(); ?>
</body>
</html>