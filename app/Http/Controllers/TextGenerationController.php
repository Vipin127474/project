<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gemini\Laravel\Facades\Gemini;
use App\Models\Scripts;
use Illuminate\Support\Facades\Auth;

class TextGenerationController extends Controller
{
    public function showForm()
    {
        return view('generate_text');
    }

    public function generateText(Request $request)
    {
        $request->validate([
            'Title' => 'required|string|max:255',
            'Genre' => 'required|string',
            'Language' => 'required|string',
            'prompt' => 'required|string',
        ]);

        $content = $request->input('prompt');
        $title = $request->input('Title');
        $genre = $request->input('Genre');
        $language = $request->input('Language');
        $userId = auth()->id(); 

        // Generate content with Gemini API
        $result = Gemini::geminiPro()->generateContent($content);

        $text = $result->text();

        Scripts::create([
            'user_id' => $userId, 
            'title' => $title,
            'genre' => $genre,
            'language' => $language,
            'prompt' => $content,
            'generated_text' => $text
        ]);

        return redirect()->route('dashboard');
    }


    public function index() {
        if (!Auth::check()) {
            return redirect('/login')->withErrors(['message' => 'You must be logged in to access the dashboard.']);
        }
    
        $scripts = Scripts::where('user_id', auth()->id())->get();
        
        return view('dashboard', compact('scripts'));
    }

    public function details($id)
    {
        $script = Scripts::where('id', $id)
                         ->where('user_id', auth()->id())
                         ->firstOrFail();
    
        return view('details', compact('script'));
    }
    
    
    

}
