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
                <ul class="list-unstyled">
                    <li><img src="../assets/images/html.png" alt="HTML" class="me-2" style="width: 20px;"> HTML</li>
                    <li><img src="../assets/images/css.png" alt="CSS" class="me-2" style="width: 20px;"> CSS</li>
                    <li><img src="../assets/images/javascript.png" alt="JavaScript" class="me-2" style="width: 20px;"> JavaScript</li>
                    <li><img src="../assets/images/bootstrap.png" alt="Bootstrap" class="me-2" style="width: 20px;"> Bootstrap</li>
                    <li><img src="../assets/images/react.png" alt="React" class="me-2" style="width: 20px;"> React</li>
                    <li><img src="../assets/images/vuejs.png" alt="Vue.js" class="me-2" style="width: 20px;"> Vue.js</li>
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
                <ul class="list-unstyled">
                    <li><img src="../assets/images/php.png" alt="PHP" class="me-2" style="width: 20px;"> PHP</li>
                    <li><img src="../assets/images/nodejs.png" alt="Node.js" class="me-2" style="width: 20px;"> Node.js</li>
                    <li><img src="../assets/images/python.png" alt="Python" class="me-2" style="width: 20px;"> Python</li>
                    <li><img src="../assets/images/java.png" alt="Java" class="me-2" style="width: 20px;"> Java</li>
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
                <ul class="list-unstyled">
                    <li><img src="../assets/images/sql.png" alt="SQL" class="me-2" style="width: 20px;"> SQL (MySQL, PostgreSQL)</li>
                    <li><img src="../assets/images/nosql1.png" alt="NoSQL" class="me-2" style="width: 20px;"> NoSQL (MongoDB, Redis)</li>
                    <li><img src="../assets/images/git.png" alt="Git" class="me-2" style="width: 20px;"> Git & GitHub</li>
                    <li><img src="../assets/images/docker.png" alt="Docker" class="me-2" style="width: 20px;"> Docker</li>
                    <li><img src="../assets/images/jenkins.png" alt="CI/CD" class="me-2" style="width: 20px;"> CI/CD (Jenkins)</li>
                    <li><img src="../assets/images/linux.png" alt="Linux" class="me-2" style="width: 20px;"> Linux</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php include('../includes/footer.php'); ?>
