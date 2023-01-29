<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class TermsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('terms')->truncate();
        Schema::enableForeignKeyConstraints();

        $terms = [
            [
                'titulo' => '<span>1. </span> Property of the website',
                'texto' => '<span>1.1. </span>The current website (www.fcporto.pt) is the official website of Futebol Clube do Porto online and its full content is property of Grupo Futebol Clube do Porto <br><span>1.2. </span>The current “Terms and Conditions” regulates the access to this website, and to its use. By accessing any part or section of this website, using it, or any other service linked to it, the user states the acceptance of this “Terms and Conditions”, binding to all and any obligation found in the current document. Should you not accept this, please stop using this website immediately. <br><span>1.3. </span>Grupo Futebol Clube do Porto holds the right to change both the content and the services of this website, the same applying to the current “Terms and Conditions”, at any time, without previous warning, and the changes will be considered in force as soon as they are published in this website. The acceptance will be assumed should the user continue to use the website after the changes are in force. Therefore, the user is advised by Grupo Futebol Clube do Porto to regularly check the “Terms and Conditions” to confirm any update and change. <br> <span>1.4. </span> Grupo Futebol Clube do Porto also holds the right to, at any time and without prior warning, remove the website and its content, and also holds the right to, at any time and without prior warning, limit, deny or stop, partially or in full, access to the website to any user. <br><span>1.5. </span>The rights mentioned in this section may be exercised by Grupo Futebol Clube do Porto without the need to present any relevant reason. <br> <span>1.6. </span>PortoComercial – Sociedade de Comercialização, Licenciamento e Sponsorização, S.A. is the owner of the on-line store found in this website. <br><span>1.7. </span>By acquiring any good or service in this website, the user states that he is aware that he is signing a contract with PortoComercial - Sociedade de Comercialização, Licenciamento e Sponsorização, S.A., a company with the single registration number 503 709 794, seated at Estádio do Dragão, Via Futebol Clube do Porto, Entrada Nascente, piso 3, 4350-415 Porto.',
                'categoria' => 'property'
            ],
        ];

        DB::table('terms')->insert($terms);
    }
}

