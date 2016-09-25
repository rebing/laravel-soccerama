<?php

namespace Rebing\Soccerama;

use Rebing\Soccerama\Requests\Bookmaker;
use Rebing\Soccerama\Requests\Commentary;
use Rebing\Soccerama\Requests\Competition;
use Rebing\Soccerama\Requests\Country;
use Rebing\Soccerama\Requests\Event;
use Rebing\Soccerama\Requests\LiveScore;
use Rebing\Soccerama\Requests\Match;
use Rebing\Soccerama\Requests\Odds;
use Rebing\Soccerama\Requests\Player;
use Rebing\Soccerama\Requests\Season;
use Rebing\Soccerama\Requests\Standings;
use Rebing\Soccerama\Requests\Statistics;
use Rebing\Soccerama\Requests\Team;
use Rebing\Soccerama\Requests\TopScorer;
use Rebing\Soccerama\Requests\Video;

class Soccerama {

    public function bookmakers()
    {
        return new Bookmaker();
    }

    public function commentaries()
    {
        return new Commentary();
    }

    public function competitions()
    {
        return new Competition();
    }

    public function countries()
    {
        return new Country();
    }

    public function events()
    {
        return new Event();
    }

    public function livescores()
    {
        return new LiveScore();
    }

    public function matches()
    {
        return new Match();
    }

    public function odds()
    {
        return new Odds();
    }

    public function players()
    {
        return new Player();
    }

    public function seasons()
    {
        return new Season();
    }

    public function statistics()
    {
        return new Statistics();
    }

    public function standings()
    {
        return new Standings();
    }

    public function teams()
    {
        return new Team();
    }

    public function topscorers()
    {
        return new TopScorer();
    }

    public function videos()
    {
        return new Video();
    }

}