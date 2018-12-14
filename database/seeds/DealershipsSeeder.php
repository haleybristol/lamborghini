<?php

use App\Dealership;
use Illuminate\Database\Seeder;

class DealershipsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   

        $dealerships = [
            [
                'store_name'    => 'PORTLAND HALEY TEST',
                'contact_name'  => 'Haley B.',
                'email'         => 'haley.bristol@sq1.com',
                'placeoflife'       => 'USA',
                'address'       => '200 SW Oak St',
                'website'       => 'sq1.com',
                
            ],
            [
                'store_name'    => 'PORTLAND DONICA TEST',
                'contact_name'  => 'Donica Polce',
                'email'         => 'donica.polce@sq1.com',
                'placeoflife'       => 'USA',
                'address'       => '200 SW Oak St',
                'website'       => 'sq1.com',
                
            ],
            [
                'store_name'    => 'ENGLAND TEST',
                'contact_name'  => 'Lisa Gaertner',
                'email'         => 'lisa.gaertner@ansira.com',
                'placeoflife'       => 'England',
                'address'       => 'Ansira office in dallas',
                'website'       => 'ansira.com',
                
            ],
            [
                'store_name'    => 'Lamborghini Baku',
                'contact_name'  => 'Asiya S. Jafarova',
                'email'         => 'a.jafarova@autolux-az.com',
                'placeoflife'       => 'Azerbaijan',
                'address'       => '4 Parliament avenue, Flame Towers, Baku 1006, Azerbaijan',
                'website'       => 'baku.lamborghini/en',
                
            ],
            [
                'store_name'    => 'Lamborghini Cape Town',
                'contact_name'  => 'Jessica Baker',
                'email'         => 'jessica.baker@lamborghini.co.za',
                'placeoflife'       => 'South Africa',
                'address'       => '8 Bridgeway, Century City, Cape Town, 7441, South Africa',
                'website'       => 'capetown.lamborghini/en',
                
            ],
            [
                'store_name'    => 'Lamborghini Khobar',
                'contact_name'  => 'Ranin Aloufi',
                'email'         => 'aloufi.ranin@samaco.com.sa',
                'placeoflife'       => 'Saudi Arabia',
                'address'       => 'Prince Sultan Road, Qurtoba, Al Khobar 34235, Saudi Arabia',
                'website'       => 'lamborghini.com/en-en/ownership/dealer-locator',
                
            ],
            [
                'store_name'    => 'Lamborghini Tunbridge Wells',
                'contact_name'  => 'Sian Dillamore',
                'email'         => 'sian.dillamore@grange.co.uk',
                'placeoflife'       => 'England',
                'address'       => 'Dowding Way Tunbridge Wells',
                'website'       => 'grange.co.uk/',
                
            ],
            [
                'store_name'    => 'Lamborghini Bordeaux',
                'contact_name'  => 'Sophie Basteres',
                'email'         => 'emails.basteres@lamborghini-bordeaux.fr',
                'placeoflife'       => 'France',
                'address'       => 'addr7, Avenue Pierre Mendes France 33700 MERIGNAC 33700 Bordeauxess',
                'website'       => 'bordeaux.lamborghini/fr',
                
            ],
            [
                'store_name'    => 'Lamborghini Istanbul',
                'contact_name'  => 'Ebru Belen',
                'email'         => 'EBelen@audi.com.tr',
                'placeoflife'       => 'Turkey',
                'address'       => 'Maslak Mahallesi, Doğuş Center, Maslak Mah, Ahi Evran Cd. No: 4, 34485 Sarıyer, Turkey',
                'website'       => 'istanbul.lamborghini/en',
                
            ],
            [
                'store_name'    => 'Lamborghini Bucarest',
                'contact_name'  => 'Loredana Matei',
                'email'         => 'loredana.matei@porsche.ro',
                'placeoflife'       => 'Romania',
                'address'       => 'x, Bulevardul Pipera 1 -sect. L, Voluntari 077190, Voluntari 077190, Romania',
                'website'       => 'bucharest.lamborghini/en',
                
            ],
            [
                'store_name'    => 'Lamborghini Beirut',
                'contact_name'  => 'Serena Srour',
                'email'         => 'ssrour@saadtrad.com',
                'placeoflife'       => 'Beirut',
                'address'       => 'Corniche Du Fleuve, Achrafieh 1100 2806 Beirut',
                'website'       => 'beirut.lamborghini/en',
                
            ],
            [
                'store_name'    => 'Lamborghini Johannesburg',
                'contact_name'  => 'Jessica Baker',
                'email'         => 'jessica.baker@lamborghini.co.za',
                'placeoflife'       => 'South Africa',
                'address'       => 'William Nicol and Bryanston Drive Bryanston - Johannesburg',
                'website'       => 'johannesburg.lamborghini/en',
                
            ],
            [
                'store_name'    => 'Lamborghini Riyadh',
                'contact_name'  => 'Ranin Aloufi',
                'email'         => 'aloufi.ranin@samaco.com.sa',
                'placeoflife'       => 'Saudi Arabia',
                'address'       => 'Pr. Mohammed Bin Abdul Aziz Street Riyadh',
                'website'       => 'riyadh.lamborghini',
                
            ],
            [
                'store_name'    => 'Lamborghini Tallin',
                'contact_name'  => 'Kristiina Savva',
                'email'         => 'kristiina.savva@auto100.ee',
                'placeoflife'       => 'Estonia',
                'address'       => 'Navigatori ärimaja, Laeva 2, 10111 Tallinn, Estonia',
                'website'       => 'tallinn.lamborghini',
                
            ],
            [
                'store_name'    => 'Lamborghini Roma',
                'contact_name'  => 'Francesca Ghion',
                'email'         => 'francesca.ghion@lautosport.it',
                'placeoflife'       => 'Italy',
                'address'       => 'Via Leonida Bissolati 62 Roma',
                'website'       => 'roma.lamborghini',
                
            ],
            [
                'store_name'    => 'Lamborghini Chelmsford',
                'contact_name'  => 'Sian Dillamore',
                'email'         => 'sian.dillamore@grange.co.uk',
                'placeoflife'       => 'England',
                'address'       => 'Eastern Approach, Chelmsford CM2 6PN, UK',
                'website'       => 'chelmsford.lamborghini',
                
            ],
            [
                'store_name'    => 'Lamborghini Bologna "New"',
                'contact_name'  => 'Claudia Cassano',
                'email'         => 'claudia.cassano@bolognapremium.it',
                'placeoflife'       => 'Italy',
                'address'       => 'Via Isonzo, 16, 40033 Casalecchio di Reno BO, Italy',
                'website'       => 'https://www.bolognaovest.lamborghini/it',
                
            ],
            [
                'store_name'    => 'Lamborghini Jeddah',
                'contact_name'  => 'Ranin Aloufi',
                'email'         => 'aloufi.ranin@samaco.com.sa',
                'placeoflife'       => 'Saudi Arabia',
                'address'       => 'Prince Mohammed Bin Abdul Aziz Street (Tahlia Street) Jeddah',
                'website'       => 'jeddah.lamborghini',
                
            ],
            [
                'store_name'    => 'Lamborghini Athens',
                'contact_name'  => 'Anastasia- Isabella Mitakakis',
                'email'         => 'aim@tridentcars.gr',
                'placeoflife'       => 'Greece',
                'address'       => 'Char. Trikoupi 197, Kifisia 145 61, Greece',
                'website'       => 'athens.lamborghini',
                
            ],
            [
                'store_name'    => 'Lamborghini Muscat',
                'contact_name'  => 'Yasser Alwash',
                'email'         => 'lamborghini@ftgroupholding.com',
                'placeoflife'       => 'Oman',
                'address'       => 'AL KHUWAIR NEXT TO ZAKHER MALL 114 Muscat',
                'website'       => 'muscat.lamborghini',
                
            ],
            [
                'store_name'    => 'Lamborghini Singen',
                'contact_name'  => 'Tatjana  StauÃŸ',
                'email'         => 'tatjana.stauss@gohm.de',
                'placeoflife'       => 'Germany',
                'address'       => 'D-78224 Singen/Htwl. Georg-Fischer-Strasse 65',
                'website'       => 'singen.lamborghini',
                
            ],
            [
                'store_name'    => 'Lamborghini Lisboa',
                'contact_name'  => 'Diana Nunes',
                'email'         => 'diana.nunes@siva.pt',
                'placeoflife'       => 'Portugal',
                'address'       => 'R. São Francisco 582, 2645-019 Alcabideche, Portugal',
                'website'       => 'lisbon.lamborghini',
                
            ],
            [
                'store_name'    => 'Lamborghini Koeln',
                'contact_name'  => 'Ute Baumann',
                'email'         => 'ute.baumann@pon.com',
                'placeoflife'       => 'Germany',
                'address'       => 'Butzweilerstr. 35-39 Köln',
                'website'       => 'koln.lamborghini',
                
            ],
            [
                'store_name'    => 'Lamborghini Mulhouse',
                'contact_name'  => 'Julie Debarbat',
                'email'         => 'Julie.DEBARBAT@passionautomobiles.fr',
                'placeoflife'       => 'France',
                'address'       => 'Pierre Pflimlin Avenue, 68390 Sausheim, France',
                'website'       => 'mulhouse.lamborghini',
                
            ],
            [
                'store_name'    => 'Lamborghini Lyon',
                'contact_name'  => 'Julie Debarbat',
                'email'         => 'Julie.DEBARBAT@passionautomobiles.fr',
                'placeoflife'       => 'France',
                'address'       => 'Chemin des Cuers 2 Dardilly',
                'website'       => 'lyon.lamborghini',
                
            ],
            [
                'store_name'    => 'Lamborghini Kuwait',
                'contact_name'  => 'Khaled Alawadi',
                'email'         => 'k.alawadhi@faa.com.kw',
                'placeoflife'       => 'Kuwait',
                'address'       => 'Shuwaikh Industrial Area. Street No. 11 "Pepsi Cola Street", Block No. 11, Building No. 56A Kuwait City',
                'website'       => 'dealerkuwait.lamborghini',
                
            ],
            [
                'store_name'    => 'Lamborghini Bristol',
                'contact_name'  => 'Emily Foxford',
                'email'         => 'EFoxford@rybrookbristol.co.uk',
                'placeoflife'       => 'England',
                'address'       => '1 The Laurels, Patchway, Bristol BS10 7TT, UK',
                'website'       => 'bristol.lamborghini',
                
            ],
            [
                'store_name'    => 'Lamborghini Madrid',
                'contact_name'  => 'Borja Delorenzo',
                'email'         => 'bdelorenzo@lamborghinimadrid.com',
                'placeoflife'       => 'Spain',
                'address'       => 'Vía de las Dos Castillas, 9, 28224 Pozuelo de Alarcón, Madrid, Spain',
                'website'       => 'madrid.lamborghini',
                
            ],
            [
                'store_name'    => 'Lamborghini Paris',
                'contact_name'  => 'Alexandra Marani',
                'email'         => 'alexandra.marani@groupeschumacher.com',
                'placeoflife'       => 'France',
                'address'       => '2 Rue Bellini, 92800 Puteaux, France',
                'website'       => 'paris.lamborghini',
                
            ],
            [
                'store_name'    => 'Lamborghini Warsaw',
                'contact_name'  => 'Dorota Michalska',
                'email'         => 'dorota.michalska@porscheinterauto.pl',
                'placeoflife'       => 'Poland',
                'address'       => 'Połczyńska 120 B, 01-304 Warszawa, Poland',
                'website'       => 'warszawa.lamborghini',
                
            ],
            [
                'store_name'    => 'Lamborghini Prague',
                'contact_name'  => 'Tomáš Javořík',
                'email'         => 'tomas.javorik@porsche.cz',
                'placeoflife'       => 'Czechia',
                'address'       => 'Vrchlického 31/18, 150 00 Praha 5, Czechia',
                'website'       => 'praha.lamborghini',
                
            ],
            [
                'store_name'    => 'Lamborghini Bergamo',
                'contact_name'  => 'Naomi Pedone',
                'email'         => 'naomi.pedone@bonaldi.it',
                'placeoflife'       => 'Italy',
                'address'       => 'Via Piemonte, 12, 24052 Località del Cucco, Azzano San Paolo BG, Italy',
                'website'       => 'bergamo.lamborghini',
                
            ],
            [
                'store_name'    => 'Lamborghini Lugano',
                'contact_name'  => 'Lorena Corrias',
                'email'         => 'lcorrias@tpasta.ch',
                'placeoflife'       => 'Switzerland',
                'address'       => 'Via San Gottardo 27 CH 6593 Lugano',
                'website'       => 'lugano.lamborghini',
                
            ],
            [
                'store_name'    => 'Lamborghini Zurich',
                'contact_name'  => 'Umberto Pallaoro',
                'email'         => 'UPallaoro@lamborghini-zh.ch',
                'placeoflife'       => 'Switzerland',
                'address'       => 'Industriestrasse 6 Kloten',
                'website'       => 'zurich.lamborghini',
                
            ],
            [
                'store_name'    => 'Lamborghini Geneva',
                'contact_name'  => 'Enzo Gagliardi',
                'email'         => 'enzo.gagliardi@lamborghinigeneve.ch',
                'placeoflife'       => 'Switzerland',
                'address'       => 'Route de Saint-Julien 184, 1228 Plan-les-Ouates, Switzerland',
                'website'       => 'geneve.lamborghini',
                
            ],
            [
                'store_name'    => 'Lamborghini Brussels',
                'contact_name'  => 'Xavier Jaspers',
                'email'         => 'xavier.jaspers@Dieteren.be',
                'placeoflife'       => 'Belgium',
                'address'       => 'Grote Baan 399, 1620 Drogenbos, Belgium',
                'website'       => 'brussels.lamborghini',
                
            ],
            [
                'store_name'    => 'Lamborghini St. Gallen',
                'contact_name'  => 'Manfred Lenherr',
                'email'         => 'MLenherr@lamborghini-sg.com',
                'placeoflife'       => 'Switzerland',
                'address'       => 'Zürcherstrasse 202, 9014 St. Gallen, Switzerland',
                'website'       => 'stgallen.lamborghini',
                
            ],
            [
                'store_name'    => 'Lamborghini Sevenoaks',
                'contact_name'  => 'Katharine Shafto',
                'email'         => 'Katharine.Shafto@jardinemotors.co.uk',
                'placeoflife'       => 'England',
                'address'       => '92 London Road Sevenoaks - Kent',
                'website'       => 'sevenoaks.lamborghini',
                
            ],
            [
                'store_name'    => 'Lamborghini Luxembourg',
                'contact_name'  => 'Giovanni Spiridigliozzi',
                'email'         => 'Giovanni.Spiridigliozzi@losch.lu',
                'placeoflife'       => 'Luxembourg',
                'address'       => '1 Boulevard F.W. Raiffeisen Lussemburgo',
                'website'       => 'luxenbourg.lamborghini',
                
            ],
            [
                'store_name'    => 'Lamborghini Munich',
                'contact_name'  => 'Miriam Görk',
                'email'         => 'miriam.goerk@lamborghini-muenchen.com',
                'placeoflife'       => 'Germany',
                'address'       => 'Albrechtstraße 16, 80636 München, Germany',
                'website'       => 'munich.lamborghini',
                
            ],
            [
                'store_name'    => 'Lamborghini Abu Dhabi',
                'contact_name'  => 'Ahmed Darrag',
                'email'         => 'ahmed@lamborghini-abudhabi.com',
                'placeoflife'       => 'UAE',
                'address'       => 'Nation Towers, Corniche Road, PO Box 6481 Abu Dhabi',
                'website'       => 'abudhabi.lamborghini',
                
            ],
            [
                'store_name'    => 'Lamborghini Nuernberg',
                'contact_name'  => 'Martina Dümler',
                'email'         => 'Martina.Duemler@feser-graf.de',
                'placeoflife'       => 'Germany',
                'address'       => '3a, Nopitschstraße, 90441 Nürnberg, Germany',
                'website'       => 'nurnberg.lamborghini',
                
            ],
            [
                'store_name'    => 'Lamborghini Leusden',
                'contact_name'  => 'Jasper Levie',
                'email'         => 'jasper.levie@pon.com',
                'placeoflife'       => 'Netherlands',
                'address'       => 'Zuiderinslag 6, 3833 BP Leusden, Netherlands',
                'website'       => 'leusden.lamborghini',
                
            ],
            [
                'store_name'    => 'Lamborghini Milano',
                'contact_name'  => 'Naomi Pedone',
                'email'         => 'naomi.pedone@bonaldi.it',
                'placeoflife'       => 'Italy',
                'address'       => 'Viale Renato Serra, 61, 20149 Milano MI, Italy',
                'website'       => 'milano.lamborghini',
                
            ],
            [
                'store_name'    => 'Lamborghini Doha',
                'contact_name'  => 'Shiela Dalumpines',
                'email'         => 'shiela.dalumpines@lamborghiniqatar.com',
                'placeoflife'       => 'Qatar',
                'address'       => 'Al Muftah Plaza Bldg, Al Rayyan 17444 Doha',
                'website'       => 'doha.lamborghini',
                
            ],
            [
                'store_name'    => 'Lamborghini Cannes',
                'contact_name'  => 'Jenny Kavanagh',
                'email'         => 'jenny@alghassanmotors.com',
                'placeoflife'       => 'France',
                'address'       => '440 Avenue Du Campon - 06110 Le Cannet',
                'website'       => 'cannes.lamborghini',
                
            ],
            [
                'store_name'    => 'Lamborghini Malmoe',
                'contact_name'  => 'Lizeth Ladehoff ',
                'email'         => 'lila@semlerpremium.dk',
                'placeoflife'       => 'Sweden',
                'address'       => 'Testvägen 4A, 232 37 Arlöv, Sweden',
                'website'       => 'malmoe.lamborghini',
                
            ],
            [
                'store_name'    => 'Lamborghini Edinburgh',
                'contact_name'  => 'Gillian Main',
                'email'         => 'gillianmain@sytner.co.uk',
                'placeoflife'       => 'Scotland',
                'address'       => 'Kinnaird Park, Edinburgh, EH15 3HR Edinburgh',
                'website'       => 'edinburgh.lamborghini',
                
            ],
            [
                'store_name'    => 'Lamborghini Porrentruy',
                'contact_name'  => 'Catherine Affolter',
                'email'         => 'catherine.affolter@lamborghiniporrentruy.ch',
                'placeoflife'       => 'Switzerland',
                'address'       => 'Le Voyeboeuf 1A, 2900 Porrentruy, Switzerland',
                'website'       => 'porrentruy.lamborghini',
                
            ],
            [
                'store_name'    => 'Lamborghini Copenhagen',
                'contact_name'  => 'Lizeth Ladehoff ',
                'email'         => 'lila@semlerpremium.dk',
                'placeoflife'       => 'Denmark',
                'address'       => 'Banevingen 6, 2200 København, Denmark',
                'website'       => 'copenhaggen.lamborghini',
                
            ],
            [
                'store_name'    => 'Lamborghini Monte Carlo',
                'contact_name'  => 'Julie Quesnel',
                'email'         => 'lamborghini@segondauto.com',
                'placeoflife'       => 'France',
                'address'       => "Place de la Liberté, 06320 Cap-d'Ail, France",
                'website'       => 'dealermonaco.lamborghini',
                
            ],
            [
                'store_name'    => 'Lamborghini Pangbourne',
                'contact_name'  => 'Hayley Smith',
                'email'         => 'Hayley.Smith@hrowen.co.uk',
                'placeoflife'       => 'England',
                'address'       => 'Station Rd, Pangbourne RG8 7AN, UK',
                'website'       => 'pangbourne.lamborghini',
                
            ],
            [
                'store_name'    => 'Lamborghini Leicester',
                'contact_name'  => 'Nitisha Joshi',
                'email'         => 'nitishajoshi@sytner.co.uk',
                'placeoflife'       => 'England',
                'address'       => 'Watermead Business Park Rayns Way, Syston, Leicester LE7 1PF, UK',
                'website'       => 'leicester.lamborghini',
                
            ],
            [
                'store_name'    => 'Lamborghini Manchester',
                'contact_name'  => 'Hayley Smith',
                'email'         => 'Hayley.Smith@hrowen.co.uk',
                'placeoflife'       => 'England',
                'address'       => 'St. Marys Way, Manchester SK1 4AQ, UK',
                'website'       => 'manchester.lamborghini',
                
            ],
            [
                'store_name'    => 'Lamborghini Birmingham',
                'contact_name'  => 'Chameli Chowdhury',
                'email'         => 'chamelichowdhury@sytner.co.uk',
                'placeoflife'       => 'England',
                'address'       => '2 Wingfoot Way, Fort Pkwy, Birmingham B24 9HF, UK',
                'website'       => 'birmingham.lamborghini',
                
            ],
            [
                'store_name'    => 'Lamborghini Frankfurt',
                'contact_name'  => 'Denise Gugerell',
                'email'         => 'Denise.Gugerell@lamborghini-frankfurt.com',
                'placeoflife'       => 'Germany',
                'address'       => 'Orber Str. 4A, 60386 Frankfurt am Main, Germany',
                'website'       => 'frankfurt.lamborghini',
                
            ],
            [
                'store_name'    => 'Lamborghini Hamburg',
                'contact_name'  => 'Michael Lorenz',
                'email'         => 'mlorenz@penske-hamburg.de',
                'placeoflife'       => 'Germany',
                'address'       => 'MERKURRING 2 Hamburg',
                'website'       => 'hamburg.lamborghini',
                
            ],
            [
                'store_name'    => 'Lamborghini Wien',
                'contact_name'  => 'Fabian Eidherr',
                'email'         => 'fabian.eidherr@porsche.co.at',
                'placeoflife'       => 'Austria',
                'address'       => 'Liesinger-Flur-Gasse 14-18, 1230 Wien, Austria',
                'website'       => 'wien.lamborghini',
                
            ],
            [
                'store_name'    => 'Lamborghini Dusseldorf',
                'contact_name'  => 'Claudia Makosch',
                'email'         => 'Claudia.Makosch@moll.de',
                'placeoflife'       => 'Germany',
                'address'       => 'Rather Strasse 78-80 Duesseldorf',
                'website'       => 'duesseldorf.lamborghini',
                
            ],
            [
                'store_name'    => 'Lamborghini Dubai',
                'contact_name'  => 'Ahmed Darrag',
                'email'         => 'ahmed@lamborghini-abudhabi.com',
                'placeoflife'       => 'UAE',
                'address'       => 'Sheikh Zayed road exit 41-Dubai-United Arab Emirates Dubai',
                'website'       => 'dubai.lamborghini',
                
            ],
            [
                'store_name'    => 'Lamborghini London',
                'contact_name'  => 'Hayley Smith',
                'email'         => 'Hayley.Smith@hrowen.co.uk',
                'placeoflife'       => 'England',
                'address'       => '27 Old Brompton Rd, Kensington, London SW7 3TD, UK',
                'website'       => 'london.lamborghini',
                
            ],
            [
                'store_name'    => 'Lamborghini Stuttgart',
                'contact_name'  => 'Christine Maier',
                'email'         => 'Christine.Maier@gohm.de',
                'placeoflife'       => 'Germany',
                'address'       => 'Graf-Zeppelin-Platz 1, 71034 Böblingen, Germany',
                'website'       => 'stuttgart.lamborghini',
                
            ],

        ];

        usort($dealerships, function ($item1, $item2) {
            return $dealerships = $item1['store_name'] <=> $item2['store_name'];
        });
        
        foreach ($dealerships as $dealership) {
            $newDealer = Dealership::where('store_name', '=', $dealership['store_name'])->first();
            if ($newDealer === null) {

                $newDealer = Dealership::create([
                    'store_name'    => $dealership['store_name'],
                    'contact_name'  => $dealership['contact_name'],
                    'email'         => $dealership['email'],
                    'placeoflife'       => $dealership['placeoflife'],
                    'address'       => $dealership['address'],
                    'website'       => $dealership['website'],
                    
                ]);
            }
        }
    }
}
