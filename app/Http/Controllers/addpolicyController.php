<?php

namespace App\Http\Controllers;
use Auth;
use App\Http\Requests\PolicyRequest;
use App\Models\PolicyFeature;
use DataTables;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class addpolicyController extends Controller
{

    /**
     * Show the users dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(): View
    {
        return view('pages.all-policies');
    }

    /**
     * Show User List
     *
     * @param Request $request
     * @return mixed
     */

     public function getpolicylist(Request $request): mixed
    {
        // Get users with the role 'company'
        $data = PolicyFeature::get();
        
        
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
                    <a href="' . url('policy/' . $data->id) . '" class="btn btn-success text-white">Edit</a>
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
            return view('pages.add-policy-features');
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
    public function store(PolicyRequest $request): RedirectResponse
    {
        try {
            // store user information
            $user = PolicyFeature::create([
                'name' => $request->name,
                'code' => $request->code,
            ]);


            if ($user) {
                return redirect('all-policies')->with('success', 'New Policy created!');
            }

            return redirect('all-policies')->with('error', 'Failed to create new Policy! Try again.');
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
            $policy = PolicyFeature::find($id);

            if ($policy) {
                return view('pages.edit-policy-features', compact('policy'));
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
            'code' => 'required | string '
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->with('error', $validator->messages()->first());
        }

        try {
            if ($user = PolicyFeature::find($request->id)) {
                $payload = [
                    'name' => $request->name,
                    'code' => $request->code,
                ];

                $update = $user->update($payload);

                return redirect('all-policies')->with('success', 'Policy information updated succesfully!');
            }

            return redirect('all-policies')->with('success', 'Policy information updated succesfully!');
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
        if ($user = PolicyFeature::find($id)) {
            $user->delete();

            return redirect('all-policies')->with('success', 'Policy removed!');
        }

        return redirect('all-policies')->with('error', 'Policy not found');
    }
}
