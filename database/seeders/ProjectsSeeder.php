<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->insert([
            [
                'category_id' => 1,
                'title' => 'SAE 201/202 ACTA & VERBA',
                'objectif' => 'Dans le cadre de notre <span class="text-accent">SAE</span> du deuxième semestre de notre <span class="text-accent">BUT1</span>, nous avons participé à un projet d’équipe pour créer une <span class="text-accent">agence fictive</span>. Ce projet a exploré divers aspects du <span class="text-accent">développement web</span> et de la <span class="text-accent">gestion de projet</span>. Mon rôle principal était de <span class="text-accent">concevoir</span>, <span class="text-accent">développer</span> et <span class="text-accent">déployer</span> le site de l’agence.',
                'description' => '<span class="text-xl">Analyse et compréhension du contexte :</span>
                Avant de débuter le développement, nous avons mené une étude approfondie du secteur d’activité afin de comprendre les enjeux économiques, sociologiques et technologiques du marché visé (AC11.01). Nous avons aussi analysé des <span class="text-accent">données statistiques</span> pour évaluer le contexte socio-économique et adapter notre stratégie (AC11.03). De plus, nous avons réalisé des <span class="text-accent">entretiens utilisateurs</span> pour construire des personae et des récits utilisateurs (AC11.06).

                <span class="text-xl">Conception du produit et stratégie marketing :</span>
                Après avoir défini le <span class="text-accent">positionnement</span> et la <span class="text-accent">proposition de valeur</span> de l’agence (AC12.02), nous avons défini les <span class="text-accent">fonctionnalités</span> essentielles du site web selon les besoins identifiés (AC12.01). Une recommandation <span class="text-accent">marketing</span> a été élaborée (AC12.03), accompagnée d’une stratégie de <span class="text-accent">communication</span> (AC12.04).

                <span class="text-xl">Design et création de contenu :</span>
                En parallèle du développement, nous avons conçu des <span class="text-accent">wireframes</span> et l’interface utilisateur (AC13.05) en nous appuyant sur des pistes graphiques et des planches d’inspiration (AC13.02). Nous avons aussi participé à la création et l’optimisation des <span class="text-accent">médias visuels</span> (AC13.03, AC13.06), ainsi qu’à la rédaction de <span class="text-accent">contenus pour le web</span> (AC13.01). Une <span class="text-accent">vidéo de présentation</span> de l’agence a été réalisée (AC13.04).

                <span class="text-xl">Développement et mise en ligne :</span>
                Le site a été développé et personnalisé avec <span class="text-accent">WordPress</span>, nécessitant une configuration avancée et une optimisation technique (AC14.06). J’ai mis en place un <span class="text-accent">hébergement performant</span>, un <span class="text-accent">certificat SSL</span> et des solutions de <span class="text-accent">sauvegarde</span> pour assurer la sécurité et la stabilité du site.

                <span class="text-xl">Gestion du projet et collaboration :</span>
                Nous avons utilisé une approche de gestion classique avec un <span class="text-accent">diagramme de GANTT</span> pour suivre les différentes étapes et respecter les délais (AC15.01). Une estimation budgétaire et une analyse de rentabilité ont été réalisées (AC15.02). Ce projet nous a aussi permis de découvrir les écosystèmes d’innovation numérique et d’analyser des services innovants en lien avec notre domaine (AC15.03, AC15.04). La collaboration avec les pôles communication et création numérique a renforcé nos compétences organisationnelles et en communication professionnelle (AC15.06, AC15.07).

                Ce projet m\'a permis d’acquérir une expérience complète en <span class="text-accent">développement web</span> sous Wordpress, en <span class="text-accent">gestion de projet</span> et en <span class="text-accent">conception d’un produit numérique</span>.',
            ],
            [
                'category_id' => 1,
                'title' => 'Portfolio S2',
                'objectif' => 'Dans le cadre de ma première année de <span class="text-accent">BUT</span>, j’ai réalisé un <span class="text-accent">portfolio</span> qui présente mes projets et compétences en développement web. L’objectif principal était de créer un site <span class="text-accent">fonctionnel</span> et dynamique, qui affiche mes réalisations et mes expériences professionnelles à l’aide d’une base de données. J’ai utilisé <span class="text-accent">HTML</span>, <span class="text-accent">CSS</span> et <span class="text-accent">PHP</span> pour la partie front-end et back-end, avec une base de données pour gérer les informations de manière structurée. Le projet m’a permis de développer mes compétences en développement web, de l’architecture du site à sa mise en ligne, tout en respectant les bonnes pratiques en matière de design et de gestion des données.',
                'description' => 'Pour commencer, j’ai créé la structure du site en <span class="text-accent">HTML</span> et l’ai stylisée en <span class="text-accent">CSS</span> afin d’obtenir un design minimaliste et professionnel. La mise en page a été pensée pour être claire et intuitive, avec des sections bien distinctes pour chaque catégorie de mon <span class="text-accent">portfolio</span>, telles que mes projets et à propos de moi et comment me contacter.

                Le côté <span class="text-accent">back-end</span> du projet repose sur l’utilisation de <span class="text-accent">PHP</span> pour la gestion de la base de données. J’ai conçu une base de données <span class="text-accent">MySQL</span> pour stocker mes informations de manière dynamique, ce qui permettait de gérer facilement l’ajout, la modification et la suppression de contenu. Par exemple, les projets étaient stockés dans des tables dédiées, et <span class="text-accent">PHP</span> interagissait avec cette base pour récupérer et afficher les données sur les pages du site.

                J’ai mis en place une interface d’administration simple, qui permettait de gérer les informations du <span class="text-accent">portfolio</span> sans avoir à modifier directement le code. Pour assurer la cohérence et la sécurité des données, j’ai intégré des formulaires pour l’ajout de nouvelles informations, tout en appliquant des techniques de validation et de nettoyage des entrées afin d’éviter les failles de sécurité.

                Le projet a été entièrement conçu et développé en local avant d’être mis en ligne sur un serveur. J’ai également optimisé le site pour qu’il soit rapide à charger et compatible avec différents navigateurs, en veillant à la qualité du code <span class="text-accent">HTML</span> et <span class="text-accent">CSS</span>.

                Ce projet m’a permis d’acquérir de solides bases en développement web, en gestion de base de données et en utilisation de <span class="text-accent">PHP</span> pour interagir avec celle-ci, tout en me donnant une première expérience concrète de création d’un site dynamique et personnalisé.',
            ],
            [
                'category_id' => 1,
                'title' => 'SAE 302 MMILAN',
                'objectif' => 'Dans le cadre de ma deuxième année de BUT MMI, nous avons organisé une <span class="text-accent">LAN</span> destinée aux étudiants de première et troisième année. Ce projet de grande envergure impliquait la gestion complète de l’événement, de sa planification à sa mise en œuvre. Trois pôles ont été formés : Création numérique, Communication et Développement web. Intégré au pôle <span class="text-accent">Développement web</span>, j’ai été chargé du front-end du site web en participant à la conception et l’intégration de plusieurs pages essentielles à l’organisation de l’événement.',
                'description' => 'Dès le début du projet, nous avons travaillé sur l’architecture du site, la structure des pages et <span class="text-accent">l’expérience utilisateur</span>, en collaboration avec les autres pôles pour garantir une cohérence visuelle et fonctionnelle. Mon rôle principal était de concevoir et intégrer des pages web dynamiques en <span class="text-accent">HTML</span>, <span class="text-accent">CSS</span> et <span class="text-accent">PHP</span>, tout en m’assurant qu’elles soient ergonomiques et adaptées aux différents supports (ordinateur, mobile).

                J’ai notamment développé la <span class="text-accent">section covoiturage</span>, permettant aux participants d’optimiser leurs déplacements. Les conducteurs pouvaient proposer un trajet en précisant le nombre de places disponibles, tandis que les passagers pouvaient s’inscrire en fonction des disponibilités. Ces données étaient enregistrées et mises à jour en base de données pour assurer une gestion efficace et en temps réel du covoiturage.

                J’ai également conçu une page dédiée au tableau de matchmaking, qui affichait les équipes et leur classement au fur et à mesure des compétitions. Cet outil était essentiel <span class="text-accent">le jour de la LAN</span>, car il permettait aux participants et organisateurs de suivre l’évolution des résultats en direct à travers une interface claire et intuitive.

                Pour assurer un travail d’équipe efficace, nous avons utilisé <span class="text-accent">GitHub</span> afin de synchroniser nos fichiers, suivre les différentes versions du projet et collaborer sans conflits. Ce projet m’a permis de renforcer mes compétences en <span class="text-accent">développement front-end</span et travail collaboratif, tout en contribuant à un événement concret nécessitant une organisation rigoureuse entre plusieurs pôles.
',
            ],
            [
                'category_id' => 1,
                'title' => 'SAE 401 TELOCULTURE',
                'objectif' => 'Dans le cadre de ma deuxième année de BUT MMI, nous avons réalisé en groupe de quatre personnes un site web pour une médiathèque fictive toulonnaise, <span class="text-accent">TeloCulture</span>. L’objectif était de concevoir une identité visuelle complète (logo, charte graphique) et de développer un site fonctionnel avec <span class="text-accent">Laravel</span>, permettant aux utilisateurs de consulter et réserver des articles avant de les récupérer en main propre à la médiathèque.',
                'description' => 'Le projet était divisé en deux pôles, un pôle <span class="text-accent">back-end</span> et un pôle <span class="text-accent">front-end</span>, chacun composé de deux membres. J’ai fait partie du pôle front-end, où ma mission était de concevoir et développer <span class="text-accent">l’interface utilisateur</span> en assurant une expérience fluide et intuitive.

                Nous avons d\'abord travaillé sur l’identité visuelle, en définissant une charte graphique cohérente et en créant un logo reflétant l’univers culturel et accessible de la médiathèque. Ensuite, nous avons structuré le site avec Laravel, en séparant les responsabilités entre le front-end et le back-end.

                Mon rôle a principalement consisté à développer l’interface utilisateur en <span class="text-accent">HTML</span>, <span class="text-accent">CSS</span> et <span class="text-accent">Blade</span> (Laravel). J’ai travaillé sur l’affichage dynamique du catalogue d’articles, la présentation des fiches détaillées et l’implémentation du système de réservation côté utilisateur. L’objectif était de garantir une navigation fluide et responsive, adaptée à tous types d’écrans.

                Le pôle back-end a mis en place la gestion des réservations et l’espace administrateur, qui permettait au personnel de la médiathèque de gérer les articles et suivre les réservations. Nous avons utilisé <span class="text-accent">GitHub</span> pour coordonner notre travail et assurer une bonne gestion des versions tout au long du projet.

                Grâce à TeloCulture, j’ai renforcé mes compétences en développement front-end, en particulier dans l’intégration avec Laravel, tout en travaillant sur un projet collaboratif nécessitant une bonne coordination entre les pôles.
',
            ],
            [
                'category_id' => 2,
                'title' => 'Agence fictive Acta & Verba',
                'objectif' => 'Dans le cadre de ma première année de BUT, j’ai participé à un projet en équipe où j’étais responsable du <span class="text-accent">développement web</span>. Le but était de créer une agence fictive <span class="text-accent">Acta & verba</span>, et nous étions répartis en trois pôles : création numérique, communication, et <span class="text-accent">développement web</span>. Ma mission principale était de concevoir, développer et héberger le site de l’agence.',
                'description' => 'Après avoir défini le nom et l’identité visuelle de l’agence avec l’équipe, j’ai pris en charge la création technique du site en utilisant <span class="text-accent">WordPress</span>. J’ai d\'abord installé et configuré WordPress sur un serveur performant, puis j’ai travaillé sur l’optimisation des temps de chargement et la gestion des contenus.

                J’ai intégré un thème personnalisé et configuré des extensions pour améliorer l’ergonomie et les performances SEO du site, ce qui a permis de garantir une meilleure visibilité sur les moteurs de recherche. Parmi les fonctionnalités développées, j’ai mis en place des formulaires de contact dynamiques. Nous avons utilisé un diagramme de <span class="text-accent">GANTT</span> pour suivre l’avancement et gérer les délais du projet.

                Ce projet m’a permis de renforcer mes compétences en <span class="text-accent">gestion de projet web</span>, <span class="text-accent">hébergement</span>, <span class="text-accent">optimisation SEO</span>, et <span class="text-accent">développement sous WordPress</span>, tout en travaillant en collaboration avec une équipe multidisciplinaire.
',
            ],
            [
                'category_id' => 2,
                'title' => 'Ancien Portfolio',
                'objectif' => 'Dans le cadre de ma première année de BUT, j’ai développé un <span class="text-accent">portfolio</span> pour présenter mes projets et compétences en développement web. L’objectif était de créer un site dynamique et fonctionnel, affichant mes réalisations et expériences professionnelles à l’aide d’une base de données. J’ai utilisé <span class="text-accent">HTML</span>, <span class="text-accent">CSS</span> et <span class="text-accent">PHP</span> pour gérer la partie front-end et back-end, en appliquant les bonnes pratiques de conception et de gestion des données.',
                'description' => 'J’ai commencé par créer la structure du site en HTML et l’ai stylisée en CSS avec un design <span class="text-accent">minimaliste</span> et <span class="text-accent">professionnel</span>. La mise en page a été pensée pour être claire, avec des sections distinctes pour mes projets, mes expériences et mes coordonnées.

                Le back-end repose sur l’utilisation de PHP pour gérer la base de données <span class="text-accent">MySQL</span>, permettant l’ajout, la modification et la suppression de contenu. Les projets étaient stockés dans des tables dédiées, et PHP interagissait avec la base de données pour afficher dynamiquement les informations sur le site.

                J’ai développé une <span class="text-accent">interface d’administration</span> simple pour gérer les données sans toucher au code.

                Le projet a été conçu en local puis mis en ligne. J’ai également optimisé la <span class="text-accent">performance du site</span> pour garantir des temps de chargement rapides et une compatibilité multiplateforme en respectant les standards du web.

                Ce projet m’a permis de renforcer mes compétences en développement web, gestion de base de données et PHP, tout en me donnant une première expérience de la création d’un site dynamique et personnalisé.
',
            ],
            [
                'category_id' => 2,
                'title' => 'MMI LAN',
                'objectif' => 'Dans le cadre de ma deuxième année de BUT MMI, j’ai participé à l’organisation d’une <span class="text-accent">LAN</span> pour les étudiants de première et troisième année. Ce projet a impliqué la gestion complète de l\'événement avec la création d\'un site web pour l\'organisation. En tant que membre du pôle <span class="text-accent">Développement web</span>, ma mission était de concevoir et développer le front-end du site.',
                'description' => 'Le projet a commencé par la définition de l’architecture du site et de l’expérience utilisateur, en collaboration avec les autres pôles. J’ai utilisé <span class="text-accent">HTML</span>, <span class="text-accent">CSS</span>, et <span class="text-accent">PHP</span> pour développer des pages dynamiques, ergonomiques et adaptées à tous les supports.

                J’ai conçu une <span class="text-accent">section covoiturage</span> pour faciliter les déplacements des participants, permettant aux conducteurs de proposer des trajets et aux passagers de s\'inscrire en fonction des disponibilités. Les informations étaient stockées et mises à jour en base de données pour un suivi en temps réel.

                J’ai aussi développé un tableau de matchmaking affichant les équipes et leur classement en temps réel. Cet outil était essentiel lors de l’événement pour suivre l’évolution des compétitions.

                Nous avons utilisé <span class="text-accent">GitHub</span> pour gérer les versions et collaborer efficacement. Ce projet m’a permis d\'approfondir mes compétences en développement front-end et en gestion de base de données, tout en travaillant sur un événement réel nécessitant une coordination entre plusieurs équipes.
',
            ],
            [
                'category_id' => 2,
                'title' => 'TELOCULTURE',
                'objectif' => 'Dans le cadre de ma deuxième année de BUT MMI, j’ai participé à la création du site <span class="text-accent">TeloCulture</span>, une médiathèque fictive toulonnaise. L’objectif était de développer un site fonctionnel en <span class="text-accent">Laravel</span>, avec une identité visuelle complète (logo, charte graphique), permettant aux utilisateurs de consulter et réserver des articles en ligne.',
                'description' => 'Le projet était divisé en deux pôles : <span class="text-accent">front-end</span> et <span class="text-accent">back-end</span>, chacun composé de deux membres. En tant que membre du pôle front-end, j\'ai développé l\'interface utilisateur en <span class="text-accent">HTML</span>, <span class="text-accent">CSS</span>, et <span class="text-accent">Blade</span> (Laravel), en veillant à la réactivité et à l’ergonomie du site.

                J\'ai créé l’affichage dynamique du catalogue d’articles et développé le système de réservation des articles côté utilisateur. Le pôle back-end a géré la logique de réservation et l’espace administrateur.

                Nous avons utilisé <span class="text-accent">GitHub</span> pour la gestion de versions et la collaboration. Ce projet m’a permis de renforcer mes compétences en développement front-end et dans l\'intégration avec Laravel.
',
            ],
        ]);
    }
}
