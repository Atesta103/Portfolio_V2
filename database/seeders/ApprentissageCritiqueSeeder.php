<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApprentissageCritiqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('apprentissage_critiques')->insert([
            [
                'code' => 'AC11.01',
                'name' => ' Présenter une organisation, ses activités et son environnement',
            ],
            [
                'code' => 'AC11.02',
                'name' => 'Évaluer un site web, un produit multimédia ou un dispositif interactif existant en s\'appuyant sur des guides de bonnes pratiques',
            ],
            [
                'code' => 'AC11.03',
                'name' => ' Produire des analyses statistiques descriptives et les interpréter pour évaluer un contexte socio-économique',
            ],
            [
                'code' => 'AC11.04',
                'name' => 'Analyser des formes médiatiques et leur sémiotique',
            ],
            [
                'code' => 'AC11.05',
                'name' => ' Identifier les cibles',
            ],
            [
                'code' => 'AC11.06',
                'name' => 'Réaliser des entretiens utilisateurs pour construire des personae et des récits utilisateurs',
            ],
            [
                'code' => 'AC21.01',
                'name' => 'Analyser la stratégie de communication ou marketing d\'un acteur, d\'une organisation au regard d\'un secteur ou d\'un marché',
            ],
            [
                'code' => 'AC21.02',
                'name' => ' Auditer un site web, une marque ou un service, en termes de trafic et de référencement',
            ],
            [
                'code' => 'AC21.03',
                'name' => 'Traiter des données avec des outils statistiques pour faciliter leur analyse et leur exploitation',
            ],
            [
                'code' => 'AC21.04',
                'name' => ' Identifier et décrire les parcours client à partir d\'enquêtes de terrain',
            ],
            [
                'code' => 'AC21.05',
                'name' => 'artographier les expériences utilisateur : points de contact, points de fristion et de satisfaction, carte d\'empathie',
            ],
            [
                'code' => 'AC12.01',
                'name' => 'Concevoir un produit ou un service en terme d’usage et de fonctionnalité',
            ],
            [
                'code' => 'AC12.02',
                'name' => 'Construire la proposition de valeur d’un produit ou d’un service',
            ],
            [
                'code' => 'AC12.03',
                'name' => 'Proposer une recommandation marketing',
            ],
            [
                'code' => 'AC12.04',
                'name' => 'Proposer une stratégie de communication',
            ],
            [
                'code' => 'AC22.01',
                'name' => 'Co-concevoir un produit ou un service',
            ],
            [
                'code' => 'AC22.02',
                'name' => 'Produire une recommandation ergonomique à partir des tests utilisateurs',
            ],
            [
                'code' => 'AC22.03',
                'name' => ' Co-construire une recommandation stratégique',
            ],
            [
                'code' => 'AC22.04',
                'name' => 'Optimiser le référencement d’un site web, d’un produit ou d’un service',
            ],
            [
                'code' => 'AC22.05',
                'name' => 'Mettre en place une présence sur les réseaux sociaux',
            ],
            [
                'code' => 'AC13.01',
                'name' => ' Ecrire pour les médias numériques',
            ],
            [
                'code' => 'AC13.02',
                'name' => 'Produire des pistes graphiques et des planches d’inspiration',
            ],
            [
                'code' => 'AC13.03',
                'name' => 'Créer, composer et retoucher des visuels',
            ],
            [
                'code' => 'AC13.04',
                'name' => 'Tourner et monter une vidéo',
            ],
            [
                'code' => 'AC13.05',
                'name' => 'Designer une interface web',
            ],
            [
                'code' => 'AC13.06',
                'name' => 'Optimiser les médias en fonction de leurs usages et supports de diffusion',
            ],
            [
                'code' => 'AC23.01',
                'name' => 'Produire un écrit journalistique sourcé et documenté',
            ],
            [
                'code' => 'AC23.02',
                'name' => 'Définir une iconographie',
            ],
            [
                'code' => 'AC23.03',
                'name' => 'Créer et décliner une identité visuelle',
            ],
            [
                'code' => 'AC23.04',
                'name' => 'Imaginer, écrire et scénariser en vue d’une communication multimédia ou transmédia',
            ],
            [
                'code' => 'AC23.05',
                'name' => 'Réaliser, composer et produire pour une communication plurimédia',
            ],
            [
                'code' => 'AC23.06',
                'name' => 'Élaborer et produire des animations, des designs sonores, des effets spéciaux, de la visualisation de données ou de la 3D',
            ],
            [
                'code' => 'AC14.01',
                'name' => 'Exploiter de manière autonome un environnement de développement efficace et productif',
            ],
            [
                'code' => 'AC14.02',
                'name' => 'Produire des pages Web fluides incluant un balisage sémantique efficace et des interactions simples',
            ],
            [
                'code' => 'AC14.03',
                'name' => 'Générer des pages Web à partir de données structurées',
            ],
            [
                'code' => 'AC14.04',
                'name' => ' Mettre en ligne une application Web en utilisant une solution d’hébergement standard',
            ],
            [
                'code' => 'AC14.05',
                'name' => 'Modéliser les données d’une application Web',
            ],
            [
                'code' => 'AC14.06',
                'name' => 'Déployer et personnaliser une application Web en utilisant un CMS ou un framework MVC',
            ],
            [
                'code' => 'AC24.01',
                'name' => 'Produire des pages et applications Web responsives',
            ],
            [
                'code' => 'AC24.02',
                'name' => 'Mettre en place ou développer un back office',
            ],
            [
                'code' => 'AC24.03',
                'name' => 'Intégrer, produire ou développer des interactions riches ou des dispositifs interactifs',
            ],
            [
                'code' => 'AC24.04',
                'name' => 'Modéliser les traitements d’une application Web',
            ],
            [
                'code' => 'AC24.05',
                'name' => ' Optimiser une application web en termes de référencement et de temps de chargement',
            ],
            [
                'code' => 'AC24.06',
                'name' => 'Configurer une solution d’hébergement adaptée aux besoins',
            ],
            [
                'code' => 'AC34.01',
                'name' => 'Développer à l’aide d’un framework de développement côté client',
            ],
            [
                'code' => 'AC34.02',
                'name' => 'Développer à l’aide d’un framework de développement côté serveur',
            ],
            [
                'code' => 'AC34.03',
                'name' => 'Développer des dispositifs interactifs sophistiqués',
            ],
            [
                'code' => 'AC34.04',
                'name' => 'Concevoir et développer des composants logiciels, plugins ou extensions',
            ],
            [
                'code' => 'AC34.05',
                'name' => 'Maitriser l\'hébergement et le déploiement d\'applications',
            ],
            [
                'code' => 'AC15.01',
                'name' => 'Gérer un projet avec une méthode classique',
            ],
            [
                'code' => 'AC15.02',
                'name' => 'Budgéter un projet et suivre sa rentabilité',
            ],
            [
                'code' => 'AC15.03',
                'name' => 'Découvrir les écosystèmes d’innovation numérique',
            ],
            [
                'code' => 'AC15.04',
                'name' => 'Analyser un produit ou un service innovant en identifiant les propositions de valeurs et en évaluant les solutions proposées',
            ],
            [
                'code' => 'AC15.05',
                'name' => 'Construire une présence en ligne professionnelle',
            ],
            [
                'code' => 'AC15.06',
                'name' => 'Interagir au sein des organisations',
            ],
            [
                'code' => 'AC15.07',
                'name' => 'Produire un message écrit ou oral professionnel',
            ],
            [
                'code' => 'AC25.01',
                'name' => ' Gérer un projet avec une méthode d’amélioration continue par exemple une méthode agile',
            ],
            [
                'code' => 'AC25.02',
                'name' => 'Cartographier un écosystème',
            ],
            [
                'code' => 'AC25.03',
                'name' => 'Initier la constitution d’un réseau professionnel',
            ],
            [
                'code' => 'AC25.04',
                'name' => 'Collaborer au sein des organisations',
            ],
            [
                'code' => 'AC25.05',
                'name' => 'Maitriser les codes des productions écrites et orales professionnelles',
            ],
            [
                'code' => 'AC25.06',
                'name' => 'Prendre en compte les contraintes juridiques',
            ],
            [
                'code' => 'AC35.01',
                'name' => 'Piloter un produit, un service ou une équipe',
            ],
            [
                'code' => 'AC35.02',
                'name' => 'Maîtriser la qualité en projet Web ou multimédia',
            ],
            [
                'code' => 'AC35.03',
                'name' => ' Concevoir un projet d’entreprise innovante en définissant le nom, l’identité, la forme juridique et le ton de la marque',
            ],
            [
                'code' => 'AC35.04',
                'name' => 'Défendre un projet de manière convaincante',
            ],
        ]);
    }
}
