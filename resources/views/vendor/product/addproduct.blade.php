@extends('vendor.layout.app')
<style>
sup {
    color:red;
    position: initial;
    font-size: 111%;
}
</style>
@section ('content')
<div class="content-wrapper">
          <div class="row">
		  <div class="col-md-2">
		  </div>
            
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">{{ __('messages.Add_product')}}</h4>
                   @if (count($errors) > 0)
                      @if($errors->any())
                        <div class="alert alert-primary" role="alert">
                          {{$errors->first()}}
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                        </div>
                      @endif
                  @endif
                  <form class="forms-sample" action="{{route('vendoraddnewproduct')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleFormControlSelect3">{{ __('messages.choose_a_category')}}<sup>*</sup></label>
                        <select class="form-control form-control-sm" id="exampleFormControlSelect3 " name="subcat_name">
                            @foreach($subcat as $subcat)
                                @if(session()->get('locale') == 'en')
                                    <option value="{{$subcat->subcat_id}}"><span style="font-weight:bold">{{$subcat->category_name}}-></span>&nbsp;{{$subcat->subcat_name}}</option>
                                @else
                                    <option value="{{$subcat->subcat_id}}"><span style="font-weight:bold">{{$subcat->category_name_arabic}}-></span>&nbsp;{{$subcat->subcat_name_arabic}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">{{ __('messages.product_Name')}}<sup>*</sup></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="product_name" placeholder="{{ __('messages.Enter_Product_Name')}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">{{ __('messages.product_Name_arabic')}}<sup>*</sup></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="product_name_arabic" placeholder="{{ __('messages.product_Name_arabic')}}">
                    </div>
                    <div class="form-group">
                        <label>{{ __('messages.product_Image')}}</label>
                        <div class="input-group col-xs-12">
                            <input type="file" name="product_image"  class="file-upload-default">                        
                        </div>
                    </div>
                    
                
                <div class="form-group">
                      <label for="exampleInputName1">{{ __('messages.MRP')}}</label>
                      <input type="text" class="form-control" id="exampleInputName1" name="mrp" placeholder="{{ __('messages.Enter_MRP')}}">
                    </div>
                   
                 <div class="form-group">
                      <label for="exampleInputName1">{{ __('messages.Strike_Price')}}</label>
                      <input type="text" class="form-control" id="exampleInputName1" name="price" placeholder="{{ __('messages.Enter_price')}}">
                    </div>  
                   
                   <div class="form-group">
                      <label for="exampleInputName1">{{ __('messages.Quantity')}}</label>
                      <input type="text" class="form-control" id="exampleInputName1" name="quantity" placeholder="{{ __('messages.Enter_size_if_any')}}">
                    </div> 
            
                    <div class="form-group">
                      <label for="exampleInputName1">{{ __('messages.Unit')}}</label>
                      <input type="text" class="form-control" id="exampleInputName1" name="unit" placeholder="KG/Grm./Li...">
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputName1">{{ __('messages.stock')}}</label>
                      <input type="text" class="form-control" id="exampleInputName1" name="stock" placeholder="{{ __('messages.Enter_stock_quantity_numbers')}}">
                    </div>
  
                    <div class="form-group">
                      <label for="exampleInputName1">{{ __('messages.product_Description')}}</label>
                      <input type="text" class="form-control" id="exampleInputName1" name="product_description" placeholder="{{ __('messages.Enter_Description')}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">{{ __('messages.product_Description_arabic')}}</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="product_description_arabic" placeholder="{{ __('messages.product_Description_arabic')}}">
                    </div>
                    <button type="submit" class="btn btn-success mr-2">{{ __('messages.Submit')}}</button>
                    <!--
                    <button class="btn btn-light">Cancel</button>
                    -->
                     <a href="{{route('vendorproduct')}}" class="btn btn-light">{{ __('messages.Cancel')}}</a>
                  </form>
                </div>
              </div>
            </div>
             <div class="col-md-2">
		  </div>
     
          </div>
        </div>
       </div> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
        	$(document).ready(function(){
        	
                $(".des_price").hide();
                
        		$(".img").on('change', function(){
        	        $(".des_price").show();
        			
        	});
        	});
</script>

@endsection