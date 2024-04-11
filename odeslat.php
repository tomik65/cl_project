<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Zkontrolujte reCAPTCHA
    $recaptchaResponse = $_POST['g-recaptcha-response'];
    $secretKey = '6LdeR7cpAAAAAMR3jyfoIR9C4-8ojqVkjV3-Ohjs'; // Nahraďte skutečným tajným klíčem reCAPTCHA

    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = array(
        'secret' => $secretKey,
        'response' => $recaptchaResponse
    );

    $options = array(
        'http' => array (
            'method' => 'POST',
            'content' => http_build_query($data)
        )
    );

    $context  = stream_context_create($options);
    $verify = file_get_contents($url, false, $context);
    $captchaSuccess = json_decode($verify);

    if ($captchaSuccess->success) {
        // Pokračujte s odesláním emailu
        $jmeno = htmlspecialchars($_POST["jmeno"]);
        $email = htmlspecialchars($_POST["email"]);
        $zprava = htmlspecialchars($_POST["zprava"]);
        $emailValue = htmlspecialchars($_POST["emailValue"]);

        // Emailová adresa pro odeslání
        $adresa = "tomasbato@seznam.cz";

        // Příprava předmětu emailu
        $predmet = "Nová zpráva z kontaktního formuláře";

        // Příprava obsahu emailu
        $obsah = "Jméno: $jmeno\n";
        $obsah .= "Email: $email\n";
        $obsah .= "Zpráva:$zprava\n";
        $obsah .= "Půjčka:$emailValue\n";
        
        

        // Odeslání emailu
        if (mail($adresa, $predmet, $obsah)) {
            echo "Email byl úspěšně odeslán.";
        } else {
            echo "Něco se pokazilo. Email nebyl odeslán.";
        }
    } else {
        echo "Chyba ověření reCAPTCHA.";
    }
}
?>