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
                'texto' => '<span>1.1. </span>The current website (www.shelbyfc.pt) is the official website of Shelby Football Club online and its full content is property of Grupo Shelby Football Club <br><span>1.2. </span>The current “Terms and Conditions” regulates the access to this website, and to its use. By accessing any part or section of this website, using it, or any other service linked to it, the user states the acceptance of this “Terms and Conditions”, binding to all and any obligation found in the current document. Should you not accept this, please stop using this website immediately. <br><span>1.3. </span>Grupo Shelby Football Club holds the right to change both the content and the services of this website, the same applying to the current “Terms and Conditions”, at any time, without previous warning, and the changes will be considered in force as soon as they are published in this website. The acceptance will be assumed should the user continue to use the website after the changes are in force. Therefore, the user is advised by Grupo Shelby Football Club to regularly check the “Terms and Conditions” to confirm any update and change. <br> <span>1.4. </span> Grupo Shelby Football Club also holds the right to, at any time and without prior warning, remove the website and its content, and also holds the right to, at any time and without prior warning, limit, deny or stop, partially or in full, access to the website to any user. <br><span>1.5. </span>The rights mentioned in this section may be exercised by Grupo Shelby Football Club without the need to present any relevant reason. <br> <span>1.6. </span>ShelbyComercial – Sociedade de Comercialização, Licenciamento e Sponsorização, S.A. is the owner of the on-line store found in this website. <br><span>1.7. </span>By acquiring any good or service in this website, the user states that he is aware that he is signing a contract with ShelbyComercial - Sociedade de Comercialização, Licenciamento e Sponsorização, S.A., a company with the single registration number 503 709 794, seated at Estádio do Dragão, Via Shelby Football Club, Entrada Nascente, piso 3, 4350-415 Shelby.',
                'categoria' => 'property'
            ],
            [
                'titulo' => '<span>2. </span> Privacy',
                'texto' => '<span>2.1. </span>The personal data collected during the use, by an individual, of this website will be strictly treated in accordance with our “Privacy and Data Protection Policy”, which can be checked <br> <span>2.2 </span>This website uses cookies, in order to improve the user experience and offer a more efficient service. For more information, please check here our “Privacy and Data Protection Policy”.',
                'categoria' => 'privacy'
            ],
            [
                'titulo' => '<span>3. </span> Intellectual Property',
                'texto' => '<span>3.1. </span>All content published in this website are property of Grupo Shelby Football Club. However, there may be situations where the content published belongs to third parties. In those cases, such content will only be made available after the rightful owner authorizes it.',
                'categoria' => 'intellectual'
            ],
            [
                'titulo' => '<span>4. </span> Responsibility',
                'texto' => '<span>4.1. </span>Grupo Shelby Football Club does not guarantee to the user that the content or services provided in this website fulfil or are fit to fulfil any needs or expectations of the user. With effect, the website may contain imprecisions or errors, regardless of the fact that Grupo Shelby Football Club tries to act with the most possible rigour in its activity.',
                'categoria' => 'responsibility'
            ],
            [
                'titulo' => '<span>5. </span> Registration',
                'texto' => '<span>5.1. </span>There is a possibility that the user will be asked to register in the website to be granted access to specific areas and to use functions, services or components.',
                'categoria' => 'registration'
            ],
            [
                'titulo' => '<span>6. </span> Responsability of the user',
                'texto' => '<span>6.1. </span>No material sent to the e-mail addresses contained in the website (for example shelbyfc@shelbyfc.pt; geral@shelbyfc.pt; servicoaocliente@shelbyfc.pt, among other) will contain defamatory, offensive, vexing, pornographic, obscene, intimidator, racist, instigator to any practice of illicit action, or violating any third party right, including, as an example, any copyright.',
                'categoria' => 'user'
            ],
            [
                'titulo' => '<span>7. </span> Sale of retail goods and services through the website',
                'texto' => '<span>7.1. </span>The current clause only applies to the purchase and sale of goods and services and not to tickets, membership or Annual Seats.',
                'categoria' => 'sale'
            ],

            [
                'titulo' => '<span>8. </span> Shelby FC Member',
                'texto' => '<span>8.1. </span>By registering as a member, the user accepts these “Terms and Conditions”.',
                'categoria' => 'member'
            ],
            [
                'titulo' => '<span>9. </span> Shelby FC Seasaon Ticket',
                'texto' => '<span>9.1. </span>The acquisition of an Season Ticket is exclusive for Shelby FC Members.',
                'categoria' => 'ticket'
            ],
            [
                'titulo' => '<span>10. </span> Purchase and Sale of Tickets',
                'texto' => '<span>10.1. </span>From this website, it is possible to purchase tickets for Shelby Football Club - Futebol, SAD football matches.',
                'categoria' => 'purchase_sale'
            ],
            [
                'titulo' => '<span>11. </span> Final Considerations',
                'texto' => '<span>11.1. </span>Should any provision of this document be declared null, ineffective or should it be annulled, that event will not affect the validity or effectiveness of the remaining clauses, which will remain fully in force, in accordance with Article 292 of the Civil Code.',
                'categoria' => 'final_consideration'
            ],
        ];

        DB::table('terms')->insert($terms);
    }
}

