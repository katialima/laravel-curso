<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Song;
use App\Http\Requests\CreateSongRequest;

use Illuminate\Http\Request;

class SongsController extends Controller {

	public function __construct(Song $song){
		$this->song = $song;
	}

	public function index(){
		
		$songs = $this->song->get();	
		return view('songs', compact('songs'));
	}

	public function show(Song $song){
		//$song = $this->song->whereSlug($slug)->first();
		return view('show', compact('song'));
	}

	public function edit(Song $song){
		//$song = $this->song->whereSlug($slug)->first();
		return view('edit', compact('song'));
	}

	public function update(Song $song, Request $request){
		$song->fill($request->all())->save();	
		return redirect('songs');
	}

	public function create(){
		return view('create');
	}

	public function store(CreateSongRequest $request, Song $song){
		$song->create($request->all());
		return redirect()->route('songs.index');
	}

	public function destroy(Song $song){
		$song->delete();
		return redirect('songs');
	}

	

}
