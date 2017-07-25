<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EditBookRequest;
use App\Http\Requests\CreateBookRequest;
use App\Repositories\Book\BookInterface;
use DB;
use App\Book;
class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $booksRepository;
    public function __construct(BookInterface $booksRepository)
    {
        $this->booksRepository = $booksRepository;
    }
    public function index()
    {
        //
        return $this->booksRepository->all();
        //return Book::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBookRequest  $request)
    {
        //
        //return request()->except(['_token']);
        return $this->booksRepository->create(request()->except(['_token']));
        //return Book::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $i
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return $this->booksRepository->find($id,['author','title']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $book = $this->booksRepository->find($id);
        return view('books.edit',['book'=>$book]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditBookRequest  $request, $id)
    {
        //
        $this->booksRepository->update($id,$request->all());
        return $book = $this->booksRepository->find($id);;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
