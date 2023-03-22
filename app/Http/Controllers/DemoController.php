namespace App\Http\Controllers;

use App\Models\DemoModels;

class DemoController extends Controller
{
    public function index()
    {
        $data = Demo::all();

        return view('demo', compact('data'));
    }
}