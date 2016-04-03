<?php 
function GetIndexText()
{
	$array = array();
	
	if($_SESSION["lang"] == "fr")
	{
		$array[] = "Le portfolio de ";
		$array[] = "UN PROGRAMMEUR DE JEU";
		$array[] = "Tous les projets";
		$array[] = "Meilleurs projets";
		$array[] = "Moteur de jeu 3D";
		$array[] = "J'ai appris de plusieurs tutoriels, livres et articles à propos du développement des moteurs de jeux. Ce projet a commencé en hiver 2013 quand j'ai commencé à utiliser le c++. J'ai
					développé mon moteur de jeu plusieurs fois, apprenant de mes erreurs jusqu'à ce que j'ai grandement amélioré ma programmation et mon architecture. Au début, j'utilisais le DirectX SDK jusqu'à ce
					que je change pour Windows SDK. Entre l'interface utilisateur c# du moteur de jeu et l'exécutable c++, j'utilise un fichier XML pour y sauvegarder ma scène.";
		$array[] = "Jeu Unreal Engine";
		$array[] = "Durant l'été 2015, je travaillais sur un jeu 3D utilisant Unreal Engine. C'était le premier projet où j'ai utilisé un engin de jeu existant. Le but était d'expérimenter avec les modèles 3D, les sons,
					les particules et les événements de jeu. Je me suis aussi beaucoup amusé avec le déplacement de l'eau afin de la rendre réaliste. Cette
					expérience va me guider dans la conception de mon propre engin et dans le progrès de mes futurs jeux.";
		$array[] = "Mon but principal est de devenir un <b>programmeur graphique</b>. J'ai construit mon propre moteur de jeu pour avoir plus d'expérience avec l'architecture d'engin. Je suis intéressé dans plusieurs
		domaines du jeu vidéo et ce qui <b>me rend fier</b> est de rendre un jeu beau avec des effets speciaux, l'éclairage, l'eau, etc. Je focus sur le <b>C++</b> puisque c'est très performant
		pour les jeux 3D, mais j'ai aussi beaucoup pratiqué le Java et le C#, sachant quand utiliser quelle technologie.";
		$array[] = "Apprenez-en plus sur moi";
		$array[] = "Vous y retrouverez toutes mes informations et mon curriculum vitae. Ce serait un plaisir d'être en contact avec vous.";
		$array[] = "Contactez-moi";
	}
	else
	{
		$array[] = "The portfolio of ";
		$array[] = "A VIDEO GAME PROGRAMMER";
		$array[] = "View more projects";
		$array[] = "Featured Projets";
		$array[] = "3D Game Engine";
		$array[] = "I learned from multiple tutorials, books and articles about making a game engine. This project started during winter 2013 when I first used c++. I've built this engine multiple times,
						learning from my mistakes until I greatly improved my programming and architectural skills. At first, I used the DirectX SDK until I switched to Windows SDK. I use an XML file as a bridge
						between the c# user interface of the game engine and the c++ executable project.";
		$array[] = "Unreal Engine Game";
		$array[] = "During my summer, I worked on a 3D game using Unreal Engine. This was the first project which I used an existing Engine. The goal was to experiment with 3D models, sounds, particules and
						game event while understanding how an engine can be interacted with. I also fiddled a lot with the water's displacement wave. This experience will guide me in the design of my own engine 
						and in the progress of futur games.";
		$array[] = "My main goal is to be a <b>graphics programmer</b>. I built my own engine to have more experience with engine architecturing. I'm interested in a lot of domains in video game programming, 
					but what <b>makes me proud</b> is making a game look good with special effects, lighting, water and all other components. I focus a lot on <b>C++</b> as it is very performant for 3D games, but 
					I have practiced a lot with Java and C#, knowing when to use which technology.";
		$array[] = "Learn more about me";
		$array[] = "You will find all my contact informations and my resume. It would be a pleasure to be in contact with you.";
		$array[] = "Contact me";
	}
	return $array;
}

