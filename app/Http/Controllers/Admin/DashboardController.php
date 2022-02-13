<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $user = User::get();
        $user = count($user);

        $user_all = User::where('approved', 0)->paginate(5);


        $this->data['user'] = $user;
        $this->data['user_all'] = $user_all;
        return view('admin/dashboard', $this->data);
    }

    public function users()
    {
        $user = User::get();
        $roles = Role::get();
        $this->data['user'] = $user;
        $this->data['roles'] = $roles;

        return view('admin.users', $this->data);
    }
    public function edit_users(Request $request)
    {
        // dd($request);
        $id = $request->id;
        $email = $request->email;
        $role = $request->role;

        $role = Role::findById($role);
        $user = User::find($id);
        // dd($user);
        $user->assignRole($role);

        User::where('id', $id)->update([
            'email' => $email,
        ]);
        return redirect()->back();
    }

    public function delete_users(Request $request)
    {
        $id = $request->id;
        User::where('id', $id)->delete();
        return redirect()->back();
    }
    public function permission()
    {
        $permission = Permission::get();
        $this->data['permission'] = $permission;
        // dd($permission);

        return view('admin.permission', $this->data);
    }
    public function edit_perm(Request $request)
    {
        $id = $request->id;
        $name = $request->name;
        Permission::where('id', $id)->update([
            'guard_name' => 'web',
            'name' => $name
        ]);

        return redirect()->back();
    }

    public function delete_perm(Request $request)
    {
        // dd($request);
        $id = $request->id;
        Permission::find($id)->delete();
        return redirect()->back();
    }

    public function add_perm(Request $request)
    {
        // dd($request);
        $name = $request->name;
        Permission::create([
            'guard_name' => 'web',
            'name' => $name,
        ]);

        return redirect()->back();
    }


    public function rolespermission()
    {
        $rp = Role::get();
        $this->data['rp'] = $rp;


        return view('admin.rolespermission', $this->data);
    }
    public function edit_role(Request $request)
    {
        // dd($request->all());
        $role = Role::find($request->role_id);
        $perm = Permission::find($request->edit_perm);
        $role->syncPermissions($perm);

        return redirect()->back();
    }
    public function delete_role(Request $request)
    {
        // dd($request->all());
        $role = Role::find($request->role_id);
        $permission = $role->getAllPermissions();
        $role->revokePermissionTo($permission);

        $roles = Role::findOrFail($role->id);
        $roles->delete();


        return redirect()->back();
    }
    public function add_role(Request $request)
    {
        try {
            $role = Role::create(['name' => $request->role_name]);
            $perm = Permission::find($request->add_perm);
            $role->syncPermissions($perm);
        } catch (Exception $exception) {
            return back()->withError($exception->getMessage())->withInput();
            // toastr()->error($e);
        }


        return redirect()->back();
    }
}
