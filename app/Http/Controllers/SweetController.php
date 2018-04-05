<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class SweetController extends Controller{


public function notification($type){

 
  Switch ($type){
           

  		    case 'message':
  			alert()->message('notification message');
    		break;
          
            
            case 'basic':
          	alert()->basic('basic','titulo');
          	break;

            
            case 'info':
          	alert()->info('notification info');
          	break;

            
            case "success":
          	alert()->success('notification success','titulo')->autoclose(3000);
          	break;

          	
          	case "error":
          		alert()->error('notification error');
          		break;


          	case 'warning':
          		alert()->warning('notification warning');
          		break;

            }


      return redirect()->route('home');
  	}
}
?>