function GetHeaderText()
{
	$array = array();
	
	if($_SESSION["lang"] == "fr")
	{
		$array[] = "english";
		$array[] = "MES JEUX";
		$array[] = "À PROPOS DE MOI";
		$array[] = "ME CONTACTER";
	}
	else
	{
		$array[] = "français";
		$array[] = "MY GAMES";
		$array[] = "ABOUT ME";
		$array[] = "CONTACT ME";
	}
	return $array;
}

function GetGameText()
{
	$array = array();
	
	if($_SESSION["lang"] == "fr")
	{
		$array[] = "MES CRÉATIONS";
		
		$array[] = "Jeu 3D - Unity";
		$array[] = "Jeu 3D avec des bonus qui est relié à une base de données afin d'afficher les statisques sur un site web.";
		$array[] = "Outil: Unity 3D";
		$array[] = "En savoir plus";
		$array[] = "Octobre 2015";
		
		$array[] = "Moteur de jeu 3D";
		$array[] = "Projet avec une interface C# générant un XML afin que l'exécutable C++ puisse créer ses objets. Plusieurs patrons de conception ont
					été appliqués afin d'avoir une bonne architecture.";
		$array[] = "Langages: C# et C++";
		$array[] = "En savoir plus";
		$array[] = "Mai 2015";
		
		$array[] = "Jeu 3D - Unreal Engine";
		$array[] = "Jeu 3D fait avec Unreal Engine afin d'expérimenter les mouvements 3D, les changements de niveau, les particules, etc.";
		$array[] = "Outil: Unreal Engine";
		$array[] = "En savoir plus";
		$array[] = "Juin 2015";
		
		$array[] = "Squirrel Town";
		$array[] = "Jeu développé sur PC en MVC et porté sur Android. Le jeu comprend un splashscreen, un loading screen, un menu principal, le village et plusieurs mini-jeux. En complétant les mini-jeux, le joueur
					 obtient des noisettes qui servent à acheter des décorations dans l'arbre qui se situe dans le village. Les patrons de conception «observer» et «state machine» sont très utilisés. Une classe était responsable du chargement
					 de la vue JavaFX et d'y associer son contrôleur.";
		$array[] = "Langage: Java";
		$array[] = "Novembre 2014";
		
		$array[] = "Winter War";
		$array[] = "Jeu multijoueur où chaque joueur peut lancer des balles de neige, avertissant le serveur, qui redistribue le message aux trois autres joueurs.";
		$array[] = "Langage: Java";
		$array[] = "Octobre 2014";
		
		$array[] = "Démineur";
		$array[] = "Jeu démineur où le but était d'avoir une bonne architecture avec l'implémentation de l'observateur et l'utilisation de MVC.";
		$array[] = "Langage: Java";
		$array[] = "Octobre 2014";
		
		$array[] = "Music Z";
		$array[] = "Premier jeu 2D qui accompagnait un lecteur de musique en Visual Basic. Le but du jeu était de survivre le plus longtemps possible à une invasion de zombies. Le taux d'apparition des zombies était
					dépendant du volume de la musique.";
		$array[] = "Langage: Visual Basic";
		$array[] = "Novembre 2013";
		
		$array[] = "Plusieurs autres projets ont été réalisés:";
	}
	else
	{
		$array[] = "MY CREATIONS";
		
		$array[] = "3D Game - Unity";
		$array[] = "A Tower Offense where four players must cooperate to defeat enemies who defend themselves with their weapons, traps and towers. ";
		$array[] = "Tool: Unity 3D";
		$array[] = "See more";
		$array[] = "October 2015";
		
		$array[] = "3D Game Engine";
		$array[] = "Project with a C# interface exporting an XML file for the C++ executable to create its objects. Multiple design patterns have been
					applied to keep a good architecture.";
		$array[] = "Languages: C# et C++";
		$array[] = "See more";
		$array[] = "May 2015";
		
		$array[] = "3D Game - Unreal Engine";
		$array[] = "3D game made with Unreal Engine to fiddle with 3D movements, level loading, particles and every other aspects of a game.";
		$array[] = "Tool: Unreal Engine";
		$array[] = "See more";
		$array[] = "June 2015";
		
		$array[] = "Squirrel Town";
		$array[] = "Game developped on PC with MVC and ported to Android. The game contains a splashscreen, a loading screen, a main menu, a town and multiple mini-games. By completing mini-games, the player acquires
					currency which serves to buy decorations in the tree that is situated in the town. The observer and state design patterns are used a lot in the game. One class made it easy to load the
					JavaFX view and link it to its controller.";
		$array[] = "Language: Java";
		$array[] = "November 2014";
		
		$array[] = "Winter War";
		$array[] = "Multiplayer game where each player can throw snowballs, warning the server, which distributes the message to three other players.";
		$array[] = "Language: Java";
		$array[] = "October 2014";
		
		$array[] = "Minesweeper";
		$array[] = "Minesweeper game where the goal aims to have a good architecture with the implementation of the observer and using MVC.";
		$array[] = "Language: Java";
		$array[] = "October 2014";
		
		$array[] = "Music Z";
		$array[] = "First 2D game that accompanies a music player in Visual Basic. The goal was to survive as long as possible to a zombie invasion. The rate of zombie appearances was dependent on the volume of the music.";
		$array[] = "Language: Visual Basic";
		$array[] = "November 2013";
		
		$array[] = "Several other projects have been completed:";
	}
	return $array;
}

