<!DOCTYPE html>
<html lang="cs">

<head>
	<meta charset="utf-8">
	<title>Creditland</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="normalize.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="menu.css">
	<link rel="stylesheet" href="footer.css">

	<link href="styles/slider.css" rel="stylesheet" />
	<link href="styles/index.css" rel="stylesheet" />
	<script src="scripts/slider.js"></script>
	<script src="scripts/index.js"></script>

	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<script type="text/javascript" src="https://www.google.com/recaptcha/api.js"></script>

</head>

<body>
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
							<h1>Kolik peněz budete potřebovat?</h3>
								<label for="loan-amount-input">

								</label>
								<input id="loan-amount-input" name="loan-amount" type="range" min="1000" max="25000"
									value="50" step="100" />
								<div id="loan-amount-slider" class="form-slider"></div>
								<div class="coupon-area">
									<label for="coupon-code">
										<h3><span style="white-space: nowrap;">Slevový kód</span></h3>
									</label>
									<input id="coupon-code" name="coupon" type="text" />
									<button class="button-6" type="button">Použít</button>
								</div>
								<div class="loan-form-button">
									<button class="button-5" type="submit">Požádát o půjčku</button>
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
					<h1>Jaké nabízíme typy půjček?</h1>
					<ul>
						<li><span class="container-how-span">Rychlá půjčka</span> - rychlo půjčka do 30 tisíc korun na
							měsíc.</li>
						<li><span class="container-how-span">Dlouhodobá půjčka</span>- půjčka na cokoliv se splatnosti
							12 měsíců.</li>
						<li><span class="container-how-span">Zpětný leasing</span>- poskytujeme zpětný leasing
							automobilů a strojů.</li>
						<li><span class="container-how-span">Balónová půjčka</span>- měsíčně nám hradíme pouze úroky a
							na konci uhradíte celou částku.</li>
					</ul>
				</div>
				<div class="form-style">
					<form id="kontaktniFormular" action="odeslat.php" method="post">
						<h2>Žádost o půjčku</h2>

						<!-- Span elementy pro zobrazení hodnot -->
						<span id="firstElement" contenteditable="true" type="text"></span>
						<span id="otherElement" type="text"></span>

						<!-- Skrytý input pro ukládání hodnoty z prvního spanu -->
						<input type="hidden" name="emailValue" id="emailValueInput" value="">

						<!-- Formulářové prvky -->
						<div class="form-line">
							<label for="jmeno">Jméno:</label><br>
							<input type="text" id="jmeno" name="jmeno" required><br><br>
						</div>
						<div class="form-line">
							<label for="prijmeni">Příjmení:</label><br>
							<input type="text" id="prijmeni" name="prijmeni" required><br><br>
						</div>
						<div class="form-line">
							<label for="tel">Telefon:</label><br>
							<input type="tel" id="tel" name="tel" required><br><br>
						</div>
						<div class="form-line">
							<label for="email">Email:</label><br>
							<input type="email" id="email" name="email" required><br><br>
						</div>
						<div class="form-line">
							<label for="zprava">Zpráva:</label><br>
							<textarea id="zprava" name="zprava" rows="4" required></textarea><br><br>
						</div>
						<div class="form-line">
							<div class="g-recaptcha" data-sitekey="6LdeR7cpAAAAAL7zl04utBkr5V5GZLr0tlySBreZ"></div>
							<br><br>
						</div>
						<input class="button-5" type="submit" value="Odeslat">
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

							var valueSpannn = document.getElementById('firstElement');
							valueSpannn.addEventListener('input', updateHiddenInput); // Aktualizace hodnoty při každé změně obsahu ve spanu
						});
					</script>

					<script src="script.js"></script>
				</div>

				<!--<div class="container-borrows">
					<div class="container-borrows-box">
						<h2>Jaké nabízíme typy půjček?</h2>
						<div class="container-borrows-box-loans loan1"></div>
						<div class="container-borrows-box-loans loan2"></div>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, rerum modi, voluptatem sequi
							blanditiis omnis dolor necessitatibus eveniet distinctio minus animi? Autem fugiat, ipsum
							cumque iusto adipisci perferendis ipsa dicta!</p>
						<div class="container-borrows-box-loans loan3"></div>
						<div class="container-borrows-box-loans loan4"></div>
					</div>
				</div> -->
			</div>
		</div>
	</main>
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