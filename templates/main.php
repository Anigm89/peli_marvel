<main>
    <section>
        <img src="<?= $poster_url ?>" alt="">
    </section>
    <hgroup>
        <h3><?= $title ?>  </h3>
        <p>Fecha de estreno: <?= $release_date ;?> quedan <?= $untilMessage ?></p>
        <p>La siguiente es : <?= $following_production['title'] ?> </p>
    </hgroup>
</main>
