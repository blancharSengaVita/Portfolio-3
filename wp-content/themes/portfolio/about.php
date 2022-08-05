<?php
/*
template name: about
*/
get_header()?>
<main>
    <h1>
        <img src="https://portfolio.test/wp-content/uploads/2022/08/Logo-3.svg" alt="Logo du portfolio de Blanchar Senga-Vita">
        <?= get_the_title(); ?>
        <img class="main__image style-svg" src="https://portfolio.test/wp-content/uploads/2022/08/vous-voulez-en-savoir-plus-sur-moi-3.svg" alt="Ecriture manuscrite de 'vous voulez en savoir plus sur moi'">
    </h1>
    <Section>
        <h2>
            Je suis
            <img src="https://portfolio.test/wp-content/uploads/2022/08/Je-suis-3.svg" alt="écriture manuscrite d'Énergétique avec 3 dessin d'éclair à sa droite">
        </h2>
        <ul>
            <li>
                Énergétique
                <img src="https://portfolio.test/wp-content/uploads/2022/08/energetique-3.svg" alt="écriture manuscrite d'Énergétique avec 3 dessin d'éclair à sa droite">
            </li>
            <li>
                Optimiste
                <img src="https://portfolio.test/wp-content/uploads/2022/08/Optimiste-3.svg" alt="écriture manuscrite d'optimiste avec un dessin de soleil à sa gauche">
            </li>
            <li>
                <img src="https://portfolio.test/wp-content/uploads/2022/08/Imaginatif-3.svg" alt="écriture manuscrite d''Imagintaif' avec un dessin de soleil à sa droite">
                Imaginatif
            </li>
        </ul>
    </Section>
    <section>
        <h2>
            J'aime
            <img src="https://portfolio.test/wp-content/uploads/2022/08/Jaime-3.svg" alt="écriture manuscrite de j'aime">
        </h2>
        <ul>
            <li>
                <section>
                    <h3>Faire du sport</h3>
                    <img src="https://portfolio.test/wp-content/uploads/2022/08/faire-du-sport-3.svg" alt="écriture manuscrite de 'faire du sport' ">
                    <video width="320" height="240" autoplay loop muted>
                        <source
                            src="https://portfolio.test/wp-content/uploads/2022/08/Séquence-03.mp4"
                            type="video/mp4">
                    </video>
                </section>
            </li>
            <li>
                <section>
                    <h3>Jouer aux jeux vidéos</h3>
                    <img src="https://portfolio.test/wp-content/uploads/2022/08/Jouer-à-des-jeux-vidéo-3.svg" alt="écriture manuscrite d''Imagintaif' ">
                    <p>

                    </p>
                    <video width="320" height="240" autoplay loop muted>
                        <source
                            src="https://portfolio.test/wp-content/uploads/2022/08/Séquence-05.mp4"
                            type="video/mp4">
                    </video>
                </section>
            </li>
            <li>
                <section>
                    <h3>Regarder des animes</h3>
                    <img src="https://portfolio.test/wp-content/uploads/2022/08/regarder-des-animés-3.svg" alt="écriture manuscrite de ''Regarder des animes'">
                    <video width="320" height="240" autoplay loop muted>
                        <source
                            src="https://portfolio.test/wp-content/uploads/2022/08/Séquence-06.mp4"
                            type="video/mp4">
                    </video>
                </section>
            </li>

        </ul>
    </section>
    <div>
        <a href="https://portfolio.test/contact/">
            Dites-moi bonjour
            <img src="https://portfolio.test/wp-content/uploads/2022/08/Dites-moi-bonjour-3.svg" alt="Ecriture manuscrite de 'Dites moi bonjour'">
        </a>
    </div>
</main>

<?php get_footer() ?>