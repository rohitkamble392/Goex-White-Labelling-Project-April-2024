<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Auth;
use DataTables;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;

class CompanyController extends Controller
{

    /**
     * Show the users dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(): View
    {
        $user = Auth::user();
        $id = $user->id;
        $departmentCounts = Employee::select('company_id', 'department')
    ->groupBy('company_id', 'department')
    ->selectRaw('company_id, department, count(*) as department_count')
    ->get();
        $data = Department::get()->where('company_id',$id);
        return view('users');
    }

    /**
     * Show User List
     *
     * @param Request $request
     * @return mixed
     */

     public function getcompanylist(Request $request): mixed
    {
        // Get users with the role 'company'
        $data = User::role('Company')->get();
        
        
        $hasManageUser = Auth::user()->can('manage_user');
    
        return Datatables::of($data)
           
           
            ->addColumn('action', function ($data) use ($hasManageUser) {
                $output = '';
                if ($data->name == 'Super Admin') {
                    return '';
                }
                if ($hasManageUser) {
                    
                    $output = '<div class="table-actions">
                    <a href="#" onclick="confirmDelete(' . $data->id . ')" class="btn btn-danger text-white">
                        <i class="ik ik-trash-2 f-16 text-white" style="font-size:12px;"></i>Remove
                    </a>
                    <a href="' . url('company/' . $data->id) . '" class="btn btn-success text-white">Edit</a>
                </div>';
                }
    
                return $output;
            })
            ->make(true);
    }

    /**
     * User Create
     *
     * @return mixed
     */
    public function create(): mixed
    {
        try {
            $roles = Role::pluck('name', 'id');

            return view('create-user', compact('roles'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Store User
     *
     * @param UserRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(UserRequest $request): RedirectResponse
    {
        try {
            // store user information
            $user = User::create([
                'name' => $request->name,
                'description' => $request->description,
                'email' => $request->email,
                'password' => $request->password,
                'mobile' => $request->mobile,
                'gst' => $request->gst,
                'address' => $request->address,
                'pincode' => $request->pin,
                'state' => $request->state,
                'district' => $request->district,
            ]);


            if ($user) {
                // assign new role to the user
                $user->syncRoles(5);

                return redirect('total-companies')->with('success', 'New Company created!');
            }

            return redirect('users')->with('error', 'Failed to create new Company! Try again.');
        } catch (\Exception $e) {
            $bug = $e->getMessage();

            // return redirect()->back()->with('error', $bug);
            echo $bug;
        }
    }

    /**
     * Edit User
     *
     * @param int $id
     * @return mixed
     */
    public function edit($id): mixed
    {
        try {
            $user = User::with('roles', 'permissions')->find($id);

            if ($user) {
                return view('pages.emm-edit-user', compact('user'));
            }

            return redirect('404');
        } catch (\Exception $e) {
            $bug = $e->getMessage();

            // return redirect()->back()->with('error', $bug);
            echo $bug;
        }
    }

    /**
     * Update User
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request): RedirectResponse
    {
        // update user info
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'name' => 'required | string ',
            'email' => 'required | email',
            'description' => 'required | string',
            'mobile' => 'required | string',
            'gst' => 'required | string',
            'address' => 'required | string',
            'pincode' => 'required | string',
            'state' => 'required | string',
            'district' => 'required | string',
        ]);

        // check validation for password match
        if (isset($request->password)) {
            $validator = Validator::make($request->all(), [
                'password' => 'required | confirmed',
            ]);
        }

        if ($validator->fails()) {
            return redirect()->back()->withInput()->with('error', $validator->messages()->first());
        }

        try {
            if ($user = User::find($request->id)) {
                $payload = [
                    'name' => $request->name,
                    'email' => $request->email,
                    'description' => $request->description,
                    'mobile' => $request->mobile,
                    'gst' => $request->gst,
                    'address' => $request->address,
                    'pincode' => $request->pincode,
                    'state' => $request->state,
                    'district' => $request->district,
                ];
                // update password if user input a new password
                if (isset($request->password) && $request->password) {
                    $payload['password'] = $request->password;
                }

                $update = $user->update($payload);

                return redirect('total-companies')->with('success', 'Company Updated!');
            }

            return redirect()->back()->with('error', 'Failed to update user! Try again.');
        } catch (\Exception $e) {
            $bug = $e->getMessage();

            return redirect()->back()->with('error', $bug);
        }
    }

    /**
     * Delete User
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id): RedirectResponse
    {
        if ($user = User::find($id)) {
            $user->delete();

            return redirect('total-companies')->with('success', 'User removed!');
        }

        return redirect('users')->with('error', 'User not found');
    }
}
