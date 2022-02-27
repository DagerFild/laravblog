<?php

    namespace App\Http\Controllers;

    use App\Http\Requests\PostRequest;
    use App\Models\Post;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Str;

    class PostController extends Controller
    {
        public function __construct()
        {
            $this->middleware('auth')->except('index', 'show');
        }

        /**
         * Display a listing of the resource.
         *
         * @param  \Illuminate\Http\Request  $request
         *
         * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
         */
        public function index(Request $request
        ): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application {
            if ($request->search) {
                $posts = Post::join('users', 'author_id', '=', 'users.user_id')
                  ->where('title', 'like', '%'.$request->search.'%')
                  ->orWhere('descr', 'like', '%'.$request->search.'%')
                  ->orWhere('users.name', 'like', '%'.$request->search.'%')
                  ->orderBy('posts.created_at', 'desc')
                  ->get();
                return view('posts.index', compact('posts'));
            }

            $posts = Post::join('users', 'author_id', '=', 'users.user_id')
              ->orderBy('posts.created_at', 'desc')
              ->paginate(4);
            return view('posts.index', compact('posts'));
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
         */
        public function create(
        ): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
        {
            return view('posts.create');
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \App\Http\Requests\PostRequest  $request
         *
         * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
         */
        public function store(PostRequest $request
        ): \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse {
            $post = new Post();
            $post->title = $request->title;
            $post->short_title = Str::length($request->title) > 30
              ? Str::substr($request->title, 0, 30).'...'
              : $request->title;
            $post->descr = $request->descr;
            $post->author_id = Auth::user()->user_id;

            if ($request->file('img')) {
                $path = \Storage::putFile('public', $request->file('img'));
                $url = \Storage::url($path);
                $post->img = $url;
            }
            $post->save();
            return redirect()->route('post.index')->with('success', 'Пост успешно создан!');
        }

        /**
         * Display the specified resource.
         *
         * @param  int  $id
         *
         * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
         */
        public function show(int $id): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Foundation\Application
        {
            $post = Post::join('users', 'author_id', '=', 'users.user_id')
                    ->find($id);
            if (is_null($post)) {
                return redirect()->route('index')->withErrors('Данного поста не существует!');
            }
            return view('posts.show', compact('post'));
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         *
         * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
         */
        public function edit(int $id): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Foundation\Application
        {
            $post = Post::find($id);
            if (is_null($post)) {
                return redirect()->route('index')->withErrors('Невозможно отредактировать несуществующий пост!');
            }
            if ($post->author_id != \Auth::user()->user_id) {
                return redirect()->route('index')->withErrors('Вы не можете редактировать чужой пост!');
            }
            return view('posts.edit', compact('post'));
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \App\Http\Requests\PostRequest  $request
         * @param  int  $id
         *
         * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
         */
        public function update(PostRequest $request, int $id): \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
        {
            $post = Post::find($id);
            if (is_null($post)) {
                return redirect()->route('index')->withErrors('Невозможно отредактировать несуществующий пост!');
            }
            if ($post->author_id != \Auth::user()->user_id) {
                return redirect()->route('index')->withErrors('Вы не можете редактировать чужой пост!');
            }
            $post->title = $request->title;
            $post->short_title = Str::length($request->title) > 30
              ? Str::substr($request->title, 0, 30).'...'
              : $request->title;
            $post->descr = $request->descr;
            if ($request->file('img')) {
                $path = \Storage::putFile('public', $request->file('img'));
                $url = \Storage::url($path);
                $post->img = $url;
            }
            $post->update();
            $id = $post->post_id;
            return redirect()->route('post.show', compact('id'))->with('success', 'Пост успешно отредактирован!');
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         *
         * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
         */
        public function destroy(int $id): \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
        {
            $post = Post::find($id);
            if (is_null($post)) {
                return redirect()->route('index')->withErrors('Невозможно удалить несуществующий пост!');
            }
            if ($post->author_id != \Auth::user()->user_id) {
                return redirect()->route('index')->withErrors('Вы не можете удалить чужой пост!');
            }
            $post->delete();
            return redirect()->route('post.index', compact('id'))->with('success', 'Пост успешно удален!');
        }

    }
