<?php

namespace App\Http\Controllers;
use App\Models\Company_datails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CompanyDatailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $alldata = Company_datails::all();
        return view('admin.company.index')->with('comdetails',$alldata[0]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    // }

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
     * @param  \App\Models\Company_datails  $company_datails
     * @return \Illuminate\Http\Response
     */
    public function show(Company_datails $company_datails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company_datails  $company_datails
     * @return \Illuminate\Http\Response
     */
    public function edit($company_id)
    {
        $company_datails = Company_datails::find($company_id);
        return view('admin.company.company_edit')->with('comshow', $company_datails);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company_datails  $company_datails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $alldata = Company_datails::find($id);

        $fileName = '';
        
        if ( $request->companyImage)
        {
            $fileName = time().'.'.$request->companyImage->getClientOriginalExtension();
            $request->companyImage->move(public_path('upload/'), $fileName);
            if($id)
            {
                $imagePath = public_path('upload/' . $alldata->logo);
                if(File::exists($imagePath))
                {
                    unlink($imagePath);
                }
            }
        }   else {
            $fileName = $alldata->logo;
        }

        $alldata-> update([
            'companyName'=>$request->name,
            'companyEmail'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'logo'=>$fileName,
    
        ]);

        // $alldata=Company_datails::all();
        // return view('company.company_details')->with('comdetails',$alldata);
        return redirect('company');
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company_datails  $company_datails
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company_datails $company_datails)
    {
        //
    }
}