function GetAboutText()
{
	$array = array();
	
	if($_SESSION["lang"] == "fr")
	{
		$array[] = "OBJECTIF";
		$array[] = "Un de mes principaux objectifs est de me spécialiser dans la programmation graphique afin d'y travailler dès que possible.
					Afin d'atteindre cet objectif, j'ai commencé à travailler sur mon propre moteur en 2013, me permettant d'en apprendre davantage sur les 
					bibliothèques graphiques et sur les patrons de conception.";
		$array[] = "ÉDUCATION SCOLAIRE";
		$array[] = "Depuis 2013, j'ai étudié au Cégep de Sainte-Foy en <i>techniques de l'informatique</i>. J'ai appris la programmation web, le développement 
					de serveur et la programmation de jeu. En 2015, j'ai intégré le programme spécialisé en jeux vidéo afin de simuler un environnement de travail 
					réel, de créer plusieurs jeux et de travailler avec les moteurs existants.";
		$array[] = "EXPERTISE DES LANGAGES";
		$array[] = "Au cégep, j'ai appris plusieurs langages de programmation et les meilleures pratiques pour chacun d'eux. Je me concentre principalement sur le C++ à l'extérieur 
					des cours, car je peux gérer tout ce que je veux sans qu'il soit contrôlé automatiquement par le langage. Je peux facilement dire que je suis à l'aise avec 
					la plupart des langages de programmation et je sais quand utiliser le bon langage.";
		$array[] = "EXPÉRIENCE DES MOTEURS DE JEU";
		$array[] = "Pendant le développement de mon propre moteur, je m'interrogeais sur le fonctionnent concret des moteurs de jeu. Alors, durant l'été 2015, j'ai développé mon premier jeu 3D réalisé dans Unreal Engine appelé <a href=\"falling-star.php\" class=\"dodgerblue-hover\"><i>Falling Star</i></a>. 
					J'ai pu y trouver toute l'information nécessaire lors de mon expérience.
					Dès que les cours ont recommencés, mon équipe et moi avions un contrat pour terminer un « <a href=\"ducktators.php\" class=\"dodgerblue-hover\"><i>Tower Offense</i></a> » en multijoueur local faite 
					avec Unity.";
		$array[] = "INTERÊTS DE RECHERCHE";
		$array[] = "Pour faire de mes rêves un succès, je recherche constamment de nouvelles méthodes et technologies. 
					C'est pourquoi je visionne plusieurs présentations universitaires en ligne et complète plusieurs tutoriels. 
					J'ai d'ailleurs acheté deux livres: <i>Clean Code</i> et <i>Game Programming Gems I</i>. J'ai aussi développé
					un petit projet sur la réalité virtuelle avec Google Cardboard dans Unity.";
					
		$array[] = "EXPÉRIENCE DE TRAVAIL";
		$array[] = "Été 2015<br>Été 2014";
		$array[] = "Testeur de jeux video – Qualité Assurance Québec";
		$array[] = "Sens de l’observation, bonne collaboration d’équipe, rédiger des textes en anglais, rapidité d’exécution.";
		
		$array[] = "Automne 2014";
		$array[] = "Tuteur en informatique – Cégep Sainte-Foy";
		$array[] = "Aider, écouter, conseiller et guider les gens.";
		
		$array[] = "Participation à l'Extra Life";
		$array[] = "Extra Life est un événement où tout le monde peut se rejoindre et jouer 24 heures d'affilées afin de faire des dons pour les enfants malades.";
		
		$array[] = "Le travail d'équipe donne un travail de rêve!";
		$array[] = "Pour moi, un bon esprit d'équipe est nécessaire au développement d'un projet et aide grandement au succès.";
	}
	else
	{
		$array[] = "OBJECTIVE";
		$array[] = "One of my main goals is to specialize myself in graphics programming to work as soon as possible. In
					order to achieve this goal, I started working on my own engine since I started programming, allowing me to practice
					a lot and learning more out of graphic libraries and design patterns.";
		$array[] = "SCHOOL EXPERIENCE";
		$array[] = "Since 2013, I've been studying at the Cégep de Sainte-Foy in computer technology. 
					I learned web programming, server development and game programming.
					In 2015, I joined the video game development program in order to simulate a real work environment,
					to create multiple games and to work with existing engines.";
		$array[] = "LANGUAGE EXPERTISE";
		$array[] = "I learned several programming languages and the best practices for each of them. The main language I focus outside of courses is C++. It is my favorite language as
					I can manage anything I want without it being in the way. I can easily say that I'm at ease with most programming languages and I know when to use which language.";
		$array[] = "ENGINE EXPERIENCE";
		$array[] = "During the development of my own engine, I wondered how other engines concretely worked. In summer 2015, I started working in my free time on my first 3D game made in Unreal Engine called 
					<a href=\"falling-star.php\" class=\"dodgerblue-hover\"><i>Falling Star</i></a>. After school began, me and my team had a contract to finish a <a href=\"ducktators.php\" class=\"dodgerblue-hover\">
					<i>Tower Offense</i></a> in local 4-player co-op made with Unity.";
		$array[] = "RESEARCH INTERESTS";
		$array[] = "To make my dreams successes, I love to search for new technologies and methods. This is why I read a lot on tutorials, watch online university presentations,
					listen to conferences from big companies. I even bought two books: <i>Clean Code</i> and <i>Game Programming Gems I</i>. I also developped a small virtual reality demo with Google
					Cardboard on Unity.";
					
		$array[] = "WORK HISTORY";
		$array[] = "Summer 2015<br>Summer 2014";
		$array[] = "Video Game Tester – Quality Assurance Quebec";
		$array[] = "Observation skills, good team collaboration, write texts in English, timeliness.";
		
		$array[] = "Autumn 2014";
		$array[] = "Computer Tutor – Cegep Sainte-Foy";
		$array[] = "Helping people, listen, advise and guide others.";
		
		$array[] = "Participation in Extra Life";
		$array[] = "Extra Life is an event where everyone can join and play 24 hours straight while streaming to donate to charity.";
		
		$array[] = "Teamwork makes better dreamwork!";
		$array[] = "For me, a good team spirit is necessary for development of a project and greatly helps to succeed.";
	}
	return $array;
}

