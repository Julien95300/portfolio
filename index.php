<?php include('includes/header.php'); ?>

<div class="container text-center mt-5">
    <h1>Bienvenue sur le portfolio de <span class="text-primary">JOSEPH MARIE Julien</span></h1>
    <p class="lead mt-3">Développeur Full Stack | Étudiant en BUT Informatique</p>

    <!-- Section "À propos" -->
    <p class="mt-4">Vous souhaitez en savoir plus sur moi et mon parcours ?</p>
    <a href="about.php" class="btn btn-primary mt-2">
        À propos de moi
    </a>

    <!-- Section "Projets" -->
    <p class="mt-4">Découvrez mes projets et mes compétences en développement.</p>
    <a href="portfolio.php" class="btn btn-primary mt-2">
        Voir mes projets
    </a>
</div>

<!-- Section Actualité dans ma vie -->
<div class="container mt-5">
    <h2 class="text-center">⚽ Actualité dans ma vie</h2>
    <p class="text-center">Je partage ici les événements marquants qui me passionnent.</p>

    <div class="card mx-auto mt-3" style="max-width: 600px;">
        <img src="assets/images/realmadrid.webp" class="card-img-top" alt="Victoire en Ligue des Champions">
        <div class="card-body">
            <h5 class="card-title">Mon équipe favorite brille en Ligue des Champions ! 🏆</h5>
            <p class="card-text">
                Quelle soirée inoubliable ! Le Real Madrid s'impose 2-1 face à l'Atlético de Madrid lors du match aller de la Ligue des Champions.  
                Un premier pas vers la qualification, en espérant un match retour tout aussi intense ! Au passage quelle masterclass de Brahim Diaz et Rodrygo !
            </p>
        </div>
    </div>
</div>

<!-- Section Podcast -->
<div class="container mt-5">
    <h2 class="text-center">🎙️ Podcast L'IUT EN ROUE LIBRE</h2>
    <p class="text-center">
        Écoutez notre podcast réalisé dans le cadre d’un projet de communication, où nous abordons 
        l’intelligence artificielle et son impact sur le milieu scolaire !
    </p>

    <div class="d-flex justify-content-center align-items-center mt-3">
        <img src="assets/images/image_podcast.png" alt="Cover Podcast" class="rounded shadow" style="width: 100px; height: 100px; object-fit: cover; margin-right: 15px;">
        
        <audio controls>
            <source src="assets/audio/audio_podcast_ppp.mp3" type="audio/mpeg">
            Votre navigateur ne supporte pas l'élément audio.
        </audio>
    </div>
</div>



<?php include('includes/footer.php'); ?>
