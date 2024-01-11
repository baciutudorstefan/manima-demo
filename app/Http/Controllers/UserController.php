<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
public function update(Request $request, $id)
{
$request->validate([
'name' => 'required|string',
'email' => 'required|email|unique:users,email,' . $id,
'password' => 'nullable|min:6|confirmed',
'password_confirmation' => 'nullable|min:6',
'image' => 'nullable|file|max:2048',
'color' => 'nullable|string|max:255',
// Add validation for other fields
]);

$user = User::findOrFail($id);

// Update other fields
$user->update([
'name' => $request->input('name'),
'email' => $request->input('email'),
'image' => $request->input('image'),
'color' => $request->input('color'),
// Add other fields as needed
]);

// Update password if provided
if ($request->filled('password')) {
$user->update(['password' => Hash::make($request->input('password'))]);
}

return response()->json(['message' => 'User updated successfully']);
}
public function show(string $id): View
{
    $user = User::findOrFail($id);

    return view('user.profile', [
        'user' => $user
    ]);
}
}