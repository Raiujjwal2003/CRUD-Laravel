<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\NewUser;


class UserController extends Controller
{
    public function home(Request $request)
    {
        $users = NewUser::where('isDelete', 0)->get();
        return view('home', ['users' => $users]);
    }
    

    public function userForm(Request $request)
    {
        return view('form');
    }


    public function saveFormData(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'age' => 'required',
            'branch' => 'required',
            'title' => 'required',
        ]);

        $user = new NewUser();
        $user->name = $validatedData['name'];
        $user->age = $validatedData['age'];
        $user->branch = $validatedData['branch'];
        $user->title = $validatedData['title'];
        // Save the user
        $user->save();

        return redirect()->route('home');
    }


    public function edit($id)
    {
        $user = NewUser::findOrFail($id); 
        return view('edit-user', compact('user'));
    }


    public function update(Request $request, $id)
    {
        $user = NewUser::findOrFail($id);
        $user->update($request->all()); 
        return redirect()->route('home')->with('success', 'User updated successfully'); 
    }


    public function delete($id)
    {
        $user = NewUser::findOrFail($id); 
        $user->delete(); 
        return redirect()->route('home')->with('success', 'User deleted successfully'); 
    }

    public function updateFlag($id){

    $user = NewUser::find($id);

    $user->update(['isDelete' => 1]);

    return redirect()->route('home')->with('success', 'Delete updated successfully.');
}


}



?>