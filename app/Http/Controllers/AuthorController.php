<?php

namespace App\Http\Controllers;

use App\Author;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthorController extends Controller
{
    use ApiResponser;

    public function __construct()
    {
        
    }

    public function index()
    {
        $authors = Author::paginate(10);

        return $this->successResponse($authors);
    }

    public function store(Request $request)
    {
        $rules =[
            'name' => 'required|max:255',
            'gender' => 'required|max:255|in:male,female',
            'country' => 'required|max:255',
        ];

        $this->validate($request, $rules);
        $author = Author::create($request->all());
        return $this->successResponse($author, Response::HTTP_CREATED);
    }

    public function show($author)
    {
        
    }

    public function update(Request $request, $author)
    {
        
    }

    public function destroy($author)
    {
        
    }

}
