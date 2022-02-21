<?php

    namespace App\Http\Controllers;

    use App\Models\Post;
    use Illuminate\Http\Request;
    use Illuminate\Support\Str;

    class PostController extends Controller
    {

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
         * @param  \Illuminate\Http\Request  $request
         *
         * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
         */
        public function store(Request $request
        ): \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse {
            $post = new Post();
            $post->title = $request->title;
            $post->short_title = Str::length($request->title) > 30
              ? Str::substr($request->title, 0, 30).'...'
              : $request->title;
            $post->descr = $request->descr;
            $post->author_id = random_int(1, 4);

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
         * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
         */
        public function show($id): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\Contracts\Foundation\Application
        {
            $post = Post::join('users', 'author_id', '=', 'users.user_id')
                    ->find($id);
            return view('posts.show', compact('post'));
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         *
         * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
         */
        public function edit($id): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\Contracts\Foundation\Application
        {
            $post = Post::find($id);
            return view('posts.edit', compact('post'));
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $id
         *
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id)
        {
            //
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         *
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            //
        }

    }
