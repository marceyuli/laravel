<?php
    use Illuminate\Support\Facades\Auth;
    function setActive($routeName)
    {
        return request()->routeIs($routeName)?'active':'';
    }
?>