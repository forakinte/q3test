<?php
/**
 * Created by PhpStorm.
 * User: Forakinte
 * Date: 2016/7/6
 * Time: 下午 04:52
 */

namespace Q3\Permission;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class PermissionController extends Controller
{
    public function index($timezone = null)
    {
        $current_time = ($timezone)
            ? Carbon::now(str_replace('-', '/', $timezone))
            : Carbon::now();
        echo $current_time->toDateTimeString();
    }

}