<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Game::insert([
            [
                'gameName'=> 'Counter Strike',
                'category_id'=>2,
                'price' =>10000,
                'gameThumbnail' => 'game1.jpg',
                'description' => 'Counter-Strike: Global Offensive (CS: GO) expands upon the team-based action gameplay that it pioneered when it was launched 19 years ago. CS: GO features new maps, characters, weapons, and game modes, and delivers updated versions of the classic CS content (de_dust2, etc.).',
                'created_at' => now(),
                'updated_at' => now()            ],
            [
                'gameName'=> 'Apex Legends',
                'category_id'=>2,
                'price' =>0,
                'gameThumbnail' => 'game2.jpg',
                'description' => 'Apex Legends is the award-winning, free-to-play Hero Shooter from Respawn Entertainment. Master an ever-growing roster of legendary characters with powerful abilities, and experience strategic squad play and innovative gameplay in the next evolution of Hero Shooter and Battle Royale.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'gameName'=> 'FIFA 22',
                'category_id'=>4,
                'price' =>10000,
                'gameThumbnail' => 'game3.jpg',
                'description' => 'Powered by Football™, EA SPORTS™ FIFA 22 brings the game even closer to the real thing with fundamental gameplay advances and a new season of innovation across every mode.',
                'created_at' => now(),
                'updated_at' => now()            ],
            [
                'gameName'=> 'DOTA 2',
                'category_id'=>2,
                'price' =>10000,
                'gameThumbnail' => 'game4.jpg',
                'description' => 'Every day, millions of players worldwide enter battle as one of over a hundred Dota heroes. And no matter if it\'s their 10th hour of play or 1,000th, there\'s always something new to discover. With regular updates that ensure a constant evolution of gameplay, features, and heroes, Dota 2 has taken on a life of its own.',
                'created_at' => now(),
                'updated_at' => now()            ],
            [
                'gameName'=> 'PUBG: Battlegrounds',
                'category_id'=>2,
                'price' =>15371,
                'gameThumbnail' => 'game5.jpg',
                'description' => 'Play PUBG: BATTLEGROUNDS for free. Land on strategic locations, loot weapons and supplies, and survive to become the last team standing across various, diverse Battlegrounds. Squad up and join the Battlegrounds for the original Battle Royale experience that only PUBG: BATTLEGROUNDS can offer.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'gameName'=> 'Stardew Valley',
                'category_id'=>5,
                'price' =>0,
                'gameThumbnail' => 'game6.jpg',
                'description' => 'You\'ve inherited your grandfather\'s old farm plot in Stardew Valley. Armed with hand-me-down tools and a few coins, you set out to begin your new life. Can you learn to live off the land and turn these overgrown fields into a thriving home?',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'gameName'=> 'Grand Theft Auto V',
                'category_id'=>1,
                'price' =>14500,
                'gameThumbnail' => 'game7.jpg',
                'description' => 'Grand Theft Auto V for PC offers players the option to explore the award-winning world of Los Santos and Blaine County in resolutions of up to 4k and beyond, as well as the chance to experience the game running at 60 frames per second.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'gameName'=> 'Monster Hunter Rise',
                'category_id'=>5,
                'price' =>7501,
                'gameThumbnail' => 'game8.jpg',
                'description' => 'Rise to the challenge and join the hunt! In Monster Hunter Rise, the latest installment in the award-winning and top-selling Monster Hunter series, you’ll become a hunter, explore brand new maps and use a variety of weapons to take down fearsome monsters as part of an all-new storyline.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'gameName'=> 'Destiny 2',
                'category_id'=>5,
                'price' =>8901,
                'gameThumbnail' => 'game9.jpg',
                'description' => 'Destiny 2 is an action MMO with a single evolving world that you and your friends can join anytime, anywhere, absolutely free.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'gameName'=> 'Rust',
                'category_id'=>2,
                'price' =>7561,
                'gameThumbnail' => 'game10.jpg',
                'description' => 'The only aim in Rust is to survive. Everything wants you to die - the island’s wildlife and other inhabitants, the environment, other survivors. Do whatever it takes to last another night.',
                'created_at' => Carbon::now(),
                'updated_at' => now()
            ],
        ]);
    }
}
