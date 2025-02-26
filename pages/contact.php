<?php include('../includes/header.php'); ?>

<div class="container mt-5">
    <h1 class="text-center">📩 Contactez-moi</h1>
    <p class="text-center">Une question ? Un projet ? Autre chose ? Envoyez-moi un message !</p>

    <!-- Messages de confirmation ou d'erreur -->
    <?php if (isset($_GET['success']) && $_GET['success'] == 1) : ?>
        <div class="alert alert-success text-center">✅ Votre message a bien été envoyé !</div>
    <?php elseif (isset($_GET['error']) && $_GET['error'] == 1) : ?>
        <div class="alert alert-danger text-center">❌ Erreur lors de l'envoi du message. Veuillez réessayer.</div>
    <?php endif; ?>

    <form action="send_message.php" method="POST" class="mt-4">
        <div class="mb-3">
            <label for="name" class="form-label">Nom</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Entrez votre nom" required>
        </div>
        
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Entrez votre email" required>
        </div>
        
        <div class="mb-3">
            <label for="subject" class="form-label">Objet</label>
            <input type="text" class="form-control" id="subject" name="subject" placeholder="Sujet de votre message" required>
        </div>
        
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" rows="5" placeholder="Votre message ici..." required></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary w-100">Envoyer</button>
    </form>
</div>

<?php include('../includes/footer.php'); ?>
