<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
//    nahorgi osh oktabr qushilganda chiqarib beradi
    function GetDataCalendar(){
        $view=view('Admin');
        $view->with("month", DB::table('calendar')->where('id', '1')->get());
        $view->with("year", DB::table('calendar')->where('id', '1')->get());
        $view->with("days", DB::table('oktabr')->get());
        $view->with("CalenType", 'naxor');
        $view->with('day',1);
        $view->with("fullMonth", DB::table('calendar')->get());
        $view->with('VarAdmin','AdminPanel');
        return $view;
    }
//    boshqaruv knopkasi bosilganda
    function SendDataCalendar($id){
        if($id>=1 && $id<=12){
            $view=view('Admin');
            $view->with("month", DB::table('calendar')->where('id', $id)->get());
            $view->with("year", DB::table('calendar')->where('id', $id)->get());
            $view->with("CalenType", 'naxor');
                switch($id)
                {
                    case 1;$view->with("days", DB::table('oktabr')->get());break;
                    case 2;$view->with("days", DB::table('noyabr')->get());break;
                    case 3;$view->with("days", DB::table('dekabr')->get());break;
                    case 4;$view->with("days", DB::table('yanvar')->get());break;
                    case 5;$view->with("days", DB::table('fevral')->get());break;
                    case 6;$view->with("days", DB::table('mart')->get());break;
                    case 7;$view->with("days", DB::table('aprell')->get());break;
                    case 8;$view->with("days", DB::table('may')->get());break;
                    case 9;$view->with("days", DB::table('iyun')->get());break;
                    case 10;$view->with("days", DB::table('iyul')->get());break;
                    case 11;$view->with("days", DB::table('avgust')->get());break;
                    case 12;$view->with("days", DB::table('sentabr')->get());break;
                    default:$view->with("days", DB::table('sentabr')->get());break;
                }
            $view->with('VarAdmin','AdminPanel');
            $view->with('day',$id);
            $view->with("fullMonth", DB::table('calendar')->get());
            return $view;
        }else{
            $view=view('Admin');
            $view->with("month", DB::table('calendar')->where('id', 12)->get());
            $view->with("year", DB::table('calendar')->where('id', 12)->get());
            $view->with("days", DB::table('sentabr')->get());
            $view->with('VarAdmin','AdminPanel');
            $view->with("fullMonth", DB::table('calendar')->get());
            return $view;
        }
    }
    function SelectTypeCalendar($var,$id){
        $view=view('Admin');
        $view->with("month", DB::table('calendar')->where('id', 12)->get());
        $view->with("CalenType", $var);
//        start
        if($id>=1 && $id<=12){
            $view=view('Admin');
            $view->with("month", DB::table('calendar')->where('id', $id)->get());
            $view->with("year", DB::table('calendar')->where('id', $id)->get());
            switch($id)
            {
                case 1;$view->with("days", DB::table('oktabr')->get());break;
                case 2;$view->with("days", DB::table('noyabr')->get());break;
                case 3;$view->with("days", DB::table('dekabr')->get());break;
                case 4;$view->with("days", DB::table('yanvar')->get());break;
                case 5;$view->with("days", DB::table('fevral')->get());break;
                case 6;$view->with("days", DB::table('mart')->get());break;
                case 7;$view->with("days", DB::table('aprell')->get());break;
                case 8;$view->with("days", DB::table('may')->get());break;
                case 9;$view->with("days", DB::table('iyun')->get());break;
                case 10;$view->with("days", DB::table('iyul')->get());break;
                case 11;$view->with("days", DB::table('avgust')->get());break;
                case 12;$view->with("days", DB::table('sentabr')->get());break;
                default:$view->with("days", DB::table('sentabr')->get());break;
            }
            $view->with('VarAdmin','AdminPanel');
            $view->with('day',$id);
            $view->with("CalenType", $var);
            $view->with("fullMonth", DB::table('calendar')->get());
            return $view;
        }
        else{
            $view=view('Admin');
            $view->with("month", DB::table('calendar')->where('id', 12)->get());
            $view->with("year", DB::table('calendar')->where('id', 12)->get());
            $view->with("days", DB::table('sentabr')->get());
            $view->with('VarAdmin','AdminPanel');
            $view->with('day',$id);
            $view->with("CalenType", $var);
            $view->with("fullMonth", DB::table('calendar')->get());
            return $view;
        }
//        end
    }
    //calendar
    function CalendarInsert(Request $request) {
        $day=$request->input('day');
        $Time=$request->input('Time');
        $Month=$request->input('Month');
        $Type=$request->input('Type');
//        $view=view('Admin');

        /*Update*/
            switch($Month)
            {
                case 1;
                    if($Time=='naxor'){
                            if($Type=='band'){
                                $data = array('naxor' => 'band');
                            }
                            else{
                                $data = array('naxor' => '---');
                            }
                            DB::table('oktabr')->where('day',$day)->update($data);
//                        /naxor/{{ $day }}
                    }
                    elseif($Time=='abed'){
                            if($Type=='band'){
                                $data = array('abed' => 'band');
                            }
                            else{
                                $data = array('abed' => '---');
                            }
                            DB::table('oktabr')->where('day',$day)->update($data);
                    }
                    elseif($Time=='vecher'){
                            if($Type=='band'){
                                $data = array('vecher' => 'band');
                            }
                            else{
                                $data = array('vecher' => '---');
                            }
                            DB::table('oktabr')->where('day',$day)->update($data);
                    }
                    else{
                        echo "Bunday kun yoq";
                    }
                break;
                case 2;
                    if($Time=='naxor'){
                        if($Type=='band'){
                            $data = array('naxor' => 'band');
                        }
                        else{
                            $data = array('naxor' => '---');
                        }
                        DB::table('noyabr')->where('day',$day)->update($data);
                    }
                    elseif($Time=='abed'){
                        if($Type=='band'){
                            $data = array('abed' => 'band');
                        }
                        else{
                            $data = array('abed' => '---');
                        }
                        DB::table('noyabr')->where('day',$day)->update($data);
                    }
                    elseif($Time=='vecher'){
                        if($Type=='band'){
                            $data = array('vecher' => 'band');
                        }
                        else{
                            $data = array('vecher' => '---');
                        }
                        DB::table('noyabr')->where('day',$day)->update($data);
                    }
                    else{
                        echo "Bunday kun yoq";
                    }
                    break;
                case 3;
                    if($Time=='naxor'){
                        if($Type=='band'){
                            $data = array('naxor' => 'band');
                        }
                        else{
                            $data = array('naxor' => '---');
                        }
                        DB::table('dekabr')->where('day',$day)->update($data);
                    }
                    elseif($Time=='abed'){
                        if($Type=='band'){
                            $data = array('abed' => 'band');
                        }
                        else{
                            $data = array('abed' => '---');
                        }
                        DB::table('dekabr')->where('day',$day)->update($data);
                    }
                    elseif($Time=='vecher'){
                        if($Type=='band'){
                            $data = array('vecher' => 'band');
                        }
                        else{
                            $data = array('vecher' => '---');
                        }
                        DB::table('dekabr')->where('day',$day)->update($data);
                    }
                    else{
                        echo "Bunday kun yoq";
                    }
//                    $view->with("days", DB::table('dekabr')->get());
                    break;
                case 4;
                    if($Time=='naxor'){
                        $data = array('naxor' => 'band');
                        DB::table('yanvar')->where('day',$day)->update($data);
//                        $view->with("days", DB::table('oktabr')->get());
                    }
                    elseif($Time=='abed'){
                        $data = array('abed' => 'band');
                        DB::table('yanvar')->where('day',$day)->update($data);
                    }
                    elseif($Time=='vecher'){
                        $data = array('vecher' => 'band');
                        DB::table('yanvar')->where('day',$day)->update($data);
                    }
                    else{
                        echo "Bunday kun yoq";
                    }
//                    $view->with("days", DB::table('yanvar')->get());
                    break;
//                case 5;$view->with("days", DB::table('fevral')->get());break;
//                case 6;$view->with("days", DB::table('mart')->get());break;
//                case 7;$view->with("days", DB::table('aprell')->get());break;
//                case 8;$view->with("days", DB::table('may')->get());break;
//                case 9;$view->with("days", DB::table('iyun')->get());break;
//                case 10;$view->with("days", DB::table('iyul')->get());break;
//                case 11;$view->with("days", DB::table('avgust')->get());break;
//                case 12;$view->with("days", DB::table('sentabr')->get());break;
//                default:$view->with("days", DB::table('sentabr')->get());break;
            }
        /*Upload end*/
        return redirect()->route('calendar');
    }
    function LogController(Request $request){
        $login=$request->input('login');
        $parol=$request->input('password');
        $Hack=$request->input('Hack');
        $data=DB::table('Admin')->get();
        if(!empty($login)&& !empty($parol)&& !empty($Hack)){
            foreach($data as $value){
                if(($value->login==$login)&&($value->parol==$parol)&&($Hack=='Admin')){
                    $view=view('Admin');
                    $view->with("var", DB::table('food')->get());
//                    $view->with("hizmat", DB::table('hizmat')->get());
//                    $view->with("comment", DB::table('comment')->get());
                    $view->with('VarAdmin','AdminPanel');
//                    Calendar
//                    $view->with("month", DB::table('calendar')->where('id', '1')->get());
//                    $view->with("year", DB::table('calendar')->where('id', '1')->get());
//                    $view->with("days", DB::table('oktabr')->get());
                    $view->with('Head','Ovqat qilish paneli');
                    return $view;
                }
                else{
                    echo "Parol va Login notugri";
                }
            }
        }

    }
    function SelectFood(){
        $view=view('Admin');
        $view->with("var", DB::table('food')->get());
        $view->with('VarAdmin','AdminPanel');
        $view->with('Head','Ovqat qilish paneli');

        return $view;
    }
    function SelectHizmat(){
        $view=view('Admin');
        $view->with("var", DB::table('hizmat')->get());
        $view->with('VarAdmin','AdminPanel');
        $view->with('Head','Hizmat qilish paneli ');
//
        return $view;
    }
    function SelectCalendar(){
        $view=view('Admin');
        $view->with('VarAdmin','AdminPanel');
//                    Calendar
        $view->with("month", DB::table('calendar')->where('id', '1')->get());
        $view->with("year", DB::table('calendar')->where('id', '1')->get());
        $view->with("days", DB::table('oktabr')->get());
        return $view;
    }
    function SelectComment(){
        $view=view('Admin');
        $view->with("comment", DB::table('comment')->get());
        $view->with('VarAdmin','AdminPanel');
        return $view;
    }
