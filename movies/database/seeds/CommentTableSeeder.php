<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            ["movie_id"=>1,"user_id"=>1,"reply_to"=>0,"status"=>1,"body"=>"I had the honor of watching TDK during a screening and was completely blown away! This isn't just the best Batman movie ever made, this is one of the best movie ever made. Everything in this film is excellent, not one piece of annoyance.

            Bale marvels as Bruce Wayne/Batman, Ledger has made The Joker in to an iconic movie villain. His performance belongs there at the top with Hopkins Lecter. The Joker has finally been portrait properly on film, he has earned his place between the big boys in movie villandom. This is the true Joker every Batman fan knows, loves and fears. Ledger deserves any and every movie award known to man for this brilliant display.
            
            Nolan has made his \"I will always be remembered\" movie, this is the crownjewel in his portfolio. Perfect directing, perfect story, perfect balance between action and drama, everything is perfect. 
            
            Even if you hate Batman, you will love this film. If you don't, then something beez wrongz with youz!",'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ["movie_id"=>2,"user_id"=>1,"reply_to"=>0,"status"=>1,"body"=>"10* - sober Overexcitedly I enter the cinema this movie must probably cost a billion by the sheer amount of superstars and effects (#mostExpensiveMovieAndbiggestGlobalOpeningOfAlltimes)
            I will match the cost by getting a 3D ticket & 4 beers.
            
            9* - first beer I wonder why they still have such clumsy characters like Thanos who look like cheap rubber masks of the last millenium. I will tolerate his woodcarving-beard and club-fingers as a badly shide-show.
            
            8* - second beer Great to see so many characters - the only problem is that they only get shown for a few seconds so I can't really get into them - not to mention that there is only time for short spurts of their action. Well, but the FX are great (but the content does not really match the form).
            
            7* - third beer Yeah, the action unfortunately is not connected - somehow there is no real threat. Made me think of the difference of a story and a plot: Every movie has a story, but how it is arranged is a plot, and this here seems to be a patchwork.
            
            6* - fourth beer I don't know what Marvels' definition of superhero is - mine has something to do with inner spiritual strength, for the masses it seems to be a mix between massive powers and jokes. Ok, so be it - to take it lightly I bought the beers. 
            
            5* - pee break and getting tacos & two more beers By that point I have a feeling that the movie will go on for much longer and that I won't miss anything. Hence my break and more compensatory consumption.
            
            4* - tacos Didn't have the feeling that I missed much in that patchwork of uncorrelated flashes and sounds. 
            
            5* - fifth beer Maybe I did miss something, because the plot seems to go in a direction which isn't as light-footed as I did expect from guardians of the galaxy.
            
            4* - sixth beer No, I missed nothing, just another cliché woven into the fabrics of a commercial hollywood-movie-recipy. 
            
            3* - end I feel spiritually empty by the \"pixellation\" of the characters - quickly pee it of before the post credits come in which I now put all my hopes. 2* - post credit scene More pixellation - more emptiness. I now spend a fortune on an event which did disappoint me. I am sure it was me and I had a bad day. (although the Hulk really didn't convince me)
            
            1* - next day After having watched a few \"ending explained\" it was not me who missed something, but this was all but a huge cliffhanger for the next one to come.
            
            Verdict - to avoid depression of your soul and your wallet, you the \"late-commers\" who don't HAVE to watch it in a hype: Wait a year for the next one to come out and then watch this one with friends just before going to the cinema to the next one. Maybe - just maybe all the disappointments will then make sense as temporary downs needed for a larger storyline.
            
            But if they do - somehow I get tired of everything in fantasy series and movies these days gets twisted whenever viewers disapprovals demands it. It's taken on the attitude of a sulky child which when loosing simply rewrites the rules of the game.",'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ["movie_id"=>3,"user_id"=>1,"reply_to"=>0,"status"=>1,"body"=>"One of my all time favorites. Shawshank Redemption is a very moving story about hope and the power of friendship. The cast is first rate with everyone giving a great performance. Tim Robbins and Morgan Freeman carry the movie, but Bob Gunton and Clancy Brown are perfect as the Warden Norton and prison guard captain Hadley respectively. And James Whitmore's portrail of an elderly inmate Brooks is moving. The screenplay gives almost every actor at least one or more memorable lines through out the film. As well as a very surprising \"twist\" near the end that almost knocked me out of my chair. If you have not seen this movie rent it or better yet buy it. As I bet you'll want to see this one more than once.",'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]
        ]);
    }
}
