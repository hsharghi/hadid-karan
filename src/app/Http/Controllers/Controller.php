<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    protected $perPage;

    public function __constructor() {
    	$this->perPage = 15;
    }

    public function order(Builder $builder) {
        $order = request()->order ?? '';

        $orders = explode('|', $order);

        foreach ($orders as $order) {
            $order = explode(',', $order);
            if (!isset($order[0]) || !$sortOrder = $order[0]) {
                continue;
            }
            $way = isset($order[1]) && strtolower($order[1]) == 'desc' ? 'desc' : 'asc';

            $builder->orderBy($sortOrder, $way);
        }

        return $builder;

    }

}
