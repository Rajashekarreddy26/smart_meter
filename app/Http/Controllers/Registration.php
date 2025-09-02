<?php
namespace App\Http\Controllers;

use App\Models\ConsumerModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


/**
 * Registration Controller
 */
class Registration extends Controller
{

	public function index(Request $request): View
	{
		$params = ['rows' => 20, 'pageno' => 1,'sort_by' => 'code', 'sort_order' => 'asc', 'keywords' => ''];
		$qry = ConsumerModel::query()
			->when($request->get('keyword'), function($query, $keywords) {
				$query->where('name', 'like', '%'.$keywords.'%')
					->orWhere('code', 'like', '%'.$keywords.'%')
					->orWhere('mobile', 'like', '%'.$keywords.'%')
					->orWhere('email', 'like', '%'.$keywords.'%');
			});
		$consumers = $qry->paginate(2);
		if($request->ajax()) {
			return view('registration.consumers_list_body', ['consumers' => $consumers]);
		}
		else {
			return view('registration.consumers_list', ['consumers' => $consumers, 'params' => $params]);
		}
	}

	public function create(): View
	{
		return view('registration.consumer_add');
	}

	public function store(Request $request)
	{
		$params  = $request->validate([
			'name' => ['required', 'max:255'],
			'mobile' => ['required','numeric' , 'max_digits:10'],
			'email' => ['required','email'],
			'address' => ['max:400']
		]);
		$params['created_by'] = 1;
		// print "<pre>"; print_r($params); print "</pre>";
		$insert = ConsumerModel::create($params);
		if($insert) {
			$pad_str = Str::padLeft($insert->id, 5, '0');
			$code = 'CRN'.$pad_str;
			ConsumerModel::where('id', $insert->id)->update(['code' => $code]);
			return view('alert_modal',['color' => 'success', 'msg' => 'consumer registered successfully']);
		}
		else {
			return view('alert_modal',['color' => 'danger', 'msg' => 'error occured, try again.']);
		}
	}

	public function show(int $id): View
	{
		$consumer = ConsumerModel::find($id);
		return view('registration.consumer_view', ['consumer' => $consumer]);
	}

	public function edit(int $id)
	{
		$consumer = ConsumerModel::find($id);
		return view('registration.consumer_edit', ['consumer' => $consumer]);
	}

	public function update(Request $request)
	{
		$id = $request->post('id');
		$params  = $request->validate([
			'name' => ['required', 'max:255'],
			'mobile' => ['required','numeric' , 'max_digits:10'],
			'email' => ['required','email'],
			'address' => ['max:400']
		]);
		$params['updated_by'] = 1;

		$update = ConsumerModel::where('id', $id)->update($params);
		if($update){
			return view('alert_modal', ['color' => 'success', 'msg' => 'consumer updated successfully']);
		}
		else {
			return view('alert_modal', ['color' => 'danger', 'msg' => 'error occured, try again.']);
		}
	}

	public function destroy(Request $request)
	{
		// print_r($request->all());
		$id = $request->post('consumer_id');
		$delete = ConsumerModel::where('id', $id)->delete();
		if($delete){
			return view('alert_modal',['color' => 'success', 'msg' => 'Record deleted successfully']);
		}
		else {
			return view('alert_modal', ['color' => 'danger', 'msg' => 'error occured, try again.']);
		}
	}
}