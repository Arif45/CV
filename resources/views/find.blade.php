@extends('layouts.app')
@section('content')
<br>
<br>
<br><br>


<div class="container">
    <div class="row">    
        <div class="col-xs-8 col-xs-offset-2">
            <div class="input-group">
                <div class="input-group-btn search-panel">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <span id="search_concept">Filter by</span> <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#contains">Locations</a></li>
                      <li><a href="#its_equal">University</a></li>
                      <li><a href="#greather_than">Sector ></a></li>
                      <li><a href="#less_than">skills< </a></li>
                      <li class="divider"></li>
                      <li><a href="#all">Anything</a></li>
                    </ul>
                </div>
                <input type="hidden" name="search_param" value="all" id="search_param">         
                <input type="text" class="form-control" name="x" placeholder="Search people...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                </span>
            </div>
        </div>
    </div>
</div>

<br>
<br>
<br>
@endsection
