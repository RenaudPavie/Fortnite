<?php
$accueilON  = $modeSurvieON = $modeBattleRoyalON = $contactON = "";
if ($_SERVER['REQUEST_METHOD'] === 'GET'and isset($_GET['page'])) {
			switch ($_GET['page']) {
				case 'accueil' :
					$accueilON = "id='pageActive'";
					$includePage = 'view/accueil.php';
						break;
				case 'modeSurvie' :
					$modeSurvieON = "id='paeActive'";
					$includePage = 'view/modeSurvie.php';
						break;
				case 'modeBattleRoyal' :
					$modeBattleRoyalON = "id='pageActive'";
					$includePage = 'view/modeBattleRoyal.php';
						break;
				case 'contact' :
					$contactON = "id='pageActive'";
					$includePage = 'view/contact.php';
						break;
				default:
					$accueilON = "id='pageActive'";
					$includePage = 'view/accueil.php';
			}
		}
		else {$accueilON = "id='pageActive'";
			 $includePage = 'view/accueil.php';}

?>