function GetContactText()
{
	$array = array();
	
	if($_SESSION["lang"] == "fr")
	{
		$array[] = "Veuillez compléter le formulaire captcha.";
		$array[] = "Réessayer";
		
		$array[] = "Nous avons détecté que vous êtes un spammeur.";
		
		$array[] = "Adresse Courriel:";
		$array[] = "Téléphone:";
		$array[] = "Adresse:";
		
		$array[] = "Merci de me contacter, vous êtes génial!";
		$array[] = "S'il vous plaît, veuillez remplir le recaptcha afin de voir mes informations personnelles";
		$array[] = "Afficher mes informations personnelles";
		
		$array[] = "Informations personnelles";
		$array[] = "Voir mon LinkedIn";
		$array[] = "Téléchargez mon CV";
		$array[] = "Disponibilité: stage en Mars 2016";
	}
	else
	{
		$array[] = "Please complete the captcha form.";
		$array[] = "Retry";
		
		$array[] = "We have detected that you are a spammer.";
		
		$array[] = "Email:";
		$array[] = "Phone:";
		$array[] = "Address:";
		
		$array[] = "Thank you for contacting me, you are awesome!";
		$array[] = "Please, complete the recaptcha to show my personal informations";
		$array[] = "Show my personal information";
		
		$array[] = "Contact Info";
		$array[] = "Go to LinkedIn";
		$array[] = "Download resume";
		$array[] = "Availability: internship in March 2016";
	}
	return $array;
}

