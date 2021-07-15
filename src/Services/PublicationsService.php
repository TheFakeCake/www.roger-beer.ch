<?php

declare(strict_types=1);

namespace App\Services;

class PublicationsService
{
    public function getPublicationsInCategories(): array
    {
        return [
            'Publications principales (professionnelles)' => [
                [
                    'date' => '2007',
                    'text' => 'Quoi de neuf en matière d\'arbres d\'alignement ou d\'arbres isolés ? Conférence effectuée (en allemand) lors du "Gärtnertag" de l\'Association des Pépiniéristes Suisses (APS), le 12 décembre 2006, à Wädenswil, ZH, sous le titre «Grosse Bäume-der Grossbaum im Garten und Landschaftsbau». In : Contributions suisses à la dendrologie, 49 (2005-2006) : 12-16.',
                ], [
                    'date' => '2007',
                    'text' => 'Den Genfer Wildschweinen auf der Fährte. In :Jagd & Natur, 7 (Juli) : p.40-41.',
                ], [
                    'date' => '2007',
                    'text' => 'La ricerca sul cinghiale nell\'area di Ginevra : un progretto ambizioso tra zone di confine e catalizzatore (Trad. : Redactione). In : La Caccia, N° 2 (avril) : 21-24.',
                ], [
                    'date' => '2007',
                    'text' => 'Dem Wildschwein im Grossraum Genf auf den Fersen. In : Schweizer Jäger, N° 6 (Juni) : 66-67.',
                ], [
                    'date' => '2007',
                    'text' => 'Le suivi du sanglier dans le Genevois. In : CH-Faune-INFO, revue d\'information Suisse de la biologie de la faune, N° 1 (février) :1-2.',
                ], [
                    'date' => '2007',
                    'text' => 'Dem Wildschwein im Grossraum Genf auf den Fersen. In : CH-Wild-INFO, schweizerisches wildbiologisches Informationsblatt, N°1 (Februar) :1-2.',
                ], [
                    'date' => '2006',
                    'text' => 'Rapport sur le projet d\'inventaire informatisé des arbres d\'alignement de la Ville de Genève (juillet 2006). Conservatoire et Jardin botaniques de la Ville de Genève (Bibliothèque) : 50pp.',
                ], [
                    'date' => '2005',
                    'text' => 'Le renouvellement des arbres d\'alignement en ville et l\'évolution de l\'application des principes du développement durable, à l\'exemple de trois cas concrets : les platanes du quai Gustave-Ador (1983), ceux des quais du Mont-Blanc et Wilson (1995, 1996 et 1997) et ceux de la place du Marché, à Carouge (2001). Certificat en développement durable, Université de Genève, Bibliothèque du Centre d\'écologie humaine et des sciences de l\'environnement (CUEH) : 71pp.',
                ], [
                    'date' => '2002',
                    'text' => 'L\'arbre en ville : ce que j\'en pense ! In : Revue horticole Suisse, vol.75 (3/4) : 69-71.',
                ], [
                    'date' => '2001',
                    'text' => 'Certifier nos forêts : eh bien oui ! In : La forêt, 9 (septembre) : 11.',
                ], [
                    'date' => '1998',
                    'text' => 'La certification de nos forêts : et quoi encore ! In : La Forêt, 12 (décembre) : 15.',
                ], [
                    'date' => '1996',
                    'text' => 'The role of trees in the urban environment : the example of Geneva. In : Arboricultural Journal 1996, Vol. 20 : pp. 437-444. AB Academic Publishers (Great Britain).',
                ], [
                    'date' => '1995',
                    'text' => 'Essences adaptées aux conditions urbaines : critères pour le choix des arbres d\'avenues. Conférence effectuée au Centre horticole de Lullier dans le cadre des cours de perfectionnement ACL, les 25 et 26 janvier 1995. In : Revue horticole suisse, 68 (1/2) : 22-26.',
                ], [
                    'date' => '1995',
                    'text' => 'Les conditions urbaines ou la biodiversité par les arbres exotiques : 23-27. In : "Guide des balades à la découverte de la biodiversité végétale régionale. " Ed. Conservatoire et Jardin botaniques de Genève, 145pp.',
                ], [
                    'date' => '1991',
                    'text' => 'Les contrats de culture : un aspect du remplacement des arbres en ville. In : Actes du Congrès de l\'IFPRA (L\'arbre et le paysage urbain), Orléans : 2-5 septembre 91 : 19-32.',
                ], [
                    'date' => '1991',
                    'text' => 'L\'arbre en ville : quel avenir ? In : Actes du 10è Congrès forestier mondial (La forêt, patrimoine de l\'avenir) Paris. Revue forestière française, hors série N° 3 : 341-346.',
                ], [
                    'date' => '1989',
                    'text' => 'De la forêt aux arbres et aux parcs ou le forestier en ville. In : Journal forestier suisse, 140 (7) : 601-611.',
                ], [
                    'date' => '1988',
                    'text' => 'Les conifères nord-américains en Europe. In : Choix de conifères nord-américains. Sér. Doc. Conserv. et Jard. bot. Genève, 24 : 7-15.',
                ], [
                    'date' => '1987',
                    'text' => 'Le rôle d\'un service municipal chargé de la gestion des espaces verts d\'une ville. In : Revue horticole suisse, 60 (4) : 98-105.',
                ], [
                    'date' => '1985',
                    'text' => 'La gestion du patrimoine arboré à l\'aide de l\'informatique : l\'exemple de Genève. In : Journal forestier suisse, 136 (12) : 1013-1021.',
                ], [
                    'date' => '1981',
                    'text' => 'Comportement écologique et sylvicole des chênes pédonculé (Quercus robur) et rouvre (Quercus petraea) dans le canton de Genève : conséquences sur le choix des essences pour l\'amélioration de la chênaie genevoise. In : Saussurea, 12 : 91-116.',
                ],
            ],
            'Publications environnementales (espaces verts)' => [
                [
                    'date' => '2003',
                    'text' => 'La nature en ville : l\'exemple de Genève. Colloque "Territoires et paysages", Mâcon, 8 et 9 avril 2003. In : Paysage-Actualités, nov-déc. 2003 : 34.',
                ], [
                    'date' => '2003',
                    'text' => 'Genève enrichit son fleurissement. In : Bulletin USSP, 3, déc. 2003 : 15-16. (avec Y. Fessler)',
                ], [
                    'date' => '2001',
                    'text' => 'Genève exploite ses forêts avec respect. In : Tribune de Genève du 14 juin 2001 : 2.',
                ], [
                    'date' => '2000',
                    'text' => 'Haies taillées ou haies sauvages : que choisir ? Exposé effectué dans le cadre de la journée dendrologique de la Société Suisse de Dendrologie au Jardin Botanique de Zürich, le 4 mars 2000 sur "Kleingehölze und Kletterpflanzen". In : Contributions suisses à la dendrologie, 46 (1999-2000) : 58-62.',
                ], [
                    'date' => '2000',
                    'text' => 'Genève n\'a pas à se plaindre : Lothar l\'a presque épargnée. In : Vg mag n°115, avril 2000 : 0-11.',
                ], [
                    'date' => '2000',
                    'text' => 'L\'ouragan Lothar et les arbres de la Ville de Genève. In : Revue Horticole Suisse, 73 (3/4) : 3-66.',
                ], [
                    'date' => '1998',
                    'text' => 'Le rôle des arbres dans l\'environnement urbain de Genève. Conférence effectuée dans le cadre du 32ème Congrès national d\'arboriculture (National Arboriculture Conference), u 7 au 9 septembre 1998, à Stirling Université, Ecosse. Ce texte est inspiré de "The role of trees in the urban environment : the example of Geneva ", publié dans Arboricultural Journal 1996, Vol 20 : 437-444.',
                ], [
                    'date' => '1997',
                    'text' => 'La gestion des contrats de culture : L\'expérience de la Ville de Genève. Conférence effectuée à Mâcon, le 21 novembre 1997, dans le cadre du séminaire sur "la pépinière à l\'échelle européenne", organisé par le CNFPT (Centre National de la Fonction Publique Territoriale). Texte tiré d\'une conférence effectuée dans le cadre du IVème Congrès Européen de l\'IFPRA, du 2 au 5 septembre 1991, à Orléans sur "les contrats de cultures : un aspect du remplacement des arbres en ville " et publiée dans les "Actes du Congrès de l\'IFPRA (L\'arbre et le paysage urbain), Orléans : 2-5 septembre 91 : 19-32".',
                ], [
                    'date' => '1997',
                    'text' => 'La fréquentation des parcs publics : satisfaction ou soucis ? Résumé d\'une conférence effectuée à l\'occasion du Colloque USSP/VSSG, le 30 janvier 1997, à Berne, sur le thème " Sécurité, vandalisme, surfréquentation " : 3p.',
                ], [
                    'date' => '1996',
                    'text' => 'Entretien des parcs en ville : quelles options ? In : Journées Européennes du patrimoine, les 7-8 septembre 1996, Genève : 154.',
                ], [
                    'date' => '1996',
                    'text' => 'Le maintien du patrimoine arborisé en ville : éléments d\'une politique. In : VG-Magazine - N°103 6-7 - Printemps 96.',
                ], [
                    'date' => '1995',
                    'text' => 'Des parcs plus naturels en milieu urbain : l\'exemple genevois. In : Protection de la Nature (LSPN), 3 : 4-9. (avec B. von Arx)',
                ], [
                    'date' => '1995',
                    'text' => 'Le rôle des arbres en milieu urbain : l\'exemple de Genève. Texte d\'un exposé effectué dans le cadre du 17ème Congrès mondial IFPRA (International federation of parks and recreation administration) sur le thème " écological aspects of green areas in urban environment ", à Anvers, les 3-8 septembre 1995 (non publié).',
                ], [
                    'date' => '1995',
                    'text' => 'Privatisation d\'un établissement horticole municipal : le cas de la pépinière de la Ville de Genève. Conférence effectuée à la journée professionnelle de l\'USSP (Union Suisse des Services des Parcs et Promenades) sur la privatisation, le 10 février 1995, à Berne.',
                ], [
                    'date' => '1994',
                    'text' => 'La nature en ville. IFPRA 94, Berne. In : Anthos, 2/94 : 65-67.',
                ], [
                    'date' => '1992',
                    'text' => 'La nature en ville ou l\'environnement urbain explique à nos enfants. Conférence effectuée le mercredi 25 novembre 1992, dans le cadre du 2ème Congrès International des Cités Educatrices qui s\'est tenu à Göteborg (Suède) sur le thème " formation continue", les 25, 26 et 27 novembre 1992.',
                ], [
                    'date' => '1991',
                    'text' => 'La nature en ville. In : Revue horticole suisse. 64 (12) 327-329.',
                ], [
                    'date' => '1991',
                    'text' => 'Le service des espaces verts et de l\'environnement (SEVE) et le compostage. In : Route et trafic, N° 4 (avril) : 200-201. (avec P. Bandi)',
                ], [
                    'date' => '1989',
                    'text' => 'Le forestier en ville ou une certaine philosophie des espaces verts urbains. In : Actes du colloque " Les parcs et les jardins de demain ", Paris : 61-68 et in : Lien horticole , N° 48 (Novembre ) : 10-11.',
                ], [
                    'date' => '1988',
                    'text' => '125 ans au service de Genève ou l\'histoire du SEVE. In : Revue horticole suisse, 61 (12) : 336-340.',
                ], [
                    'date' => '1988',
                    'text' => 'Les parcs de Genève : 125 ans d\'histoire. Ed. Ville de Genève, 128p. (avec d\'autres)',
                ], [
                    'date' => '1988',
                    'text' => 'Un couple branché, efficace et nécessaire à Genève : l\'arbre et l\'ordinateur. In : Revue horticole suisse, 61(10) : 275-279.',
                ], [
                    'date' => '1987',
                    'text' => 'Les espaces verts urbains et la protection de l\'environnement à Genève. In : Actes du colloque "La nature, l\'homme et la Ville". Bruxelles, (octobre) : 11-21.',
                ], [
                    'date' => '1987',
                    'text' => 'Les arbres en ville de Genève : un exemple de gestion informatisée. In : Compte rendu du colloque "l\'arbre en ville". Boissiera, 38 : 93-103.',
                ], [
                    'date' => '1986',
                    'text' => 'L\'inventaire informatisé des arbres de la ville de Genève. In : Anthos, 3 : 21-25.',
                ], [
                    'date' => '1985',
                    'text' => 'L\'arbre et l\'ordinateur en ville : un couple branché. In : Horticulteurs et maraîchers romands, 9 : 13-17.',
                ],
            ],
            'Publications à caractère dendrologique (vulgarisation)' => [
                [
                    'date' => '1999',
                    'text' => 'Le cas du chêne abattu illégalement à Genève. Compte-rendu d\'un bref exposé effectué dans le cadre de la "Journée suisse des soins à l\'arbre 1999", le 22 octobre 1999, à Bâle.',
                ], [
                    'date' => '1999',
                    'text' => 'Quelques aspects sociaux et politiques de la gestion des arbres en Ville de Genève. Colloque "L\'arbre : de la rue à l\'autoroute", les 25 et 26 février 1999, à Québec (CDN). Ed : Société de l\'arbre du Québec : 111-119.',
                ], [
                    'date' => '1999',
                    'text' => 'De l\'arbre à la dendrologie ou 50 ans de la Société Suisse de Dendrologie (1948-1998). In : Contributions suisses à la dendrologie, 45 (1997-98). 5-14 (français - allemand).',
                ], [
                    'date' => '1998',
                    'text' => 'Les arbres d\'alignement : pourquoi une norme ? In : Strasse und Verkehr, n°7 (juillet): 313-314.',
                ], [
                    'date' => '1997',
                    'text' => 'De quelques raretés végétales des parcs genevois. In : Compte-rendu du 11ème Congrès Européen des Orchidées 1997, à Palexpo, du 16 au 20 avril 1997 : 15-18.',
                ], [
                    'date' => '1996',
                    'text' => 'Les arbres d\'alignement : évolution du choix des espèces. In : Journées Européennes du patrimoine, les 7-8 septembre 1996, Genève : 140 à 143. (avec A. Etienne)',
                ], [
                    'date' => '1996',
                    'text' => 'Créer avec des arbres - Choix d\'espèces et diversité dendrologique. Journée professionnelle consacrée aux " arbres en ville 1996 ", à Bâle, les 17 et 18 octobre 1996. Cet article est essentiellement tiré de " Beer, R. (1995) : Essences adaptées aux conditions urbaines : critères pour le choix des arbres d\'avenues. In : Revue horticole suisse, 68 (1/2) : 22-26.',
                ], [
                    'date' => '1994',
                    'text' => 'La première feuille du marronnier de la Treille. Ed. Ville de Genève : 28 p. (avec P. Stoller)',
                ], [
                    'date' => '1991',
                    'text' => 'La diversité et la richesse des variétés ligneuses dans l\'aménagement des parcs : l\'exemple de Genève. In : Contributions suisses à la dendrologie, 39/40 : A126-A132.',
                ], [
                    'date' => '1988',
                    'text' => 'Choix de bibliographie dendrologique. In : Contributions suisses à la dendrologie, 37 : I 15-20.',
                ], [
                    'date' => '1988',
                    'text' => 'La ville de Genève, ses arbres et l\'Arboretum. In : Bulletin de l\'AAVA (Association pour l\'Arboretum du Vallon de l\'Aubonne), N° 18 : 10-14.',
                ], [
                    'date' => '1988',
                    'text' => 'Les haies vives chez nous. In : Balcons, terrasses et jardins de Genève. Ed. J.-M. Mascherpa, CHL. Commune de Versoix : 52-59.',
                ], [
                    'date' => '1983',
                    'text' => 'Description de 33 espèces sélectionnées. In : Haarmann, C.F. (réd.). Les Eaux-Vives, La Grange : parcs de Genève. In : Sér. Doc. Conserv. Jard bot. Genève, 9 : 27-60. (avec G. Bocquet)',
                ], [
                    'date' => '1983',
                    'text' => 'Des arbres et des hommes. In : Musée de Genève, 239 (octobre) : 2-7.',
                ], [
                    'date' => '1983',
                    'text' => 'L\'état des arbres de la ville de Genève. In : Revue horticole suisse, 56 (12) : 375-378.',
                ], [
                    'date' => '1981',
                    'text' => 'Aperçu de l\'écologie et de la sylviculture des chênes dans les bois de Versoix, de l\'Allondon et de Jussy. In : Arch. Sc. Genève, 34 (3) : 423-424.',
                ],
            ],
            'Concours international de roses de geneve' => [
                [
                    'date' => '2001',
                    'text' => 'Genève et ses roses : quelle belle histoire ! In : Revue horticole Suisse, vol.74 (7/8) : 176-178.',
                ], [
                    'date' => '2000',
                    'text' => 'La Rose d\'Or : un engouement inaltérable. In : Revue Horticole Suisse, 73 (7/8) : 148.',
                ], [
                    'date' => '1990',
                    'text' => '43ème Concours International de Roses Nouvelles de Genève. In : Revue horticole suisse, 63 (10) : 225-257.',
                ], [
                    'date' => '1987',
                    'text' => 'Le Concours international de roses nouvelles de Genève. In : Revue horticole suisse, 60 (7/8) : 215-216.',
                ], [
                    'date' => '1987',
                    'text' => 'Rose d\' Or de Genève. Ouvrage publié par la Ville de Genève à l\'occasion du 40ème Concours International de Roses Nouvelles de Genève. 82p. (avec d\'autres)',
                ],
            ],
            'Divers' => [
                [
                    'date' => '2019',
                    'text' => 'Hommage à Paul Schauenberg. In : Tribune de Genève du 11 octobre 2019. ',
                ], [
                    'date' => '2013',
                    'text' => 'Hommage à Charles Babel. In : Tribune de Genève du 9 avril 2013.',
                ], [
                    'date' => '2004',
                    'text' => 'Hommage à un maître et un ami: Louis-Aimé Cornuz. In : Revue horticole Suisse, vol.77 (3/4) : 119-120 et Contributions Suisses à la Dendrologie, N° 48 (2003-2004) : 140.',
                ], [
                    'date' => '2002',
                    'text' => 'A André Monnet. In : Chasse & Nature, N° 7 (juillet) : 27.',
                ], [
                    'date' => '2000',
                    'text' => 'Karl Werdenberg (1955-2000) : un biogéographe aussi entier que discret. In : Revue horticole suisse, 73 (11/12) : 270 et Saussurea, 31:30.',
                ], [
                    'date' => '1998',
                    'text' => 'L\'horticulture genevoise perd un grand Monsieur : Armand Auberson. In : Revue horticole suisse, 71 (juillet/août) : 152-153 et Saussurea 29 : 26-28.',
                ], [
                    'date' => '1998',
                    'text' => 'Genève et ses parcs : un exemple pour la région (non publié).',
                ], [
                    'date' => '1996',
                    'text' => 'La nature en ville, outil de prévention destiné aux enfants. Intervention effectuée le 13 septembre 1996, dans le cadre de l\'Atelier " Education à l\'environnement ", au 4ème Colloque des Villes-Santé et des villes et villages en santé, à Genève, sur le titre "l\'enfant, l\'adolescent et le cadre de vie": 6 p.',
                ], [
                    'date' => '1994',
                    'text' => 'Entre la pression publique, la volonté politique et l\'entretien naturel des espaces verts urbains, la conciliation est-elle possible ? In : Actes du colloque européen des Ingénieurs de Villes de France (IVF) " Vers la gestion différenciée des espaces verts ", à Strasbourg, les 24, 25 et 26 octobre 1994 : 181-186.',
                ], [
                    'date' => '1994',
                    'text' => 'LCA ET SEVE : les signes d\'une bonne collaboration. In : Revue horticole suisse, 67 (9/10) : 243-246.',
                ], [
                    'date' => '1994',
                    'text' => 'L\'avenir de la politique de l\'environnement. Exposé effectué dans le cadre des Universités d\'été du Parti Radical Suisse (PRD), 23 août, à Neuchâtel, (non publié).',
                ], [
                    'date' => '1994',
                    'text' => 'Protection et entretien - les chênes en ville. In : Le Malagnou - AGPN, 2/94 : 14-15.',
                ], [
                    'date' => '1994',
                    'text' => 'Le chêne - Ambassadeur de la forêt genevoise. In : Le Malagnou - AGPN, 2/94 : 10-13.',
                ], [
                    'date' => '1990',
                    'text' => 'La politique en matière de protection de l\'environnement en Ville de Genève. In : Compte rendu de Revade 90, à Alger, en mars.',
                ], [
                    'date' => '1990',
                    'text' => 'Protection juridique des arbres en ville. Compte rendu des conférences tenues à Coire, les 3 et 4 septembre 1987, lors de l\'Assemblée annuelle de l\'USSP/USSG. Ed. USSP, Berne, 31p. (avec d\'autres)',
                ], [
                    'date' => '1990',
                    'text' => 'La protection juridique des arbres en Ville de Genève et son application pratique. In : Compte rendu des conférences tenues à Coire, les 3 et 4 septembre 1987, lors de l\'Assemblée annuelle de l\'USSP/USSG. Ed. USSP, 20-23.',
                ], [
                    'date' => '1988',
                    'text' => 'Et que vive le SEVE. In : Revue horticole suisse, 61 (12) : 336.',
                ],
            ],
            'Analyses d\'ouvrages' => [
                [
                    'author' => 'Meyer, F.H.',
                    'text' => 'Bäume in der Stadt. E. Ulmer, Stuttgart (2ème édition) 1982, 380 pp. In Candollea, 38(1) : 445-446 (1983) et In Journal for. Suisse, 134 (12) :1024-1025 (1983).',
                ], [
                    'author' => 'Hecker, U.',
                    'text' => 'Laubgehölze. BLV Intensivführer, München, Wien, Zürich, 1985, 319 pp. In Journal for. Suisse, 137 (9) : 796 (1986).',
                ], [
                    'author' => 'Greg, G.W., Deneke, F.J.',
                    'text' => 'Urban forestry. Ed. John Wiley and sons, New-York, 1986, (2èmeédition) 299 pp. In Journal for. Suisse 137 (9) : 788 (1986).',
                ], [
                    'author' => 'Van Gelderen, D.M.,  van  Hoey - Smith, J.R.P.',
                    'text' => 'Das grosse Buch der Koniferen. Paul Parey, Hambourg, Berlin, 1986 : 375 pp. In Journal for. Suisse, 138 (2) : 180 (1987).',
                ], [
                    'author' => 'Sigaud, P.',
                    'text' => 'Ne parlons plus du chêne, mais des chênes. Rev. Forest. fr. (38) : (1986), 4 : 376-384, In Journal for. Suisse, 138 (1) : 83-84 (1987).',
                ], [
                    'author' => 'Reichard, M.R., Bolay, A.',
                    'text' => 'La maladie de l\'encre du châtaignier dans le canton de Genève. Revue suisse de Vitic. Arboric. Hortic., 18 (1986), 4 : 243-250, In Journal for. Suisse, 138 (6) : 562 (1987).',
                ], [
                    'author' => 'Fitschen, J.',
                    'text' => 'Gehölzflora, ein Buch zu Bestimmen der in Mitteleuropa wildwachsenden und angepflanzten Bäume und Sträucher. Quelle & Meyer, Heidelberg. 1987 (8èmeédition) 76 p. In Journal for. Suisse, 139 (11) : 983(1988).',
                ], [
                    'author' => 'Raimbault, P. & al.',
                    'text' => 'La gestion des arbres d\'ornement (2ème partie). Rev. For. Fr. 47 (1995) 1 :7 - 38. In Journal for. Suisse, 147 (9) : 756-757 (1996).',
                ], [
                    'author' => 'Dreyer, E. & Dreyer, W.',
                    'text' => 'Guide de la forêt : le milieu de la flore et de la faune. 384 pages, plus de 500 photos, Delachaux et Nicolas Niestlé, Paris, 1998. In Journal for. Suisse, 150 (10) : 397-398 (1999).',
                ], [
                    'author' => 'Hallé, F.',
                    'text' => 'Plaidoyer pour l\'arbre. Editions Actes Sud, Arles (2005). ISBN 2-7427-5712-0 : 213 pages, dont 86 pages de dessins au crayon en noir-blanc. Prix : 23 €. In : Contributions Suisses à la Dendrologie, 49 (2005-2007) : 106.',
                ], [
                    'author' => 'Corvol, A.',
                    'text' => 'Eloge des arbres. Editions Robert Laffont SA, Paris (2004). ISBN 2-221-09785-8 : 215 pages, dont 26 pages de photos couleurs. Prix : 21 €. In : Contributions Suisses à la Dendrologie, 49 (2005-2007) : 102.',
                ], [
                    'author' => 'Corvol, A.',
                    'text' => 'Les arbres voyageurs. Chez Robert Laffont S.A., Paris (2005). ISBN 2-221-09760-2 : 350 pages, dont 8 pages de photos couleurs. Prix : 21 €. €. In : Contributions Suisses à la Dendrologie, 49 (2005-2007) : 102.',
                ], [
                    'author' => 'Allorge, L.',
                    'text' => 'La fabuleuse odyssée des plantes. Chez J. C. Lattes, Paris (2003). ISBN 2-7096-2327-7 : 729 pages, dont 16 pages de photos couleurs. Prix : 28 €. In : Contributions Suisses à la Dendrologie, 49 (2005-2007) : 102-103.',
                ], [
                    'author' => 'Hagender, F.',
                    'text' => 'Die Eibe in neuem Licht. Editions Neue Erde GmbH, Saarbrücken (2007), 320 pages, dont plus de 100 pages de photos et croquis divers. CHF. 90.-. In : Contributions Suisses à la Dendrologie, 50-60 (2007-2008) : 163.',
                ], [
                    'author' => 'Koch, K.',
                    'text' => 'Vorlesungen über Dendrologie. VDM Verlag Dr. Müller, Saarbrücke (2007). 408 pages, sans photos ou croquis. CHF 115.-. In : Contributions Suisses à la Dendrologie, 50-60 (2007-2008) : 163-164.',
                ], [
                    'author' => 'Preston, R.',
                    'text' => 'The wild trees, a story of passion and daring. Editions Random House, New York (2007), 295 pages, dont une dizaine de croquis, dessins et quelques cartes en noir et blanc. Dollars CDN 45.-. In : Contributions Suisses à la Dendrologie, 50-60 (2007-2008) : 164.',
                ], [
                    'author' => 'Bulard-Cordeau, B.',
                    'text' => 'Captez l\'énergie de votre arbre. Editions Trajectoire, Paris (2007), 187 pages. CHF 40.-. In : Contributions Suisses à la Dendrologie, 50-60 (2007-2008) : 165.',
                ], [
                    'author' => 'Allain, Y.-A.',
                    'text' => 'Nos arbres venus d\'ailleurs. Editions Rustica, Paris (2008), 192 pages et presqu\'autant de belles photos couleur et d\'anciennes planches. 35.- euros. In : Contributions Suisses à la Dendrologie, 61-62 (2009-2010) : 156.',
                ], [
                    'author' => 'Blackwell, L.',
                    'text' => 'Arbres extraordinaires. Editions du Chêne, Hachette, France (2011), 201 pages, dont près de deux tiers en photos couleur extraordinaires. 25.- euros. In : Contributions Suisses à la Dendrologie, 61-62 (2009-2010) : 156.',
                ], [
                    'author' => 'De Dinechin, B.',
                    'text' => 'Duhamel du Monceau – un savant exemplaire au siècle des lumières. 295 pages, dont une dizaine de croquis et dessins en noir et blanc. 45.- euros. In : Contributions Suisses à la Dendrologie, 61-62 (2009-2010) : 156-157.',
                ], [
                    'author' => 'Grimshaw, J. & Bayton, R.',
                    'text' => 'New trees – Recent Introductions to Cultivation. Royal Botanic Gardens, Kew Publishing, UK, International Dendrology Society (2009). 976 pages, plus de 580 excellentes photos couleurs et un bone centaine de dessins précis et explicites. 150.- euros. In : Contributions Suisses à la Dendrologie, 61-62 (2009-2010) : 157.',
                ], [
                    'author' => 'Jacobs, R.',
                    'text' => 'Arbres de Belgique, revisited. BAI Publishers, Belgique (2009). 256 pages, avec pratiquement sur chaque page une photo couleur. Prix : pas précisé (env. 60.- euros). In : Contributions Suisses à la Dendrologie, 61-62 (2009-2010) : 156-158.',
                ], [
                    'author' => 'Association A.R.B.R.E.S',
                    'text' => 'Guide des arbres remarquables de France. Edisud, Compagnie des Editions de la Lesse, Aix-en-Provence  (2009). 239 pages, avec autant de photos couleur et de croquis et plans. 20.- euros. In : Contributions Suisses à la Dendrologie, 63-64 (2011-2012) : 113.',
                ], [
                    'author' => 'Bonnet, F.',
                    'text' => 'Au Rendez-vous des Arbres. 40 excursions à la rencontre d\'arbres remarquables de Suisse, ainsi que de France et d\'Italie voisines. Verlag Rossolis, Bussigny (2012).  272 pages, dont 343 photos couleur et 5 photos noir et blanc, 49 cartes. 60.- CHF. In : Contributions Suisses à la Dendrologie, 63-64 (2011-2012) : 114.',
                ], [
                    'author' => 'Brang, P., Heiri, C. & Bugmann, H. (Red)',
                    'text' => 'Waldreservate. 50 Jahre natürliche Waldentwiclung in der Schweiz. Haupt Verlag, Berne (2011). Hrsg. WSL et ETH. 272 pages, avec 105 photos couleur, 13 photos noir-blanc et 15 cartes. CHF 48.-. In : Contributions Suisses à la Dendrologie, 63-64 (2011-2012) : 114-115.',
                ], [
                    'author' => 'Brosse, K.',
                    'text' => 'Larousse des Arbres. Editions Larousse, Paris (2010). 592 pages, avec des dessins ou des croquis pour une majorité des espèces. 40.- euros. In : Contributions Suisses à la Dendrologie, 63-64 (2011-2012) : 115-116.',
                ], [
                    'author' => 'Chautems, J.',
                    'text' => 'Guide des arbres extraordinaires de Suisse romande. 40 balades d\'énergie (Reliance et soins par la nature). Editions Favre SA, Lausanne (VD) (2012). 213 pages, dont près de la moitié avec des photos couleurs et des cartes. 30.- CHF. In : Contributions Suisses à la Dendrologie, 63-64 (2011-2012) : 116.',
                ], [
                    'author' => 'Combe, J.',
                    'text' => 'Forêt et société – Histoires à succès en forêt suisse. Stämpfli Verlag AG, Berne, Ed. Fondation Binding , (en français) (2011). 248 pages, avec de nombreuses illustrations en couleur et de multiples propositions d\'excursions (existe également en allemand). 44.- CHF. In : Contributions Suisses à la Dendrologie, 63-64 (2011-2012) : 116-117.',
                ], [
                    'author' => 'Deschamps, L.',
                    'text' => 'Botanistes voyageurs ou la passion des plantes. Editions Minerva-Aubanel, Genève (CH) (2008). 180 pages, dont presqu\'autant de photos couleur et noir-blanc. 39.- euros. In : Contributions Suisses à la Dendrologie, 63-64 (2011-2012) : 117-118.',
                ], [
                    'author' => 'Hallé, F. & al.',
                    'text' => 'Aux origines des plantes : des plantes anciennes à la botanique du 21ème siècle. Editions Fayard  Paris (2008). 680 pages, avec photos couleur, croquis et nombreuses annotations. 52.- euros. In : Contributions Suisses à la Dendrologie, 63-64 (2011-2012) : 120.',
                ], [
                    'author' => 'Lüder, R.',
                    'text' => 'Bäume bestimmen : Knospen, Blütern, Blätter, Früchter. Haupt Verlag, Berne (2013). 288 pages plus 1000 illustrations en couleur. 40.- CHF. In : Contributions Suisses à la Dendrologie, 65-66 (2013-2014) : 99.',
                ], [
                    'author' => 'Marlive de, O.',
                    'text' => 'Petit dictionnaire des Hommes et des Arbres – Curiosités botaniques d\'Europe et d\'ailleurs. IMAGO, Paris (2015). 270 pages, nombreuses petites photos et quelques croquis noir-blanc. 22.- euros. In : Contributions Suisses à la Dendrologie, 65-66 (2013-2014) : 100-101.',
                ], [
                    'author' => 'F. Wessoly, L. & Erb, M.',
                    'text' => 'Handbuch der Baumstatik und Baumkontrolle. Patzer Verlag, Berlin-Hannover ((2014). 287 pages, nombreux croquis et esquisses en couleur. Env. 70.- euros. In : Contributions Suisses à la Dendrologie, 65-66 (2013-2014) : 104',
                ], [
                    'author' => '',
                    'text' => 'Arbres remarquables : 41 histoires enracinées à Genève. Etat de Genève (2017). 127 pages, de nombreuses magnifiques photos couleur (photographe : Thierry Parel). www.arbresremarquables.ch 32.- CHF. In : Contributions Suisses à la Dendrologie, 67-68 (2015-2016) : 189-190.',
                ], [
                    'author' => 'Bärtels, A.',
                    'text' => 'Steinobst : Blüten und Früchte. Ott Verlag, Berne (2017). 312 pages, plus de 200 photos couleur. CHF 47.-. In : Contributions Suisses à la Dendrologie, 69-70 (2017-2018) : 162.',
                ], [
                    'author' => 'Bonnet, F.',
                    'text' => 'Monu8ments végétaux de France : 120 arbres ou sites arborés remarqwuables de France métropolitaine. Rossolis, Burtigny (VD, Suisse) (2017). 288 pages, nombreuses photos couleur. CHF 45.-. In : Contributions Suisses à la Dendrologie, 69-70 (2017-2018) : 163-164.',
                ], [
                    'author' => 'Brunner, M.',
                    'text' => 'Allen der Schweiz. AS Verlag, Ziegelbrücke (CH) (2017). 288 pages, 323 photos couleur. CHF 58.-. In : Contributions Suisses à la Dendrologie, 69-70 (2017-2018) : 164-165.',
                ], [
                    'author' => 'Fetermann, G. & Miesinski, Z.',
                    'text' => 'Arbres & Patrimoine. Editions Museo, Plaissan (F). 193 pages, nombreuses photos couleur. 29.50 euros. In : Contributions Suisses à la Dendrologie, 69-70 (2017-2018) : 165-166.',
                ], [
                    'author' => 'Fetermann, G.',
                    'text' => 'Les plus vieux arbres de France : un patrimoine national. Editions Museo Plaissan (F) (2017). 194 pages, nombreuses photos couleur. 29.50 euros. In : Contributions Suisses à la Dendrologie, 69-70 (2017-2018) : 166.',
                ], [
                    'author' => 'Macdonald, H.',
                    'text' => 'Gardens - Schweiz / Suisse / Switzerland. Bergli Books, c/o Schwabe Verlagsgruppe, Bâle (CH) (2019). 135 pages, plus de 100 photos couleur. CHF 30.-. In : Contributions Suisses à la Dendrologie, 69-70 (2017-2018) : 169.',
                ], [
                    'author' => 'Roloiff, A. und Bärtels, A.',
                    'text' => 'Flora der Gehölze : Bestimmung, Eigenschaften, Verwendung. Eugen Ulmer Verlag, Stuttgart (2018). 2650 dessins, 914 pages. 30.- euros. In : Contributions Suisses à la Dendrologie, 69-70 (2017-2018) : 171-172.',
                ], [
                    'author' => 'Schmidt, P. A. und Schulz, B.',
                    'text' => 'Fitschen Gehölzflora. QWuelle & Meyer Verlag, GmbH & Co, Wiebelsheim (2017), 1016 pages, 2500 dessins au trait, 13ème réédition, entièrement retravaillé. 40.- euros. In : Contributions Suisses à la Dendrologie, 69-70 (2017-2018) : 172.',
                ], [
                    'author' => 'Urbaud, J.',
                    'text' => 'Des Arbres et des Hommes. Editions Edisud, St-Rémy-de-Provence (2017). 368 pages, nombreuses photos couleur. 28.- euros. In : Contributions Suisses à la Dendrologie, 69-70 (2017-2018) : 172-173.',
                ], [
                    'author' => 'Walter, H. & Avenas, P.',
                    'text' => 'La majestueuse histoire du nom des arbres : du modeste noisetier au séquoia géant. Editions Robert Laffont, S.A.S., Paris (2017). 564 èpages, très nombreux croquis et dessins noir-blanc. 24.- euros. In : Contributions Suisses à la Dendrologie, 69-70 (2017-2018) : 173.',
                ], [
                    'author' => 'ZEP, alias Chappuis, P.',
                    'text' => 'The End. Rue de Sèvres, Paris (F) (2018). 92 pages, bande dessinée couleur. 19.- euros. In : Contributions Suisses à la Dendrologie, 69-70 (2017-2018) : 174-175.',
                ],
            ],
        ];
    }
}
