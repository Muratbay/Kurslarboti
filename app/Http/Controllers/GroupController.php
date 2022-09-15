<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Http\Requests\StoreGroupRequest;
use App\Http\Requests\UpdateGroupRequest;
use App\Models\Kurc;
use BaconQrCode\Renderer\Color\Gray;

class GroupController extends Controller
{
    public function index()
    {
        $groups = Group::get();
        return view('admin.group',[
            'groups' => $groups
        ]);   
        
    }


    public function create()
    {
        $kurs=Kurc::get();

        
        return view('admin.group-create',[
            'kurs' => $kurs
        ]);
    }

    
    public function store(StoreGroupRequest $request)
    {
        $request->validated();

        
        Group::create([
            'name' => $request->name,
            'day' => $request->day,
            'time' => $request->time,
            'kurc_id'=> $request->kurc_id
        ]);

        return redirect('/groups');
    }
   
    public function edit($id)
    {
        $group = Group::find($id);
        $kurs = Kurc::get();
        return view('admin.group-edit',[
            'group' => $group,
            'kurs' => $kurs
        ]);
    }

   
    public function update(UpdateGroupRequest $request, $id)
    {
        Group::find($id)->update([
              'name' => $request->name,
              'day'=> $request->day,
              'time'=> $request->time,
              'kurc_id'=> $request->kurc_id
          ]);
          
          return redirect('groups');
    }

  
    public function destroy($id)
    {
        Group::destroy($id);
        return redirect('groups');
    }
}
