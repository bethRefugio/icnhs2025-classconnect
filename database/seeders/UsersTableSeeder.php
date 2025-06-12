<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Elizabeth Refugio',
            'email' => 'bethrefugio16@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin'),
            'is_admin' => 1,
            'is_allowed_login' => true,
            'account_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'id' => 2,
            'name' => 'Carlos Troy Inao',
            'email' => 'carlostroy.inao@g.msuiit.edu.ph',
            'email_verified_at' => now(),
            'password' => Hash::make('admin'),
            'is_admin' => 1,
            'is_allowed_login' => true,
            'account_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'id' => 3,
            'name' => 'Nathaniel Zaragosa',
            'email' => 'nathaniel.zaragosa@g.msuiit.edu.ph',
            'email_verified_at' => now(),
            'password' => Hash::make('admin'),
            'is_admin' => 1,
            'is_allowed_login' => true,
            'account_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'id' => 4,
            'name' => 'Staff User',
            'email' => 'staff@staff.com',
            'email_verified_at' => now(),
            'password' => Hash::make('staff'),
            'is_allowed_login' => true,
            'account_id' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'id' => 5,
            'name' => 'Parent User',
            'email' => 'parent@parent.com',
            'email_verified_at' => now(),
            'password' => Hash::make('parent'),
            'is_allowed_login' => true,
            'account_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'id' => 6,
            'name' => 'Student User',
            'email' => 'student@student.com',
            'email_verified_at' => now(),
            'password' => Hash::make('student'),
            'is_allowed_login' => true,
            'account_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);



        $teacher_users = [
        [
            'id' => 7,
            'name' => 'Maria Corazon Alegria Abitago',
            'email' => 'mariacorazonalegria.abitago@deped.gov.ph',
        ],
        [
            'id' => 8,
            'name' => 'Janet Agustino',
            'email' => 'janet.agustino@deped.gov.ph',
        ],
        [
            'id' => 9,
            'name' => 'Mary Ann Angot',
            'email' => 'maryann.angot@deped.gov.ph',
        ],
        [
            'id' => 10,
            'name' => 'Cherryl Cinco',
            'email' => 'cherryl.cinco001@deped.gov.ph',
        ],
        [
            'id' => 11,
            'name' => 'Ritchie Echor',
            'email' => 'ritchie.echor@deped.gov.ph',
        ],
        [
            'id' => 12,
            'name' => 'Jazz Faye Falguera',
            'email' => 'jazzyfaye.falguera@deped.gov.ph',
        ],
        [
            'id' => 13,
            'name' => 'Trixy Daphne Loar',
            'email' => 'triexydaphne.loar@deped.gov.ph',
        ],
        [
            'id' => 14,
            'name' => 'Haydee Magnetico',
            'email' => 'haydee.magnetico001@deped.gov.ph',
        ],
        [
            'id' => 15,
            'name' => 'Cresmary Octaviano',
            'email' => 'cresmary.octaviano@deped.gov.ph',
        ],
        [
            'id' => 16,
            'name' => 'Chiesn Kay Maglangit',
            'email' => 'chiesnkay.maglangit@deped.gov.ph',
        ],
        [
            'id' => 17,
            'name' => 'Giann Paras',
            'email' => 'giann.paras@deped.gov.ph',
        ],
        [
            'id' => 18,
            'name' => 'Marivic Pizarras',
            'email' => 'marivic.pizarras001@deped.gov.ph',
        ],
        [
            'id' => 19,
            'name' => 'Junalyn Ronquillo',
            'email' => 'junalyn.ronquillo@deped.gov.ph',
        ],
        [
            'id' => 20,
            'name' => 'Ruth Tomarong',
            'email' => 'ruth.tomarong001@deped.gov.ph',
        ],
        [
            'id' => 21,
            'name' => 'Edarline Quiapo',
            'email' => 'edarline.quiapo@deped.gov.ph',
        ],


        [
            'id' => 22,
            'name' => ' Evelyn II Ramos',
            'email' => 'bebscap78@gmail.com',
        ],
        [
            'id' => 23,
            'name' => 'Girlie Abayan',
            'email' => 'girlie.abayan@deped.gov.ph',
        ],
        [
            'id' => 24,
            'name' => 'Lizl Aljas',
            'email' => 'lizl.aljas@deped.gov.ph',
        ],
        [
            'id' => 25,
            'name' => 'Sherryl Balansag',
            'email' => 'sherryl.balansag@deped.gov.ph',
        ],
        [
            'id' => 26,
            'name' => 'Mechu Charity Colot',
            'email' => 'mechucharity@gmail.com',
        ],
        [
            'id' => 27,
            'name' => 'Monette Dalondonan',
            'email' => 'monette.balansag@deped.gov.ph',
        ],
        [
            'id' => 28,
            'name' => 'Honey Mae Condez',
            'email' => 'honeymae.condez@deped.gov.ph',
        ],
        [
            'id' => 29,
            'name' => 'Love Joy Dilidili',
            'email' => 'lovejoydilidili@gmail.com',
        ],
        [
            'id' => 30,
            'name' => 'Norolian Guro',
            'email' => 'norolain.guro@deped.gov.ph',
        ],
        [
            'id' => 31,
            'name' => 'Jesusa Macas',
            'email' => 'jesusa.macas@deped.gov.ph',
        ],
        [
            'id' => 32,
            'name' => 'Merlina Malayo',
            'email' => 'merlina.malayo@deped.gov.ph',
        ],
        [
            'id' => 33,
            'name' => 'Sushela Napiere',
            'contact_no' => '09606436762',
        ],
        [
            'id' => 34,
            'name' => 'Anecita Paniza',
            'email' => 'anecitapaniza@gmail.com',
        ],
        [
            'id' => 35,
            'name' => 'Maria Victoria Rico',
            'email' => 'mariavictoria.rico@deped.gov.ph',
        ],
        [
            'id' => 36,
            'name' => 'Jona Mae Villaruz',
            'email' => 'jonamae.villaruz@deped.gov.ph',
        ],
        [
            'id' => 37,
            'name' => 'Gennie May Villaver',
            'email' => 'genniemay.villaver@deped.gov.ph',
        ],
        [
            'id' => 38,
            'name' => 'Veneranda Yordan',
            'email' => 'veneranda.yordan001@deped.gov.ph',
        ],
        [
            'id' => 39,
            'name' => 'Mark Yocor',
            'contact_no' => '09758436550',
        ],
        [
            'id' => 40,
            'name' => 'Jerry Biagcong',
            'email' => 'jerry.biagcong001@deped.gov.ph',
        ],
        [
            'id' => 41,
            'name' => 'Miladima Boa',
            'email' => 'miladima.boa@deped.gov.ph',
        ],
        [
            'id' => 42,
            'name' => 'Rizalie Capangpangan',
            'email' => 'rizalie.capangpangan@deped.gov.ph',
        ],
        [
            'id' => 43,
            'name' => 'Nancy Cole',
            'email' => 'nancy.cole@deped.gov.ph',
        ],
        [
            'id' => 44,
            'name' => 'Eliza Jean Dacut',
            'email' => 'elizajean.dacut@deped.gov.ph',
        ],
        [
            'id' => 45,
            'name' => 'Mayette Daub',
            'email' => 'mayette.daub@deped.gov.ph',
        ],
        [
            'id' => 46,
            'name' => 'Jennie De Carlos',
            'email' => 'jennie.declaros@deped.gov.ph',
        ],
        [
            'id' => 47,
            'name' => 'Honey Dounnyl Garsuta',
            'email' => 'honey.garsuta@deped.gov.ph',
        ],
        [
            'id' => 48,
            'name' => 'Ana Flordeliza Haganas',
            'email' => 'anaflordeliza.haganas@deped.gov.ph',
        ],
        [
            'id' => 49,
            'name' => 'Rosalinda Macalisang',
            'email' => 'rosalinda.macalisang001@deped.gov.ph',
        ],
        [
            'id' => 50,
            'name' => 'Mary Rose Romitman',
            'email' => 'mary.romitman@deped.gov.ph',
        ],
        [
            'id' => 51,
            'name' => 'Yvonne Sumalinog',
            'email' => 'yvonne.sumalinog@deped.gov.ph',
        ],
        [
            'id' => 52,
            'name' => 'Vergel Talaid',
            'email' => 'vergel.talaid@deped.gov.ph',
        ],
        [
            'id' => 53,
            'name' => 'Lourein Tolentino',
            'email' => 'lourein.tolentino@deped.gov.ph',
        ],
        [
            'id' => 54,
            'name' => 'Annabelle De Guzman',
            'email' => 'annabelle.deguzman002@deped.gov.ph',
        ],




        [
            'id' => 55,
            'name' => 'Myrna Acuba',
            'email' => 'myrna.acuba@deped.gov.ph',
        ],
        [
            'id' => 56,
            'name' => 'Marjorie Balanay',
            'email' => 'marjorie.balanay@dedped.gov.ph',
        ],
        [
            'id' => 57,
            'name' => 'Rachel Benitez',
            'email' => 'rachel.benitez@deped.gov.ph',
        ],
        [
            'id' => 58,
            'name' => 'Alberto Cabungcal',
            'email' => 'alberto.cabungcal@deped.gov.ph',
        ],
        [
            'id' => 59,
            'name' => 'Janice Maria Corpuz',
            'email' => 'janice.corpuz@deped.gov.ph',
        ],
        [
            'id' => 60,
            'name' => 'Genevive Cortes',
            'email' => 'genevive.cortes@deped.gov.ph',
        ],
        [
            'id' => 61,
            'name' => 'Annie Rose Dela Cruz',
            'email' => 'annierose.delacruz@deped.gov.ph',
        ],
        [
            'id' => 62,
            'name' => 'Mark Robel Enerio',
            'email' => 'markrobel.enerio@deped.gov.ph',
        ],
        [
            'id' => 63,
            'name' => 'Nel Marie Iglupas',
            'email' => 'nelmarie.iglupas@deped.gov.ph',
        ],
        [
            'id' => 64,
            'name' => 'Anna Teresa Maglinte',
            'email' => 'anna.maglinte@deped.gov.ph',
        ],
        [
            'id' => 65,
            'name' => 'Sampaguita Mansueto',
            'email' => 'sampaguita.mansueto@deped.gov.ph',
        ],
        [
            'id' => 66,
            'name' => 'Christian Roy Mendija',
            'email' => 'christian.mendija@deped.gov.ph',
        ],
        [
            'id' => 67,
            'name' => 'Vida May Mohamad',
            'email' => 'vida.mohammad@deped.gov.ph',
        ],
        [
            'id' => 68,
            'name' => 'Dennise Rafael III Nadayag',
            'email' => 'denniserafaeliiinadayag@deped.gov.ph',
        ],
        [
            'id' => 69,
            'name' => 'Melissa Obina',
            'email' => 'melissa.obina@deped.gov.ph',
        ],
        [
            'id' => 70,
            'name' => 'Sheila Paragoso',
            'email' => 'sheila.paragoso@deped.gov.ph',
        ],
        [
            'id' => 71,
            'name' => 'Ester Grace Supeña',
            'email' => 'supena@deped.gov.ph',
        ],
        [
            'id' => 72,
            'name' => 'Efren Vios',
            'email' => 'efren.vios@deped.gov.ph',
        ],
        [
            'id' => 73,
            'name' => 'Pamela Salazar',
            'email' => 'pamela.salazar@deped.gov.ph',
        ],
        [
            'id' => 74,
            'name' => 'Estrella Landero',
            'email' => 'estrella.landero001@deped.gov.ph',
        ],
        [
            'id' => 75,
            'name' => 'Rucelle Mae Arboleras',
            'email' => 'rucellemae.arboleras@deped.gov.ph',
        ],
        [
            'id' => 76,
            'name' => 'Evelyn Waperi',
            'email' => 'evelyn.waperi@deped.gov.ph',
        ],
        [
            'id' => 77,
            'name' => 'Lorelie Yarra',
            'email' => 'lorelie.yarra@deped.gov.ph',
        ],
        [
            'id' => 78,
            'name' => 'Marita Mangulimotan',
            'email' => 'marita.manguilimotan@deped.gov.ph',
        ],
        [
            'id' => 79,
            'name' => 'Lalaine Maagad',
            'email' => 'lalaine.maagad@deped.gov.ph',
        ],
        [
            'id' => 80,
            'name' => 'Jean Arabaca',
            'email' => 'jean.arabaca@deped.gov.ph',
        ],
        [
            'id' => 81,
            'name' => 'Nancita Sale',
            'email' => 'nancita.sale@deped.gov.ph',
        ],
        [
            'id' => 82,
            'name' => 'Perlita Yee',
            'email' => 'perlita.yee@deped.gov.ph',
        ],
        [
            'id' => 83,
            'name' => 'Minerva Cabural',
            'email' => 'minerva.cabural@deped.gov.ph',
        ],
        [
            'id' => 84,
            'name' => 'Jalexcel Catalan',
            'email' => 'jalexcel.catalan@deped.gov.ph',
        ],
        [
            'id' => 85,
            'name' => 'Edelyn Montejo',
            'email' => 'edelyn.montejo@deped.gov.ph',
        ],
        [
            'id' => 86,
            'name' => 'Robin Cantago',
            'email' => 'robin.cantago@deped.gov.ph',
        ],
        [
            'id' => 87,
            'name' => 'Christy Jane Jamero',
            'email' => 'christyjane.jamero@deped.gov.ph',
        ],
        [
            'id' => 88,
            'name' => 'Jeremy Sacon',
            'email' => 'jeremy.sacon002@deped.gov.ph',
        ],



        [
            'id' => 89,
            'name' => 'Cheryl Anngot',
            'email' => 'cherylanggot@deped.gov.ph',
        ],
        [
            'id' => 90,
            'name' => 'Ma. Theresa Bolongan',
            'email' => 'matheresa.bolongan@deped.gov.ph',
        ],
        [
            'id' => 91,
            'name' => 'Raul Rey Bongco',
            'email' => 'raulrey.bongco@deped.gov.ph',
        ],
        [
            'id' => 92,
            'name' => 'Norvisa Bucong',
            'email' => 'norvisa.bucong@deped.gov.ph',
        ],
        [
            'id' => 93,
            'name' => 'Vanessa Buray',
            'email' => 'vanessa.vanessa@deped.gov.ph',
        ],
        [
            'id' => 94,
            'name' => 'Adrian Pete Canoy',
            'contact_no' => '09500064555',
        ],
        [
            'id' => 95,
            'name' => 'Jeffrey Jariol',
            'email' => 'jeff.jariol004@deped.gov.ph',
        ],
        [
            'id' => 96,
            'name' => 'Janet Labisig',
            'email' => 'janet.labisig@deped.gov.ph',
        ],
        [
            'id' => 97,
            'name' => 'Bryan Lactuan',
            'contact_no' => '09350949030',
        ],
        [
            'id' => 98,
            'name' => 'Cheryl Marajas',
            'email' => 'cheryl.marajas@deped.gov.ph',
        ],
        [
            'id' => 99,
            'name' => 'Mary Dream Saladaga',
            'email' => 'marydream.saladaga@deped.gov.ph',
        ],
        [
            'id' => 100,
            'name' => 'Alexander Verzosa',
            'email' => 'alexander.versoza@deped.gov.ph',
        ],
        [
            'id' => 101,
            'name' => 'Flordeliza Villamor',
            'email' => 'flordeliza.villamor@deped.gov.ph',
        ],
        [
            'id' => 102,
            'name' => 'Ann Liñan',
            'contact_no' => '09563381349',
        ],
        [
            'id' => 103,
            'name' => 'Jullebee Bastatas',
            'contact_no' => '09556246623',
        ],
        [
            'id' => 104,
            'name' => 'Ma. Lloneeza Paola Buhangin',
            'contact_no' => '09064449224',
        ],
        [
            'id' => 105,
            'name' => 'Juvy Buhion',
            'contact_no' => '09355474292',
        ],
        [
            'id' => 106,
            'name' => 'Margieta Endrina',
            'contact_no' => '09532613507',
        ],
        [
            'id' => 107,
            'name' => 'Brilla Gamboa',
            'contact_no' => '09359412587',
        ],
        [
            'id' => 108,
            'name' => 'Janice Gabunlas',
            'contact_no' => '09265379563',
        ],
        [
            'id' => 109,
            'name' => 'Rommel Lim',
            'contact_no' => '09167762535',
        ],
        [
            'id' => 110,
            'name' => 'Rizzallee Macalaguing',
            'contact_no' => '09518845272',
        ],
        [
            'id' => 111,
            'name' => 'Fe Lausa Paler',
            'contact_no' => '09051846596',
        ],
        [
            'id' => 112,
            'name' => 'Dina Ramos',
            'contact_no' => '09758471916',
        ],
        [
            'id' => 113,
            'name' => 'Cherryl Responte',
            'contact_no' => '09267834581',
        ],
        [
            'id' => 114,
            'name' => 'Felix Responte',
            'contact_no' => '09534886282',
        ],
        [
            'id' => 115,
            'name' => 'Gualberto Salazar',
            'contact_no' => '09161328593',
        ],
        [
            'id' => 116,
            'name' => 'Mark Saura',
            'contact_no' => '09754146499',
        ],
        [
            'id' => 117,
            'name' => 'Melanie Tiu',
            'contact_no' => '09171030445',
        ],
        [
            'id' => 118,
            'name' => 'Marianne Timonera',
            'contact_no' => '09175511952',
        ],
        [
            'id' => 119,
            'name' => 'Rozette Villacampo',
            'contact_no' => '09157802471',

        ],


       
        
    ];

    foreach ($teacher_users as $user) {
        DB::table('users')->insert([
            'id' => $user['id'],
            'name' => $user['name'],
            'email' => $user['email'] ?? null,
            'contact_no' => $user['contact_no'] ?? null,
            'email_verified_at' => now(),
            'account_id' => 2,
            'password' => Hash::make('teacher'),
            'is_allowed_login' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }

    }
}
