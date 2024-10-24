<main>
    <section>
        <img src="<?= $data['poster_url']?>" alt="">
    </section>
    <hgroup>
        <h3><?= $data['title']?>  </h3>
        <p>Fecha de estreno: <?= $data['release_date']?> quedan <?= $untilMessage ?></p>
        <p>La siguiente es : <?= $data['following_production']['title'] ?> </p>
    </hgroup>
</main>
