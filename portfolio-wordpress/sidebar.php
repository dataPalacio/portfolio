<?php
// Sidebar dinâmica do tema Data Palacio Portfolio
if (is_active_sidebar('sidebar-1')) : ?>
    <aside id="secondary" class="sidebar-area">
        <?php dynamic_sidebar('sidebar-1'); ?>
    </aside>
<?php endif; ?>
