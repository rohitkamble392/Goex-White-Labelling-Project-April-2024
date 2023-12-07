<?php

namespace App\Http\Controllers;
use Auth;
use App\Http\Requests\ApplicationRequest;
use App\Models\Application;
use DataTables;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class addapplicationController extends Controller
{

    /**
     * Show the users dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(): View
    {
        return view('pages.all-applications');
    }

    /**
     * Show User List
     *
     * @param Request $request
     * @return mixed
     */

     public function getapplicationlist(Request $request): mixed
    {
        // Get users with the role 'company'
        $data = Application::get();
        
        
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
                    <a href="' . url('application/' . $data->id) . '" class="btn btn-success text-white">Edit</a>
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
            return view('pages.add-application');
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
    public function store(ApplicationRequest $request): RedirectResponse
    {
        try {
            // store user information
            $user = Application::create([
                'packagename' => $request->packagename,
                'installtype' => $request->installtype,
                'defaultPermissionPolicy' => $request->defaultPermissionPolicy,
            ]);


            if ($user) {
                return redirect('all-applications')->with('success', 'New Application Added!');
            }

            return redirect('all-applications')->with('error', 'Failed to add new Application! Try again.');
        } catch (\Exception $e) {
            $bug = $e->getMessage();

            return redirect()->back()->with('error', $bug);
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
            $application = Application::find($id);

            if ($application) {
                return view('pages.edit-application-features', compact('application'));
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
            'packagename' => 'required | string ',
            'installtype' => 'required | string ',
            'defaultPermissionPolicy' => 'required | string ',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->with('error', $validator->messages()->first());
        }

        try {
            if ($user = Application::find($request->id)) {
                $payload = [
                    'packagename' => $request->packagename,
                    'installtype' => $request->installtype,
                    'defaultPermissionPolicy' => $request->defaultPermissionPolicy,
                ];

                $update = $user->update($payload);

                return redirect('all-applications')->with('success', 'Application updated succesfully!');
            }

            return redirect('all-applications')->with('success', 'Application updated succesfully!');
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
        if ($user = Application::find($id)) {
            $user->delete();

            return redirect('all-applications')->with('success', 'Application removed!');
        }

        return redirect('all-applications')->with('error', 'Application not found');
    }
}
