<?php

namespace App\Http\Controllers;
use App\Models\RefundAdmin;
use App\Http\Requests\StoreRefundAdminRequest;
use App\Http\Requests\UpdateRefundAdminRequest;

class RefundAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data= RefundAdmin::all();
        return view('Admin.refund.history-refund',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.refund.create_refund');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRefundAdminRequest $request)
    {
        $input= $request->validated();
        RefundAdmin::create($input);
        return redirect('/refund')->with('create refund admin success');
    }

    /**
     * Display the specified resource.
     */
    public function show(RefundAdmin $DetailRefund,$id)
    {
        return view('Admin.refund.detail-refund',[
            'DetailRefund'=>RefundAdmin::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.x
     */
    public function edit(RefundAdmin $refundAdmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRefundAdminRequest $request, RefundAdmin $refundAdmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RefundAdmin $refundAdmin,$id)
    {
        RefundAdmin::destroy($id);
    }
}
