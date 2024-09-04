use App\Models\YourModel; // Replace with your model

public function search(Request $request)
{
    $query = $request->input('query');
    $results = YourModel::where('name', 'LIKE', "%{$query}%")->get(); // Adjust search logic as needed

    return view('search-results', compact('results'));
}
