<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\accounts;


class AccountsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->delete();

        $users = [

            ['np'=>'5741','password'=>hash::make('5741'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Ani Dwi Purwati'],
            ['np'=>'5889','password'=>hash::make('5889'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Partini '],
            ['np'=>'5936','password'=>hash::make('5936'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Mugiyati '],
            ['np'=>'5939','password'=>hash::make('5939'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Sunaryati '],
            ['np'=>'6052','password'=>hash::make('6052'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Sri suci astuti '],
            ['np'=>'7190','password'=>hash::make('7190'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'Administrator','nama'=>'Anjar Pribadi '],
            ['np'=>'7197','password'=>hash::make('7197'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Herman Maulana Yusup '],
            ['np'=>'7198','password'=>hash::make('7198'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Nunung Nurasiah '],
            ['np'=>'7199','password'=>hash::make('7199'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'Administrator','nama'=>'Riska Kartika Sari '],
            ['np'=>'7202','password'=>hash::make('7202'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Kartika meta '],
            ['np'=>'7205','password'=>hash::make('7205'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Wawan Kurnawan '],
            ['np'=>'7206','password'=>hash::make('7206'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Eddy rismanto '],
            ['np'=>'7418','password'=>hash::make('7418'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Muridin Akbar '],
            ['np'=>'7423','password'=>hash::make('7423'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Heni Suhaeni '],
            ['np'=>'7426','password'=>hash::make('7426'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'Administrator','nama'=>'Aris Hudin '],
            ['np'=>'7437','password'=>hash::make('7437'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Sandi Pratama '],
            ['np'=>'7442','password'=>hash::make('7442'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'Administrator','nama'=>'Fabby Frazasti Fridyan '],
            ['np'=>'7443','password'=>hash::make('7443'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Agus Nurkomara '],
            ['np'=>'G750','password'=>hash::make('G750'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Arfa Shafa Nabila '],
            ['np'=>'G752','password'=>hash::make('G752'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Cindy Kania Aprillia '],
            ['np'=>'G763','password'=>hash::make('G763'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Sri Rahayu '],
            ['np'=>'H006','password'=>hash::make('H006'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Siti Imaroh Nurfirdha Vamela '],
            ['np'=>'H066','password'=>hash::make('H066'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Syaiful Harisudin '],
            ['np'=>'H109','password'=>hash::make('H109'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Wilda Nulaini Salsabila '],
            ['np'=>'H114','password'=>hash::make('H114'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Dinda Anandita Faustina '],
            ['np'=>'H119','password'=>hash::make('H119'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Yessi Dewi Nastiti '],
            ['np'=>'H120','password'=>hash::make('H120'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'AGUSTIN EKI PRATIWI '],
            ['np'=>'H123','password'=>hash::make('H123'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Ade Muhammad Irfan Zidny '],
            ['np'=>'H130','password'=>hash::make('H130'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'NUR APRILIANINGSIH '],
            ['np'=>'H186','password'=>hash::make('H186'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Indah Oktora Paramita '],
            ['np'=>'H190','password'=>hash::make('H190'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Fifin Fitria Anggraeni '],
            ['np'=>'H191','password'=>hash::make('H191'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Dewi Nurhikmawati '],
            ['np'=>'H192','password'=>hash::make('H192'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Lisa Herlina '],
            ['np'=>'H193','password'=>hash::make('H193'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Dinda Amelia '],
            ['np'=>'H194','password'=>hash::make('H194'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Lustanti Yuli Asih '],
            ['np'=>'H196','password'=>hash::make('H196'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Ine Febrianti '],
            ['np'=>'H198','password'=>hash::make('H198'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Nisa Madani '],
            ['np'=>'H199','password'=>hash::make('H199'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Delia Octriane '],
            ['np'=>'I402','password'=>hash::make('I402'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'delia harun '],
            ['np'=>'I403','password'=>hash::make('I403'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Dian Oktaviani '],
            ['np'=>'I404','password'=>hash::make('I404'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'DINA APRILIANTI '],
            ['np'=>'I405','password'=>hash::make('I405'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Fitri Setyorini '],
            ['np'=>'I406','password'=>hash::make('I406'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Karlina Ibrahim  '],
            ['np'=>'I407','password'=>hash::make('I407'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Khairunnisa Hikmayati '],
            ['np'=>'I409','password'=>hash::make('I409'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Mia Listiana '],
            ['np'=>'I418','password'=>hash::make('I418'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Adi Pamungkas '],
            ['np'=>'I420','password'=>hash::make('I420'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Agus Aziz '],
            ['np'=>'I421','password'=>hash::make('I421'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Avrila Wiranti '],
            ['np'=>'I423','password'=>hash::make('I423'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Citra afrida sari '],
            ['np'=>'I424','password'=>hash::make('I424'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Daffa Pratama Putra '],
            ['np'=>'I425','password'=>hash::make('I425'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Dewi Pertiwi '],
            ['np'=>'I426','password'=>hash::make('I426'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Dini Andini '],
            ['np'=>'I428','password'=>hash::make('I428'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Gusti Arifiyanto '],
            ['np'=>'I429','password'=>hash::make('I429'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Haina Apriliani  '],
            ['np'=>'I430','password'=>hash::make('I430'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Hermansyah '],
            ['np'=>'I431','password'=>hash::make('I431'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Iis Kurnia '],
            ['np'=>'I432','password'=>hash::make('I432'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Julpi Abdul  Muti  '],
            ['np'=>'I434','password'=>hash::make('I434'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Muhamad Rifki '],
            ['np'=>'I437','password'=>hash::make('I437'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Nuraida Diah W '],
            ['np'=>'I440','password'=>hash::make('I440'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Siska Kusuma Wardani '],
            ['np'=>'I441','password'=>hash::make('I441'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Sofia Nurrahayu '],
            ['np'=>'I442','password'=>hash::make('I442'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Tri Banda Rahayu '],
            ['np'=>'I443','password'=>hash::make('I443'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Windriyani '],
            ['np'=>'I444','password'=>hash::make('I444'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'User','nama'=>'Zulfikar Hidayatullah '],
            ['np'=>'admin','password'=>hash::make('admin'),'created_at'=>now(),'updated_at'=>now(),'remember_token'=>Str::random(10),'privillege'=>'Administrator','nama'=>'Administrator'],
        ];
        foreach($users as $user){
            accounts::create($user);
        }
    }

  
}
