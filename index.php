<!DOCTYPE html>
<html lang="cs">

<head>
	<meta charset="utf-8">
	<title>Creditland</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="normalize.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="menu.css">
	<link rel="stylesheet" href="footer.css">

	<link href="styles/slider.css" rel="stylesheet" />
	<link href="styles/index.css" rel="stylesheet" />
	<script src="scripts/slider.js"></script>
	<script src="scripts/index.js"></script>

	<script src="script.js"></script>

	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<script type="text/javascript" src="https://www.google.com/recaptcha/api.js"></script>

</head>

<body>
	<span id="home"></span>
	<?php include 'header.php'; ?>
	
	<main>
		<div class="container">
			<div class="container-row-repair">
				<div class="container-row-barrel">
					<div class="container-row-top">
						<div class="container-row-top-box">
							<img class="main-logo" src="img/logo_bolt/svg/logo-no-background.svg" alt="CreditLand_logo">

						</div>
						<div class="main-buttons">
							<a href="#anchor1"><button class="main-buttons-button button-5">CHCI PŮJČIT</button></a>
							<!--	<button class="main-buttons-button button-5 ">SPOČÍTAT SPLÁTKY</button>  -->
						</div>
					</div>
				</div>
			</div>
			<div class="container-another_borrow">
				<div class="container-another_borrow-left">
					<h2>Rychlá půjčka na cokoliv</h2>
				</div>
				<div class="container-another_borrow-line">

				</div>
				<div id="anchor1" class="container-another_borrow-right">
					<h2>Peníze již do 15 minut</h2>
				</div>
			</div>
			<div class="container-row">
				<div class="container-calculator">

					<div class="loan-form-container">

						<form class="loan-form">
							<h1>Kolik peněz <span style="white-space: nowrap;"> budete potřebovat?</span></h3>
								<label for="loan-amount-input">

								</label>
								<input id="loan-amount-input" name="loan-amount" type="range" min="1000" max="25000"
									value="50" step="100" />
								<div id="loan-amount-slider" class="form-slider"></div>
								<div class="coupon-area">
									<label for="coupon-code">
									<!--	<h3><span style="white-space: nowrap;">Slevový kód</span></h3> -->
									</label>
									<input id="coupon-code" placeholder="SLEVOVÝ KÓD" name="coupon" type="text" />
									<button class="button-6" type="button">Použít</button>
								</div>
								<div class="loan-form-button">
									<button class="button-5" type="submit"><a class="button-nondecoration" href=#anchor5>Požádát o půjčku</a></button>
								</div>
						</form>
						<div class="calculator">
							<div class="name">Půjčka</div>
							<div class="value" id="calc-amount"></div>
							<div class="name">Peníze Vám pošleme</div>
							<div class="value">Dnes</div>
							<div class="name">Datum splatnosti</div>
							<div class="value" id="calc-due-date">17. 4. 2024</div>
							<div class="name">Úrok</div>
							<div class="value" id="calc-interest"></div>
							<div class="name">Poplatek</div>
							<div class="value" id="calc-fee"></div>
							<div class="name">Sleva</div>
							<div class="value" id="calc-discount">0 Kč</div>
							<div class="name summary">Celkem zaplatíte</div>
							<div class="value summary" id="calc-total"></div>
						</div>

					</div>
				</div>
				<div class="container-how">
					<h1 id="products">Jaké nabízíme <span style="white-space: nowrap;"> typy půjček? </span></h1>
					<ul>
						<li><span class="container-how-span">Rychlá půjčka</span> - rychlo půjčka do 30 tisíc korun na
							měsíc.</li>
						<li><span class="container-how-span">Dlouhodobá půjčka</span> - půjčka na cokoliv se splatnosti
							12 měsíců.</li>
						<li><span class="container-how-span">Zpětný leasing</span> - poskytujeme zpětný leasing
							automobilů a strojů.</li>
						<li><span class="container-how-span">Balónová půjčka</span> - měsíčně nám hradíme pouze úroky a
							na konci uhradíte celou částku.</li>
					</ul>
				</div>
				<div class="example">
					<h2>Reprezentativní příklad půjčky</h2>
					<p class="example-p">Půjčka ve výši 10 000 Kč, půjčka na dobu 1
						měsíce, poplatek za sjednání ve výši 28,87%, úrok ve výši 9,52%
						RPSN činí od 38,39% do 160,85 %.
						<br> Tento příklad není návrhem na uzavření smlouvy. Poskytujeme půjčky pouze
						pro OSVČ a podnikatele.
					</p>
				</div>
				<div class="form-style">

					<form id="kontaktniFormular" action="odeslat.php" method="post">
						<h2>Žádost o půjčku</h2>

						<!-- Skrytý input pro ukládání hodnoty z prvního spanu -->
						<input type="hidden" name="emailValue" id="emailValueInput" value="">

						<!-- Formulářové prvky -->
						<div class="form-line">

							<input type="text" id="jmeno" name="jmeno" placeholder="Jméno*" required><br><br>
						</div>
						<div class="form-line">
							<input type="text" id="prijmeni" name="prijmeni" placeholder="Příjmení*" required><br><br>
						</div>
						<div class="form-line">
							<input type="tel" id="tel" name="tel" placeholder="Telefon*" required><br><br>
						</div>
						<div class="form-line">
							<input type="email" id="email" name="email" placeholder="Email*" required><br><br>
						</div>
						<div class="form-line">
							<input type="text" id="obec" name="obec" placeholder="Obec*" required><br><br>
						</div>
						<div class="form-line">
							<input type="text" id="ulice" name="ulice" placeholder="Ulice, čp*" required><br><br>
						</div>
						<div class="form-line">
							<input type="text" id="psc" name="psc" placeholder="PSČ*" required><br><br>
						</div>
						<div class="form-line">
							<select name="typZadatele" required class="form-line-select" placeholder="Typ žadatele"
								data-lfv-initialized="true">
								<option value="2">Podnikatel (OSVČ, s.r.o., atd.)</option>
								<option value="1">Nepodnikám</option>
							</select>
						</div>
						<div class="loan-right">
							<span class="loan-right-details" id="firstElement" contenteditable="true"
								type="text"></span>
							<span class="loan-right-details" id="otherElement" type="text"></span>
						</div>

						<div class="form-line" id="anchor5">
							<div class="g-recaptcha" data-sitekey="6LdeR7cpAAAAAL7zl04utBkr5V5GZLr0tlySBreZ"></div>
							<br><br>
						</div>
						<input class="button-5" id="sendmail" type="submit" value="Odeslat">
					</form>

					<div id="vysledek" style="display: none;"></div>

					<script>			
						
						// Funkce pro aktualizaci skrytého inputu na základě hodnoty ve spanu
						function updateHiddenInput() {
							var spanValue = document.getElementById('firstElement').innerText.trim(); // Získání textu ze spanu a odstranění bílých znaků
							document.getElementById('emailValueInput').value = spanValue; // Aktualizace hodnoty skrytého inputu
						}

						document.addEventListener('DOMContentLoaded', function () {
							updateHiddenInput(); // Aktualizace hodnoty při načtení stránky

						});
					

						// Zavolat funkci updateHiddenInput() před odesláním formuláře
						document.getElementById('kontaktniFormular').addEventListener('submit', function (event) {
							event.preventDefault(); // Zastavíme normální odeslání formuláře

							// Aktualizujeme skrytý input
							updateHiddenInput();

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
							xhr.onload = function () {
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
					</script>




				</div>
			</div>
		</div>
	</main>
	<div class="disclaimer">
		<div class="disclaimer-box">
			<p>Spotřebitelské úvěry nenabízíme, zaměřujeme se pouze na živnostníky a
				podnikatelské úvěry, proto údaje na těchto stránkách se nevztahují pro
				spotřebitelské úvěry dle zákona č. 257/2016 Sb.</p>
		</div>
	</div>
	<div class="container-another_borrow-bottom">
		<h2>Hledáte jinou půjčku? Neváhejte nás kontaktovat.</h2>
	</div>
	<?php include 'footer.php'; ?>
</body>


</html>

<script>
	function updatemenu() {
		if (document.getElementById('responsive-menu').checked == true) {
			document.getElementById('menu').style.borderBottomRightRadius = '0';
			document.getElementById('menu').style.borderBottomLeftRadius = '0';
		} else {
			document.getElementById('menu').style.borderRadius = '0px';
		}
	}
</script>