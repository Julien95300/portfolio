<?php include('../includes/header.php'); ?>

<h1>À propos de moi</h1>
<p>Je suis un développeur passionné, spécialisé dans divers domaines du développement web et logiciel. Découvrez mes compétences en cliquant sur les catégories :</p>

<div class="accordion" id="skillsAccordion">
    <!-- Frontend -->
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingFrontend">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFrontend" aria-expanded="true" aria-controls="collapseFrontend">
                Frontend
            </button>
        </h2>
        <div id="collapseFrontend" class="accordion-collapse collapse show" aria-labelledby="headingFrontend" data-bs-parent="#skillsAccordion">
            <div class="accordion-body">
                <ul>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>JavaScript</li>
                    <li>Bootstrap</li>
                    <li>React</li>
                    <li>Vue.js</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Backend -->
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingBackend">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBackend" aria-expanded="false" aria-controls="collapseBackend">
                Backend
            </button>
        </h2>
        <div id="collapseBackend" class="accordion-collapse collapse" aria-labelledby="headingBackend" data-bs-parent="#skillsAccordion">
            <div class="accordion-body">
                <ul>
                    <li>PHP</li>
                    <li>Node.js</li>
                    <li>Python (Django, Flask)</li>
                    <li>Ruby on Rails</li>
                    <li>Java (Spring Boot)</li>
                    <li>C# (.NET)</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Autres -->
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOthers">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOthers" aria-expanded="false" aria-controls="collapseOthers">
                Autres compétences
            </button>
        </h2>
        <div id="collapseOthers" class="accordion-collapse collapse" aria-labelledby="headingOthers" data-bs-parent="#skillsAccordion">
            <div class="accordion-body">
                <ul>
                    <li>SQL (MySQL, PostgreSQL)</li>
                    <li>NoSQL (MongoDB, Firebase)</li>
                    <li>Git & GitHub</li>
                    <li>Docker</li>
                    <li>CI/CD (Jenkins, GitLab CI)</li>
                    <li>Linux</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php include('../includes/footer.php'); ?>
