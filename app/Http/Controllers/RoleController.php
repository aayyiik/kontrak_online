
<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $role = Role::all();
        return view('dashboard.admin.role.index', ['role' => $role]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'kode_role' => 'required|unique:bagian,kode_role',
            'nama_role' => 'required|min:1|max:100',
        ]);

        Role::create($request->all());
        return redirect('/role');
    }

    public function delete($id)
    {
        $role = Role::find($id);
        $role->delete($role);
        return redirect('/role');
    }
}