function GetAxisText()
{
	$array = array();
	
	if($_SESSION["lang"] == "fr")
	{
		$array[] = "J'ai parti ce projet en 2013 lorsque je voulais découvrir le langage C++. 
					J'ai d'abord suivi le tutoriel du site web <a href=\"www.rastertek.com\">www.rastertek.com</a> 
					et je me suis beaucoup m'intéressé aux moteurs de jeu. J'ai continué le tutoriel en y ajoutant
					des éléments de jeux comme la collision et de l'audio plus avancé.";
		$array[] = "Un an plus tard, ayant plus d'expérience avec la programmation, j'ai reconstruit complètement
					le moteur de jeu afin de moins utiliser d'héritage et d'utiliser plus de patrons de conception.
					En 2015, après avoir construit la majorité de l'architecture, je me suis concentré sur l'interface en C#, 
					en y ajoutant plusieurs éléments décrits ci-dessous.";
					
		$array[] = "Options de l'interface";
		$array[] = "Création d'une scène";
		$array[] = "Création d'un terrain";
		$array[] = "Modification du terrain";
		$array[] = "Propriétés de l'outil de modification";
		$array[] = "Importation de modèles 3D";
		$array[] = "Démarrer le jeu dans l'interface";
		$array[] = "Contrôle d'une caméra";
		
		$array[] = "Technologies et architecture";
		$array[] = "Le but premier de mon moteur de jeu est de permettre l'ajout de nouveaux outils le plus rapidement possible. J'ai alors passé beaucoup de temps sur la 
					base de l'architecture afin de permettre des modifications faciles et de garder le code propre tout au long du développement. Bien évidemment, j'ai dû utiliser plusieurs patrons de conception, 
					de l'héritage et des directives de préprocesseur pour la gestion des plateformes. Voici une liste qui montre des exemples de ces implémentations:";
					
		$array[] = "Patron de conception commande - Modification des contrôles";
		$array[] = "Patron de conception observateur - Collection d'un bonus";
		$array[] = "Patron de conception fabrique - Création des objets de la scène";
		$array[] = "Patron de conception composite - Permettre qu'un objet contienne d'autres objets";
		$array[] = "Patron de conception façade - Utilisation de la musique";
		
		$array[] = "Depuis le début du développement de mon engin, j'ai utilisé plusieurs technologies différentes que j'ai remplacées car elles n'étaient plus supportées dont DirectX SDK et DirectSound.
					Les technologies que j'utilise dans mon moteur de jeux sont maintenant:";
		$array[] = "Capture d'écran";
	}
	else
	{
		$array[] = "I started this project in 2013 when I wanted to learn C++. At first, I followed a tutorial on 
					<a href=\"www.rastertek.com\">www.rastertek.com</a> and I became very interested in game engines. I continued the tutorial project 
					by adding more game elements such as the collision of advanced audio.";
		$array[] = "A year later, with more experience with programming, I completely rebuilt the game engine to use less inheritance 
					and to use more design patterns. In 2015, after building the majority of architecture, I focused on C# user interface, 
					adding more elements described below:";
					
		$array[] = "Interface options";
		$array[] = "Scene creation";
		$array[] = "Terrain creation";
		$array[] = "Terrain modification";
		$array[] = "Modification tool options";
		$array[] = "Import 3D model";
		$array[] = "Play the game inside the interface";
		$array[] = "Camera control";
		
		$array[] = "Technology and architecture";
		$array[] = "The primary purpose of my game engine is to allow the addition of new tools as quickly as possible, so I spent more time on the basis of the architecture to 
					enable easy and clean change throughout the development. Of course, I had to use several design patterns, inheritance and preprocessor directives. 
					The following list shows examples of these implementations:";
					
		$array[] = "Command design pattern - Input modification";
		$array[] = "Observer design pattern - Bonus collection";
		$array[] = "Factory design pattern - Game object creation";
		$array[] = "Composite design pattern - Allow an object to contain an other object";
		$array[] = "Facade design pattern - Music playing";
		
		$array[] = "Since the beginning of the development of my engine, I used several different technologies which I replaced because they were no longer supported with 
					DirectX SDK and DirectSound. The technologies that I now use in my game engine are:";
		$array[] = "Screenshot";
	}
	return $array;
}

