<?php
/*
template name: projects
*/
get_header()?>
    <main class="layout__projects projects">
        <h1>
            <img src="https://portfolio.test/wp-content/uploads/2022/08/Logo-3.svg" alt="Logo du portfolio de Blanchar Senga-Vita">
            <?= get_the_title(); ?>
            <img class="main__image style-svg" src="https://portfolio.test/wp-content/uploads/2022/08/Voici-mes-projets-2-3.svg" alt="Ecriture manuscrite de 'Voici mes projets'">
        </h1>
        <div class="projects__container">
            <article class="Project">
                <a href="https://portfolio.test/projets/bounce" class="project__link">
                    <div class="trip__card">
                        <h2 class="project__title">Bounce</h2
                        <figure class="project__fig">
                            <img src="https://portfolio.test/wp-content/uploads/2022/08/Bounce-logo.png" alt="logo du jeu Bounce">
                            <figcaption class="project__figcaption">
                                <span class="hidden"> Bounce </span>
                                <img src="https://portfolio.test/wp-content/uploads/2022/08/BOUNCE-3.svg" alt="Ecriture manuscrite de 'Bounce'">
                            </figcaption>
                        </figure>
                    </div>
                </a>
            </article>

            <article class="Project">
                <a href="https://portfolio.test/projets/nouvelair" class="project__link">
                    <div class="trip__card">
                        <h2 class="project__title">Nouvel'Air</h2
                        <figure class="project__fig">
                            <img src="https://portfolio.test/wp-content/uploads/2022/08/Antilope-3.png" alt="logo de Nouvel'Air">
                            <figcaption class="project__figcaption">
                                <span class="hidden"> Nouvel'Air</span>
                                <img src="https://portfolio.test/wp-content/uploads/2022/08/NouvelAir-3.svg" alt="Ecriture manuscrite de 'Nouvel'Air'">
                            </figcaption>
                        </figure>
                    </div>
                </a>
            </article>

            <article class="Project">
                <a href="https://portfolio.test/projets/c-v" class="project__link">
                    <div class="trip__card">
                        <h2 class="project__title">C.V.</h2
                        <figure class="project__fig">
                            <img src="https://portfolio.test/wp-content/uploads/2022/08/CV-Template.png" alt="Une pile de C.V.">
                            <figcaption class="project__figcaption">
                                <span class="hidden"> C.V. </span>
                                <img src="https://portfolio.test/wp-content/uploads/2022/08/CV-3.svg" alt="Ecriture manuscrite de 'C.V.'">
                            </figcaption>
                        </figure>
                    </div>
                </a>
            </article>
        </div>

        <div>
            <a href="https://portfolio.test/contact/">
                Dites-moi bonjour
                <img src="https://portfolio.test/wp-content/uploads/2022/08/Dites-moi-bonjour-3.svg" alt="Ecriture manuscrite de 'Dites moi bonjour'">
            </a>
        </div>
</main>

<?php get_footer();  ?>


