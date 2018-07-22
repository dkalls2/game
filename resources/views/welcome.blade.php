@extends('layouts.app')

@section('styles')
    <link href="{{ asset('/css/welcome.css') }}" rel="stylesheet">
@endsection

@section('header')

<div class="container hero-box">
    <h1><b>GameAthlon</b>: a custom, multi-game competition</h1>
    <h3><b>Use our free management tools to organize your own GameAthlons and tournaments<b></h3>
    <div class="columns ">
        <div class="column">
            <h2>Create <br>Tournament Brackets</h2>
            <a href="" class="button is-primary is-fullwidth">Bracket Generator</a>
        </div>
        <div class="column">
            <h2>Manage <br>GameAthlons</h2>
            <a href="" class="button is-primary is-fullwidth">New GameAthlon</a>
            <a href="" class="button is-primary is-fullwidth m-t-10">Search GameAthlons</a>
        </div>
        <div class="column">
            <h2>Find <br>Games</h2>
            <a href="" class="button is-primary is-fullwidth">Game Generator</a>
        </div>
    </div>
</div>

@endsection


@section('content')


<section class="section-how">
        <div class="container">
            <h4>HOW IT WORKS</h4> 
            <p class="long-copy">
                A GameAthlon is a custom, multi-event tournament where each player competes in a variety of games.  Often these games will require different skills in order to make the GameAthlon more appealing and more competitive to a variety of different people. Points are assigned to players after each game based on how well they did for that game. The player with the most points after all of the events wins. 
            </p><br>
            <p class="long-copy">
                With the Motley Games management tools, setting up a GameAthlon is easy.  Simply enter basic GameAthlon info, add players, and select games.  You are now ready to play games in any order, enter scores in real time, and view stats for all of the games.  Advanced customization options are also available.
            </p>
        </div>
    
        <div class="container">
            <div class="columns why-columns">
                <div class="column">
                    <i class="fa fa-play-circle icon-big"></i>
                    <h5>Enter GameAthlon Info</h5>
                </div>
                <div class="column">
                    <i class="fa fa-play-circle icon-big"></i>
                    <h5>Play Games</h5>
                </div>
                <div class="column">
                    <i class="fa fa-play-circle icon-big"></i>
                    <h5>Enter Scores</h5>
                </div>
                <div class="column">
                    <i class="fa fa-play-circle icon-big"></i>
                    <h5>View Stats</h5>
                </div>
            </div>
        </div>  
    </section>


<section class="section-features">
    <div class="container">
        <h4>Highlighted Features</h4> 
    </div>

    <div class="column is-half is-offset-one-quarter">
        <table class="table">
            <tbody>
                <tr>
                    <th><span class="icon"><i class="fa fa-fw fa-play-circle icon-small"></i></span></th>
                    <td>No sign up required to create tournament brackets or to run GameAthlons</td>
                </tr>
                <tr>
                    <th><span class="icon"><i class="fa fa-fw fa-play-circle icon-small"></i></span></th>
                    <td>Supports all major tournament types (Single Elimination, Double Elimination, Round Robin)</td>
                </tr>
                <tr>
                    <th><span class="icon"><i class="fa fa-fw fa-play-circle icon-small"></i></span></th>
                    <td>Calculates estimated time remaining in the GameAthlon</td>
                </tr>
                <tr>
                    <th><span class="icon"><i class="fa fa-fw fa-play-circle icon-small"></i></span></th>
                    <td>Supports any type of competitive game, including non-tournament style games such as highest score wins, fastest time wins, elimination, longest distance, etc.</td>
                </tr>
                <tr>
                    <th><span class="icon"><i class="fa fa-fw fa-play-circle icon-small"></i></span></th>
                    <td>Hundreds of games that can be sorted by age, number of players, reviews, skillsets, and other categories</td>
                </tr>
            </tbody>
        </table>
    </div>     
</section>

