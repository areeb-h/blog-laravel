<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::truncate();
        Category::truncate();
        Post::truncate();

        /*($this->call([
            UserSeeder::class,
            PostSeeder::class,
            CategorySeeder::class,
            CommentSeeder::class,
        ]);*/

        $user = User::factory()->create([
            'username'=>'john-doe',
            'name' => 'John Doe'
        ]);

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family',
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work',
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'slug' => 'family_post',
            'title' => 'Family Post',
            'excerpt' => 'Nullam mattis nulla nec dapibus blandit. Donec eleifend congue...',
            'body' => 'Nullam mattis nulla nec dapibus blandit. Donec eleifend congue magna, nec tincidunt ex lobortis in. Mauris porttitor sapien ac nunc facilisis, quis pretium velit consequat. Morbi varius ut mauris quis laoreet. Vivamus blandit tellus ut lorem pellentesque varius. Sed mattis, metus ornare tristique lacinia, metus eros porttitor elit, sed bibendum nunc nisi eu odio. Nulla non finibus felis. Mauris purus velit, tempus nec magna ac, elementum molestie lacus. Duis tincidunt enim in nibh mollis imperdiet non quis est. Phasellus non velit orci. Donec dolor purus, interdum id nunc quis, auctor vulputate odio. Ut ut lectus at mi dignissim varius.',
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'slug' => 'personal_post',
            'title' => 'Personal Post',
            'excerpt' => 'Lorem ipsum dolor vel, consectetur adipiscing elit. Ut magna...',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut euismod magna nec porta interdum. Vivamus eleifend augue a turpis gravida fermentum. Nam vitae est molestie, scelerisque dolor id, volutpat ipsum. Donec accumsan vitae arcu sed porta. Nullam in tincidunt nisi, vitae rutrum quam. Phasellus ultrices pretium mi. Suspendisse libero risus, sollicitudin ut tortor ut, auctor lacinia ipsum. Suspendisse potenti. Nunc dignissim mi nibh, in varius quam condimentum a. Morbi et tincidunt nisi. Vivamus ac ultrices eros. Aenean sed leo nisl. Phasellus ut imperdiet nisl. Fusce non hendrerit tellus. Ut tincidunt id elit at semper.',
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'slug' => 'work_post',
            'title' => 'Work Post',
            'excerpt' => 'Donec ide velit pellentesque, malesuada sapien nec vel quam...',
            'body' => 'Donec id velit pellentesque, malesuada sapien nec, pellentesque risus. Pellentesque rhoncus felis et nunc facilisis, ac mattis dolor pretium. Suspendisse vehicula nunc ut euismod mollis. Cras dapibus nunc arcu, vitae vulputate lacus fermentum sed. Ut porta, mi nec scelerisque facilisis, turpis arcu gravida urna, id interdum massa ante ac elit. Praesent felis elit, maximus a enim non, efficitur sollicitudin ligula. Praesent felis turpis, fermentum non tortor non, ullamcorper cursus augue. Aliquam id tincidunt dui. Fusce tempor vel lacus non vestibulum. Sed ipsum dolor, lacinia sit amet orci ac, efficitur porta ipsum. Vivamus vitae odio egestas, accumsan lectus et, consectetur massa. Maecenas dictum sed augue in tempor. Duis euismod lectus eu nisl commodo, nec scelerisque leo vestibulum. Etiam ornare magna tellus, non elementum neque eleifend a. Curabitur non ex sed sem sodales efficitur ac egestas velit. Nulla id orci at mauris lacinia euismod.',
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'slug' => 'work_post_2',
            'title' => 'Work Post 2',
            'excerpt' => 'Nunc sagittis vel quam ornare fringilla. Aenean turpis nibh...',
            'body' => 'Nunc sagittis vel quam ornare fringilla. Aenean turpis nibh, sodales eget odio ac, suscipit lobortis enim. Praesent aliquet, quam vitae congue condimentum, mauris lorem feugiat neque, quis accumsan tellus mi vel nibh. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nulla a libero in odio tempor pulvinar at consectetur dolor. Curabitur luctus placerat massa, sit amet eleifend mi malesuada quis. Donec dignissim egestas ante at molestie. Nam sit amet quam sit amet enim convallis ullamcorper a sit amet ex. Quisque at urna et mi convallis scelerisque non et neque. Donec dapibus dictum quam eget iaculis.',
        ]);

        // DB::table('posts')->insert($samplePosts);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