function GetDucktatorsText()
{
	$array = array();
	
	if($_SESSION["lang"] == "fr")
	{
		$array[] = "Moi et mon équipe, nous développons un jeu 3D avec Unity. Ce jeu sera relié au site web <a href=\"ducktators.webuda.com\">Ducktators.com</a> afin de mettre à jour, en temps réel,
					les statistiques du jeu. Le concept du jeu est un \"Tower Offense\" où les 4 joueurs doivent coopérer pour vaincre les ennemies qui se défendent avec leurs armes, 
					leurs trappes et leurs tours d'attaque. L'objectif est de trouver la boule d'énergie et de la lancer dans le but à la fin du niveau. Celle-ci donne des bonus, mais 
					rend le joueur la cible principale des ennemis.";
		$array[] = "Ce projet sert à simuler un projet d'entreprise où nous avons un chargé de projet et un producteur. Nous avons aussi une date et des caractéristiques à respecter. Le producteur
					peut nous dire à chaque instant de modifier une partie du jeu. Nous procédons d'une manière Agile afin d'assurer la productivité de l'équipe.";
		$array[] = "Caractéristiques du jeu";
		$array[] = "Chargement du niveau à partir d'un fichier XML";
		$array[] = "Déplacement fluide d'un vaisseau";
		$array[] = "Tire de projectiles";
		$array[] = "Ajout d'un menu principal";
		$array[] = "Ajout d'un menu pause";
		$array[] = "Connexion à la base de données du <a href=\"ducktators.webuda.com\">site web</a>";
		$array[] = "Ajout de 10 bonus différents";
		$array[] = "Ajout d'une boule d'énergie et d'un but";
		$array[] = "Ajout de points d'apparition de joueurs, d'ennemis et de bonus";
		$array[] = "Ajout de différents types de joueurs ayant des caractéristiques différentes";
		$array[] = "Ajout de différents types d'ennemis et de trappes";
	}
	else
	{
		$array[] = "Me and my team, we develop a 3D game with Unity. This game will connect to <a href=\"ducktators.webuda.com\">Ducktators.com</a> to update, in real-time, game statistics. 
					The game concept is a \"Tower Offense\" where 4 players  must cooperate to defeat enemies who defend 
					themselves with their weapons, traps and towers. The objective of the four players is to find the energy ball and to shoot the ball into the goal at the end of the level. The overcharge gives bonuses,
					but makes the player the main target of enemies.";
		$array[] = "This project is intended to simulate a business project where we have a project lead and a producer. Then we have to respect the date of delivery, the features of the game and the producer can 
					tell us every moment to modify a feature of the game. We conduct in an Agile way to ensure the team's productivity.";
		$array[] = "Game characteristics";
		$array[] = "Loading a level from an XML file";
		$array[] = "Fluid movements";
		$array[] = "Projectile shooting";
		$array[] = "Added a main menu";
		$array[] = "Added a pause menu";
		$array[] = "Connecting to database on <a href=\"ducktators.webuda.com\">ducktators.com</a>";
		$array[] = "Added 10 different bonuses";
		$array[] = "Added a ball of energy and a goal";
		$array[] = "Added a player spawner and an enemy spawner and a powerup spawner";
		$array[] = "Added different types of players with different characteristics";
		$array[] = "Added different types of enemies and traps";
	}
	return $array;
}

