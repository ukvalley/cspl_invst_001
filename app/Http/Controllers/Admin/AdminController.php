<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;

use URL;
use Mail;
use Session;
use Sentinel;
use Validator;
use App\Models\UserModel;
use App\Models\CitiesModel;
use App\Models\StatesModel;
use App\Models\CountriesModel;
use App\Models\TransactionModel;
use App\Models\EmailTemplateModel;

use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    public $arr_view_data;
    public $admin_panel_slug;

    public function __construct(UserModel $user_model)
    {
      $this->UserModel          = $user_model;
      $this->arr_view_data      = [];
      $this->admin_panel_slug   = config('app.project.admin_panel_slug');
    }

  
   //call view
   public function profile_creator_new()
   {
    return view('admin.create_profile_creator',$this->arr_view_data);

   }
 public function importExportView()
    {
       return view('import');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        Excel::import(new UsersImport,request()->file('file'));
           
        return back();
   

}

  




