<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\Http\Requests;

class TaskController extends Controller
{
    protected $reviews;
    protected $requests;

    public function __construct(Review $reviews, Request $requests)
    {
        $this->reviews = $reviews;
        $this->requests = $requests;
    }

    public function index()
    {
        $tasks = $this->reviews->all();
        return view('pages.index', compact('tasks'));
    }

    public function show($id)
    {
        $task = Review::findOrFail($id);
        return view('pages.show', compact('task'));
    }

    public function create()
    {
        return view('pages.create');
    }

    public function store(Request $request)
    {
        $review = new Review();
        $review->category = $request->category;
        $review->title = $request->title;
        $review->content = $request->content;
        $review->rating = $request->rating;
        $review->save();

    }

    public function editReview()
    {
        $tasks = $this->reviews->get();
        return view('pages.editreview', compact('tasks'));
    }

    public function edit($id)
    {
        $tasks = $this->reviews->find($id);
        return view('pages.edit', compact('tasks'));
    }

    public function update($id)
    {
        $review = $this->review->find($id);
        $request = $this->requests;
        $review->category = $request->category;

        $review->title = $request->title;
        $review->content = $request->content;
        $review->rating = $request->rating;
        $review->save();
    }
}
