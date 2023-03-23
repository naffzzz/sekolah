<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Family;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Http\Requests\Admin\CreateFamilyRequest;
use App\Http\Requests\Admin\UpdateFamilyRequest;
use DataTables;

class FamiliesController extends Controller
{

    /**
     * assign roles
     */
    public function __construct()
    {
        $this->middleware('can:view_families',     ['only' => ['index', 'show','ajax']]);
        $this->middleware('can:create_families',   ['only' => ['create', 'store']]);
        $this->middleware('can:edit_families',     ['only' => ['edit', 'updae']]);
        $this->middleware('can:delete_families',   ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('admin.families.index');
    }

    /**
    * get families datatable
    *
    * @access public
    * @var  @Request $request
    */
    public function ajax(Request $request)
    {
        $model=Family::with('user')->where('user_id', auth()->guard('admin')->user()->id);

        $userRole = UserRole::with('user','role')->whereHas('user', function ($query) {
            return $query->where('id', '=', auth()->guard('admin')->user()->id);
        })->first();

        if ($userRole->role->id == 1)
        {
            $model=Family::with('user');
        }
        
        return DataTables::eloquent($model)
        ->addColumn('action',function($family){
            return view('admin.families._action',compact('family'));
        })
        ->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userRole=UserRole::with('user','role')->whereHas('user', function ($query) {
            return $query->where('id', '=', auth()->guard('admin')->user()->id);
        })->first();
        $users=User::with('roles')->whereHas('roles', function ($query) {
            return $query->where('id', '!=', 1);
        })->get();
        return view('admin.families.create',compact('userRole', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateFamilyRequest $request)
    {
        //create new user
        $family=new Family;
        $family->full_name=$request->full_name;
        $family->nik=$request->nik;
        $family->gender=$request->gender;
        $family->birth_place=$request->birth_place;
        $family->birth_date=$request->birth_date;
        $family->religion=$request->religion;
        $family->education=$request->education;
        $family->job=$request->job;
        $family->user_id=auth()->guard('admin')->user()->id;
        if (isset($request->user_id))
        {
            $family->user_id=$request->user_id;
        }
        $family->save();

        session()->flash('success',__('Family created successfully'));

        return redirect()->route('admin.families.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=Family::findOrFail($id);
        $userRole=UserRole::with('user','role')->whereHas('user', function ($query) {
            return $query->where('id', '=', auth()->guard('admin')->user()->id);
        })->first();
        $users=User::with('roles')->whereHas('roles', function ($query) {
            return $query->where('id', '!=', 1);
        })->get();
        
        return view('admin.families.edit',compact('user', 'users', 'userRole'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFamilyRequest $request, $id)
    {
        //update user
        $family=Family::findOrFail($id);
        $family->full_name=$request->full_name;
        $family->nik=$request->nik;
        $family->gender=$request->gender;
        $family->birth_place=$request->birth_place;
        $family->birth_date=$request->birth_date;
        $family->education=$request->education;
        $family->job=$request->job;
        $family->save();

        session()->flash('success',__('Family updated successfully'));

        return redirect()->route('admin.families.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete family
        Family::where('id',$id)->delete();

        session()->flash('success',__('Family deleted successfully'));

        return redirect()->route('admin.families.index');
    }
}
