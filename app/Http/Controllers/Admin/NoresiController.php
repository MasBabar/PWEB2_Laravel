<?php
/**
 * @author     Thank you for using Admiko.com
 * @copyright  2020-2022
 * @link       https://Admiko.com
 * @Help       We are always looking to improve our code. If you know better and more creative way don't hesitate to contact us. Thank you.
 */
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin\Noresi;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\NoresiRequest;
use Gate;

class NoresiController extends Controller
{

    public function index()
    {
        if (Gate::none(['noresi_allow', 'noresi_edit'])) {
            return redirect(route("admin.home"));
        }
        $admiko_data['sideBarActive'] = "noresi";
		$admiko_data["sideBarActiveFolder"] = "";
        
        $tableData = Noresi::orderBy("admiko_order")->get();
        return view("admin.noresi.index")->with(compact('admiko_data', "tableData"));
    }

    public function create()
    {
        if (Gate::none(['noresi_allow'])) {
            return redirect(route("admin.noresi.index"));
        }
        $admiko_data['sideBarActive'] = "noresi";
		$admiko_data["sideBarActiveFolder"] = "";
        $admiko_data['formAction'] = route("admin.noresi.store");
        
        
        return view("admin.noresi.manage")->with(compact('admiko_data'));
    }

    public function store(NoresiRequest $request)
    {
        if (Gate::none(['noresi_allow'])) {
            return redirect(route("admin.noresi.index"));
        }
        $data = $request->all();
        
        $Noresi = Noresi::create($data);
        
        return redirect(route("admin.noresi.index"));
    }

    public function show($id)
    {
        return back();
    }

    public function edit($id)
    {
        $Noresi = Noresi::find($id);
        if (Gate::none(['noresi_allow', 'noresi_edit']) || !$Noresi) {
            return redirect(route("admin.noresi.index"));
        }

        $admiko_data['sideBarActive'] = "noresi";
		$admiko_data["sideBarActiveFolder"] = "";
        $admiko_data['formAction'] = route("admin.noresi.update", [$Noresi->id]);
        
        
        $data = $Noresi;
        return view("admin.noresi.manage")->with(compact('admiko_data', 'data'));
    }

    public function update(NoresiRequest $request,$id)
    {
        if (Gate::none(['noresi_allow', 'noresi_edit'])) {
            return redirect(route("admin.noresi.index"));
        }
        $data = $request->all();
        $Noresi = Noresi::find($id);
        $Noresi->update($data);
        
        return back();
    }

    public function destroy(Request $request)
    {
        if (Gate::none(['noresi_allow'])) {
            return redirect(route("admin.noresi.index"));
        }
        Noresi::destroy($request->idDel);
        return back();
    }
    
    
    public function admiko_reorder(Request $request,Noresi $Noresi)
    {
        if(Gate::none(['noresi_allow'])) { return redirect(route("admin.noresi")); }
        if($request->action == 'admiko_sort' && count($request->sortData) > 0) {
            foreach ($request->sortData as $order => $id) {
                $data['admiko_order'] = $order;
                $Noresi->find($id)->update($data);
            }
        }
    }

    
}
