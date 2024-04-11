document.getElementById('kontaktniFormular').addEventListener('submit', function(event) {
    event.preventDefault(); // Zastavíme normální chování formuláře

    // Získání formulářových dat
    var formData = new FormData(this);

    // Získání hodnoty reCAPTCHA
    var recaptchaValue = grecaptcha.getResponse();

    if (!recaptchaValue) {
        alert('Prosím potvrďte, že nejste robot.');
        return; // Zastavíme odeslání formuláře, pokud není reCAPTCHA potvrzena
    }

    formData.append('g-recaptcha-response', recaptchaValue);

    // Odeslání dat pomocí AJAX
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'odeslat.php', true);
    xhr.onload = function() {
        if (xhr.status == 200) {
            // Úspěšně odesláno, zobraz výsledek
            var vysledekDiv = document.getElementById('vysledek');
            vysledekDiv.style.display = 'block';
            vysledekDiv.textContent = xhr.responseText;

            // Skryjeme formulář
            var formular = document.getElementById('kontaktniFormular');
            formular.style.display = 'none';
        } else {
            // Chyba při odesílání
            alert('Něco se pokazilo. Email nebyl odeslán.');
        }
    };
    xhr.send(formData);
});

