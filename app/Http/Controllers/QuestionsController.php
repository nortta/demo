<?php

namespace App\Http\Controllers;

use Nortta\Laravel\Page;

class QuestionsController extends Controller {
    public function index() {
        return view('questions.index', ['questions' => Page::whereNotNull('parent_id')->get()]);
    }

    public function show(Page $page) {
        return view('questions.show', ['question' => $page]);
    }
}
