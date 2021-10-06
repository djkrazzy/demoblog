<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class ParentController extends Controller
{
   
            
      // $allChildren = Account::find($id)->descendants;
         
       public function parent($id){
          
         return $this->hasOne('App\Models\User', 'parent_id')->with('child');
       }
    
}