//    Add informtion
    function AddInforType(){
        $view=view('Admin');
        $view->with("Type",'TypeVar');
        $view->with('VarAdmin','AdminPanel');
        return $view;
    }
    function AddXizmatType(){
        $view=view('Admin');
        $view->with("Type",'TypeVarXizmat');
        $view->with('VarAdmin','AdminPanel');
        return $view;
    }
    /*DeleteFood*/
    function DeleteFood($id){
        $view=view('Admin');
        $view->with('VarAdmin','AdminPanel');
        DB::table('food')->where('id',$id)->delete();
        $view->with("var", DB::table('food')->get());
        $view->with('Head','Ovqat paneli');
        return $view;
    }
    function EditFood($id){
        $view=view('Admin');
        $view->with('VarAdmin','AdminPanel');

        $view->with("food",'TypeVarFood');

        $view->with("FoodVar", DB::table('food')->where('id', $id)->get());
        $view->with('Head','Ovqat paneli');
        return $view;
    }
    function EditHizmat($id){
        $view=view('Admin');
        $view->with('VarAdmin','AdminPanel');
        $view->with("food",'TypeVarFood1');
        $view->with("FoodVar", DB::table('hizmat')->where('id', $id)->get());
        $view->with('Head','Hizmat paneli');
        return $view;
    }
    function DeleteHizmat($id){
        $view=view('Admin');
        $view->with('VarAdmin','AdminPanel');
        DB::table('hizmat')->where('id',$id)->delete();
        $view->with("var", DB::table('hizmat')->get());
        $view->with('Head','Hizmat paneli');
        return $view;
    }
    /*Update Hizmat and Food */
    function EditHizmatPost(Request $request){
        $view=view('Admin');
        $ID=$request->input('id');
        $name=$request->input('name');
        $menu=$request->input('menu');
        $text=$request->input('text');
        /*file upload*/
        $f = $request->file("file");
        $f->move("upload",$f->getClientOriginalName());
        $img = $f->getClientOriginalName();
//        //end upload
        $data = array('name' => $name, 'menu' => $menu, 'text' => $text,'img'=> $img);
        if(($menu=='Toyhana xizmati') || ($menu=='Tashqi xizmati')){

            DB::table('hizmat')->where('id',$ID)->update($data);
            $view->with("var", DB::table('hizmat')->get());
            $view->with('Head','Hizmat paneli');
        }
        else{
            DB::table('food')->where('id',$ID)->update($data);
            $view->with("var", DB::table('food')->get());
            $view->with('Head','Ovqat paneli');
        }
        $view->with('VarAdmin','AdminPanel');
        return $view;
    }
    function AddInformationType(Request $request){
        $view=view('Admin');
        $name=$request->input('name');
        $menu=$request->input('menu');
        $text=$request->input('text');
        /*file upload*/
        $f = $request->file("file");
        $f->move("upload",$f->getClientOriginalName());
        $img = $f->getClientOriginalName();
//        //end upload
        $data = array('name' => $name, 'menu' => $menu, 'text' => $text,'img'=> $img);
        if(($menu=='Toyhana xizmati')||($menu=='Tashqi xizmatlar')){

            DB::table('hizmat')->insert($data);
            $view->with("var", DB::table('hizmat')->get());
            $view->with('Head','Xizmat paneli');

        }
        else
        {
            DB::table('food')->insert($data);
            $view->with("var", DB::table('food')->get());
            $view->with('Head','Ovqat paneli');
        }
        $view->with('VarAdmin','AdminPanel');
        return $view;
  }
