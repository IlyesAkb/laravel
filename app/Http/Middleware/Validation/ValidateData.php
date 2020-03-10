<?php

namespace App\Http\Middleware\Validation;

use Closure;
use App;
use Hash;
use Auth;

class ValidateData
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param $model
     * @param \Closure $next
     * @return mixed
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function handle($request, Closure $next, $model)
    {
        $model = app($model);
        /**
         * @var Validator $validator
         */
        $validator = app('validator')
            ->make($request->input(), $model->validationRules(), [], $model->attributeNames());
        if ($validator->fails()) {
            $request->flash();
            return redirect()
                ->back()
                ->withErrors($validator->errors());
        }

        return $next($request);
    }
}
