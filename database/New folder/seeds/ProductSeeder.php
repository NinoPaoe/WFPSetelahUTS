<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //2
        DB::table('products')->insert([
            'generic_name' => 'fentanil',
            'form' => 'inj 0,05 mg/mL (i.m./i.v.)',
            'restriction_formula' => '5 amp/kasus.',
            'description' => 'patch: Hanya untuk nyeri berat dan harus diberikan oleh tim medis yang dapat melakukan resusitasi.',
            'faskes_tk1' => '0',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '1'
        ]);

        DB::table('products')->insert([
            'generic_name' => 'fentanil',
            'form' => 'patch 12,5 mcg/jam',
            'restriction_formula' => '10 patch/bulan.',
            'description' => 'inj: Hanya untuk nyeri berat dan harus diberikan oleh tim medis yang dapat melakukan resusitasi.',
            'faskes_tk1' => '0',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '1'
        ]);

        DB::table('products')->insert([
            'generic_name' => 'fentanil',
            'form' => 'patch 25 mcg/jam',
            'restriction_formula' => '10 patch/bulan.',
            'description' => 'patch: Tidak untuk nyeri akut.',
            'faskes_tk1' => '0',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '1'
        ]);

        DB::table('products')->insert([
            'generic_name' => 'hidromorfon',
            'form' => 'tab lepas lambat 8 mg',
            'restriction_formula' => '30 tab/bulan.',
            'description' => '',
            'faskes_tk1' => '0',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '1'
        ]);

        DB::table('products')->insert([
            'generic_name' => 'hidromorfon',
            'form' => 'tab lepas lambat 16 mg',
            'restriction_formula' => '30 tab/bulan.',
            'description' => '',
            'faskes_tk1' => '0',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '1'
        ]);

        DB::table('products')->insert([
            'generic_name' => 'kodein',
            'form' => 'tab 10 mg',
            'restriction_formula' => '30 tab/bulan.',
            'description' => '',
            'faskes_tk1' => '1',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '1'
        ]);

        DB::table('products')->insert([
            'generic_name' => 'kodein',
            'form' => 'tab 20 mg',
            'restriction_formula' => '30 tab/bulan.',
            'description' => '',
            'faskes_tk1' => '1',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '1'
        ]);
        //3
        DB::table('products')->insert([
            'generic_name' => 'asam mefenamat',
            'form' => 'tab 20 mg',
            'restriction_formula' => '30 tab/bulan.',
            'description' => '',
            'faskes_tk1' => '1',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '2'
        ]);

        DB::table('products')->insert([
            'generic_name' => 'ibuprofen',
            'form' => 'tab 20 mg',
            'restriction_formula' => '30 tab/bulan.',
            'description' => '',
            'faskes_tk1' => '1',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '2'
        ]);

        DB::table('products')->insert([
            'generic_name' => 'ketoprofen',
            'form' => 'tab 20 mg',
            'restriction_formula' => '30 tab/bulan.',
            'description' => '',
            'faskes_tk1' => '1',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '2'
        ]);
        //4
        DB::table('products')->insert([
            'generic_name' => 'amitriptilin',
            'form' => 'tab 25 mg',
            'restriction_formula' => '30 tab/bulan.',
            'description' => '',
            'faskes_tk1' => '1',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '3'
        ]);

        DB::table('products')->insert([
            'generic_name' => 'gabapentin',
            'form' => 'kaps 100 mg ',
            'restriction_formula' => '60 kaps/bulan.',
            'description' => 'Hanya untuk neuralgia pascaherpes atau nyeri neuropati diabetikum.',
            'faskes_tk1' => '0',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '3'
        ]);

        DB::table('products')->insert([
            'generic_name' => 'karbamazepin',
            'form' => 'tab 100 mg',
            'restriction_formula' => '60 tab/bulan.',
            'description' => 'Hanya untuk neuralgia trigeminal.',
            'faskes_tk1' => '1',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '3'
        ]);
        //5
        DB::table('products')->insert([
            'generic_name' => 'bupivakain',
            'form' => 'inj 0,5%',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => '0',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '4'
        ]);

        DB::table('products')->insert([
            'generic_name' => 'bupivakain heavy',
            'form' => 'inj 0,5% + glukosa 8% ',
            'restriction_formula' => '',
            'description' => 'Khusus untuk analgesia spinal.',
            'faskes_tk1' => '0',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '4'
        ]);

        DB::table('products')->insert([
            'generic_name' => 'etil klorida',
            'form' => 'spray 100 mL',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => '1',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '4'
        ]);
        //6
        DB::table('products')->insert([
            'generic_name' => 'deksmedetomidin',
            'form' => 'inj 100 mcg/mL',
            'restriction_formula' => '',
            'description' => 'Untuk sedasi pada pasien di ICU, kraniotomi, bedah jantung dan operasi yang memerlukan waktu pembedahan yang lama.',
            'faskes_tk1' => '0',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '5'
        ]);

        DB::table('products')->insert([
            'generic_name' => 'ketamin',
            'form' => 'inj 50 mg/mL (i.v.)',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => '0',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '5'
        ]);

        DB::table('products')->insert([
            'generic_name' => 'propofol',
            'form' => 'inj 1%',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => '0',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '5'
        ]);
        //7
        DB::table('products')->insert([
            'generic_name' => 'atropin',
            'form' => 'inj 0,25 mg/mL (i.v./s.k.)',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => '1',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '7'
        ]);

        DB::table('products')->insert([
            'generic_name' => 'diazepam',
            'form' => 'inj 5 mg/mL',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => '1',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '7'
        ]);

        DB::table('products')->insert([
            'generic_name' => 'midazolam',
            'form' => 'inj 1 mg/mL (i.v.)',
            'restriction_formula' => 'Dosis rumatan: 1 mg/jam (24 mg/hari).',
            'description' => 'Dapat digunakan untuk premedikasi sebelum induksi anestesi dan rumatan selama anestesi umum.',
            'faskes_tk1' => '0',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '7'
        ]);

        DB::table('products')->insert([
            'generic_name' => 'midazolam',
            'form' => 'inj 5 mg/mL (i.v.)',
            'restriction_formula' => 'Dosis premedikasi: 8 vial/kasus.',
            'description' => 'Dapat digunakan untuk sedasi pada pasien ICU dan HCU.',
            'faskes_tk1' => '0',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '7'
        ]);
        //8
        DB::table('products')->insert([
            'generic_name' => 'deksametason',
            'form' => 'inj 5 mg/mL',
            'restriction_formula' => '20 mg/hari.',
            'description' => '',
            'faskes_tk1' => '1',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '8'
        ]);

        DB::table('products')->insert([
            'generic_name' => 'difenhidramin',
            'form' => 'inj 10 mg/mL (i.v./i.m.)',
            'restriction_formula' => '30 mg/hari.',
            'description' => '',
            'faskes_tk1' => '1',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '8'
        ]);

        DB::table('products')->insert([
            'generic_name' => 'epinefrin (adrenalin)',
            'form' => 'inj 1 mg/mL',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => '1',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '8'
        ]);
        //9
        DB::table('products')->insert([
            'generic_name' => 'albendazol',
            'form' => 'tab 400 mg',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => '1',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '9'
        ]);

        DB::table('products')->insert([
            'generic_name' => 'albendazol',
            'form' => 'susp 200 mg/5 mL',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => '1',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '9'
        ]);

        DB::table('products')->insert([
            'generic_name' => 'mebendazol',
            'form' => 'tab 100 mg',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => '1',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '9'
        ]);

        DB::table('products')->insert([
            'generic_name' => 'mebendazol',
            'form' => 'tab 500 mg',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => '1',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '9'
        ]);

        DB::table('products')->insert([
            'generic_name' => 'mebendazol',
            'form' => 'sir 100 mg/5 mL',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => '1',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '9'
        ]);

        DB::table('products')->insert([
            'generic_name' => 'pirantel pamoat',
            'form' => 'tab 125 mg',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => '1',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '9'
        ]);

        DB::table('products')->insert([
            'generic_name' => 'pirantel pamoat',
            'form' => 'tab 250 mg',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => '1',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '9'
        ]);

        DB::table('products')->insert([
            'generic_name' => 'pirantel pamoat',
            'form' => 'susp 125 mg/5 mL',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => '1',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '9'
        ]);
        //10
        DB::table('products')->insert([
            'generic_name' => 'amoksisilin',
            'form' => 'tab 250 mg',
            'restriction_formula' => '10 hari.',
            'description' => '',
            'faskes_tk1' => '1',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '10'
        ]);

        DB::table('products')->insert([
            'generic_name' => 'amoksisilin',
            'form' => 'tab 500 mg',
            'restriction_formula' => '10 hari.',
            'description' => '',
            'faskes_tk1' => '1',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '10'
        ]);

        DB::table('products')->insert([
            'generic_name' => 'amoksisilin',
            'form' => 'drops 100 mg/mL',
            'restriction_formula' => '1 btl/kasus.',
            'description' => '',
            'faskes_tk1' => '1',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '10'
        ]);

        DB::table('products')->insert([
            'generic_name' => 'amoksisilin',
            'form' => 'sir kering 125 mg/5 mL',
            'restriction_formula' => '1 btl/kasus.',
            'description' => '',
            'faskes_tk1' => '1',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '10'
        ]);

        DB::table('products')->insert([
            'generic_name' => 'amoksisilin',
            'form' => 'sir kering 250 mg/5 mL',
            'restriction_formula' => '1 btl/kasus.',
            'description' => '',
            'faskes_tk1' => '1',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '10'
        ]);

        DB::table('products')->insert([
            'generic_name' => 'benzatin benzilpenisilin',
            'form' => 'inj 1,2 juta IU/mL (i.m.)',
            'restriction_formula' => '2 vial/bulan.',
            'description' => '',
            'faskes_tk1' => '1',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '10'
        ]);

        DB::table('products')->insert([
            'generic_name' => 'benzatin benzilpenisilin',
            'form' => 'inj 2,4 juta IU/mL (i.m.) ',
            'restriction_formula' => '1 vial/bulan.',
            'description' => '',
            'faskes_tk1' => '1',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '10'
        ]);

        DB::table('products')->insert([
            'generic_name' => 'fenoksimetil penisilin (penisilin V)',
            'form' => 'tab 125 mg',
            'restriction_formula' => '40 tab/bulan.',
            'description' => '',
            'faskes_tk1' => '0',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '10'
        ]);

        DB::table('products')->insert([
            'generic_name' => 'fenoksimetil penisilin (penisilin V)',
            'form' => 'tab 250 mg',
            'restriction_formula' => '40 tab/bulan.',
            'description' => '',
            'faskes_tk1' => '1',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '10'
        ]);

        DB::table('products')->insert([
            'generic_name' => 'fenoksimetil penisilin (penisilin V)',
            'form' => 'tab 500 mg',
            'restriction_formula' => '20 tab/bulan.',
            'description' => '',
            'faskes_tk1' => '1',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '10'
        ]);
        //11
        DB::table('products')->insert([
            'generic_name' => 'dapson',
            'form' => 'tab 100 mg',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => '1',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '11'
        ]);

        DB::table('products')->insert([
            'generic_name' => 'klofazimin',
            'form' => 'kaps dalam minyak 50 mg',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => '1',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '11'
        ]);

        DB::table('products')->insert([
            'generic_name' => 'klofazimin',
            'form' => 'kaps dalam minyak 100 mg',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => '1',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '11'
        ]);

        DB::table('products')->insert([
            'generic_name' => 'rifampisin',
            'form' => 'kaps 300 mg',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => '1',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '11'
        ]);

        DB::table('products')->insert([
            'generic_name' => 'rifampisin',
            'form' => 'tab 450 mg',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => '0',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '11'
        ]);
    }
}
