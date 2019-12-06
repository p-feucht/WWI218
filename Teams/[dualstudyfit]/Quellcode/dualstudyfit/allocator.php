<?php
session_start();
include ("header.php");
?>

<section class="presentation dualesStudium allocator" style="padding: 0px;">
    <div class="top hochschule" style="background-image: url(&quot;assets/img/white-abstract-background.jpg&quot;);background-position: center;background-size: cover;background-repeat: no-repeat;">
        <h1 data-aos="fade-up" data-aos-duration="500" data-aos-once="true">Dual Study Allocator</h1>
        <h2 data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true">Finde jetzt dein Studium.</h2>
    </div>
</section>
<section class="questionnaire">

    <form action="result.php" method="post">

        <div class="form-group" data-aos="fade-left" data-aos-duration="500" data-aos-once="true">
            <hr><label class="form-label">Welche Studienrichtung würdest du tendenziell einschlagen wollen?</label>
            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-3" name="frageeins" value="BWL" ><label class="form-check-label" for="formCheck-3">Wirtschaft</label></div>
            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-2" name="frageeins" value="TEC" ><label class="form-check-label" for="formCheck-2">Technik</label></div>
            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="frageeins" value="SOZ" ><label class="form-check-label" for="formCheck-1">Sozial</label></div>
            <hr>
        </div>
        <div class="form-group" data-aos="fade-left" data-aos-duration="500" data-aos-once="true"><label class="form-label">Wie viel Zeit bist du bereit, in dein Studium zu investieren?</label>
            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-4" name="fragezwei" value="0" ><label class="form-check-label" for="formCheck-4">Wenig</label></div>
            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-5" name="fragezwei" value="1" ><label class="form-check-label" for="formCheck-5">Moderat</label></div>
            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-6" name="fragezwei" value="2" ><label class="form-check-label" for="formCheck-6">Viel</label></div>
            <hr>
        </div>
        <div class="form-group" data-aos="fade-left" data-aos-duration="500" data-aos-once="true"><label class="form-label">Was möchtest du eher in deinem späteren Beruf machen?</label>
            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-7" name="fragedrei" value="SOZ" ><label class="form-check-label" for="formCheck-7">Anderen Menschen helfen</label></div>
            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-8" name="fragedrei" value="TEC" ><label class="form-check-label" for="formCheck-8">Technische Probleme lösen</label></div>
            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-9" name="fragedrei" value="BWL" ><label class="form-check-label" for="formCheck-9">Projekte planen</label></div>
            <hr>
        </div>
        <div class="form-group" data-aos="fade-left" data-aos-duration="500" data-aos-once="true"><label class="form-label">Angenommen du würdest ein Unternehmen leiten, was wäre deine erste Handlung?</label>
            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-10" name="fragevier" value="BWL" ><label class="form-check-label" for="formCheck-10">Geschäftsprozesse optimieren</label></div>
            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-11" name="fragevier" value="TEC" ><label class="form-check-label" for="formCheck-11">Neue Innovationen einführen</label></div>
            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-12" name="fragevier" value="SOZ" ><label class="form-check-label" for="formCheck-12">Mitarbeiterdialog für Verbesserungen des Arbeitsumfelds</label></div>
            <hr>
        </div>
        <div class="form-group" data-aos="fade-left" data-aos-duration="500" data-aos-once="true"><label class="form-label">In welchem Bereich könntest du dir vorstellen zu arbeiten?</label>
            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-10" name="fragefunf" value="SOZ" ><label class="form-check-label" for="formCheck-10">Human Resources</label></div>
            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-11" name="fragefunf" value="BWL" ><label class="form-check-label" for="formCheck-11">Business Analyse</label></div>
            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-12" name="fragefunf" value="TEC" ><label class="form-check-label" for="formCheck-12">Konstruktion</label></div>
            <hr>
        </div>
        <div class="form-group" data-aos="fade-left" data-aos-duration="500" data-aos-once="true"><label class="form-label">Stelle dir vor du arbeitest bei einem Autohersteller. Welche Aufgabe würdest du gerne übernehmen?</label>
            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-10" name="fragesechs" value="SOZ" ><label class="form-check-label" for="formCheck-10">Ausbildungsbetreuung</label></div>
            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-11" name="fragesechs" value="TEC" ><label class="form-check-label" for="formCheck-11">Motordesign</label></div>
            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-12" name="fragesechs" value="BWL" ><label class="form-check-label" for="formCheck-12">Preisplanung</label></div>
            <hr>
        </div>
        <div class="form-group" data-aos="fade-left" data-aos-duration="500" data-aos-once="true"><label class="form-label">Wie wichtig ist dir später im Beruf der Kontakt zu Kollegen?</label>
            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-10" name="fragesieben" value="SOZ" ><label class="form-check-label" for="formCheck-10">Sehr wichtig</label></div>
            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-11" name="fragesieben" value="TEC" ><label class="form-check-label" for="formCheck-11">Brauche ich nicht</label></div>
            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-12" name="fragesieben" value="BWL" ><label class="form-check-label" for="formCheck-12">Ab und an wäre es ganz gut</label></div>
            <hr>
        </div>
        <div class="form-group" data-aos="fade-left" data-aos-duration="500" data-aos-once="true"><label class="form-label">Welche der folgenden Branchen würdest du für dich in Erwägung ziehen?</label>
            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-11" name="frageacht" value="TEC" ><label class="form-check-label" for="formCheck-11">Automobil</label></div>
            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-12" name="frageacht" value="BWL" ><label class="form-check-label" for="formCheck-12">Banking/Finance</label></div>
            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-10" name="frageacht" value="SOZ" ><label class="form-check-label" for="formCheck-10">Gesundheitswesen</label></div>
            <hr>
        </div>
        <div class="form-group" data-aos="fade-left" data-aos-duration="500" data-aos-once="true"><label class="form-label">Was würdest du am liebsten analysieren?</label>
            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-10" name="frageneun" value="SOZ" ><label class="form-check-label" for="formCheck-10">Dynamik einer Gruppe</label></div>
            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-11" name="frageneun" value="BWL" ><label class="form-check-label" for="formCheck-11">Kosten zu Nutzen</label></div>
            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-12" name="frageneun" value="TEC" ><label class="form-check-label" for="formCheck-12">Auswirkung von Bremsen auf einen Autoreifen</label></div>
            <hr>
        </div>
        <div class="form-group" data-aos="fade-left" data-aos-duration="500" data-aos-once="true">
            <div class="row">
                <div class="col"><label class="col-form-label form-label">Wähle den Start deines Studiums.</label></div>
                <div class="col col-start"><select name="studienbeginn"><optgroup label="Studienbeginn"><option value="" selected="">2020</option><option value="">2021</option><option value="">2022</option><option value="">2023</option><option value="">2024</option><option value="">2025</option></optgroup></select></div>
            </div>
            <hr>
        </div>
        <div class="form-group" data-aos="fade-left" data-aos-duration="500" data-aos-once="true">
            <div class="row">
                <div class="col"><label class="col-form-label form-label">Wähle deinen Studienort.</label></div>
                <div class="col col-ort"><select class="studienort" name="studienort"><optgroup label="Studienort"><option value="" selected="">Ravensburg</option></optgroup></select></div>
            </div>
            <hr>
        </div>
        <div data-aos="fade-left" data-aos-duration="500" data-aos-once="true" class="but-fit-me"><button class="btn btn-outline-primary" data-aos="fade-right" data-aos-duration="500" type="submit" name="fit">Fit me.</button></div>
</section>
</form>

<?php include ("footer.php"); ?>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/smart-forms.min.js"></script>
<script src="assets/js/bs-init.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
<script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
</body>

</html>