<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        user::create([
            'name' => 'Silviani Vanesha',
            'username' => 'silviani',
            'email' => 'silviani.vanesha@ti.ukdw.ac.id',
            'password' => bcrypt('password')
        ]);

        // user::create([
        //     'name' => 'Budi Setiadi',
        //     'email' => 'budiantoi@gmail.com',
        //     'password' => bcrypt('54321')
        // ]);

        user::factory(3)->create();
        
        category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        category::create([
            'name' => 'Web Design',
            'slug' => 'web-Design'
        ]);

        category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        post::factory(20)->create();

        // post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos unde cum quos vel eius iure labore est saepe? Expedita quidem asperiores illum repellat, sit sequi eos natus iste architecto similique fugit molestias quo?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos unde cum quos vel eius iure labore est saepe? Expedita quidem asperiores illum repellat, sit sequi eos natus iste architecto similique fugit molestias quo? Sapiente mollitia quaerat fuga ratione expedita optio adipisci dignissimos cum non necessitatibus laboriosam sequi voluptatum minus tenetur architecto quasi esse perferendis explicabo, officia ullam asperiores tempora accusantium.</p><p>Non minima reiciendis optio quaerat. Porro magnam minima ad expedita eligendi totam libero repellat eum. Quasi provident illum temporibus eum accusantium at corporis exercitationem voluptas consequatur minima pariatur veniam obcaecati non, explicabo unde vero quas doloribus eaque nam? Ad omnis sunt, neque, dignissimos, voluptas optio commodi quo voluptates rem magni fugiat molestiae odit dolore fugit aut iure excepturi.</p><p>Dignissimos nostrum magnam, itaque rerum veniam necessitatibus quos sed ad quod. Accusamus eligendi harum officiis at provident, odio, dicta eum nam voluptas suscipit repellat dolores et repellendus iusto deleniti aliquam? Nesciunt minima autem officia voluptatum eius distinctio?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos unde cum quos vel eius iure labore est saepe? Expedita quidem asperiores illum repellat, sit sequi eos natus iste architecto similique fugit molestias quo?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos unde cum quos vel eius iure labore est saepe? Expedita quidem asperiores illum repellat, sit sequi eos natus iste architecto similique fugit molestias quo? Sapiente mollitia quaerat fuga ratione expedita optio adipisci dignissimos cum non necessitatibus laboriosam sequi voluptatum minus tenetur architecto quasi esse perferendis explicabo, officia ullam asperiores tempora accusantium.</p><p>Non minima reiciendis optio quaerat. Porro magnam minima ad expedita eligendi totam libero repellat eum. Quasi provident illum temporibus eum accusantium at corporis exercitationem voluptas consequatur minima pariatur veniam obcaecati non, explicabo unde vero quas doloribus eaque nam? Ad omnis sunt, neque, dignissimos, voluptas optio commodi quo voluptates rem magni fugiat molestiae odit dolore fugit aut iure excepturi.</p><p>Dignissimos nostrum magnam, itaque rerum veniam necessitatibus quos sed ad quod. Accusamus eligendi harum officiis at provident, odio, dicta eum nam voluptas suscipit repellat dolores et repellendus iusto deleniti aliquam? Nesciunt minima autem officia voluptatum eius distinctio?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos unde cum quos vel eius iure labore est saepe? Expedita quidem asperiores illum repellat, sit sequi eos natus iste architecto similique fugit molestias quo?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos unde cum quos vel eius iure labore est saepe? Expedita quidem asperiores illum repellat, sit sequi eos natus iste architecto similique fugit molestias quo? Sapiente mollitia quaerat fuga ratione expedita optio adipisci dignissimos cum non necessitatibus laboriosam sequi voluptatum minus tenetur architecto quasi esse perferendis explicabo, officia ullam asperiores tempora accusantium.</p><p>Non minima reiciendis optio quaerat. Porro magnam minima ad expedita eligendi totam libero repellat eum. Quasi provident illum temporibus eum accusantium at corporis exercitationem voluptas consequatur minima pariatur veniam obcaecati non, explicabo unde vero quas doloribus eaque nam? Ad omnis sunt, neque, dignissimos, voluptas optio commodi quo voluptates rem magni fugiat molestiae odit dolore fugit aut iure excepturi.</p><p>Dignissimos nostrum magnam, itaque rerum veniam necessitatibus quos sed ad quod. Accusamus eligendi harum officiis at provident, odio, dicta eum nam voluptas suscipit repellat dolores et repellendus iusto deleniti aliquam? Nesciunt minima autem officia voluptatum eius distinctio?</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos unde cum quos vel eius iure labore est saepe? Expedita quidem asperiores illum repellat, sit sequi eos natus iste architecto similique fugit molestias quo?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos unde cum quos vel eius iure labore est saepe? Expedita quidem asperiores illum repellat, sit sequi eos natus iste architecto similique fugit molestias quo? Sapiente mollitia quaerat fuga ratione expedita optio adipisci dignissimos cum non necessitatibus laboriosam sequi voluptatum minus tenetur architecto quasi esse perferendis explicabo, officia ullam asperiores tempora accusantium.</p><p>Non minima reiciendis optio quaerat. Porro magnam minima ad expedita eligendi totam libero repellat eum. Quasi provident illum temporibus eum accusantium at corporis exercitationem voluptas consequatur minima pariatur veniam obcaecati non, explicabo unde vero quas doloribus eaque nam? Ad omnis sunt, neque, dignissimos, voluptas optio commodi quo voluptates rem magni fugiat molestiae odit dolore fugit aut iure excepturi.</p><p>Dignissimos nostrum magnam, itaque rerum veniam necessitatibus quos sed ad quod. Accusamus eligendi harum officiis at provident, odio, dicta eum nam voluptas suscipit repellat dolores et repellendus iusto deleniti aliquam? Nesciunt minima autem officia voluptatum eius distinctio?</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}