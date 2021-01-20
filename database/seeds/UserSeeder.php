<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        //cabang alam sutera
        DB::table('users')->insert([
            'staffing_number' => '12345',
            'username' => 'budi',
            'fullname' => 'budi saputri',
            'email' => 'budi@gmail.com',
            'password' => bcrypt('password'),
            'phone_number' => '081223456789',
            'role' => 'admin',
            'branch_id' => 1,
            'status' => '1',
            'created_by' => 'budi saputri',
            'created_at' => '2020-12-30'
        ]);

        DB::table('users')->insert([
            'staffing_number' => '12345',
            'username' => 'susi',
            'fullname' => 'susi saputri',
            'email' => 'susi@gmail.com',
            'password' => bcrypt('password'),
            'phone_number' => '081223456788',
            'role' => 'resepsionis',
            'branch_id' => 1,
            'status' => '1',
            'created_by' => 'budi saputri',
            'created_at' => '2020-12-30'
        ]);

        DB::table('users')->insert([
            'staffing_number' => '12345',
            'username' => 'tono',
            'fullname' => 'tono saputri',
            'email' => 'tono@gmail.com',
            'password' => bcrypt('password'),
            'phone_number' => '081223456787',
            'role' => 'dokter',
            'branch_id' => 1,
            'status' => '1',
            'created_by' => 'budi saputri',
            'created_at' => '2020-12-30'
        ]);

        DB::table('users')->insert([
            'staffing_number' => '12345',
            'username' => 'tona',
            'fullname' => 'tona saputri',
            'email' => 'tona@gmail.com',
            'password' => bcrypt('password'),
            'phone_number' => '081223456888',
            'role' => 'dokter',
            'branch_id' => 1,
            'status' => '0',
            'created_by' => 'budi saputri',
            'created_at' => '2020-12-30'
        ]);

        //cabang kembangan
        DB::table('users')->insert([
            'staffing_number' => '12345',
            'username' => 'toto',
            'fullname' => 'toto saputri',
            'email' => 'toto@gmail.com',
            'password' => bcrypt('password'),
            'phone_number' => '081223456779',
            'role' => 'admin',
            'branch_id' => 2,
            'status' => '1',
            'created_by' => 'budi saputri',
            'created_at' => '2020-12-30'
        ]);

        DB::table('users')->insert([
            'staffing_number' => '12345',
            'username' => 'susan',
            'fullname' => 'susan saputri',
            'email' => 'susan@gmail.com',
            'password' => bcrypt('password'),
            'phone_number' => '081223456768',
            'role' => 'resepsionis',
            'branch_id' => 2,
            'status' => '1',
            'created_by' => 'budi saputri',
            'created_at' => '2020-12-30'
        ]);

        DB::table('users')->insert([
            'staffing_number' => '12345',
            'username' => 'deni',
            'fullname' => 'deni saputra',
            'email' => 'deni@gmail.com',
            'password' => bcrypt('password'),
            'phone_number' => '081223456757',
            'role' => 'dokter',
            'branch_id' => 2,
            'status' => '1',
            'created_by' => 'budi saputri',
            'created_at' => '2020-12-30'
        ]);

        DB::table('users')->insert([
            'staffing_number' => '12345',
            'username' => 'dena',
            'fullname' => 'dena saputra',
            'email' => 'dena@gmail.com',
            'password' => bcrypt('password'),
            'phone_number' => '081223456747',
            'role' => 'dokter',
            'branch_id' => 2,
            'status' => '0',
            'created_by' => 'budi saputri',
            'created_at' => '2020-12-30'
        ]);

        //cabang tanjung duren
        DB::table('users')->insert([
            'staffing_number' => '12345',
            'username' => 'tati',
            'fullname' => 'tati saputri',
            'email' => 'tati@gmail.com',
            'password' => bcrypt('password'),
            'phone_number' => '081223456749',
            'role' => 'admin',
            'branch_id' => 3,
            'status' => '1',
            'created_by' => 'budi saputri',
            'created_at' => '2020-12-30'
        ]);

        DB::table('users')->insert([
            'staffing_number' => '12345',
            'username' => 'sasa',
            'fullname' => 'sasa saputri',
            'email' => 'sasa@gmail.com',
            'password' => bcrypt('password'),
            'phone_number' => '081223456778',
            'role' => 'resepsionis',
            'branch_id' => 3,
            'status' => '1',
            'created_by' => 'budi saputri',
            'created_at' => '2020-12-30'
        ]);

        DB::table('users')->insert([
            'staffing_number' => '12345',
            'username' => 'desi',
            'fullname' => 'desi saputri',
            'email' => 'desi@gmail.com',
            'password' => bcrypt('password'),
            'phone_number' => '081223456777',
            'role' => 'dokter',
            'branch_id' => 3,
            'status' => '1',
            'created_by' => 'budi saputri',
            'created_at' => '2020-12-30'
        ]);

        DB::table('users')->insert([
            'staffing_number' => '12345',
            'username' => 'desna',
            'fullname' => 'desna saputri',
            'email' => 'desna@gmail.com',
            'password' => bcrypt('password'),
            'phone_number' => '081223456767',
            'role' => 'dokter',
            'branch_id' => 3,
            'status' => '0',
            'created_by' => 'budi saputri',
            'created_at' => '2020-12-30'
        ]);
        
        //pasien
        DB::table('patients')->insert([
            'branch_id' => 1,
            'id_member' => 'BVC-P-AS-0001',
            'pet_category' => 'kucing',
            'pet_name' => 'kuki',
            'pet_gender' => 'betina',
            'pet_year_age' => 2,
            'pet_month_age' => 10,
            'owner_name' => 'agus',
            'owner_address' => 'tangerang selatan',
            'owner_phone_number' => '081234560987',
            'user_id' => '1',
            'created_at' => '2020-12-30'
        ]);
        
        DB::table('patients')->insert([
            'branch_id' => 3,
            'id_member' => 'BVC-P-KM-0001',
            'pet_category' => 'anjing',
            'pet_name' => 'rambo',
            'pet_gender' => 'jantan',
            'pet_year_age' => 2,
            'pet_month_age' => 10,
            'owner_name' => 'tina',
            'owner_address' => 'lebak bulus',
            'owner_phone_number' => '081234560988',
            'user_id' => '1',
            'created_at' => '2020-12-30'
        ]);

        DB::table('patients')->insert([
            'branch_id' => 2,
            'id_member' => 'BVC-P-TJ-0001',
            'pet_category' => 'kucing',
            'pet_name' => 'tabi',
            'pet_gender' => 'tidak diketahui',
            'pet_year_age' => 2,
            'pet_month_age' => 10,
            'owner_name' => 'tono',
            'owner_address' => 'pondok indah',
            'owner_phone_number' => '081234560989',
            'user_id' => '1',
            'created_at' => '2020-12-30'
        ]);
    }
}