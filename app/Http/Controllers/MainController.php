<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Dish;
use App\Models\Message;
use App\Models\News;
use App\Models\Subscribe;
use App\Models\Team;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class MainController extends Controller
{
    public function index(): View
    {
        $all = Dish::all()->sortByDesc('updated_at');
        $main = $all->where('main', true)->first();
        if ($main == null) $main = $all->first();
        $menus = $all->whereNotNull('meal')->random(6);

        $newsAll = News::all()->sortByDesc('updated_at');
        $featured = $newsAll->where('category', 'Featured')->take(2);
        $news = $newsAll->whereNotIn('category', ['Featured'])->take(3);
        return view('index', [
            'main' => $main,
            'dishes' => $all->where('id', '!=', $main->id)->whereNull('meal')->random(2),
            'menus' => $menus,
            'featured' => $featured,
            'news' => $news
        ]);
    }

    public function about(Team $team, Request $request): View|string
    {
        if ($request->email) {
            $validator = Validator::make($request->all(), [
                'email' => "required|email|unique:subscribes"
            ]);
            if ($validator->fails())
                return redirect()->route('subscribe')->withErrors($validator)->withInput();

            $validated = $validator->validated();
            $subscribe = new Subscribe();
            $subscribe->email = $validated['email'];
            $subscribe->save();

            return redirect()->route('subscribe')->with([
                'success' => 'Success',
                'team' => $team
            ]);
        }
        $team = Team::all()->random(3);

        return view('about', [
            'team' => $team
        ]);
    }

    public function menu(): View
    {
        $all = Dish::all()->sortByDesc('updated_at');
        $breakfasts = $all->where('meal', 'Breakfast')->take(3);
        $lunches = $all->where('meal', 'Lunch')->take(2);
        $dinners = $all->where('meal', 'Dinner')->take(3);

        return view('menu', [
            'breakfasts' => $breakfasts,
            'lunches' => $lunches,
            'dinners' => $dinners
        ]);
    }

    public function news(): View
    {
        $all = News::all()->sortByDesc('date');
        $features = $all->where('category', 'Featured')->take(2);
        $events = $all->whereNotIn('category', ['Featured'])->take(3)->sortBy('date');

        return view('news', [
            'features' => $features,
            'events' => $events
        ]);
    }

    public function contacts(Request $request): View|string
    {
        if ($request->contact_email) {
            $validator = Validator::make($request->all(), [
                'contact_name' => "required",
                'contact_phone' => "regex:/[0-9]{3}-[0-9]{3}-[0-9]{4}/",
                'contact_email' => "email",
                'contact_message' => "required",
            ]);

            if ($validator->fails())
                return redirect()->route('contacts.form')->withErrors($validator)->withInput();

            $validated = $validator->validated();
            $message = new Message();
            $message->full_name = $validated['contact_name'];
            $message->phone_number = $validated['contact_phone'];
            $message->email = $validated['contact_email'];
            $message->message = $validated['contact_message'];
            $message->save();

            return redirect()->route('contacts.form')->withInput();
        }
        return view('contact');
    }

    public function news_detail(News $news, Comment $comments, Request $request, $id)
    {
        if ($request->comment_email) {
            $validator = Validator::make($request->all(), [
                'comment_name' => "required",
                'comment_email' => "required|email",
                'comment' => "required",
            ]);
            if ($validator->fails())
                return redirect()->route('detail.box', ['id' => $id])->withErrors($validator)->withInput();

            $validated = $validator->validated();
            $comment = new Comment();
            $comment->name = $validated['comment_name'];
            $comment->email = $validated['comment_email'];
            $comment->comment = $validated['comment'];
            $comment->news_id = $id;
            $comment->save();

            return redirect()->route('detail.box', [
                'id' => $id,
                'news' => $news,
                'comments' => $comments
            ])
                ->withInput();
        }

        $news = News::all()->where('id', $id)->first();
        $comments = Comment::where('news_id', $id)->orderByDesc('updated_at')->paginate(2);

        return view('details', [
            'news' => $news,
            'comments' => $comments
        ]);
    }
}
