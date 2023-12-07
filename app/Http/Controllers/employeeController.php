<?php

namespace App\Http\Controllers;
use Auth;
use App\Http\Requests\ApplicationRequest;
use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;
use App\Models\Department;
use App\Models\Application;
use App\Models\PolicyFeature;
use DataTables;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class employeeController extends Controller
{

    /**
     * Show the users dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($id): View
    {
        return view('pages.all-employees',compact('id'));
    }

    /**
     * Show User List
     *
     * @param Request $request
     * @return mixed
     */

     public function getemployeelist(Request $request,$dname): mixed
    {
        // Get users with the role 'company'
        $user = Auth::user();
        $id = $user->id;
        $data = Employee::get()->where('department',$dname)->where('company_id',$id);
        
        
        $hasManageUser = Auth::user()->can('manage_user');
    
        return Datatables::of($data)
           
           
            ->addColumn('action', function ($data) use ($hasManageUser) {
                $output = '';
                if ($data->name == 'Super Admin') {
                    return '';
                }
                // if ($hasManageUser) {
                    
                    $output = '<div class="table-actions">
                    <a href="#" onclick="confirmDelete(' . $data->id . ')" class="btn btn-danger text-white">
                        <i class="ik ik-trash-2 f-16 text-white" style="font-size:12px;"></i>Remove
                    </a>
                    <a href="' . url('employee/' . $data->id) . '" class="btn btn-success text-white">Edit</a>
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
    public function create($dname): mixed
    { 
        $user = Auth::user();
        $id = $user->id;
        $department = Department::get()->where('company_id',$id);
        try {
            return view('pages.add-employee',compact('department','dname'));
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
    public function store(EmployeeRequest $request): RedirectResponse
    {
        $user = Auth::user();
        $id = $user->id;
        try {
            // store user information
            $user = Employee::create([
                'company_id'=>$id,
                'department_id'=>0,
                'name' => $request->name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'department' => $request->department,
                'device' => $request->device,
                'imei1' => $request->imei1,
                'imei2' => $request->imei2,
            ]);

            if ($user) {
                return redirect('all-employees')->with('success', 'New Employee Added!');
            }

            return redirect('all-employees')->with('error', 'Failed to add new Employee! Try again.');
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
            $employee = Employee::find($id);

            if ($employee) {
                return view('pages.edit-employee', compact('employee'));
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
            'name' => 'required | string ',
            'email' => 'required | string ',
            'mobile' => 'required | string ',
            'department' => 'required | string ',
            'device' => 'required | string ',
            'imei1' => 'required | string ',
            'imei2' => 'required | string ',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->with('error', $validator->messages()->first());
        }

        try {
            if ($user = Employee::find($request->id)) {
                $payload = [
                    'name' => $request->name,
                    'email' => $request->email,
                    'mobile' => $request->mobile,
                    'department' => $request->department,
                    'device' => $request->device,
                    'imei1' => $request->imei1,
                    'imei2' => $request->imei2,
                ];

                $update = $user->update($payload);

                return redirect('all-employees')->with('success', 'Employee updated succesfully!');
            }

            return redirect('all-employees')->with('success', 'Employees updated succesfully!');
        } catch (\Exception $e) {
            $bug = $e->getMessage();
            echo $bug;

            // return redirect()->back()->with('error', $bug);
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
        if ($user = Employee::find($id)) {
            $user->delete();

            return redirect('all-employees')->with('success', 'Employee removed!');
        }

        return redirect('all-employees')->with('error', 'Employee not found');
    }
}
