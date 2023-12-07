<?php

namespace App\Http\Controllers;
use Auth;
use App\Http\Requests\ApplicationRequest;
use App\Http\Requests\DepartmentRequest;
use App\Http\Requests\VendorRequest;
use App\Models\Vendor;
use App\Models\Department;
use App\Models\Employee;
use App\Models\Application;
use App\Models\PolicyFeature;
use DataTables;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class addvendorController extends Controller
{

    /**
     * Show the users dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(): View
    {
        $data = Vendor::get();
        return view('pages.all-vendors');
    }

    /**
     * Show User List
     *
     * @param Request $request
     * @return mixed
     */

     public function getvendorlist(Request $request): mixed
    {
        // Get users with the role 'company'
        $data = Vendor::get();

        $hasManageUser = Auth::user()->can('manage_user');
    
        return Datatables::of($data)
           
           
            ->addColumn('action', function ($data) use ($hasManageUser) {
                $output = '';
                if ($data->name == 'Super Admin') {
                    return '';
                }
                // if ($hasManageUser) {
                    
                    $output = '<div class="table-actions">
                    <a href="' . url('department/' . $data->id) . '" class="btn btn-success text-white">Edit</a>
                    <a href="' . url('add-employee/' . $data->dname) . '" class="btn btn-success text-white">Add Employee</a>
                    <a href="' . url('all-employees/' . $data->dname) . '" class="btn btn-success text-white">View Employees</a>
                </div>';
                // }
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
        $vendor = Vendor::all();  
        $application = Application::all();  
        try {
            return view('pages.add-department',compact('policyfeature','application'));
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
    public function store(DepartmentRequest $request): RedirectResponse
    {
        $user = Auth::user();
        $id = $user->id;
        try {
            // store user information
            $user = Department::create([
                'dname' => $request->dname,
                'demail' => $request->demail,
                'ddesc' => $request->ddesc,
                'company_id' =>$id
            ]);

            $policyFeatures = $request->input('policy_features', []);
            $user->policyFeatures()->attach($policyFeatures);

            $applicationFeatures = $request->input('application_features', []);
            $user->applicationFeatures()->attach($applicationFeatures);

            if ($user) {
                return redirect('all-departments')->with('success', 'New Department Added!');
            }

            return redirect('all-departments')->with('error', 'Failed to add new Department! Try again.');
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
            $department = Department::find($id);

            if ($department) {
                $policyFeatures = PolicyFeature::all();
                $applicationFeatures = Application::all();
                return view('pages.edit-department', compact('policyFeatures','applicationFeatures','department'));
            }

            return redirect('404');
        } catch (\Exception $e) {
            $bug = $e->getMessage();

            return redirect()->back()->with('error', $bug);
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
            'dname' => 'required | string ',
            'demail' => 'required | string ',
            'ddesc' => 'required | string ',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->with('error', $validator->messages()->first());
        }

        try {
            if ($user = Department::find($request->id)) {
                $payload = [
                    'dname' => $request->dname,
                    'demail' => $request->demail,
                    'ddesc' => $request->ddesc,
                ];

                $update = $user->update($payload);

                $policyFeatures = $request->input('policy_features', []);
                $user->policyFeatures()->sync($policyFeatures);

                return redirect('all-departments')->with('success', 'Department updated succesfully!');
            }

            return redirect('all-departments')->with('success', 'Department updated succesfully!');
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
        if ($user = Department::find($id)) {
            $user->delete();

            return redirect('all-departments')->with('success', 'Department removed!');
        }

        return redirect('all-departments')->with('error', 'Department not found');
    }
}
