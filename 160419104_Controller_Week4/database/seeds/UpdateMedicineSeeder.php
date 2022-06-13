<?php

use Illuminate\Database\Seeder;

class UpdateMedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medicines')->where('id', 1)->update(['image' => 'asam_mefenamat_250.jpg']);
        DB::table('medicines')->where('id', 2)->update(['image' => 'asam_mefenamat_500.jpg']);
        DB::table('medicines')->where('id', 3)->update(['image' => 'ibuprofen_200.jpg']);
        DB::table('medicines')->where('id', 4)->update(['image' => 'ibuprofen_400.jpg']);
        DB::table('medicines')->where('id', 5)->update(['image' => 'asam_mefenamat_100.jpg']);
        DB::table('medicines')->where('id', 6)->update(['image' => 'ketoprofen_50.jpg']);
        DB::table('medicines')->where('id', 7)->update(['image' => 'ketoprofen_100.jpg']);
        DB::table('medicines')->where('id', 8)->update(['image' => 'alopurinol_100.jpeg']);
        DB::table('medicines')->where('id', 9)->update(['image' => 'alopurinol_300.jpg']);
        DB::table('medicines')->where('id', 10)->update(['image' => 'kolkisin_500.jpg']);
        DB::table('medicines')->where('id', 11)->update(['image' => 'bupivakain_0.5.jpeg']);
        DB::table('medicines')->where('id', 12)->update(['image' => 'lidokain_0.5.jpg']);
        DB::table('medicines')->where('id', 13)->update(['image' => 'lidokain_10.jpg']);
        DB::table('medicines')->where('id', 14)->update(['image' => 'propranolol_10.jpg']);
        DB::table('medicines')->where('id', 15)->update(['image' => 'betahistin_6.jpg']);
        DB::table('medicines')->where('id', 16)->update(['image' => 'betahistin_24.jpeg']);
    }
}