function GetFallingStarText()
{
	$array = array();
	
	if($_SESSION["lang"] == "fr")
	{
		$array[] = "J'ai parti ce projet en 2015 lorsque je voulais développer un jeu vidéo 3D à l'aide de Unreal Engine.
					J'ai commencé ce projet afin d'orienter le développement de mon propre moteur de jeu. De plus, je travaillais en
					assurance de qualité (QAQ-Activision) lors de ce projet, ce qui a fait que j'ai dû m'organiser pour trouver du temps
					pour le développement.";
		$array[] = "Liste des éléments développés";
		$array[] = "Création d'un niveau";
		$array[] = "Ajout de particules de poussière dans l'air";
		$array[] = "Ajout d'un script d'ouverture d'une porte";
		$array[] = "Ajout d'un brouillard atmosphérique";
		$array[] = "Ajout d'une surface d'eau réaliste";
		$array[] = "L'eau a des vagues avec du \"displacement\"";
		$array[] = "L'eau est translucide et colorée";
		$array[] = "L'eau a de la réflexion de la lumière";
		$array[] = "Les mouvements du joueur changent lorsqu'il est sous l'eau";
		$array[] = "L'affichage a une teinte bleue lorsque le joueur est sous l'eau";
		$array[] = "Ajout de lentilles de reflet du soleil";
		$array[] = "Ajout d'un HUD pour la vie du joueur";
		$array[] = "Ajout d'un menu principal";
		$array[] = "Ajout d'un menu pause";
		$array[] = "Ajout d'une fonctionnalité d'attaque";
		$array[] = "Projectile qui se dirige en face du joueur";
		$array[] = "Ajout d'une réticule de tir";
		$array[] = "Ajout d'un son d'explosion à l'impact";
		$array[] = "Destruction des barils et du projectile lors de l'impact";
		$array[] = "Modélisation de modèles 3D dans Blender";
		$array[] = "Vidéo";
		$array[] = "Captures d'écran";
	}
	else
	{
		$array[] = "I started this project in 2015 when I wanted to develop a 3D video game using Unreal Engine. I started this project to guide
					the development of my own game engine. In addition, I worked at quality assurance (QAQ-Activision) during this project, which meant 
					that I had to organize myself to find time for development.";
		$array[] = "List of developed elements";
		$array[] = "Created a level";
		$array[] = "Added dust particles in the air";
		$array[] = "Added a script to open a door";
		$array[] = "Added an atmospheric fog";
		$array[] = "Added a realistic water surface";
		$array[] = "The water waves with displacement mapping";
		$array[] = "The water is translucent and colored";
		$array[] = "Water has light reflection";
		$array[] = "Player's animation changes when underwater";
		$array[] = "The display has a blue tint when the player is underwater";
		$array[] = "Added sun reflection lenses";
		$array[] = "Added a HUD for the player's life";
		$array[] = "Added a main menu";
		$array[] = "Added a pause menu";
		$array[] = "Added an attack feature";
		$array[] = "Projectile goes in front of the player";
		$array[] = "Added a crosshair";
		$array[] = "Added a explosion sound on impact";
		$array[] = "Destruction of the barrels and of the projectile upon impact";
		$array[] = "3D modeling in Blender";
		$array[] = "Video";
		$array[] = "Screenshots";
	}
	return $array;
}

?>