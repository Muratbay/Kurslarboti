<?php

namespace App\Http\Controllers;

use App\Models\Kurc;
use App\Http\Requests\StoreKurcRequest;
use App\Http\Requests\UpdateKurcRequest;

class KurcController extends Controller
{
    
    public function index()
    {
        $kurcs = Kurc::get();
        return view('admin.kurc',[
            'kurcs' => $kurcs
        ]);   
        
    }

    
    public function create()
    {
        return view('admin.kurc-create');
    }

   
    public function store(StoreKurcRequest $request)
    {
        $request->validated();

        
       Kurc::create([
            'name' => $request->name,
        ]);

        return redirect('/kurcs');
    }

    
    public function edit($id)
    {  
     
        $kurs = Kurc::find($id);
        return view('admin.kurc-edit',[
            'kurs' => $kurs
        ]);
    }

    
    public function update(UpdateKurcRequest $request,$id)
    {
       Kurc::find($id)->update([
            'name' => $request->name,
        ]);
        
        return redirect('kurcs');
    }

    
    public function destroy($id)
    {
        Kurc::destroy($id);
        return redirect('kurcs');
    }
}
