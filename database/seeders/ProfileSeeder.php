<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use App\Models\profile;
use App\Models\accounts;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profile')->delete();
        $np_user = DB::table('accounts')->pluck('np');

        $profile = [

            ['id'=>'1 ', 'np_user'=>'5741','foto'=>'default-avatar.png ','nama'=>'Ani Dwi Purwati ','unit'=>'Verifikasi Pita Cukai  ','email'=>'anidwipurwati@gmail.com ','alamat'=>'Jl Japos Raya Pd Blimbing Rt 05 Rw 04 Jurangmangu Barat Pd Aren Tangsel ','contact'=>'08999208591 ','sub_bagian'=>'Verifikator PCHT Non Personal ','tgl_lahir'=>'2021-01-13 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'2 ', 'np_user'=>'5889','foto'=>'default-avatar.png ','nama'=>'Partini ','unit'=>'Verifikasi Pita Cukai  ','email'=>'aileennathania62@gmail.com ','alamat'=>'Perum Kandiwa permai 2 blo H no.1 rt. 075 rw. 020 kosambi, klari, karawang. 41371 ','contact'=>'081314875176 ','sub_bagian'=>'Verifikator PCHT Non Personal ','tgl_lahir'=>'1965-06-11 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'3 ', 'np_user'=>'5936','foto'=>'default-avatar.png ','nama'=>'Mugiyati ','unit'=>'Verifikasi Pita Cukai  ','email'=>'Yatimugi00@gmail.com ','alamat'=>'Jl. Rawa Salak No.19 ','contact'=>'085782777304 ','sub_bagian'=>'Verifikator PCHT Personal ','tgl_lahir'=>'1965-07-05 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'4 ', 'np_user'=>'5939','foto'=>'default-avatar.png ','nama'=>'Sunaryati ','unit'=>'Verifikasi Pita Cukai  ','email'=>'Sunar1266@gmail.com ','alamat'=>'Perum Kandiwa 2 blok J No 4 Rt 075 Rw 020, Duren, Klari, Karawang ','contact'=>'082111239588 ','sub_bagian'=>'Verifikator PCHT Non Personal ','tgl_lahir'=>'1966-01-12 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'5 ', 'np_user'=>'6052','foto'=>'default-avatar.png ','nama'=>'Sri suci astuti ','unit'=>'Verifikasi Pita Cukai  ','email'=>'Shuciastuti17gmail.com ','alamat'=>'Perum pdk hijau permai jl Cempaka IV no.12 Rt.001/015 kel pengasinan bekasi timur ','contact'=>'085782680059 ','sub_bagian'=>'Verifikator PCHT Non Personal ','tgl_lahir'=>'1966-04-17 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'6 ', 'np_user'=>'7190','foto'=>'default-avatar.png ','nama'=>'Anjar Pribadi ','unit'=>'Verifikasi Pita Cukai  ','email'=>'anjar.pribadi29@gmail.com ','alamat'=>'Zam Residence No. 49 Karawang ','contact'=>'085777934682 ','sub_bagian'=>'Kepala Seksi Verifikasi ','tgl_lahir'=>'1982-11-29 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'7 ', 'np_user'=>'7197','foto'=>'default-avatar.png ','nama'=>'Herman Maulana Yusup ','unit'=>'Verifikasi Pita Cukai  ','email'=>'hermanmaulanay@gmail.com ','alamat'=>'Perum permata nirwana, puseurjaya, Telukjambe timur, Karawang ','contact'=>'085779777971 ','sub_bagian'=>'Verifikator PCHT Non Personal ','tgl_lahir'=>'1984-05-12 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'8 ', 'np_user'=>'7198','foto'=>'default-avatar.png ','nama'=>'Nunung Nurasiah ','unit'=>'Verifikasi Pita Cukai  ','email'=>'Rinakhoerunnissa 16@gmail.com ','alamat'=>'Sukajaya 2 Rt12/05 Pinayungan Telukjambe Timur Karawang 41361 ','contact'=>'085719894575 ','sub_bagian'=>'Verifikator PCHT Personal ','tgl_lahir'=>'1980-03-22 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'9 ', 'np_user'=>'7199','foto'=>'default-avatar.png ','nama'=>'Riska Kartika Sari ','unit'=>'Verifikasi Pita Cukai  ','email'=>'riska.kartikasari@peruri.co.id ','alamat'=>'Jl.suriadipati ko.poponcol kidul RT 01RW 01 no.13 Kel.karawang kulon kec.karawang barat 41311 ','contact'=>'081311003785 ','sub_bagian'=>'Admin Verifikasi Pita Cukai ','tgl_lahir'=>'1987-08-25 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'10 ','np_user'=>'7202','foto'=>'default-avatar.png ','nama'=>'Kartika meta ','unit'=>'Verifikasi Pita Cukai  ','email'=>'Kartika.kurniasih@peruri.co.id ','alamat'=>'Babakan Rt 004 Rw 001 No 23 Puseurjaya Teluk Jambe Timur Karawang Jawa Barat ','contact'=>'081218427727 ','sub_bagian'=>'Admin Verifikasi ','tgl_lahir'=>'1984-03-23 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'11 ','np_user'=>'7205','foto'=>'default-avatar.png ','nama'=>'Wawan Kurnawan ','unit'=>'Verifikasi Pita Cukai  ','email'=>'pilotwawan1@gmail.com ','alamat'=>'Ds. Balongsari RT 05/02 Kec. Rawamerta Kab. Karawang ','contact'=>'085714149002 ','sub_bagian'=>'Operator Mesin Inspeksi ','tgl_lahir'=>'1984-04-04 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'12 ','np_user'=>'7206','foto'=>'default-avatar.png ','nama'=>'Eddy rismanto ','unit'=>'Verifikasi Pita Cukai  ','email'=>'Eddoy_seluler@yahoo.co.id ','alamat'=>'Perum.Nuansa tradisi residance blok A.03/no17 .kondang jaya .Karawang timur ','contact'=>'085710859953 ','sub_bagian'=>'Operator Mesin Inspeksi ','tgl_lahir'=>'1986-03-15 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'13 ','np_user'=>'7418','foto'=>'default-avatar.png ','nama'=>'Muridin Akbar ','unit'=>'Verifikasi Pita Cukai  ','email'=>'azighah@gmail.com ','alamat'=>'Perumahan Grand Mutiara Village jalan ronggo waluyo Blok Bk 12 A Rt 05 / Rw 09 kel. Sirnabaya kecamatan Telukjambe Timur Kab. Karawang 41361 ','contact'=>'081213192327 ','sub_bagian'=>'Operator Mesin Inspeksi ','tgl_lahir'=>'1984-03-20 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'14 ','np_user'=>'7423','foto'=>'default-avatar.png ','nama'=>'Heni Suhaeni ','unit'=>'Verifikasi Pita Cukai  ','email'=>'henisuhaeni7423@gmail.com ','alamat'=>'Puri Teluk Jambe Blok B14 no 11 ','contact'=>'089688027256 ','sub_bagian'=>'Verifikator PCHT Personal ','tgl_lahir'=>'1982-09-25 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'15 ','np_user'=>'7426','foto'=>'default-avatar.png ','nama'=>'Aris Hudin ','unit'=>'Verifikasi Pita Cukai  ','email'=>'aris.hudin92@gmail.com ','alamat'=>'Perum Green Harmony Residence Blok B3 No 3 Desa Pasirjengkol Kec. Majalaya ','contact'=>'087736932212 ','sub_bagian'=>'Kepala Unit Verpikai ','tgl_lahir'=>'1992-01-17 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'16 ','np_user'=>'7437','foto'=>'default-avatar.png ','nama'=>'Sandi Pratama ','unit'=>'Verifikasi Pita Cukai  ','email'=>'Ndiepratama.sp@gmail.com ','alamat'=>'Perum griya mas lestari blok h5 no 39 Kel kondang jaya , kec karawang timur , Jawa barat ','contact'=>'089699882051 ','sub_bagian'=>'Konfirmasi Produk ','tgl_lahir'=>'1992-01-23 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'17 ','np_user'=>'7442','foto'=>'default-avatar.png ','nama'=>'Fabby Frazasti Fridyan ','unit'=>'Verifikasi Pita Cukai  ','email'=>'fabbyfrazastifridyan@gmail.com ','alamat'=>'Perum kandiwa 2 blok H no 4 desa duren kec.klari karawang ','contact'=>'081294710543 / 081617937313 ','sub_bagian'=>'Kepala Unit Verpikai ','tgl_lahir'=>'1990-05-11 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'18 ','np_user'=>'7443','foto'=>'default-avatar.png ','nama'=>'Agus Nurkomara ','unit'=>'Verifikasi Pita Cukai  ','email'=>' ','alamat'=>' ','contact'=>' ','sub_bagian'=>'Kepala Meja ','tgl_lahir'=>'1900-01-01 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'19 ','np_user'=>'G750','foto'=>'default-avatar.png ','nama'=>'Arfa Shafa Nabila ','unit'=>'Verifikasi Pita Cukai  ','email'=>'arfashafa@yahoo.com ','alamat'=>'Perum Griya Indah blok E.4 / 29 Rt/Rw, 017/ 005 Desa. Parungmulya Kec. Ciampel Kab. Karawang kode pos.41361 ','contact'=>'085642629882 ','sub_bagian'=>'Verifikator PCHT Non Personal ','tgl_lahir'=>'1997-12-24 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'20 ','np_user'=>'G752','foto'=>'default-avatar.png ','nama'=>'Cindy Kania Aprillia ','unit'=>'Verifikasi Pita Cukai  ','email'=>'cindydo124@gmail.com ','alamat'=>'Perum Griya Indah blok E.4 / 29 Rt/Rw, 017/ 005 Desa. Parungmulya Kec. Ciampel Kab. Karawang kode pos.41361 ','contact'=>'082292136752 / 085353172223 ','sub_bagian'=>'Verifikator PCHT Non Personal ','tgl_lahir'=>'1999-04-24 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'21 ','np_user'=>'G763','foto'=>'default-avatar.png ','nama'=>'Sri Rahayu ','unit'=>'Verifikasi Pita Cukai  ','email'=>'Rahayu9703@gmail.com ','alamat'=>'Kp. Suka mulya rt. 002/ rw. 019 kel.  Karawang wetan kec.  Karawang timur  ','contact'=>'0895369274624 ','sub_bagian'=>'Verifikator PCHT Non Personal ','tgl_lahir'=>'1997-12-03 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'22 ','np_user'=>'H006','foto'=>'default-avatar.png ','nama'=>'Siti Imaroh Nurfirdha Vamela ','unit'=>'Verifikasi Pita Cukai  ','email'=>'sitiimaroh98@gmail.com ','alamat'=>'Perumnas BTJ blok F5  ','contact'=>'085730999598 ','sub_bagian'=>'Verifikator PCHT Non Personal ','tgl_lahir'=>'1998-03-02 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'23 ','np_user'=>'H066','foto'=>'default-avatar.png ','nama'=>'Syaiful Harisudin ','unit'=>'Verifikasi Pita Cukai  ','email'=>'syaifulhrs@gmail.com ','alamat'=>'Perumahan Puri Telukjambe Rt/Rw 08/06 blok B1 no. 22 Ds. Sinarbaya Kec. Telukjambe timur Kab. Karawang ','contact'=>'081296727236 ','sub_bagian'=>'Verifikator MMEA ','tgl_lahir'=>'2000-09-22 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'24 ','np_user'=>'H109','foto'=>'default-avatar.png ','nama'=>'Wilda Nul`aini Salsabila ','unit'=>'Verifikasi Pita Cukai  ','email'=>' Wildasalsabila63@gmail.com ','alamat'=>' Perumahan Puri Teluk Jambe Blok B 10/38 RT 06 RW 06 Ds.Sirnabaya ,Teluk Jambe Timur 41361 ','contact'=>'087776146084 ','sub_bagian'=>'Verifikator MMEA ','tgl_lahir'=>'1900-01-01 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'25 ','np_user'=>'H114','foto'=>'default-avatar.png ','nama'=>'Dinda Anandita Faustina ','unit'=>'Verifikasi Pita Cukai  ','email'=>'d.anandita117@gmail.com ','alamat'=>'GG. Sirnaraga 2, Dusun Sukatani, Desa Pinayungan, Kec. Teluk Jambe Timur (Kosan Bpk. Dedi) ','contact'=>'081290696980 ','sub_bagian'=>'Verifikator MMEA ','tgl_lahir'=>'1999-11-17 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'26 ','np_user'=>'H119','foto'=>'default-avatar.png ','nama'=>'Yessi Dewi Nastiti ','unit'=>'Verifikasi Pita Cukai  ','email'=>'yessidewi23@gmail.com ','alamat'=>'Perum Puri Telukjambe Blok C20 No.12 ','contact'=>'085703070219 ','sub_bagian'=>'Verifikator MMEA ','tgl_lahir'=>'1996-05-23 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'27 ','np_user'=>'H120','foto'=>'default-avatar.png ','nama'=>'AGUSTIN EKI PRATIWI ','unit'=>'Verifikasi Pita Cukai  ','email'=>'agustineki21@gmail.com ','alamat'=>'Perumahan KGV Extension Blok A No.7 Telukjambe timur Kab.Karawang ','contact'=>'085741183959 ','sub_bagian'=>'Verifikator MMEA ','tgl_lahir'=>'1997-08-31 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'28 ','np_user'=>'H123','foto'=>'default-avatar.png ','nama'=>'Ade Muhammad Irfan Zidny ','unit'=>'Verifikasi Pita Cukai  ','email'=>'amzidny@gmail.com ','alamat'=>'Perumahan griya indah ','contact'=>'087776332208 ','sub_bagian'=>'Assist Kepala Meja ','tgl_lahir'=>'1999-09-30 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'29 ','np_user'=>'H130','foto'=>'default-avatar.png ','nama'=>'NUR APRILIANINGSIH ','unit'=>'Verifikasi Pita Cukai  ','email'=>'nurapriliani6@gmail.com ','alamat'=>'Perum Mahkota Regency, Blok L3 no 2, Sirnabaya, Teluk Jambe Timur, Karawang ','contact'=>'085601856101 ','sub_bagian'=>'Verifikator PCHT Non Personal ','tgl_lahir'=>'1997-04-01 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'30 ','np_user'=>'H186','foto'=>'default-avatar.png ','nama'=>'Indah Oktora Paramita ','unit'=>'Verifikasi Pita Cukai  ','email'=>'opeindah@gmail.com ','alamat'=>'Dusun krajan 1 Rt/Rw 009/003 Ds. Talagasari Kec. Telagasari Kab. Karawang 41381 ','contact'=>'081282229247 ','sub_bagian'=>'Verifikator PCHT Non Personal ','tgl_lahir'=>'1998-10-31 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'31 ','np_user'=>'H190','foto'=>'default-avatar.png ','nama'=>'Fifin Fitria Anggraeni ','unit'=>'Verifikasi Pita Cukai  ','email'=>' ','alamat'=>' ','contact'=>'082117376085 ','sub_bagian'=>'Verifikator MMEA ','tgl_lahir'=>'1900-01-01 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'32 ','np_user'=>'H191','foto'=>'default-avatar.png ','nama'=>'Dewi Nurhikmawati ','unit'=>'Verifikasi Pita Cukai  ','email'=>'dewi.nurhikmawati2807@gmail.com ','alamat'=>'Perum puri telukjambe blok b1 no51 ','contact'=>'081804840621 ','sub_bagian'=>'Verifikator MMEA ','tgl_lahir'=>'2000-04-07 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'33 ','np_user'=>'H192','foto'=>'default-avatar.png ','nama'=>'Lisa Herlina ','unit'=>'Verifikasi Pita Cukai  ','email'=>'lisaaherln@gmail.com ','alamat'=>'Dusun Sukawargi No.166 RT 007/003 ','contact'=>'087820757576 ','sub_bagian'=>'Verifikator PCHT Non Personal ','tgl_lahir'=>'1999-11-01 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'34 ','np_user'=>'H193','foto'=>'default-avatar.png ','nama'=>'Dinda Amelia ','unit'=>'Verifikasi Pita Cukai  ','email'=>'dindaamelia83@gmail.com ','alamat'=>'Rt/02 Rw/01 desa walahar kec. Klari, Karawang ','contact'=>'08871226173 ','sub_bagian'=>'Verifikator PCHT Non Personal ','tgl_lahir'=>'1998-12-12 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'35 ','np_user'=>'H194','foto'=>'default-avatar.png ','nama'=>'Lustanti Yuli Asih ','unit'=>'Verifikasi Pita Cukai  ','email'=>'lustantiyulia1234@gmail.com ','alamat'=>'Perumahan Puri Telukjambe Blok A9 no 19 ','contact'=>'083862315072 ','sub_bagian'=>'Verifikator PCHT Non Personal ','tgl_lahir'=>'2000-07-08 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'36 ','np_user'=>'H196','foto'=>'default-avatar.png ','nama'=>'Ine Febrianti ','unit'=>'Verifikasi Pita Cukai  ','email'=>'febriantiine1@gmail.com ','alamat'=>'Jl.Raya Peruri Perumahan Griya Indah blok C2 no 57A Karawang Jawa Barat ','contact'=>'085321795933 ','sub_bagian'=>'Verifikator PCHT Non Personal ','tgl_lahir'=>'2000-03-08 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'37 ','np_user'=>'H198','foto'=>'default-avatar.png ','nama'=>'Nisa Madani ','unit'=>'Verifikasi Pita Cukai  ','email'=>'nisamadani99@gmail.com ','alamat'=>'Puri Teluk Jambe Blok C 20 No.12  ','contact'=>'081381996133 ','sub_bagian'=>'Verifikator PCHT Non Personal ','tgl_lahir'=>'1900-01-01 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'38 ','np_user'=>'H199','foto'=>'default-avatar.png ','nama'=>'Delia Octriane ','unit'=>'Verifikasi Pita Cukai  ','email'=>'deliaoctriane12@gmail.com ','alamat'=>'Perum Puri Telukjambe blok A9 no 19 ','contact'=>'085920620791 ','sub_bagian'=>'Verifikator PCHT Non Personal ','tgl_lahir'=>'2000-10-12 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'39 ','np_user'=>'I402','foto'=>'default-avatar.png ','nama'=>'delia harun ','unit'=>'Verifikasi Pita Cukai  ','email'=>'deliaharun96@gmail.com ','alamat'=>'perum griya indah blok K2, ciampel, karawang ','contact'=>'085819088979 ','sub_bagian'=>'Verifikator PCHT Non Personal ','tgl_lahir'=>'1998-08-15 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'40 ','np_user'=>'I403','foto'=>'default-avatar.png ','nama'=>'Dian Oktaviani ','unit'=>'Verifikasi Pita Cukai  ','email'=>'dian.oktaviani051@gmail.com ','alamat'=>'Perum Griya Indah Blok M1 nomer 32 Parung Mulya, Ciampel, Karawang ','contact'=>'0895353065699 ','sub_bagian'=>'Verifikator PCHT Non Personal ','tgl_lahir'=>'2000-10-05 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'41 ','np_user'=>'I404','foto'=>'default-avatar.png ','nama'=>'DINA APRILIANTI ','unit'=>'Verifikasi Pita Cukai  ','email'=>'apriliantidina8@gmail.com ','alamat'=>'Perumahan Griya Indah Blok F4/08 RT17/RW05 Parungmulya, Ciampel, Karawang  ','contact'=>'081388314497 ','sub_bagian'=>'Verifikator PCHT Non Personal ','tgl_lahir'=>'1996-04-14 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'42 ','np_user'=>'I405','foto'=>'default-avatar.png ','nama'=>'Fitri Setyorini ','unit'=>'Verifikasi Pita Cukai  ','email'=>'fitrisetyorini18@gmail.com ','alamat'=>'Kos Gubug Mesem A2, No.17 Perum Griya Indah, Ciampel,Karawang ','contact'=>'081381046623 ','sub_bagian'=>'Verifikator PCHT Non Personal ','tgl_lahir'=>'1996-06-18 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'43 ','np_user'=>'I406','foto'=>'default-avatar.png ','nama'=>'Karlina Ibrahim  ','unit'=>'Verifikasi Pita Cukai  ','email'=>'Karlinaibrahim1604@gmail.com ','alamat'=>'Perum Griya Indah Blok A2 No 17 RT 10 RW 01 Desa Parungmulya Kec.Ciampel Kab. Karawang 41363 ','contact'=>'081255117738 ','sub_bagian'=>'Verifikator PCHT Non Personal ','tgl_lahir'=>'1997-04-16 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'44 ','np_user'=>'I407','foto'=>'default-avatar.png ','nama'=>'Khairunnisa Hikmayati ','unit'=>'Verifikasi Pita Cukai  ','email'=>'khikmayati@gmail.com ','alamat'=>'Jl Kalijaya Puseurjaya No.70 RT/RW 011/002 Desa Sukaluyu ','contact'=>'082210345527 ','sub_bagian'=>'Verifikator PCHT Non Personal ','tgl_lahir'=>'1999-01-03 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'45 ','np_user'=>'I409','foto'=>'default-avatar.png ','nama'=>'Mia Listiana ','unit'=>'Verifikasi Pita Cukai  ','email'=>'mialistiana29@gmail.com ','alamat'=>'Perum griya indah blok f4/08, RT/RW. 17/05 Ds. Parungmulya kec. Ciampel Karawang ','contact'=>'089650640731 ','sub_bagian'=>'Verifikator PCHT Non Personal ','tgl_lahir'=>'1996-09-29 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'46 ','np_user'=>'I418','foto'=>'default-avatar.png ','nama'=>'Adi Pamungkas ','unit'=>'Verifikasi Pita Cukai  ','email'=>'adipamungkas7515@gmail.com ','alamat'=>'Pinayungan Telukjambe timur ','contact'=>'088210913496 ','sub_bagian'=>'Verifikator PCHT Non Personal ','tgl_lahir'=>'1997-01-07 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'47 ','np_user'=>'I420','foto'=>'default-avatar.png ','nama'=>'Agus Aziz ','unit'=>'Verifikasi Pita Cukai  ','email'=>'Agusbungsubule@gmail.com ','alamat'=>'Blok rabu Rt 07 RW 03 DESA LEUWILAJA KECAMATAN SINDANGWANGI KABUPATEN MAJALENGKA ','contact'=>'089631394613 ','sub_bagian'=>'Assist Kepala Meja ','tgl_lahir'=>'1997-12-17 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'48 ','np_user'=>'I421','foto'=>'default-avatar.png ','nama'=>'Avrila Wiranti ','unit'=>'Verifikasi Pita Cukai  ','email'=>'avrilawiranti99@gmail.com ','alamat'=>'Sukaluyu, Teluk Jambe Timur ','contact'=>'085600150852 ','sub_bagian'=>'Verifikator PCHT Non Personal ','tgl_lahir'=>'1999-04-09 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'49 ','np_user'=>'I423','foto'=>'default-avatar.png ','nama'=>'Citra afrida sari ','unit'=>'Verifikasi Pita Cukai  ','email'=>'Citraafridasari1002@gmail.com ','alamat'=>'Perum griya indah blok L1 no 35 parung mulya, ciampel, karawang ','contact'=>'082244419238 ','sub_bagian'=>'Verifikator PCHT Non Personal ','tgl_lahir'=>'1998-02-10 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'50 ','np_user'=>'I424','foto'=>'default-avatar.png ','nama'=>'Daffa Pratama Putra ','unit'=>'Verifikasi Pita Cukai  ','email'=>'daffapratamaputra157@gmail.com ','alamat'=>'Jl.permata bunda 5, blok I12A no.41. Kotabaru, Karawang ','contact'=>'087781610010 ','sub_bagian'=>'Verifikator PCHT Non Personal ','tgl_lahir'=>'1999-09-18 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'51 ','np_user'=>'I425','foto'=>'default-avatar.png ','nama'=>'Dewi Pertiwi ','unit'=>'Verifikasi Pita Cukai  ','email'=>'dewiper26@gmail.com ','alamat'=>'Perum Karawang Baru blok A 11 no 15 ','contact'=>'085811347375 ','sub_bagian'=>'Verifikator PCHT Non Personal ','tgl_lahir'=>'1998-05-11 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'52 ','np_user'=>'I426','foto'=>'default-avatar.png ','nama'=>'Dini Andini ','unit'=>'Verifikasi Pita Cukai  ','email'=>' ','alamat'=>'Perum Griya Indah Gang Kostrad Blok I 1 NO.3 ','contact'=>'089624263667 ','sub_bagian'=>'Verifikator PCHT Non Personal ','tgl_lahir'=>'1900-01-01 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'53 ','np_user'=>'I428','foto'=>'default-avatar.png ','nama'=>'Gusti Arifiyanto ','unit'=>'Verifikasi Pita Cukai  ','email'=>'uti.arifiyanto@gmail.com ','alamat'=>'Perumahan KGV 2 ','contact'=>'087773311939 / 089618926881 ','sub_bagian'=>'Assist Kepala Meja ','tgl_lahir'=>'1997-08-06 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'54 ','np_user'=>'I429','foto'=>'default-avatar.png ','nama'=>'Haina Apriliani  ','unit'=>'Verifikasi Pita Cukai  ','email'=>'Hainaapriliani@gmail.com ','alamat'=>'Perum Bintang Alam blok N2/09 Rt40 Rw11 kec. Teluk Jambe Timur  ','contact'=>'081282430649 ','sub_bagian'=>'Verifikator PCHT Non Personal ','tgl_lahir'=>'1999-04-17 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'55 ','np_user'=>'I430','foto'=>'default-avatar.png ','nama'=>'Hermansyah ','unit'=>'Verifikasi Pita Cukai  ','email'=>'hermansyah5499@gmail.com ','alamat'=>'Perumahan kgv 2 ','contact'=>'085865966702 ','sub_bagian'=>'Verifikator PCHT Non Personal ','tgl_lahir'=>'1999-04-05 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'56 ','np_user'=>'I431','foto'=>'default-avatar.png ','nama'=>'Iis Kurnia ','unit'=>'Verifikasi Pita Cukai  ','email'=>'iiskurnia10@gmail.com ','alamat'=>'Dusun Pasirtalaga 1 Rt.03/01 Desa Pasirtalaga Kecamatan Telagasari Kab. Karawang 41381 ','contact'=>'085779249788 ','sub_bagian'=>'Verifikator PCHT Non Personal ','tgl_lahir'=>'1997-02-18 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'57 ','np_user'=>'I432','foto'=>'default-avatar.png ','nama'=>'Julpi Abdul  Muti  ','unit'=>'Verifikasi Pita Cukai  ','email'=>'Julpiabdulmuti8@gmail.com ','alamat'=>'Perum kgv2  ','contact'=>'085211213322 ','sub_bagian'=>'Assist Kepala Meja ','tgl_lahir'=>'1996-09-27 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'58 ','np_user'=>'I434','foto'=>'default-avatar.png ','nama'=>'Muhamad Rifki ','unit'=>'Verifikasi Pita Cukai  ','email'=>'rifkimuhamad752@gmail.com ','alamat'=>'Dusun Sukajaya 02 rt 015 rw 005 Kel. Pinayungan Kec. Telukjambe timur ','contact'=>'081384812460 ','sub_bagian'=>'Verifikator PCHT Non Personal ','tgl_lahir'=>'1996-06-02 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'59 ','np_user'=>'I437','foto'=>'default-avatar.png ','nama'=>'Nuraida Diah W ','unit'=>'Verifikasi Pita Cukai  ','email'=>'nuraidadiah@gmail.com ','alamat'=>' ','contact'=>'085770011531 ','sub_bagian'=>'Verifikator PCHT Non Personal ','tgl_lahir'=>'1900-01-01 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'60 ','np_user'=>'I440','foto'=>'default-avatar.png ','nama'=>'Siska Kusuma Wardani ','unit'=>'Verifikasi Pita Cukai  ','email'=>'siskakw2@gmail.com ','alamat'=>'Kp.Pebayuran 005/002 Kertasari Pebayuran Kab.Bekasi ','contact'=>'085717776401 ','sub_bagian'=>'Verifikator PCHT Non Personal ','tgl_lahir'=>'1999-05-24 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'61 ','np_user'=>'I441','foto'=>'default-avatar.png ','nama'=>'Sofia Nurrahayu ','unit'=>'Verifikasi Pita Cukai  ','email'=>'sofianurrahayu90@gmail.con ','alamat'=>'Dusun Sukadana Rt 03 Rw 01, No. 92 , Pinayungan , Telukjambe Timur ','contact'=>'081373871789 ','sub_bagian'=>'Verifikator PCHT Non Personal ','tgl_lahir'=>'1999-11-22 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'62 ','np_user'=>'I442','foto'=>'default-avatar.png ','nama'=>'Tri Banda Rahayu ','unit'=>'Verifikasi Pita Cukai  ','email'=>'trirahayu24799@gmail.com ','alamat'=>'Perumahan Griya Indah Ds. Parungmulya Kec. Ciampel Karawang Jawa Barat ','contact'=>'089634250484 ','sub_bagian'=>'Verifikator PCHT Non Personal ','tgl_lahir'=>'1999-07-24 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'63 ','np_user'=>'I443','foto'=>'default-avatar.png ','nama'=>'Windriyani ','unit'=>'Verifikasi Pita Cukai  ','email'=>'Windriyani08@gmail.com ','alamat'=>'Perumahan Pesona Kalangsuria Kalangsari blok M1 no 2 Rengasdengklok Karawang ','contact'=>'083863676726 ','sub_bagian'=>'Verifikator PCHT Non Personal ','tgl_lahir'=>'1996-06-08 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'64 ','np_user'=>'I444','foto'=>'default-avatar.png ','nama'=>'Zulfikar Hidayatullah ','unit'=>'Verifikasi Pita Cukai  ','email'=>'vikiryan0@gmail.com ','alamat'=>'Perumnas Bumi Teluk Jambe, Blok S.401, Kec Sukalauyu Teluk Jambe Timur Karawang ','contact'=>'081316461691 ','sub_bagian'=>'Konfirmasi Produk ','tgl_lahir'=>'1999-05-20 ','created_at'=>now(),'updated_at'=>now() ],
            ['id'=>'65 ','np_user'=>'admin','foto'=>'default-avatar.png ','nama'=>'Admin ','unit'=>'Verifikasi Pita Cukai  ','email'=>'admin','alamat'=>'Perumnas Bumi Teluk Jambe, Blok S.401, Kec Sukalauyu Teluk Jambe Timur Karawang ','contact'=>'081316461691 ','sub_bagian'=>'Konfirmasi Produk ','tgl_lahir'=>'1999-05-20 ','created_at'=>now(),'updated_at'=>now() ],
        ];

        foreach($profile as $prf){
            profile::create($prf);
        }
    }
}