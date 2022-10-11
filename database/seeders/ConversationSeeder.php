<?php

namespace Database\Seeders;

use App\Models\Conversation;
use App\Models\Message;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ConversationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Factory::create();

        Conversation::create([
            'name'=>'Development',
            'uuid'=>Str::uuid(),
            'user_id'=>2,
        ]);

        Conversation::create([
            'name'=>'Platform',
            'uuid'=>Str::uuid(),
            'user_id'=>2,
        ]);



        DB::table('conversation_user')->insert([
            'user_id'=>2,
            'conversation_id'=>1,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('conversation_user')->insert([
            'user_id'=>3,
            'conversation_id'=>1,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('conversation_user')->insert([
            'user_id'=>4,
            'conversation_id'=>1,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('conversation_user')->insert([
            'user_id'=>3,
            'conversation_id'=>2,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('conversation_user')->insert([
            'user_id'=>2,
            'conversation_id'=>2,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('conversation_user')->insert([
            'user_id'=>4,
            'conversation_id'=>2,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);


        for ($s = 1 ; $s <= 2; $s++){
            $conversation = Conversation::whereId($s)->with('users')->first();
            for ($ss = 1 ; $ss <= 15; $ss++){
                Message::create([
                    'conversation_id' =>$conversation->id,
                    'user_id' =>$conversation->users->random()->id,
                    'body' =>$faker->sentence,
                ]);

                Conversation::whereId($s)->update(['last_message_at'=>now()]);
            }
        }

    }
}