<section class="section-why">
    <div class="container">
        <h4>Why GameAthlons?</h4> 
    </div>

    <div class="container">
        <div class="columns why-columns">
            <div class="column">
                <i class="fa fa-play-circle icon-big"></i>
                <h5>Bringing People Together</h5>
                <p>
                    It seems that people are becoming more and more isolated in today’s world.  GameAthlons offer a venue for people to come together to experience genuine human interactions.
                </p>
            </div>
            <div class="column">
                <i class="fa fa-play-circle icon-big"></i>
                <h5>Team Building</h5>
                <p>
                    Since everyone plays with everyone else in the group, GameAthlons are a great way to get to know your fellow team mates and competitors.   Trust is established through play and playing together is a great way to build lasting friendships.  
                </p>
            </div>
            <div class="column">
                <i class="fa fa-play-circle icon-big"></i>
                <h5>Fun for Everyone</h5>
                <p>
                    Everyone is engaged during the entire GameAthlon and no one is left out. GameAthlons can be designed to accommodate anyone’s skill set and interests.  People who are both the jack of all trades or who specialize in certain games can compete on the same level.
                </p>
            </div>
            <div class="column">
                <i class="fa fa-play-circle icon-big"></i>
                <h5>Purposeful Play</h5>
                <p>
                    GameAthlons inherently encourage people to “give it their all” during the entire competition. Points are assigned for each game and the better you do in a game, the more points you earn.
                </p>
            </div>

        </div>
    </div>  

    <div class="container">
        <div class="column is-2 is-offset-5">
            <blockquote>
                <br>    
                You can discover more about a person in an hour of play than in a year of conversation.
                <cite><img src="/images/plato.jpg" alt="Photo of Plato"> - Plato</cite>
            </blockquote>
        </div>
    </div>
</section>

<section class="section-skills">
    <ul class="skills-showcase clearfix">
        <li>
            <figure class="skill-photo">
                <img src="images/1.jpg" alt="Korean bibimbap with egg and vegetables">
                <div class="centered">General Knowledge</div>
            </figure>
        </li>
        <li>
            <figure class="skill-photo">
                <img src="images/2.jpg" alt="Simple italian pizza with cherry tomatoes">
                <div class="centered">Physical Strength</div>
            </figure>
        </li>
        <li>
            <figure class="skill-photo">
                <img src="images/3.jpg" alt="Chicken breast steak with vegetables">
                <div class="centered">Creativity</div>
            </figure>
        </li>
        <li>
            <figure class="skill-photo">
                <img src="images/4.jpg" alt="Autumn pumpkin soup">
                <div class="centered">Balance</div>
            </figure>
        </li>
        <li>
            <figure class="skill-photo">
                <img src="images/1.jpg" alt="Autumn pumpkin soup">
                <div class="centered">Mental Speed</div>
            </figure>
        </li>
    </ul>
    <ul class="skills-showcase clearfix">
        <li>
            <figure class="skill-photo">
                <img src="images/5.jpg" alt="Paleo beef steak with vegetables">
                <div class="centered">Strategic Thinking</div>
            </figure>
        </li>
        <li>
            <figure class="skill-photo">
                <img src="images/6.jpg" alt="Healthy baguette with egg and vegetables">
                <div class="centered">Physical Speed</div>
            </figure>
        </li>
        <li>
            <figure class="skill-photo">
                <img src="images/7.jpg" alt="Burger with cheddar and bacon">
                <div class="centered">Memory</div>
            </figure>
        </li>
        <li>
            <figure class="skill-photo">
                <img src="images/8.jpg" alt="Granola with cherries and strawberries">
                <div class="centered">Hand-Eye Coordination</div>
            </figure>
        </li>
        <li>
            <figure class="skill-photo">
                <img src="images/5.jpg" alt="Granola with cherries and strawberries">
                <div class="centered">Deception</div>
            </figure>
        </li>
    </ul>
</section>


