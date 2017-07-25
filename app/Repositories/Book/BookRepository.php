<?php

namespace App\Repositories\Book;


use Illuminate\Database\Eloquent\Model;
use App\Repositories\Book\BookInterface;
use DB;
use App\Repositories\BaseRepository;
use App\Book;

class BookRepository extends BaseRepository implements BookInterface
{
	public function __construct(Book $book)
	{
		parent::__construct($book);
	}
}