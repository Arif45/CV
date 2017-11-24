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
                        <span id="search_concept">FIELD</span> <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="cv">CSE</a></li>
                      <li><a href="cv1">EEE</a></li>
                      <li><a href="cv2">CIVIL</a></li>
                      <li><a href="cv3">TEACHING</a></li>
                      <li class="divider"></li>
                      <li><a href="#all">Anything</a></li>
                    </ul>
                </div>
                <input type="hidden" name="search_param" value="all" id="search_param">         
                <input type="text" class="form-control" name="x" placeholder="Select Field...">
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
