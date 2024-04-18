<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BloodDonationQuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('blood_donation_questions')->insert([
            ['question' => 'Quel est votre groupe sanguin?', 'answer' => 'A+', 'is_correct' => true],
            ['question' => 'Quel est votre groupe sanguin?', 'answer' => 'A-', 'is_correct' => true],
            ['question' => 'Quel est votre groupe sanguin?', 'answer' => 'B+', 'is_correct' => true],
            ['question' => 'Quel est votre groupe sanguin?', 'answer' => 'B-', 'is_correct' => true],
            ['question' => 'Quel est votre groupe sanguin?', 'answer' => 'AB+', 'is_correct' => true],
            ['question' => 'Quel est votre groupe sanguin?', 'answer' => 'AB-', 'is_correct' => true],
            ['question' => 'Quel est votre groupe sanguin?', 'answer' => 'O+', 'is_correct' => true],
            ['question' => 'Quel est votre groupe sanguin?', 'answer' => 'O-', 'is_correct' => true],

            ['question' => 'Avez-vous voyagé dans un pays où le paludisme est endémique au cours des 12 derniers mois?', 'answer' => 'Oui', 'is_correct' => true],

            ['question' => 'Avez-vous déjà eu une transfusion sanguine?', 'answer' => 'Oui', 'is_correct' => true],

            ['question' => 'Avez-vous déjà eu des symptômes tels que de la fièvre, des frissons, une fatigue extrême ou des douleurs abdominales après avoir donné du sang dans le passé?', 'answer' => 'Oui', 'is_correct' => true],

            ['question' => 'Prenez-vous actuellement des médicaments?', 'answer' => 'Oui', 'is_correct' => true],

            ['question' => 'Avez-vous déjà eu une maladie cardiaque ou une crise cardiaque?', 'answer' => 'Oui', 'is_correct' => true],

            ['question' => 'Avez-vous déjà eu un cancer?', 'answer' => 'Oui', 'is_correct' => true],

            ['question' => 'Avez-vous déjà eu des problèmes de saignement excessif?', 'answer' => 'Oui', 'is_correct' => true],

            ['question' => 'Avez-vous déjà été traité pour une maladie sexuellement transmissible?', 'answer' => 'Oui', 'is_correct' => true],
            
            ['question' => 'Avez-vous déjà eu une hépatite?', 'answer' => 'Oui', 'is_correct' => true],
         ]);
    }
}
