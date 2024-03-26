<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "365Fitness@gmail.com";
    $subject = "Nová správa z kontaktného formulára";
    $message = "Meno: " . $_POST['meno'] . "\n";
    $message .= "E-mail: " . $_POST['email'] . "\n";
    $message .= "Poznámka: " . $_POST['poznamka'] . "\n";

    if (mail($to, $subject, $message)) {
        echo "<p style='color:green;'>Správa bola úspešne odoslaná.</p>";
    } else {
        echo "<p style='color:red;'>Chyba pri odosielaní správy.</p>";
    }
}
?>

<footer>
    <div class="footer">
        <div class="footer-dark">
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="obsahf">
                            <div class="col-sm-6 col-md-3 item">
                                <h3>Otvaracie hodiny</h3>
                                <ul>
                                    <li><p>Pondelok: 07:00 - 22:00</p></li>
                                    <li><p>Utorok: 07:00 - 22:00</p></li>
                                    <li><p>Streda: 07:00 - 22:00</p></li>
                                    <li><p>Štvrtok: 07:00 - 22:00</p></li>
                                    <li><p>Piatok: 07:00 - 22:00</p></li>
                                    <li><p>Sobota: 08:00 - 21:00</p></li>
                                    <li><p>Nedeľa: 08:00 - 21:00</p></li>
                                </ul>
                            </div>
                            <div class="Kontakt">
                                <div class="col-sm-6 col-md-3 item">
                                    <h3>Kontakt</h3>
                                    <ul>
                                        <li><p>Email: 365Fitness@gmail.com</p></li>
                                        <li><p>Tel č.: 0904908884</p></li>
                                        <li><p>Adresa: Štúrova 1434/18, 949 01 Nitra</p></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dotaznik">
                                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                    <label for="Meno" class="meno">Meno:</label> <br>
                                    <input type="Text" class="meno" name="meno"> <br>
                                    <label for="Mail" class="email">E-mail:</label> <br>
                                    <input type="email" class="email" id="email" name="email"> <br>
                                    <label for="Poznámka" class="poznamka">Poznámka:</label> <br>
                                    <textarea name="poznamka" id="Area" cols="30" rows="5"></textarea> <br>
                                    <div class="sssou">
                                        Súhlas so spracovaním osobných údajov<input type="checkbox">
                                    </div>
                                    <button type="submit" name="submit">Odoslať</button>
                                </form>
                            </div>
                        </div>
                        <div class="col item social" id="k">
                            <a href="https://www.facebook.com/365Fiitness/" target="_blank"><i
                                    class="icon ion-social-facebook"></i></a>
                            <a href="https://twitter.com/365_fitness" target="_blank"><i
                                    class="icon ion-social-twitter"></i></a>
                            <a href="https://www.instagram.com/fitness.365/" target="_blank"><i
                                    class="icon ion-social-instagram"></i></a></div>
                    </div>
                    <p class="copyright">365 Fitness © 2023</p>
                    <p class="autor">Vytvoril: Sebastián Vodička</p>
                </div>
            </footer>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </div>
</footer>
