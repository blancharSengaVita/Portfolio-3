<?php
/*
template name: mentions legales
*/
get_header()?>
<main class="mentions">
    <img src="https://portfolio.test/wp-content/uploads/2022/08/Logo-3.svg" alt="Logo du portfolio de Blanchar Senga-Vita">
    <h1 class="mentions__"> <?=get_the_title(); ?> </h1>
    <img src="https://portfolio.test/wp-content/uploads/2022/08/Mention-légale-3.svg" alt="ecriture manuscrite de 'mentions légales'">
    <p class=""> <?php the_content(); ?> </p>
</main>

<?php get_footer() ?>