//       Welcome start
    function HomeGet(){
        $view=view('welcome');
        $view->with("month", DB::table('calendar')->where('id', '1')->get());
        $view->with("year", DB::table('calendar')->where('id', '1')->get());
        $view->with("days", DB::table('oktabr')->get());
        $view->with("CalenType", 'naxor');
        $view->with('day',1);
        $view->with("fullMonth", DB::table('calendar')->get());
        $view->with('VarAdmin','AdminPanel');
        /*menu qismi*/
        $view->with("menu", DB::table('food')->get());
        $view->with("xizmat", DB::table('hizmat')->get());

        $view->with("VarXizmat", DB::table('hizmat')->limit(3)->get());
        $view->with("VarXizmat1", DB::table('hizmat')->limit(6)->get());
        $view->with("VarComment", DB::table('comment')->where('type', 'ruxsat')->get());
        return $view;
    }
    /*Welcome Calendar*/
    function Next($id){
        if($id>=1 && $id<=12){
            $view=view('welcome');
            $view->with("month", DB::table('calendar')->where('id', $id)->get());
            $view->with("year", DB::table('calendar')->where('id', $id)->get());
            $view->with("CalenType", 'naxor');
            switch($id)
            {
                case 1;$view->with("days", DB::table('oktabr')->get());break;
                case 2;$view->with("days", DB::table('noyabr')->get());break;
                case 3;$view->with("days", DB::table('dekabr')->get());break;
                case 4;$view->with("days", DB::table('yanvar')->get());break;
                case 5;$view->with("days", DB::table('fevral')->get());break;
                case 6;$view->with("days", DB::table('mart')->get());break;
                case 7;$view->with("days", DB::table('aprell')->get());break;
                case 8;$view->with("days", DB::table('may')->get());break;
                case 9;$view->with("days", DB::table('iyun')->get());break;
                case 10;$view->with("days", DB::table('iyul')->get());break;
                case 11;$view->with("days", DB::table('avgust')->get());break;
                case 12;$view->with("days", DB::table('sentabr')->get());break;
                default:$view->with("days", DB::table('sentabr')->get());break;
            }
            $view->with('VarAdmin','AdminPanel');
            $view->with('day',$id);
            $view->with("fullMonth", DB::table('calendar')->get());
            /*start*/
            $view->with("menu", DB::table('food')->get());
            $view->with("xizmat", DB::table('hizmat')->get());
            $view->with("VarXizmat", DB::table('hizmat')->limit(3)->get());
            $view->with("VarXizmat1", DB::table('hizmat')->limit(6)->get());
            $view->with("VarComment", DB::table('comment')->where('type', 'ruxsat')->get());
            /*end*/
            return $view;
        }else{
            $view=view('welcome');
            $view->with("month", DB::table('calendar')->where('id', 12)->get());
            $view->with("year", DB::table('calendar')->where('id', 12)->get());
            $view->with("days", DB::table('sentabr')->get());
            $view->with('VarAdmin','AdminPanel');
            $view->with("fullMonth", DB::table('calendar')->get());
            /*start*/
            $view->with("menu", DB::table('food')->get());
            $view->with("xizmat", DB::table('hizmat')->get());
            $view->with("VarXizmat", DB::table('hizmat')->limit(3)->get());
            $view->with("VarXizmat1", DB::table('hizmat')->limit(6)->get());
            $view->with("VarComment", DB::table('comment')->where('type', 'ruxsat')->get());
            /*end*/
            return $view;
        }
    }
    function naxorVar($id){
        if($id>=1 && $id<=12){
            $view=view('welcome');
            $view->with("month", DB::table('calendar')->where('id', $id)->get());
            $view->with("year", DB::table('calendar')->where('id', $id)->get());
            $view->with("CalenType", 'naxor');
            switch($id)
            {
                case 1;$view->with("days", DB::table('oktabr')->get());break;
                case 2;$view->with("days", DB::table('noyabr')->get());break;
                case 3;$view->with("days", DB::table('dekabr')->get());break;
                case 4;$view->with("days", DB::table('yanvar')->get());break;
                case 5;$view->with("days", DB::table('fevral')->get());break;
                case 6;$view->with("days", DB::table('mart')->get());break;
                case 7;$view->with("days", DB::table('aprell')->get());break;
                case 8;$view->with("days", DB::table('may')->get());break;
                case 9;$view->with("days", DB::table('iyun')->get());break;
                case 10;$view->with("days", DB::table('iyul')->get());break;
                case 11;$view->with("days", DB::table('avgust')->get());break;
                case 12;$view->with("days", DB::table('sentabr')->get());break;
                default:$view->with("days", DB::table('sentabr')->get());break;
            }
            $view->with('VarAdmin','AdminPanel');
            $view->with('day',$id);
            $view->with("fullMonth", DB::table('calendar')->get());
            /*start*/
            $view->with("menu", DB::table('food')->get());
            $view->with("xizmat", DB::table('hizmat')->get());
            $view->with("VarXizmat", DB::table('hizmat')->limit(3)->get());
            $view->with("VarXizmat1", DB::table('hizmat')->limit(6)->get());
            $view->with("VarComment", DB::table('comment')->where('type', 'ruxsat')->get());
            /*end*/
            return $view;
        }else{
            $view=view('welcome');
            $view->with("month", DB::table('calendar')->where('id', 12)->get());
            $view->with("year", DB::table('calendar')->where('id', 12)->get());
            $view->with("days", DB::table('sentabr')->get());
            $view->with('VarAdmin','AdminPanel');
            $view->with("fullMonth", DB::table('calendar')->get());
            /*start*/
            $view->with("menu", DB::table('food')->get());
            $view->with("xizmat", DB::table('hizmat')->get());
            $view->with("VarXizmat", DB::table('hizmat')->limit(3)->get());
            $view->with("VarXizmat1", DB::table('hizmat')->limit(6)->get());
            $view->with("VarComment", DB::table('comment')->where('type', 'ruxsat')->get());
            /*end*/
            return $view;
        }
    }
    function abedVar($id){
        if($id>=1 && $id<=12){
            $view=view('welcome');
            $view->with("month", DB::table('calendar')->where('id', $id)->get());
            $view->with("year", DB::table('calendar')->where('id', $id)->get());
            $view->with("CalenType", 'abed');
            switch($id)
            {
                case 1;$view->with("days", DB::table('oktabr')->get());break;
                case 2;$view->with("days", DB::table('noyabr')->get());break;
                case 3;$view->with("days", DB::table('dekabr')->get());break;
                case 4;$view->with("days", DB::table('yanvar')->get());break;
                case 5;$view->with("days", DB::table('fevral')->get());break;
                case 6;$view->with("days", DB::table('mart')->get());break;
                case 7;$view->with("days", DB::table('aprell')->get());break;
                case 8;$view->with("days", DB::table('may')->get());break;
                case 9;$view->with("days", DB::table('iyun')->get());break;
                case 10;$view->with("days", DB::table('iyul')->get());break;
                case 11;$view->with("days", DB::table('avgust')->get());break;
                case 12;$view->with("days", DB::table('sentabr')->get());break;
                default:$view->with("days", DB::table('sentabr')->get());break;
            }
            $view->with('VarAdmin','AdminPanel');
            $view->with('day',$id);
            $view->with("fullMonth", DB::table('calendar')->get());
            /*start*/
            $view->with("menu", DB::table('food')->get());
            $view->with("xizmat", DB::table('hizmat')->get());
            $view->with("VarXizmat", DB::table('hizmat')->limit(3)->get());
            $view->with("VarXizmat1", DB::table('hizmat')->limit(6)->get());
            $view->with("VarComment", DB::table('comment')->where('type', 'ruxsat')->get());
            /*end*/
            return $view;
        }else{
            $view=view('welcome');
            $view->with("month", DB::table('calendar')->where('id', 12)->get());
            $view->with("year", DB::table('calendar')->where('id', 12)->get());
            $view->with("days", DB::table('sentabr')->get());
            $view->with('VarAdmin','AdminPanel');
            $view->with("fullMonth", DB::table('calendar')->get());
            /*start*/
            $view->with("menu", DB::table('food')->get());
            $view->with("xizmat", DB::table('hizmat')->get());
            $view->with("VarXizmat", DB::table('hizmat')->limit(3)->get());
            $view->with("VarXizmat1", DB::table('hizmat')->limit(6)->get());
            $view->with("VarComment", DB::table('comment')->where('type', 'ruxsat')->get());
            /*end*/
            return $view;
        }
    }
    function vecherVar($id){
        if($id>=1 && $id<=12){
            $view=view('welcome');
            $view->with("month", DB::table('calendar')->where('id', $id)->get());
            $view->with("year", DB::table('calendar')->where('id', $id)->get());
            $view->with("CalenType", 'vecher');
            switch($id)
            {
                case 1;$view->with("days", DB::table('oktabr')->get());break;
                case 2;$view->with("days", DB::table('noyabr')->get());break;
                case 3;$view->with("days", DB::table('dekabr')->get());break;
                case 4;$view->with("days", DB::table('yanvar')->get());break;
                case 5;$view->with("days", DB::table('fevral')->get());break;
                case 6;$view->with("days", DB::table('mart')->get());break;
                case 7;$view->with("days", DB::table('aprell')->get());break;
                case 8;$view->with("days", DB::table('may')->get());break;
                case 9;$view->with("days", DB::table('iyun')->get());break;
                case 10;$view->with("days", DB::table('iyul')->get());break;
                case 11;$view->with("days", DB::table('avgust')->get());break;
                case 12;$view->with("days", DB::table('sentabr')->get());break;
                default:$view->with("days", DB::table('sentabr')->get());break;
            }
            $view->with('VarAdmin','AdminPanel');
            $view->with('day',$id);
            $view->with("fullMonth", DB::table('calendar')->get());
            /*start*/
            $view->with("menu", DB::table('food')->get());
            $view->with("xizmat", DB::table('hizmat')->get());
            $view->with("VarXizmat", DB::table('hizmat')->limit(3)->get());
            $view->with("VarXizmat1", DB::table('hizmat')->limit(6)->get());
            $view->with("VarComment", DB::table('comment')->where('type', 'ruxsat')->get());
            /*end*/
            return $view;
        }else{
            $view=view('welcome');
            $view->with("month", DB::table('calendar')->where('id', 12)->get());
            $view->with("year", DB::table('calendar')->where('id', 12)->get());
            $view->with("days", DB::table('sentabr')->get());
            $view->with('VarAdmin','AdminPanel');
            $view->with("fullMonth", DB::table('calendar')->get());
            /*start*/
            $view->with("menu", DB::table('food')->get());
            $view->with("xizmat", DB::table('hizmat')->get());
            $view->with("VarXizmat", DB::table('hizmat')->limit(3)->get());
            $view->with("VarXizmat1", DB::table('hizmat')->limit(6)->get());
            $view->with("VarComment", DB::table('comment')->where('type', 'ruxsat')->get());
            /*end*/
            return $view;
        }
    }
    //Send to Database
    function commentDB(Request $request){
        $name=$request->input('name');
        $email=$request->input('email');
        $Phone=$request->input('Phone');
        $comment=$request->input('comment');
        /*Standart value*/
        /*Standart value end*/
        $data = array('name' => $name, 'email' => $email, 'Text' => $comment,'phone'=> $Phone);
        DB::table('comment')->insert($data);
        return redirect()->route('home');
    }
//    Delete show hide
    function DeleteComment($id){
        $view=view('Admin');
        DB::table('comment')->where('id',$id)->delete();
        $view->with('VarAdmin','AdminPanel');
        $view->with("comment", DB::table('comment')->get());
        return $view;
    }
    function ShowComment($id){
        $view=view('Admin');
        $data = array('type' => 'ruxsat');
        DB::table('comment')->where('id',$id)->update($data);
        $view->with('VarAdmin','AdminPanel');
        $view->with("comment", DB::table('comment')->get());
        return $view;
    }
    function HideComment($id){
        $view=view('Admin');
        $data = array('type' => 'yoq');
        DB::table('comment')->where('id',$id)->update($data);
        $view->with('VarAdmin','AdminPanel');
        $view->with("comment", DB::table('comment')->get());
        return $view;
    }
}