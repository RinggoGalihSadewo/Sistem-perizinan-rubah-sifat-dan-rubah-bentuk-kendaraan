<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //super admin
        $user = new User;
        $user->username = 'superadmin';
        $user->password = bcrypt('superadmin');
        $user->role = "superadmin";
        $user->nama_perusahaan = "-";
        $user->nama_pemilik = "-";
        $user->kabupaten = "-";
        $user->npwp = "-";
        $user->alamat = "-";
        $user->email = '-';
        $user->no_hp = "-";
        $user->foto_profile = "-";
        $user->save();

        // Rubah Sifat
        // Admin
        $user = new User;
        $user->username = 'rs-admin';
        $user->password = bcrypt('rs-admin');
        $user->role = "rs-admin";
        $user->nama_perusahaan = "-";
        $user->nama_pemilik = "-";
        $user->kabupaten = "-";
        $user->npwp = "-";
        $user->alamat = "-";
        $user->email = '-';
        $user->no_hp = "-";
        $user->foto_profile = "-";
        $user->save();
        
        // Staff angkutan
        $user = new User;
        $user->username = 'rs-staff';
        $user->password = bcrypt('rs-staff');
        $user->role = "rs-staff";
        $user->nama_perusahaan = "-";
        $user->nama_pemilik = "-";
        $user->kabupaten = "-";
        $user->npwp = "-";
        $user->alamat = "-";
        $user->email = '-';
        $user->no_hp = "-";
        $user->foto_profile = "-";
        $user->save();

        // Kasi
        $user = new User;
        $user->username = 'rs-kasi';
        $user->password = bcrypt('rs-kasi');
        $user->role = "rs-kasi";
        $user->nama_perusahaan = "-";
        $user->nama_pemilik = "-";
        $user->kabupaten = "-";
        $user->npwp = "-";
        $user->alamat = "-";
        $user->email = '-';
        $user->no_hp = "-";
        $user->foto_profile = "-";
        $user->save();

        // Kabid
        $user = new User;
        $user->username = 'rs-kabid';
        $user->password = bcrypt('rs-kabid');
        $user->role = "rs-kabid";
        $user->nama_perusahaan = "-";
        $user->nama_pemilik = "-";
        $user->kabupaten = "-";
        $user->npwp = "-";
        $user->alamat = "-";
        $user->email = '-';
        $user->no_hp = "-";
        $user->foto_profile = "-";
        $user->save();

        // Sekretaris
        $user = new User;
        $user->username = 'sekretaris';
        $user->password = bcrypt('sekretaris');
        $user->role = "sekretaris";
        $user->nama_perusahaan = "-";
        $user->nama_pemilik = "-";
        $user->kabupaten = "-";
        $user->npwp = "-";
        $user->alamat = "-";
        $user->email = '-';
        $user->no_hp = "-";
        $user->foto_profile = "-";
        $user->save();

        // Kepala Dinas
        $user = new User;
        $user->username = 'kepala-dinas';
        $user->password = bcrypt('kepala-dinas');
        $user->role = "kepala-dinas";
        $user->nama_perusahaan = "-";
        $user->nama_pemilik = "-";
        $user->kabupaten = "-";
        $user->npwp = "-";
        $user->alamat = "-";
        $user->email = '-';
        $user->no_hp = "-";
        $user->foto_profile = "-";
        $user->save();


        // Rubah Bentuk
        // Admin
        $user = new User;
        $user->username = 'rb-admin';
        $user->password = bcrypt('rb-admin');
        $user->role = "rb-admin";
        $user->nama_perusahaan = "-";
        $user->nama_pemilik = "-";
        $user->kabupaten = "-";
        $user->npwp = "-";
        $user->alamat = "-";
        $user->email = '-';
        $user->no_hp = "-";
        $user->foto_profile = "-";
        $user->save();

        // Kasi
        $user = new User;
        $user->username = 'rb-kasi';
        $user->password = bcrypt('rb-kasi');
        $user->role = "rb-kasi";
        $user->nama_perusahaan = "-";
        $user->nama_pemilik = "-";
        $user->kabupaten = "-";
        $user->npwp = "-";
        $user->alamat = "-";
        $user->email = '-';
        $user->no_hp = "-";
        $user->foto_profile = "-";
        $user->save();
        
        // Kabid
        $user = new User;
        $user->username = 'rb-kabid';
        $user->password = bcrypt('rb-kabid');
        $user->role = "rb-kabid";
        $user->nama_perusahaan = "-";
        $user->nama_pemilik = "-";
        $user->kabupaten = "-";
        $user->npwp = "-";
        $user->alamat = "-";
        $user->email = '-';
        $user->no_hp = "-";
        $user->foto_profile = "-";
        $user->save();  
        
        // // Pengguna
        // $user = new User;
        // $user->username = 'test';
        // $user->password = bcrypt('test');
        // $user->role = "Pengguna";
        // $user->nama_perusahaan = "PT. OKE";
        // $user->nama_pemilik = "";
        // $user->kabupaten = "-";
        // $user->npwp = "-";
        // $user->alamat = "-";
        // $user->email = '-';
        // $user->no_hp = "-";
        // $user->foto_profile = "default.png";
        // $user->map->user_id = 11;
        // $user->map->lat = "-5.450000";
        // $user->map->lng = "105.266670";
        // $user->saveMany();

    }
}