<section class="section-play">
    <div class="container">
        <h4>Play is essential to well-being</h4> 

        <h6>Play and competition</h6>
        <p class="long-copy">
            Competitive play encourages people to perform at higher levels.  There is this idea out there that kids should not play competitive games and that kids should only play cooperative games.  The problem with this idea is that competitive games are by nature cooperative: everyone comes to play the same game, everyone mutually defines the aim of the game, everyone is assigned roles for the game, everyone agrees to stick to the rules, and everyone agrees to be penalized for breaking the rules.  Everyone is trying to improve their skills simultaneously and everyone is trying to be a good player so they can play many games.  All this is cooperation.<sup>1</sup> 
        </p><br>
      
        <h6>Play &mdash; not just for kids</h6>
        <p class="long-copy">
            Humans are designed to play through their whole lifetime.  In fact, there is a word called neotony, which means the retention of play and juvenile traits in adults. Physical anthropologists have concluded that humans are the most neotenous of all creatures.<sup>2</sup>          
        </p><br>

        <h6>Benefits of play</h6>
        <p class="long-copy">
            Scientific studies have shown that play:
        </p>
        <ul class="benefits">
            <li>&nbsp;</li>
            <li><i class="fa fa-fw fa-play-circle icon-small"></i>stimulates creativity</li>
            <li><i class="fa fa-fw fa-play-circle icon-small"></i>increases our openness to change</li>
            <li><i class="fa fa-fw fa-play-circle icon-small"></i>improves our ability to learn</li>
            <li><i class="fa fa-fw fa-play-circle icon-small"></i>provides a sense of purpose and mastery - two key motivators to increase productivity</li>
            <li><i class="fa fa-fw fa-play-circle icon-small"></i>increases our ability to solve problems</li>
            <li><i class="fa fa-fw fa-play-circle icon-small"></i>supports the development of emotional maturity</li>
            <li><i class="fa fa-fw fa-play-circle icon-small"></i>improves our ability to make decisions<sup>2</sup></li>
        </ul><br>

        <h6>Play is universal</h6>
        <p class="long-copy">
            Play is a process of nature that is within all of us.  Jaak Panksepp discovered the play circuity in mammals, which shows that play is not just socially constructed, but rather there is a biological platform for play.  In fact, play deprivation inhibits normal brain development.  Play deprivation can lead to depression, cognitive decline, and poor social skills.<sup>3,4</sup>  
        </p>
        
        <div class="container">
            <div class="column is-6 is-offset-3">
                <blockquote class="jp-quote">
                    <br>    
                    Life isn’t a game, it is a set of games.  The rule is, ‘never sacrifice victory across the set of games for victory in one game’. That is what it means to play properly.  You want to play so that people keep inviting you to play.  That is how you win.  You win by being invited to play the largest possible array of games.  You do that by manifesting the fact that you can play in a reciprocal manner every time you play, even if there is victory at stake.  That is what makes you successful across time.  There is a mode of being that transcends the particularities of the localized contest.  And to act morally is not to win today’s contest at the expense of the rest of possible contests.  The person who is the master at being invited to play the largest possible number of games is also the same person that goes out forthrightly to concur the unknown before it presents itself as the enemy at the door.<sup>4</sup>
                    <cite><img src="/images/plato.jpg" alt="Photo of Jordan Peterson"> - Dr. Jordan Peterson</cite>
                </blockquote>
            </div>
        </div>

        <hr class="ref-break">

        <div class="container reference">
            <a class="ref-text" href="https://www.youtube.com/watch?v=8ABa4RdNPxU">1. An incendiary discussion at Ryerson U</a><br>
            <a class="ref-text" href="https://www.ted.com/talks/steve_keil_a_manifesto_for_play_for_bulgaria_and_beyond/">2. A Manifesto For Play For Bulgaria And Beyond</a><br>
            <a class="ref-text" href="https://www.ted.com/talks/stuart_brown_says_play_is_more_than_fun_it_s_vital">3. Play is More than Fun, It Is Vital</a><br>
            <a class="ref-text" href="https://www.youtube.com/watch?v=R_GPAl_q2QQ">4. Biblical Series III: God and the Hierarchy of Authority</a>
        </div>
        
    </div>
</section>

<section class="section-about-us">
    <div class="container">
        <h4>About Us</h4> 
        <p class="long-copy">
            Motley Games was created to bring people together and to improve people’s health &amp; wellness through play.  Motley Games does this is by educating people about the benefits of GameAthlons and giving people a series of tools to help people organize their own GameAthlons.        
        </p>
    </div>

    
    <div class="column is-2 is-offset-5 m-t-20">
        <a href="" class="button is-primary is-fullwidth">Contact Us</a>
    </div>
</section>

@endsection


@section('scripts')
  {{-- <script>
    var app = new Vue({
      el: '#app',
      data: {}
    });
  </script> --}}
@endsection