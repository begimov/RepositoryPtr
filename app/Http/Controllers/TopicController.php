<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Topic;
use App\Repositories\Contracts\TopicRepository;
use App\Repositories\Contracts\UserRepository;

class TopicController extends Controller
{
    protected $topics;
    protected $users;

    public function __construct(TopicRepository $topics, UserRepository $users)
    {
        $this->topics = $topics;
        $this->users = $users;

        dd($users->all(), $topics->all());
    }
    public function index()
    {
        $topics = $this->topics->all();
        $users = $this->users->all();

        dd($topics, $users);
    }
}
