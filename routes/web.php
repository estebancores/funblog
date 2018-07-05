<?php

Route::any('{all}', function () {return view('home');})->where(['all'=>'.*']);

