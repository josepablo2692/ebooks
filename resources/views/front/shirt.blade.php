@extends('layouts.main')

@section('title','shirt')

@section('content')

    <!-- products listing -->
    <!-- Latest SHirts -->
    <div class="row">
        <div class="small-5 small-offset-1 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <a href="#">
                        <img src="http://lorempixel.com/300/300/"/>
                    </a>
                </div>
            </div>
        </div>
        <div class="small-6 columns">
            <div class="item-wrapper">
                <h3 class="subheader">
                    <span class="price-tag"></span> 
                </h3>
                <div class="row">
                    <div class="large-12 columns">
                        <label>
                            Select 
                            <select>
                                <option value="small">
                                    Op 1
                                </option>
                                <option value="medium">
                                    Op 2
                                </option>
                                <option value="large">
                                    Op 3
                                </option>

                            </select>
                        </label>
                        <a href="#" class="button  expanded">Add to Cart</a>
                    </div>
                </div>
                <p class="text-left subheader">
                    <small>* Diseñado por <a href="https://www.fb.com/webdevmatics">José Pablo Santizo</a></small>
                </p>

            </div>
        </div>
    </div>

@endsection