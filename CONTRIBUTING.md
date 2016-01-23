# Contribue !

Fais-toi plaisir et viens apporter ta pierre à l'édifice !

## Infos

Cette Soundbox à pour but de répertorier un maximum de samples aussi fun que débile ! :smiley:  
N'hésite donc pas à contribuer et à proposer tes idées.

/!\ Téléchargement du Répository /!\  
En local la Soundbox ne fonctionnera qu'avec WAMP ou MAMP. Sinon erreur 'cross origin'. 

CSS réalisé avec le framework Materialize.

## Règles

* Les commits sont à faire sur la branche gh-pages pour pouvoir accéder directement à la Soundbox via ce lien : http://axelbaron.github.io/soundbox/

* Tu peux également commit en envoyant un [Pull Request](https://github.com/AxelBaron/soundbox/pulls).

* Les .mp3 doivent être normalisés à -3db & ne doivent pas durer plus de 10 secondes.

* Pour le JSON, tu peux classer ton sample dans une des catégories suivantes:
	- Film
	- Musique
	- Humour
	- Inclassable
	- Série

## Ajout d'un son

1. Ajoute ton son en .mp3 dans le dossier "sounds". Sans tirets.
2. Renseigne dans le JSON:
	- id (id unique)
	- fichier (nom dans le dossier "sounds")
	- nom (nom affiché sur le boutton)
	- categorie (voir règles, si nouvelle catégorie l'ajouter dans la liste de ce fichier)
	- tags (source, artistes, etc)

```javascript
 {
	"id": 18,
	"fichier": "lapinDuMetro",
	"nom":"Lapin du métro",
	"categorie":"Serie",
	"tags":
	  {
		 "0" : "Les kassos",
		 "1" : "Lapin"
	  }
 }
```

## Signaler un problème

Tu as trouvé un bug ou une erreur ?  
Viens nous le signaler en soumettant une [Issue](https://github.com/AxelBaron/soundbox/issues).

Tu peux le corriger ? C'est encore mieux !  
N'hésite pas à venir faire un [Pull Request](https://github.com/AxelBaron/soundbox/pulls).

## Des idées ?

Tu souhaites l'ajout d'une fonctionnalité ?  
Tu as une idée ?  
Envoie nous une [Issue](https://github.com/AxelBaron/soundbox/issues).

## TODO

* Tri par catégorie
* Ajout des raccourcis clavier pour la lecture des sons
* Des idées ?