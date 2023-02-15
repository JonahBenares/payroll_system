<?php

namespace App\Http\Controllers;
use App\Models\Allowance;
use App\Models\AllowanceSummary;
use App\Models\BusinessUnit;
use App\Models\UploadAllowance;
use App\Models\UploadAllowanceDetail;
use Illuminate\Http\Request;

class AllowanceSummaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $allowance = Allowance::all();
        $businessunit = BusinessUnit::all();
        $details=array();
        if($request->has('allowance_id')){
            $details = UploadAllowanceDetail::where("allowance_head_id", $request->period)->get();
        }
        return view('allowance_summary.index', compact('allowance', 'details','businessunit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function fetchPeriod(Request $request) {
        $allowance = UploadAllowance::where("allowance_id", $request->allowanceid)->get();
        foreach($allowance as $all){
            $data['period'][] = array(
                'id'=>$all->id,
                'bu_name'=>$this->getBUName($all->bu_id),
                'from_date'=>$all->from_date,
                'to_date'=>$all->to_date
            );
        }
        return response()->json($data);
    }

    public function getBUName($id){
        $details = BusinessUnit::where("bu_id", $id)->get();
        $bu_name = $details[0]['bu_name'];
        return $bu_name;
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AllowanceSummary  $allowanceSummary
     * @return \Illuminate\Http\Response
     */
    public function show(AllowanceSummary $allowanceSummary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AllowanceSummary  $allowanceSummary
     * @return \Illuminate\Http\Response
     */
    public function edit(AllowanceSummary $allowanceSummary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AllowanceSummary  $allowanceSummary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AllowanceSummary $allowanceSummary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AllowanceSummary  $allowanceSummary
     * @return \Illuminate\Http\Response
     */
    public function destroy(AllowanceSummary $allowanceSummary)
    {
        //
    }
}
<?php

namespace App\Http\Controllers;
use App\Models\Allowance;
use App\Models\AllowanceSummary;
use App\Models\BusinessUnit;
use App\Models\UploadAllowance;
use App\Models\UploadAllowanceDetail;
use Illuminate\Http\Request;

class AllowanceSummaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $allowance = Allowance::all();
        $businessunit = BusinessUnit::all();
        $details=array();
        if($request->has('allowance_id')){
            $details = UploadAllowanceDetail::where("allowance_head_id", $request->period)->get();
        }
        return view('allowance_summary.index', compact('allowance', 'details','businessunit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function fetchPeriod(Request $request) {
        $allowance = UploadAllowance::where("allowance_id", $request->allowanceid)->get();
        foreach($allowance as $all){
            $data['period'][] = array(
                'id'=>$all->id,
                'bu_name'=>$this->getBUName($all->bu_id),
                'from_date'=>$all->from_date,
                'to_date'=>$all->to_date
            );
        }
        return response()->json($data);
    }

    public function getBUName($id){
        $details = BusinessUnit::where("bu_id", $id)->get();
        $bu_name = $details[0]['bu_name'];
        return $bu_name;
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AllowanceSummary  $allowanceSummary
     * @return \Illuminate\Http\Response
     */
    public function show(AllowanceSummary $allowanceSummary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AllowanceSummary  $allowanceSummary
     * @return \Illuminate\Http\Response
     */
    public function edit(AllowanceSummary $allowanceSummary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AllowanceSummary  $allowanceSummary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AllowanceSummary $allowanceSummary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AllowanceSummary  $allowanceSummary
     * @return \Illuminate\Http\Response
     */
    public function destroy(AllowanceSummary $allowanceSummary)
    {
        //
    }
}
<?php

namespace App\Http\Controllers;
use App\Models\Allowance;
use App\Models\AllowanceSummary;
use App\Models\BusinessUnit;
use App\Models\UploadAllowance;
use App\Models\UploadAllowanceDetail;
use Illuminate\Http\Request;

class AllowanceSummaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $allowance = Allowance::all();
        $businessunit = BusinessUnit::all();
        $details=array();
        if($request->has('allowance_id')){
            $details = UploadAllowanceDetail::where("allowance_head_id", $request->period)->get();
        }
        return view('allowance_summary.index', compact('allowance', 'details','businessunit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function fetchPeriod(Request $request) {
        $allowance = UploadAllowance::where("allowance_id", $request->allowanceid)->get();
        foreach($allowance as $all){
            $data['period'][] = array(
                'id'=>$all->id,
                'bu_name'=>$this->getBUName($all->bu_id),
                'from_date'=>$all->from_date,
                'to_date'=>$all->to_date
            );
        }
        return response()->json($data);
    }

    public function getBUName($id){
        $details = BusinessUnit::where("bu_id", $id)->get();
        $bu_name = $details[0]['bu_name'];
        return $bu_name;
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AllowanceSummary  $allowanceSummary
     * @return \Illuminate\Http\Response
     */
    public function show(AllowanceSummary $allowanceSummary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AllowanceSummary  $allowanceSummary
     * @return \Illuminate\Http\Response
     */
    public function edit(AllowanceSummary $allowanceSummary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AllowanceSummary  $allowanceSummary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AllowanceSummary $allowanceSummary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AllowanceSummary  $allowanceSummary
     * @return \Illuminate\Http\Response
     */
    public function destroy(AllowanceSummary $allowanceSummary)
    {
        //
    }
}
<?php

namespace App\Http\Controllers;
use App\Models\Allowance;
use App\Models\AllowanceSummary;
use App\Models\BusinessUnit;
use App\Models\UploadAllowance;
use App\Models\UploadAllowanceDetail;
use Illuminate\Http\Request;

class AllowanceSummaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $allowance = Allowance::all();
        $businessunit = BusinessUnit::all();
        $details=array();
        if($request->has('allowance_id')){
            $details = UploadAllowanceDetail::where("allowance_head_id", $request->period)->get();
        }
        return view('allowance_summary.index', compact('allowance', 'details','businessunit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function fetchPeriod(Request $request) {
        $allowance = UploadAllowance::where("allowance_id", $request->allowanceid)->get();
        foreach($allowance as $all){
            $data['period'][] = array(
                'id'=>$all->id,
                'bu_name'=>$this->getBUName($all->bu_id),
                'from_date'=>$all->from_date,
                'to_date'=>$all->to_date
            );
        }
        return response()->json($data);
    }

    public function getBUName($id){
        $details = BusinessUnit::where("bu_id", $id)->get();
        $bu_name = $details[0]['bu_name'];
        return $bu_name;
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AllowanceSummary  $allowanceSummary
     * @return \Illuminate\Http\Response
     */
    public function show(AllowanceSummary $allowanceSummary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AllowanceSummary  $allowanceSummary
     * @return \Illuminate\Http\Response
     */
    public function edit(AllowanceSummary $allowanceSummary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AllowanceSummary  $allowanceSummary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AllowanceSummary $allowanceSummary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AllowanceSummary  $allowanceSummary
     * @return \Illuminate\Http\Response
     */
    public function destroy(AllowanceSummary $allowanceSummary)
    {
        //
    }
}
<?php

namespace App\Http\Controllers;
use App\Models\Allowance;
use App\Models\AllowanceSummary;
use App\Models\BusinessUnit;
use App\Models\UploadAllowance;
use App\Models\UploadAllowanceDetail;
use Illuminate\Http\Request;

class AllowanceSummaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $allowance = Allowance::all();
        $businessunit = BusinessUnit::all();
        $details=array();
        if($request->has('allowance_id')){
            $details = UploadAllowanceDetail::where("allowance_head_id", $request->period)->get();
        }
        return view('allowance_summary.index', compact('allowance', 'details','businessunit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function fetchPeriod(Request $request) {
        $allowance = UploadAllowance::where("allowance_id", $request->allowanceid)->get();
        foreach($allowance as $all){
            $data['period'][] = array(
                'id'=>$all->id,
                'bu_name'=>$this->getBUName($all->bu_id),
                'from_date'=>$all->from_date,
                'to_date'=>$all->to_date
            );
        }
        return response()->json($data);
    }

    public function getBUName($id){
        $details = BusinessUnit::where("bu_id", $id)->get();
        $bu_name = $details[0]['bu_name'];
        return $bu_name;
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AllowanceSummary  $allowanceSummary
     * @return \Illuminate\Http\Response
     */
    public function show(AllowanceSummary $allowanceSummary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AllowanceSummary  $allowanceSummary
     * @return \Illuminate\Http\Response
     */
    public function edit(AllowanceSummary $allowanceSummary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AllowanceSummary  $allowanceSummary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AllowanceSummary $allowanceSummary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AllowanceSummary  $allowanceSummary
     * @return \Illuminate\Http\Response
     */
    public function destroy(AllowanceSummary $allowanceSummary)
    {
        //
    }
}
<?php

namespace App\Http\Controllers;
use App\Models\Allowance;
use App\Models\AllowanceSummary;
use App\Models\BusinessUnit;
use App\Models\UploadAllowance;
use App\Models\UploadAllowanceDetail;
use Illuminate\Http\Request;

class AllowanceSummaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $allowance = Allowance::all();
        $businessunit = BusinessUnit::all();
        $details=array();
        if($request->has('allowance_id')){
            $details = UploadAllowanceDetail::where("allowance_head_id", $request->period)->get();
        }
        return view('allowance_summary.index', compact('allowance', 'details','businessunit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function fetchPeriod(Request $request) {
        $allowance = UploadAllowance::where("allowance_id", $request->allowanceid)->get();
        foreach($allowance as $all){
            $data['period'][] = array(
                'id'=>$all->id,
                'bu_name'=>$this->getBUName($all->bu_id),
                'from_date'=>$all->from_date,
                'to_date'=>$all->to_date
            );
        }
        return response()->json($data);
    }

    public function getBUName($id){
        $details = BusinessUnit::where("bu_id", $id)->get();
        $bu_name = $details[0]['bu_name'];
        return $bu_name;
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AllowanceSummary  $allowanceSummary
     * @return \Illuminate\Http\Response
     */
    public function show(AllowanceSummary $allowanceSummary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AllowanceSummary  $allowanceSummary
     * @return \Illuminate\Http\Response
     */
    public function edit(AllowanceSummary $allowanceSummary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AllowanceSummary  $allowanceSummary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AllowanceSummary $allowanceSummary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AllowanceSummary  $allowanceSummary
     * @return \Illuminate\Http\Response
     */
    public function destroy(AllowanceSummary $allowanceSummary)
    {
        //
    }
}
<?php

namespace App\Http\Controllers;
use App\Models\Allowance;
use App\Models\AllowanceSummary;
use App\Models\BusinessUnit;
use App\Models\UploadAllowance;
use App\Models\UploadAllowanceDetail;
use Illuminate\Http\Request;

class AllowanceSummaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $allowance = Allowance::all();
        $businessunit = BusinessUnit::all();
        $details=array();
        if($request->has('allowance_id')){
            $details = UploadAllowanceDetail::where("allowance_head_id", $request->period)->get();
        }
        return view('allowance_summary.index', compact('allowance', 'details','businessunit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function fetchPeriod(Request $request) {
        $allowance = UploadAllowance::where("allowance_id", $request->allowanceid)->get();
        foreach($allowance as $all){
            $data['period'][] = array(
                'id'=>$all->id,
                'bu_name'=>$this->getBUName($all->bu_id),
                'from_date'=>$all->from_date,
                'to_date'=>$all->to_date
            );
        }
        return response()->json($data);
    }

    public function getBUName($id){
        $details = BusinessUnit::where("bu_id", $id)->get();
        $bu_name = $details[0]['bu_name'];
        return $bu_name;
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AllowanceSummary  $allowanceSummary
     * @return \Illuminate\Http\Response
     */
    public function show(AllowanceSummary $allowanceSummary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AllowanceSummary  $allowanceSummary
     * @return \Illuminate\Http\Response
     */
    public function edit(AllowanceSummary $allowanceSummary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AllowanceSummary  $allowanceSummary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AllowanceSummary $allowanceSummary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AllowanceSummary  $allowanceSummary
     * @return \Illuminate\Http\Response
     */
    public function destroy(AllowanceSummary $allowanceSummary)
    {
        //
    }
}
