<?php
/**
 * Created by PhpStorm.
 * User: kt
 * Date: 2018/7/2
 * Time: 下午5:14
 */

namespace App\Http\Controllers;


use App\Models\Area;
use App\Models\Province;
use Coldcoder\World\Models\City;
use Coldcoder\World\Models\Country;
use PragmaRX\Countries\Package\Countries;

class CommonController extends Controller
{

    public function listCountries()
    {
        $country = Country::all()->toArray();
        return $this->jsonResult(0,$country);
    }

    public function listCities($countryId)

    {
        $cities = City::where('world_cities.country_id',$countryId)
            ->leftJoin('world_divisions','world_divisions.country_id','=',
                'world_cities.country_id')
            ->select(['world_cities.name as city_name',
                      'world_divisions.name as region_name'])
            ->get()->toArray();
        return $this->jsonResult(0,$cities);
    }

    public function listProvince()
    {
        $data = Province::all()->toArray();
        return $this->jsonResult(0,$data);
    }

    public function listChinaCities($id)
    {
        $m = \App\Models\City::where('province_id',$id)->get()->toArray();
        return $this->jsonResult(0,$m);
    }

    public function listCounties($id)
    {
        $d = Area::where('city_id',$id)->get()->toArray();
        return $this->jsonResult(0,$d);
    }

    public function listCurrency()
    {
        $countries = new Countries();
        $currency = $countries->currencies()->toArray();
        return $this->jsonResult(0,$currency);
    }
}