<?php
class ChangerLangue {

	public $fichierHtml;
	public $textes;
	public $titres;
	public $textesbouttons;
	public $lienshrf;
	public $chemins;
	function __construct() {
		print_r("init");
	}
	function setTextes(array $t){
		$this->textes=$t;
	}
	function getTextes(){
		return $this->textes;
	}
	function setFichierHtml($chemin){
		$this->fichierHtml=$chemin;
	}
	function getfichierHtml(){
		return $this->textes;
	}	
}
$chang = new ChangerLangue();
$textes = array(
	`L'élégante monture Lellow allie un design séduisant à des matériaux de pointe (titane et béta-titane) pour un résultat irrésistible.` => `This elegant Lellow frame that combines a seductive design with advanced materials (titanium and beta-titanium) for an irresistible result.`,
	`Les lignes de la monture Hova ne manquent pas de caractère, mais elle en impose aussi techniquement avec ses verres polarisés avec...`=>
	`Model Hova's design is not lacking in character, but it also technically impresses with its polarized lenses with anti...`
	`Tout comme les dernières campagnes des lignes optiques et solaires de Vinyl Factory, la nouvelle campagne accompagnant la collection Icons de Vinyl Factory met à l’honneur des musiciens, en l’occurrence le groupe éléctro-pop français SULLY SULLY.` => `Just like Vinyl Factory’s latest optical and sunglasses communication campaigns, the new visuals accompanying Vinyl Factory’s Icons collection showcases musicians, the French electro-pop band SULLY SULLY.`,
	`En live au showroom Vinyl Factory, Black Pumas nous  a offert une superbe version son hit "Black Moon Rising" en accoustique.` => `Live at Vinyl Factory showroom, <br>Black Pumas offered <br>us a beautiful acoustic version of their hit "Black Moon Rising"`,
	`Non, ceci n’est pas une image exclusive de la nouvelle série « Les Experts : Courbevoie ». Il n’empêche qu’il s’agit bel et bien de Gary Dourdan, acteur principal de la série « Les Experts », et qu’il a craqué pour le modèle ENO de Vinyl Factory, la marque préférée des experts… en musique !` => `This is not an exclusive shot taken on set of the new “C.S.I. : Paris” series. But this is actually Gary Dourdan himself, the main character of the “C.S.I. “T.V. show, wearing model ENO by Vinyl Factory.`
);
$textesbouttons = array(
	"je la veux" => "i want it",
	"je la decouvre" => "i want to know more",
	"vite le live" => "watch the live",
	"+ de talents" => "see more"
);
?>