<?php

namespace App\Http\Controllers;

use App\Models\members;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(members $members)
    {
        /*
        $query = BloodBankInfo::query();
        $searchText = '';
    
        // Check if requiredDate is provided in the request
        if ($members->has('name')) {
            $name = $members->input('name');
            $query->where('name', 'like', '%' . $name . '%');
            $searchText .= $name;
        }

        // Check if address is provided in the request
        if ($members->has('address')) {
            $address = $members->input('address');
            $query->where(function ($query) use ($address) {
                $query->where('localLevel', 'like', '%' . $address . '%')
                    ->orWhere('wardNo', 'like', '%' . $address . '%')
                    ->orWhere('district', 'like', '%' . $address . '%')
                    ->orWhere('province', 'like', '%' . $address . '%');
            });
            if ($searchText !== '') {
                $searchText .= ' ';
            }
            $searchText .= $address;
        }
    
        // Fetch request bloods based on the search criteria
        $bloodBankInfo = $query->orderBy('created_at', 'desc')->paginate(100);
    
        // Count the number of results
        $count = $bloodBankInfo->count();
    
        // Prepare the message
        $message = "Showing $count results for search: $searchText";
    
        return view('admin.bloodbank.index', compact('bloodBankInfo', 'message'));
        */

        // Retrieve all data from the members table
        $members = members::all();
        // Return a view and pass the members data
        return view('front.members.show', compact('members'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(members $members)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, members $members)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(members $members)
    {
        //
    }
}
